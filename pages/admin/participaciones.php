<?php
session_start();

if (!$_SESSION['logged']) {
    header('location: ./login.php');
}

require_once "../../db/conexion.php";
$name = $_SESSION['fullname'];

$html_participaciones = "";

$query = "SELECT 
            p.id, 
            pa.cedula, 
            pa.fullname as nombre_participante ,
            pa.email as email_participante,
            pa.telefono as tel_participante,
            pa.agencia as agencia_participante,
            h.fullname as hotel,
            a.fullname as asesor,
            p.fecha,
            p.boleta,
            p.estado,
            p.reserva,
            p.url_liquidacion as url
          FROM participaciones p 
          INNER JOIN participantes pa ON p.cedula = pa.cedula
          INNER JOIN hoteles h ON p.id_hotel = h.id
          INNER JOIN asesores a ON p.id_asesor = a.id
          ORDER BY p.id DESC";

$consulta = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

while ($registro = mysqli_fetch_array($consulta)) {
    $id = $registro['id'];
    $cedula = $registro['cedula'];
    $nombre_participante = $registro['nombre_participante'];
    $tel_participante = $registro['tel_participante'];
    $email_participante = $registro['email_participante'];
    $agencia_participante = $registro['agencia_participante'];
    $hotel = $registro['hotel'];
    $asesor = $registro['asesor'];
    $fecha = $registro['fecha'];
    $boleta = str_pad($registro['boleta'], 3, '0', STR_PAD_LEFT);
    $estado = $registro['estado'];
    $reserva = $registro['reserva'];
    $url = $registro['url'];

    $html_participaciones .= "<tr>
                                <td>$id</td>
                                <td>$fecha</td>
                                <td data-toggle='tooltip' data-placement='top' data-html='true' title='$nombre_participante <br> $tel_participante <br> $email_participante'>
                                $cedula
                                </td>
                                <td>$agencia_participante</td>
                                <td>$reserva</td>
                                <td>$hotel</td>
                                <td>$asesor</td>
                                <td>$boleta</td>
                                <td> Ver <a target='_blank' href='pdf.php?url=$url'><i class='fas fa-eye'></i></a></td>
                                <td>
                                    $estado <a data-id='$id' href='#' class='changeStatus'> <i class='fas fa-sync-alt'></i> </a>
                                </td>
                            </tr>";
}

?>


<!doctype html>
<html lang="es">

<?php include "./partials/head.php"; ?>

<body>
    <?php include './partials/navbar.php'; ?>

    <div class="container pt-5" style="max-width: 1317px !important;">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="table_id">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 67px !important;">Fecha</th>
                            <th style="width: 91px !important;">Cedula Participante</th>
                            <th style="width: 100px !important;">Agencia Participante</th>
                            <th style="width: 99px !important;">Reserva</th>
                            <th>Cadena Hotelera</th>
                            <th>Asesor Aliados</th>
                            <th>Boleta</th>
                            <th>Liquidación</th>
                            <th>Modificar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $html_participaciones; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "No se encuentran registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "No se encuentran registros",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                },
                "order": [
                    [0, "desc"]
                ],
                "columnDefs": [{
                    "orderable": false,
                    "targets": 1
                }]
            });

            $('[data-toggle="tooltip"]').tooltip()

            $('.changeStatus').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id')
                var url = '../../controllers/changeStatus.php';

                Swal.fire({
                    title: 'Confirmación',
                    text: "Que desea realizar con la participación con ID # " + id + "?",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Habilitar',
                    cancelButtonText: 'Inhabilitar'
                }).then((result) => {
                    var funcMessage;
                    var new_status;
                    if (result.isConfirmed) {
                        funcMessage = Swal.fire(
                            'Habilitada!',
                            'La participación con ID # ' + id + ' ha sido habilitada.',
                            'success'
                        ).then((resul) => {
                            location.reload();
                        })
                        new_status = 'Habilitado';
                    }else{
                        funcMessage = Swal.fire(
                            'Inhabilitada!',
                            'La participación con ID # ' + id + ' ha sido inhabilitada.',
                            'warning'
                        ).then((resul) => {
                            location.reload();
                        })
                        new_status = 'Inhabilitado';
                    }
                    $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        id: id,
                        new_status: new_status
                    },
                    success: function(data) {
                        funcMessage()
                    },
                    error: function(data) {
                        Swal.fire(
                            'Error!',
                            'Error de conexión con el servidor',
                            'error'
                        )
                    }
                });

                })
            });

        });
    </script>

</body>

</html>