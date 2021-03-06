<?php
require_once "admin/partials/info_hoteles.php";
require_once "admin/partials/info_asesores.php";
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../assets/images/iconlogo.png" />

    <title>Sorteo Aliados Travel 2022</title>


    <style>
        .fondo-sorteo {
            background: radial-gradient(50% 50% at 50% 50%, #19135F 0.01%, #161241 100%);
        }

        section.fondo-sorteo>img {
            width: 100%;
            min-width: 100vw;
            top: 0;
            left: 0;
            z-index: 0;
            max-height: 100vh;
        }

        .content-aps {

            color: white;
            width: 100%;
        }

        img.sort-logo {
            max-width: 310px !important;
            margin: auto;
            display: block;
        }

        img.sort-moto {
            max-width: 510px !important;
            margin: auto;
            display: block;
        }

        .content-aps {
            text-align: center;
            background: url(../assets/images/bag.svg) no-repeat;
            background-size: contain;
            background-position: center;
        }

        .patrocinadores {
            background: white;
            border-radius: 105px;
            overflow: hidden;
            margin: 31px 0;
        }

        .cont-top {
            text-align: CENTER;
        }

        .cont-top p {
            background: #f89b23;
            padding: 10px;
            border-radius: 84px;
            max-width: 720px;
            margin: 25px auto;
            color: white;
            font-size: 22px;
            font-weight: 500;
        }

        .cont-top h2 {
            color: white;
            font-weight: 700;
            max-width: 350px;
            margin: 12px auto 40px;
        }

        .cont-form label {
            color: white;
        }

        .cont-banner {
            padding: 30px 40px;
        }

        .cont-banner img {
            border-radius: 20px;
        }

        .cont-banner button {
            color: white;
            font-weight: 700;
            margin: auto;
            display: block;
            width: 100%;
        }

        .cont-banner button:hover {
            background: #dda500;
            color: white;
        }

        .col.politicas p {
            color: white;
            text-align: justify;
            line-height: 17px;
        }

        .col.politicas h3 {
            color: white;
            font-size: 1rem;
        }

        .modal-dialog {
            max-width: 680px;
        }

        .consulta-cedula {
            max-width: 230px;
        }

        a.btn_flotante {
            background: #f8971b;
            position: absolute;
            right: 20px;
            bottom: 80px;
            padding: 12px 23px;
            border-radius: 5px;
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
            border: solid 1px #bc761d;
        }

        a.btn_flotante:hover {
            background: #0e0a36;
            color: white;
            border: solid 1px #fff
        }

        @media(max-width: 750px) {
            img.sort-moto {
                max-width: 100% !important;
            }

            img.sort-moto {
                max-width: 100% !important;
            }

            img.sort-logo {
                max-width: 170px !important;
            }

            .container.content-aps h2 {
                font-size: 18px;
            }

            .container.content-aps h4 {
                font-size: 14px;
                display: block;
            }



            .cont-top p {
                font-size: 13px;
            }

            .cont-top h2 {
                font-size: 17px;
            }

            .col.politicas p {
                font-size: 9px;
                line-height: 12px;
            }

            .cont-banner {
                padding: 30px 15px;
            }

            .cont-banner button {
                padding: 9px 14px;
            }


        }
    </style>
</head>

<body style="background: #0e0a36;">


    <div class="main">
        <section class="fondo-sorteo">

            <div class="container content-aps">
                <img src="../assets/images/logo.png" class="sort-logo">
                <img src="../assets/images/moto.png" class="sort-moto">
                <h2>Del 1 de febrero al 31 de Julio 2022</h2>
                <h4 style="max-width: 1010px;margin: auto;">Registra tus reservas realizadas en nuestros bloqueos internacionales al Caribe con los hoteles aliados y gana boletas para participar en este espectacular sorteo.</h4>

                <div class="patrocinadores">
                    <img src="../assets/images/patrocinadores.png" class="img-fluid" alt="">
                </div>

            </div>
            <a href="#registrate" class="btn_flotante">IR AL FORMULARIO DE REGISTRO</a>

        </section>
    </div>


    <div class="container">

        <div class="row" style=" max-width: 1030px;  margin: auto;">
            <div class="col-12 cont-top">
                <p>Sorteo: Mi??rcoles 3 de agosto del 2022 a las 10:30pm con los 3 ??ltimos digitos de la LOTERIA DEL VALLE</p>
                <h2 id="registrate">REGISTRA TU RESERVA Y PARTICIPA</h2>
            </div>

            <div id="formularioRegistro" class="col-12 col-md-7  cont-form">
                <form class="row g-3 needs-validation" id="myForm" novalidate action="#formularioRegistro">
                    <div class="col-6 col-md-6">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input required type="text" class="form-control numeric" id="cedula">
                        <div class="invalid-feedback">
                            Por favor ingresa tu cedula
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="celular" class="form-label">Celular</label>
                        <input required type="text" class="form-control numeric" id="celular">
                        <div class="invalid-feedback">
                            Por favor ingresa tu celular
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="fullname" class="form-label">Nombre Completo</label>
                        <input required type="text" class="form-control" id="fullname">
                        <div class="invalid-feedback">
                            Por favor ingresa tu nombre completo
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="correo" class="form-label">Correo</label>
                        <input required type="email" class="form-control" id="correo">
                        <div class="invalid-feedback">
                            Por favor ingresa tu correo electr??nico
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="agencia" class="form-label">Agencia</label>
                        <input required type="text" class="form-control" id="agencia">
                        <div class="invalid-feedback">
                            Por favor ingresa el nombre de tu agencia
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="reserva" class="form-label">No Reserva de Aliados</label>
                        <input required type="text" class="form-control" id="reserva" placeholder="CLO-00000">
                        <div class="invalid-feedback">
                            Por favor ingresa el n??mero de la reserva
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="hotel" class="form-label">Cadena Hotelera</label>
                        <select required id="hotel" class="form-select">
                            <?php echo $info_hoteles; ?>
                        </select>
                        <div class="invalid-feedback">
                            Por favor selecciona la cadena hotelera de tu reserva
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="asesor" class="form-label">Asesor de Alidos</label>
                        <select required id="asesor" class="form-select">
                            <?php echo $info_asesores; ?>
                        </select>
                        <div class="invalid-feedback">
                            Por favor selecciona el asesor de Aliados con quien realizaste tu reserva
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="liquidacion" class="form-label">Adjuntar Liquidaci??n</label>
                        <input required class="form-control" type="file" id="liquidacion">
                        <div class="invalid-feedback">
                            Por favor adjunta el PDF de la liquidaci??n
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input required class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Acepto las pol??ticas de tratamientos de datos y las condiciones y restricciones del sorteo.
                            </label>
                            <div class="invalid-feedback">
                                Se requiere aceptar las pol??ticas de tratamientos de datos y las condiciones y restricciones del sorteo.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100"> <b> Registrar los datos </b></button>
                    </div>
                </form>
            </div>

            <div id="Show-Numeros" class="col-12 col-md-6 " style="display: none;">
                <!--Cargar aqui los numeros generados-->
            </div>



            <div class="col-12 col-md-5 cont-banner">
                <img src="../assets/images/banner_<?php echo $url_banner; ?>.png" class="img-fluid">
                <hr>
                <button type="button" id="openModal" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#consultar-Sorteo">Consulta el estado de tu registro</button>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <img src="../assets/images/rutas.png" class="img-fluid" style="max-width: 810px;margin: auto;display: block;">
            </div>

        </div>

        <div class="row">
            <div class="col politicas">
                <h3>Condiciones y Restricciones</h3>
                <p>Ser?? sorteado 1 MOTO AKT DYNAMIC PRO modelo 2022, cero kil??metros. El costo de registro, matricula, impuestos y gastos asociados los deber?? asumir el ganador. La imagen utilizada es de referencia.
                    El sorteo se realizar?? el Mi??rcoles 3 de agosto del 2022 a las 10:30pm, con los 3 ??ltimos d??gitos de la LOTERIA DEL VALLE
                    El ganador dispondr?? de un (1) mes para reclamar el premio a partir del sorteo, pasada esta fecha sin que se haya reclamado, el mismo se entender?? como anulado y se volver?? a sortear.
                    El registro de las reservas quedar?? sujetas a validaci??n por parte del equipo de Aliados, para garantizar el cumplimiento de las condiciones.
                    El usuario solo puede redimir boletas a su propio nombre, por lo tanto no se aceptar?? la presentaci??n de la c??dula de ciudadan??a o datos de otra persona.
                    La liquidaci??n de la reserva adjunta debe cumplir con el formato de Aliados y estar alojada en el sistema.
                    El usuario ??nicamente debe registrar su reserva a trav??s del link asignado para el sorteo, no ser??n validas el registro con asesor o a trav??s de otro medio.
                    El Premio no ser?? canjeable total, ni parcialmente por dinero.
                    El sorteo es solo para mayores de edad.
                    El ganador deber?? presentar su c??dula de ciudadan??a original al momento de reclamar el premio en las oficinas de Aliados Travel. Documento que ha sido definido como esencial para la entrega del mismo.
                    El premio s??lo se entregar?? al ganador y es intransferible. Si el ganador vive por fuera de la ciudad de Cali o Bogot??, deber?? desplazarse por su propia cuenta y riesgo para reclamar el premio y realizar los tr??mites correspondientes.
                    En caso de presentarse muerte de alg??n ganador, el premio ser?? sorteado nuevamente ya que no es transferible bajo ninguna circunstancia.
                    Aliados Travel tendr?? hasta cinco d??as h??biles para verificar que el ganador cumple con la totalidad de requisitos para hacerse acreedor del premio.
                    No podr??n participar los empleados de Aliados Travel.
                    La inscripci??n en este sorteo implica la aceptaci??n por parte de quien se inscribe de estos t??rminos y condiciones. La interpretaciones de las siguientes reglas y condiciones no podr?? ser objetada por los participantes, ya que la participaci??n en este sorteo implica su total conocimiento y aceptaci??n, en caso de no estar de acuerdo con estos t??rminos cada persona tiene el derecho a no participar en este concurso.
                </p>
            </div>
        </div>

    </div>


    <!-- Modal Consultar Registros-->
    <div class="modal fade" id="consultar-Sorteo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Consultar tus registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="consulta-cedula">
                        <div class="mb-3">
                            <label for="consCedula" class="form-label">N??mero de Cedula</label>
                            <input type="text" class="form-control numeric" id="consCedula">
                        </div>

                        <button class="btn btn-primary" id="consultar">Consultar</button>
                    </div>

                    <div id="mostrar-consulta" class="pt-2" style="display: none;">
                        No se encuentran registros
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/index.js"></script>
</body>

</html>