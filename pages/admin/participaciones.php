<?php
session_start();

if (!$_SESSION['logged']) {
    header('location: ./login.php');
}

require_once "../../db/conexion.php";
$name = $_SESSION['fullname'];

?>


<!doctype html>
<html lang="es">

<?php include "./partials/head.php"; ?>

<body>
    <?php include './partials/navbar.php'; ?>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="table_id">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Cedula Participante</th>
                            <th>Agencia Participante</th>
                            <th>Reserva</th>
                            <th>Cadena Hotelera</th>
                            <th>Asesor Aliados</th>
                            <th>Boleta</th>
                            <th>Liquidación</th>
                            <th>Modificar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fecha</td>
                            <td>Cedula Participante</td>
                            <td>Agencia Participante</td>
                            <td>Reserva</td>
                            <td>Cadena Hotelera</td>
                            <td>Asesor Aliados</td>
                            <td>Boleta</td>
                            <td>icono ojo</td>
                            <td><i></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fecha</td>
                            <td>Cedula Participante</td>
                            <td>Agencia Participante</td>
                            <td>Reserva</td>
                            <td>Cadena Hotelera</td>
                            <td>Asesor Aliados</td>
                            <td>Boleta</td>
                            <td>icono ojo</td>
                            <td><i></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fecha</td>
                            <td>Cedula Participante</td>
                            <td>Agencia Participante</td>
                            <td>Reserva</td>
                            <td>Cadena Hotelera</td>
                            <td>Asesor Aliados</td>
                            <td>Boleta</td>
                            <td>icono ojo</td>
                            <td><i></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
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
        });
    </script>

</body>

</html>