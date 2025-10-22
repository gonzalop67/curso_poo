<?php 
require_once "ClassOperaciones.php";

$objCalcular = new Calculate();

echo $objCalcular->raizCuadrada(9);
echo "<br>";
echo $objCalcular->potencia(3, 4);

echo "<br>";
echo $objCalcular->op_basica(3, 4, "+");

?>