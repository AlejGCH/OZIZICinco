<?php
// require_once 'conexion.php';

class ModeloFormularios
{
    /*=============================================
     Registro Usuario
     =============================================*/
    /*
     * Función que recibe la tabla y los datos del usuario después de ser procesados por otra función,
     * posteriormente, ejecuta la consulta SQL con los datos entrantes.
     */
    public static function mdlRegistroUsuario($tabla, $datos)
    {
        // Consulta SQL con valores predefinidos.
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO $tabla(docid, nombre, apellido, correo, direccion, fechanacimiento, idgenero, idrol, clave, idtematica, diploma, experiencia, datoscuenta) VALUES (:doc_idUsu, :nombresUsu, :apellidosUsu, :correoUsu, :direccionUsu, :fechaNacimientoUsu, :generoUsu, 3, :claveUsu, NULL,NULL,NULL,NULL )"
        );
        // Se asignan los valores a cada puntero para hacer el insert
        $stmt->bindParam(':doc_idUsu', $datos['doc_idUsu'], PDO::PARAM_STR);
        $stmt->bindParam(':nombresUsu', $datos['nombresUsu'], PDO::PARAM_STR);
        $stmt->bindParam(
            ':apellidosUsu',
            $datos['apellidosUsu'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(':correoUsu', $datos['correoUsu'], PDO::PARAM_STR);
        $stmt->bindParam(
            ':direccionUsu',
            $datos['direccionUsu'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(
            ':fechaNacimientoUsu',
            $datos['fechaNacimientoUsu'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(':generoUsu', $datos['generoUsu'], PDO::PARAM_INT);
        $stmt->bindParam(':claveUsu', $datos['claveUsu'], PDO::PARAM_STR);
        //Devuelve 'ok' si se realizó la inserción, caso contrario genera un error.
        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;
    }

    /*=============================================
     Registro Tutor
     =============================================*/
    /*
     * Función que recibe la tabla y los datos del tutor después de ser procesados por otra función,
     * posteriormente, ejecuta la consulta SQL con los datos entrantes.
     */
    public static function mdlRegistroTutor($tabla, $datos)
    {
        // Consulta SQL con valores predefinidos.
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO $tabla(docid, nombre, apellido, correo, direccion, fechanacimiento, idgenero, idrol, clave, idtematica, diploma, experiencia, datoscuenta) VALUES (:doc_idTutor, :nombresTutor, :apellidosTutor, :correoTutor, :direccionTutor, :fechaNacimientoTutor,:generoTutor, 2, :claveTutor, :tematicaTutor, :diplomaTutor, :experienciaTutor, :cuentaTutor )"
        );
        // Se asignan los valores a cada puntero para hacer el insert
        $stmt->bindParam(':doc_idTutor', $datos['doc_idTutor'], PDO::PARAM_STR);
        $stmt->bindParam(
            ':nombresTutor',
            $datos['nombresTutor'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(
            ':apellidosTutor',
            $datos['apellidosTutor'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(':correoTutor', $datos['correoTutor'], PDO::PARAM_STR);
        $stmt->bindParam(
            ':direccionTutor',
            $datos['direccionTutor'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(
            ':fechaNacimientoTutor',
            $datos['fechaNacimientoTutor'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(':generoTutor', $datos['generoTutor'], PDO::PARAM_INT);
        $stmt->bindParam(':claveTutor', $datos['claveTutor'], PDO::PARAM_STR);
        $stmt->bindParam(
            ':tematicaTutor',
            $datos['tematicaTutor'],
            PDO::PARAM_INT
        );
        $stmt->bindParam(
            ':diplomaTutor',
            $datos['diplomaTutor'],
            PDO::PARAM_LOB
        );
        $stmt->bindParam(
            ':experienciaTutor',
            $datos['experienciaTutor'],
            PDO::PARAM_STR
        );
        $stmt->bindParam(':cuentaTutor', $datos['cuentaTutor'], PDO::PARAM_STR);
        //Devuelve 'ok' si se realizó la inserción, caso contrario genera un error.
        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();

        $stmt = null;
    }
}
