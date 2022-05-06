<?php

class ControladorFormularios{


    /*
    Creando metodo(funcion, un metodo es una funcion que se encuentra dentro de una clase.) para registro
    */
    

    static public function Ctrregistrar(){

        if (isset($_POST['nombre'])) {
            
            $tabla = "usuario";
            $datos = array("nombre"=>$_POST['nombre'],
                            "email"=>$_POST['email'],
                            "password"=>$_POST['password']);

            $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);

            return $respuesta;
            

        }
        
    }
    


}


?>