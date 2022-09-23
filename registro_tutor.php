<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,400;8..144,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo_blanco.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilosFormulario.css">

    <title>Registro</title>
</head>

<body>

    <section class="contact-box">
        <div class="row">
            <div class="pb-0 col-md-12 col-lg-3 d-flex">
                <div class="container text-center align-self-center"><img src="img/logo_blanco.svg" class="img-fluid" alt="Logo Ozizi"></div>

            </div>
            <div class="col-md-12 col-lg-9 d-flex">
                <div class="container bg-light align-self-center text-center mt-0">
                    <h1 class="font-weight-bold mt-0">Crea tu cuenta Gratis</h1>
                    <p class="text-muted mb-4">Ingresa la siguiente información para registrarte como <b>Tutor</b>.</p>
                    <form action="registro_tutor.php" method="post">
                        <!-- Datos Personales -->
                        <div class="form-row mb-2">
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" name="nombresTutor" id="nombresTutor" class="form-control" placeholder="Ingrese Nombres" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" name="apellidosTutor" id="apellidosTutor" class="form-control" placeholder="Ingrese Apellidos" required>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Documento Identidad <span class="text-danger">*</span></label>
                                <input type="number" name="doc_idTutor" id="doc_idTutor" class="form-control" placeholder="Ingrese número de documento" min="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="correoTutor" id="correoTutor" class="form-control" placeholder="Ingrese correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Fecha Nacimiento <span class="text-danger">*</span></label>
                                <input type="date" name="fechaNacimientoTutor" id="fechaNacimientoTutor" class="form-control" min="1922-12-31" max="2016-12-31" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Género <span class="text-danger">*</span></label>
                                <select name="generoTutor" id="generoTutor" class="form-control" required>
                                    <option value="">Seleccione género</option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="font-weight-bold">Dirección <span class="text-danger">*</span></label>
                            <input type="text" name="direccionTutor" id="direccionTutor" class="form-control" placeholder="Ingrese dirección de residencia" required>
                        </div>
                        <!-- DATOS LABORALES -->
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Temática <span class="text-danger">*</span></label>
                                <select name="tematicaTutor" id="tematicaTutor" class="form-control" required>
                                    <option value="">Seleccione temática</option>
                                    <option value="1">Marketing Digital</option>
                                    <option value="2">Matemáticas</option>
                                    <option value="3">Inglés</option>
                                    <option value="4">Programación</option>
                                    <option value="5">Ciencias de Datos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label class="font-weight-bold">Tarjeta profesional <span class="text-danger">*</span></label>
                                <input type="file" name="diplomaTutor" id="diplomaTutor" class="form-control" accept=".pdf,.jpg,.png" multiple required>
                            </div>
                            <!-- SELECCIONAR ARCHIVO DEL PC -->
                            <!-- FALTA SECCIONAR EL FORMULARIO Y DISMINUIR EL TAMAÑO DEL LOGO EN EL TAMAÑO MD Y SM-->
                        </div>
                        <div class="form-group mb-2 ">
                            <label class="font-weight-bold">Experiencia Docente <span class="text-danger">*</span></label>
                            <textarea type="text" name="experienciaTutor" id="experienciaTutor" class="form-control" placeholder="Ingrese su experiencia laboral.  Por ejemplo, 2 años como profesor universitario." required></textarea>
                        </div>
                        <div class="form-row mb-2">
                            <div class=" form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Cuenta Bancaria <span class="text-danger">*</span></label>
                                <input type="number" name="cuentaTutor" id="cuentaTutor" class="form-control" placeholder="Número de cuenta donde podamos depositarle el dinero." required>
                            </div>
                            <div class=" form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Confirme Cuenta Bancaria <span class="text-danger">*</span></label>
                                <input type="number" name="ConfirmarCuentaTutor" id="ConfirmarCuentaTutor" class="form-control" placeholder="Número de cuenta donde podamos depositarle el dinero." required>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="password" name="claveTutor" id="claveTutor" class="form-control" placeholder="Ingrese una contraseña" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6">
                                <label class="font-weight-bold">Confirme Contraseña <span class="text-danger">*</span></label>
                                <input type="password" name="confirmarClaveTutor" id="confirmarClaveTutor" class="form-control" placeholder="Repita la contraseña" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="form-check">
                                <input type="checkbox" name="terminosTutor" id="terminosTutor" class="form-check-input" required>
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas
                                    nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <!-- comparar las contraseñas antes de enviar la información del formulario -->
                        <?php
                        require_once 'modelos/conexion.php';
                        require_once 'controladores/formularios_Controlador.php';
                        require_once 'modelos/formularios_Modelo.php';

                        /*
                         * Valida que la información NO esté vacía.
                         */
                        if (
                            isset($_POST['btnRegistrate']) &&
                            !empty($_POST['nombresTutor']) &&
                            !empty($_POST['apellidosTutor']) &&
                            !empty($_POST['doc_idTutor']) &&
                            !empty($_POST['correoTutor']) &&
                            !empty($_POST['fechaNacimientoTutor']) &&
                            !empty($_POST['generoTutor']) &&
                            !empty($_POST['direccionTutor']) &&
                            !empty($_POST['tematicaTutor']) &&
                            !empty($_POST['diplomaTutor']) &&
                            !empty($_POST['experienciaTutor']) &&
                            !empty($_POST['cuentaTutor']) &&
                            !empty($_POST['claveTutor']) &&
                            !empty($_POST['confirmarClaveTutor'])
                        ) {
                            $claveUno = $_POST['claveTutor'];
                            $claveDos = $_POST['confirmarClaveTutor'];
                            /*
                             * Validación de las contraseñas del formulario registro tutor
                             * para poder llamar los métodos de las clases y hacer el proceso
                             * para insertar el registro a la BD.
                             */
                            if ($claveUno === $claveDos) {
                                /*
                                 * Llama al método que valida la información del formulario para
                                 * insertar el registro a la BD.
                                 */
                                $registroTutor = ControladorFormularios::ctrRegistroTutor();
                            }
                            /*
                             * Valida si el proceso de insertar los datos a la BD, fue exitoso
                             * para sacar un mensaje de confirmación.
                             */
                            if (
                                $claveUno === $claveDos &&
                                $registroTutor === 'ok'
                            ) {
                                echo '<script>

                                            if ( window.history.replaceState ) {

                                                window.history.replaceState( null, null, window.location.href );

                                            }

                                        </script>';

                                echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                            } else {
                                echo "<script>alert('Las contraseñas ingresadas no coinciden')</script>";
                                echo '<script>history.back()</script>';
                            }
                        }
                        ?>
                        <button class="btn btn-success" name="btnRegistrate" id="btnRegistrate">Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-2">Todos los derechos reservados | © 2022 OZIZI</small>
                </div>
            </div>
        </div>
    </section>
    <br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>