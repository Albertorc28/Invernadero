<?php

require_once("Invernadero.php");

$p1=new Propietario("Rosendo");

$inv1= new Invernadero(847834,$p1);

$inv1-> sembrar(30, Frutal::class, 2, "23-05-2018");
$inv1-> sembrar(20, Hortalizas::class, 2, true);
$inv1-> sembrar(25, Aromaticas::class, 2, "Verde");

$inv1->mostrarPoda();

echo"<pre>";
print_r($inv1);
echo"</pre>";

