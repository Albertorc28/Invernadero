<?php

require_once("Frutal.php");
require_once("Hortalizas.php");
require_once("Aromaticas.php");
require_once("Propietario.php");

class Invernadero{
    var $superficie;
    var $propietario;
    var $plantas;

    function __construct($superficie,$propietario){
        $this->superficie=$superficie;
        $this->propietario= $propietario;
        $this->plantas= array();
    }

    function getSuperficie(){
        return $this->superficie;
    }

    function setSuperficie($superficie){
        $this->superficie=$superficie;
    }

    function getPropietario(){
        return $this->propietario;
    }

    function setPropietario($propietario){
        $this->propietario=$propietario;
    }

    function sembrar ($cantidad, $tipo, $dias,$opcion){
        for($i=0;$i<$cantidad;$i++){
            $a= new $tipo ($dias, $opcion);
            $this->plantas[]=$a;
        }
    }

    function mostrarPoda(){
        for($i=0;$i<count($this->plantas);$i++){
            if($this->plantas[$i]instanceof Frutal){
                $this->plantas[$i]->mostrar();
                echo "<br>";
            }
        }
    }

    function mostrarFechaSiembra(){
        for ($i=0; Si<count($this->plantas);$i++){
            if($this->plantas[$i]instanceof Frutal){
                $this->plantas[$i]->mostrar();
                echo "<br>";
            }
        }
    }
}

