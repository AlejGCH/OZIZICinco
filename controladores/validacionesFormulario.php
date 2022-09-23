<?php
                        require_once '../modelos/conexion.php';
                        require_once 'formularios.controlador.php';
                        require_once '../modelos/formularios.modelo.php';
                        $registroTutor = ControladorFormularios::ctrRegistroTutor();
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

                            if ($claveUno == $claveDos && $registroTutor == "ok") {
                                echo "Entró al primero";
                                echo '<script>

                                            if ( window.history.replaceState ) {

                                                window.history.replaceState( null, null, window.location.href );

                                            }

                                        </script>';

                                echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                            } else {
                                echo "<script>alert('Las contraseñas ingresadas no coinciden')</script>";
                                echo "<script>history.back()</script>";
                            }
                        }
                        ?>