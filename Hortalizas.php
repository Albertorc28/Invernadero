<?php

require_once ("Planta.php");

class Hortalizas extends Planta{
    var $raiz;

    function __construct($dias,$raiz){
        parent::__construct($dias);
        $this->$raiz=$raiz;
    }

    function getRaiz(){
        return $this->$raiz;
    }

    function setRaiz($raiz){
        $this->$raiz=$raiz;
    }

    function mostrar(){
        parent:: mostrar();
        echo $this->getRaiz()?"Raiz comestible":"Raiz NO comestible";
    }
}

