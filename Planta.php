<?php

class Planta{
    var $dias;

    function __construct($dias){
        $this->dias=$dias;
    }

    function getDias(){
        return $this->dias;
    }

    function setDias(){
        $this->dias=$dias;
    }

    function mostrar(){
        $hoy = date ('Y-m-d'); //a esto le tengo que restar $this->getDias()
        $restardias = '-'.$this->getDias().' day'; //aquí le pongo '-19 day'
        $nuevafecha = strtotime ( $restardias , strtotime ( $hoy ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        echo "Se sembró el día ".$nuevafecha."<br>";
    }
}