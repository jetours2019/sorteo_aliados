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
        .fondo-sorteo{
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
        .patrocinadores {background: white;border-radius: 105px;overflow: hidden;margin: 31px 0;}
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

        @media(max-width: 750px){
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
           
        </section>
   </div> 


   <div class="container" >
   
        <div class="row" style=" max-width: 1030px;  margin: auto;">
            <div class="col-12 cont-top">
                <p>Sorteo: Miércoles 3 de agosto del 2022 a  las 10:30pm con los 3 últimos digitos de la LOTERIA DEL VALLE</p>
                <h2>REGISTRA TU RESERVA Y PARTICIPA</h2>
            </div>

            <div id="formularioRegistro" class="col-12 col-md-7  cont-form">
                <form class="row g-3">
                    <div class="col-6 col-md-6">
                      <label for="inputSort3" class="form-label">Cedula</label>
                      <input type="text" class="form-control" id="inputSort3">
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="inputSort11" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="inputSort11">
                      </div>
                    <div class="col-md-12">
                      <label for="inputSort4" class="form-label">Nombre Completo</label>
                      <input type="text" class="form-control" id="inputSort4">
                    </div>
                    <div class="col-6">
                      <label for="inputSort5" class="form-label">Correo</label>
                      <input type="mail" class="form-control" id="inputSort5" >
                    </div>
                    <div class="col-6">
                      <label for="inputSort6" class="form-label">Agencia</label>
                      <input type="text" class="form-control" id="inputSort6" >
                    </div>
                    
                    <div class="col-md-4">
                      <label for="inputSort7" class="form-label">No Reserva de Aliados</label>
                      <input type="text" class="form-control" id="inputSort7" placeholder="CLO-00000">
                    </div>
                    <div class="col-md-8">
                      <label for="inputSort8" class="form-label">Cadena Hotelera</label>
                      <select id="inputSort8" class="form-select">
                        <option selected>Seleccionar...</option>
                        <option>Cadena 01</option>
                        <option>Cadena 02</option>
                        <option>Cadena 03</option>
                      </select>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="inputSort8" class="form-label">Asesor de Alidos</label>
                        <select id="inputSort8" class="form-select">
                          <option selected>Seleccionar...</option>
                          <option>Asesor 01</option>
                          <option>Asesor 02</option>
                          <option>Asesor 03</option>
                          <option>Asesor 04</option>
                          <option>Asesor 05</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="inputSort10" class="form-label">Adjuntar Liquidación</label>
                        <input class="form-control" type="file" id="inputSort10">
                    </div>

                  



                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                         Acepto las políticas de tratamientos de datos y las condiciones y restricciones del sorteo.
                        </label>
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
                <img src="../assets/images/banner.png" class="img-fluid">
                <hr>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#consultar-Sorteo">Consulta el estado de tu registro</button>
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
                <p>Será sorteado 1 MOTO AKT DYNAMIC PRO modelo 2022, cero kilómetros. El costo de registro, matricula, impuestos y gastos asociados los deberá asumir el ganador. La imagen utilizada es de referencia.
                    El sorteo se realizará el Miércoles 3 de agosto del 2022  a las 10:30pm, con los 3 últimos dígitos de la LOTERIA DEL VALLE
                    El ganador dispondrá de un (1) mes para reclamar el premio a partir del sorteo, pasada esta fecha sin que se haya reclamado, el mismo se entenderá como anulado y se volverá a sortear.
                    El registro de las reservas quedará sujetas a validación por parte del equipo de Aliados, para garantizar el cumplimiento de las condiciones.
                    El usuario solo puede redimir boletas a su propio nombre, por lo tanto no se aceptará la presentación de la cédula de ciudadanía o datos de otra persona.
                    La liquidación de la reserva adjunta debe cumplir con el formato de Aliados y estar alojada en el sistema.
                    El usuario únicamente debe registrar su reserva a través del link asignado para el sorteo, no serán validas el registro con asesor o a través de otro medio.
                    El Premio no será canjeable total, ni parcialmente por dinero.
                    El sorteo es solo para mayores de edad.
                    El ganador deberá presentar su cédula de ciudadanía original al momento de reclamar el premio en las oficinas de Aliados Travel. Documento que ha sido definido como esencial para la entrega del mismo.
                    El premio sólo se entregará al ganador y es intransferible. Si el ganador vive por fuera de la ciudad de Cali o Bogotá, deberá desplazarse por su propia cuenta y riesgo para reclamar el premio y realizar los trámites correspondientes.
                    En caso de presentarse muerte de algún ganador, el premio será sorteado nuevamente ya que no es transferible bajo ninguna circunstancia.
                    Aliados Travel tendrá hasta cinco días hábiles para verificar que el ganador cumple con la totalidad de requisitos para hacerse acreedor  del premio.
                    No podrán participar los empleados de Aliados Travel.
                    La inscripción en este sorteo implica la aceptación por parte de quien se inscribe de estos términos y condiciones. La interpretaciones de las siguientes reglas y condiciones no podrá ser objetada por los participantes, ya que la participación en este sorteo implica su total conocimiento y aceptación, en caso de no estar de acuerdo con estos términos cada persona tiene el derecho a no participar en este concurso.
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
                <form>               
                    <div class="mb-3">
                      <label for="consCedula" class="form-label">Número de Cedula</label>
                      <input type="text" class="form-control" id="consCedula">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Consultar</button>
                  </form>
            </div>

            <div class="mostrar-consulta">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>