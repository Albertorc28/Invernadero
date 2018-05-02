<?php

require_once ("Planta.php");

class Aromaticas extends Planta{
    var $color;

    function __construct($dias,$color){
        parent::__construct($dias);
        $this->color=$color;
    }

    function getColor(){
        return $this->color;
    }

    function setColor($color){
        $this->color=$color;
    }

    function mostrar(){
        parent:: mostrar();
        echo "Color: ".$this->getcolor();
    }
}