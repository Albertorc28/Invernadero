<?php

require_once ("Planta.php");

class Frutal extends Planta{
    var $fechaPoda;

    function __construct($dias,$fechaPoda){
        parent::__construct($dias);
        $this->fechaPoda=$fechaPoda;
    }

    function getfechaPoda(){
        return $this->fechaPoda;
    }

    function setfechaPoda($fechaPoda){
        $this->fechaPoda=$fechaPoda;
    }

    function mostrar(){
        parent:: mostrar();
        echo "Fecha Poda". $this->getFechaPoda();
        echo "<br>";


        /* En el siguiente ejemplo vamos a sumar 2 días a la fecha actual 
        $fecha = date('Y-m-d');
        $nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
        echo $nuevafecha;
        */

        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->getFechaPoda());
        $diff = $date1->diff($date2); //diferencia entre fechas
        
        echo "Hace ".$diff->y." años, ".$diff->m;      
        echo ($diff->m > 1) ? " meses" : " mes";       
        echo " y ".$diff->d." días que podaste";
    }
}


