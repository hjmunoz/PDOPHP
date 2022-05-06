<?php

require_once "conexion.php";

class ModeloFormulario{

    /*Registro */

    static public function mdlRegistro($table, $datos){

        //statement es una declaracion;
        
        $stmt = Conexion::conectar()->prepare("insert into $table (nombre, email, password) 
        values (:nombre, :email, :password)");

        //bindparam
        $stmt->bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(':password', $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        }else {
            
            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->closeCursor();
        $stmt->null;

    }

}


?>