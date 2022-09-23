<?php
class ControladorFormularios
{
    /*=============================================
	Registro Usuario
	=============================================*/
    /*
     * Función que recibe los datos del formulario usuario,
     * los procesa y los envía a otra función.
     */
    public static function ctrRegistroUsuario()
    {
        //varible que contiene la contraseña
        $password = $_POST['claveUsu'];
        //valida si el envío contiene datos
        if (
            isset($_POST['btnRegistrate']) &&
            !empty($_POST['nombresUsu']) &&
            !empty($_POST['apellidosUsu']) &&
            !empty($_POST['doc_idUsu']) &&
            !empty($_POST['correoUsu']) &&
            !empty($_POST['fechaNacimientoUsu']) &&
            !empty($_POST['generoUsu']) &&
            !empty($_POST['direccionUsu']) &&
            !empty($_POST['claveUsu']) &&
            !empty($_POST['confirmarClaveUsu'])
        ) {
            //asignamos la tabla para el insert
            $tabla = 'tblusuario';

            //encriptamos la contraseña
            $pass_fuerte = password_hash($password, PASSWORD_DEFAULT);

            // Se agregan los datos del formulario al array
            $datos = [
                'doc_idUsu' => $_POST['doc_idUsu'],
                'nombresUsu' => $_POST['nombresUsu'],
                'apellidosUsu' => $_POST['apellidosUsu'],
                'correoUsu' => $_POST['correoUsu'],
                'fechaNacimientoUsu' => $_POST['fechaNacimientoUsu'],
                'generoUsu' => $_POST['generoUsu'],
                'direccionUsu' => $_POST['direccionUsu'],
                'claveUsu' => $pass_fuerte,
            ];

            //ModeloFormularios hace referencia a la clase
            //mdlRegistro hace referencia al metodo de la clase anterior

            //$respuesta, son los parámetros que se deben enviar a el modelo (ModeloFormularios)
            $respuesta = ModeloFormularios::mdlRegistroUsuario($tabla, $datos);

            return $respuesta;
        }
    }

    /*=============================================
	Registro Tutor
	=============================================*/
    /*
     * Función que recibe los datos del formulario tutor,
     * los procesa y los envía a otra función.
     */
    public static function ctrRegistroTutor()
    {
        //varible que contiene la contraseña
        $password = $_POST['claveTutor'];
        //valida si el envío contiene datos
        if (
            isset($_POST['btnRegistrate']) &&
            !empty($_POST['nombresTutor']) &&
            !empty($_POST['apellidosTutor']) &&
            !empty($_POST['doc_idTutor']) &&
            !empty($_POST['correoTutor']) &&
            !empty($_POST['fechaNacimientoTutor']) &&
            !empty($_POST['generoTutor']) &&
            !empty($_POST['direccionTutor']) &&
            !empty($_POST['diplomaTutor']) &&
            !empty($_POST['experienciaTutor']) &&
            !empty($_POST['cuentaTutor']) &&
            !empty($_POST['ConfirmarCuentaTutor']) &&
            !empty($_POST['tematicaTutor']) &&
            !empty($_POST['claveTutor']) &&
            !empty($_POST['confirmarClaveTutor'])
        ) {
            //asignamos la tabla para el insert
            $tabla = 'tblusuario';

            //encriptamos la contraseña
            $pass_fuerte = password_hash($password, PASSWORD_DEFAULT);
            // Se agregan los datos del formulario al array
            $datos = [
                'doc_idTutor' => $_POST['doc_idTutor'],
                'nombresTutor' => $_POST['nombresTutor'],
                'apellidosTutor' => $_POST['apellidosTutor'],
                'correoTutor' => $_POST['correoTutor'],
                'fechaNacimientoTutor' => $_POST['fechaNacimientoTutor'],
                'generoTutor' => $_POST['generoTutor'],
                'direccionTutor' => $_POST['direccionTutor'],
                'diplomaTutor' => $_POST['diplomaTutor'],
                'experienciaTutor' => $_POST['experienciaTutor'],
                'cuentaTutor' => $_POST['cuentaTutor'],
                'tematicaTutor' => $_POST['tematicaTutor'],
                'claveTutor' => $pass_fuerte,
            ];

            //ModeloFormularios hace referencia a la clase
            //mdlRegistro hace referencia al metodo de la clase anterior

            //$respuestatutor, son los parámetros que se deben enviar a el modelo (ModeloFormularios)
            $respuestaTutor = ModeloFormularios::mdlRegistroTutor(
                $tabla,
                $datos
            );

            return $respuestaTutor;
        }
    }
}
