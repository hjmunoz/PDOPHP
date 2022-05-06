<?php

    class ControladorPlantilla
    {
        /*Llamada a la plantilla*/

        public function CtrTraerPlantilla()
        {
            //include se utiliza para invocar archivos que contengan codigo html o php 
            include "Vista/plantilla.php";
        }

        // public function Sumar($n1, $n2)
        // {
        //     $resultado = $n1 + $n2;
        //     echo $resultado;
        // }
    }

?>