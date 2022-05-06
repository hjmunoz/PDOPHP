<?php


//mostraremos las salidas de las vistas al usuario y tambien enviaremos las distintas  
//acciones que el usuario envie al contralador

//require_once establece que el codigo del archivo es requerido, obligatorio para la 
//funcion del programa por ello si el archivo especificado en la funcion require()
//no se encuentra saltara un error "PHP fatal error"

//require_once funciona de la misma forma que el require solo, pero la diferencia es que este impide la carga del mismo archivo mas de una vez

require_once "Controlador/plantillaControlador.php";
require_once "Controlador/formulariosControlador.php";
require_once "Modelos/formulariosModelos.php";


$plantilla = new ControladorPlantilla();
$plantilla->CtrTraerPlantilla();



?>