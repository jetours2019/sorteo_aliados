<?php
session_start();

if (!$_SESSION['logged']) {
    header('location: ./login.php');
}

require_once "../../db/conexion.php";
$name = $_SESSION['fullname'];

$html_hoteles = "";

$query = "SELECT * FROM hoteles ORDER BY id DESC";
$consulta = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

while ($registro = mysqli_fetch_array($consulta)) {
    $id = $registro['id'];
    $fullname = $registro['fullname'];
    $destacado = $registro['destacado'];
    $es_destacado = $destacado == 0 ? "No" : "Si";
    $html_hoteles .= "<tr>
                        <td>$fullname</td>
                        <td>$es_destacado</td>
                        <td>
                            <a href='#' data-id='$id' data-name='$fullname' class='destacar'>
                            Destacar
                            <i class='fas fa-clipboard-check'></i>
                            </a>
                        </td>
                    </tr>";
}

?>


<!doctype html>
<html lang="es">

<?php include "./partials/head.php"; ?>


<body>
    <?php include './partials/navbar.php'; ?>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Hotel</th>
                            <th>Destacado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $html_hoteles; ?>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('.destacar').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            var url = '../../controllers/destacarHotel.php';

            Swal.fire({
                title: 'Confirmación',
                text: "¿Está seguro que desea destacar el hotel " + name + "?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                id: id,
                            },
                            success: function(data) {
                                Swal.fire(
                                    'Exito!',
                                    'Hotel destacado con éxito',
                                    'success'
                                ).then((result) => {
                                    location.reload();
                                });
                            },
                            error: function(data) {
                                Swal.fire(
                                    'Error!',
                                    'Error de conexión con el servidor',
                                    'error'
                                )
                            }
                    });
                }
            })
        });
    </script>


</body>

</html>