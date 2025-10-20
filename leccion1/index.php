<?php
require_once ("ClassOperacion.php");

$operacion1 = new Operacion(10, 2);
$operacion2 = new Operacion(100, 3);

$totalSuma = $operacion1->getSuma();
echo "Total suma: " . $totalSuma;
echo "<br>";

$totalResta = $operacion1->getResta();
echo "Total resta: " . $totalResta;
echo "<br>";

$totalMulti = $operacion1->getMultiplicacion();
echo "Total multiplicación: " . $totalMulti;
echo "<br>";

$totalDiv= $operacion1->getDivision();
echo "Total división: " . $totalDiv;
echo "<br><br>";

$totalSuma = $operacion2->getSuma();
echo "Total suma: " . $totalSuma;
echo "<br>";

$totalResta = $operacion2->getResta();
echo "Total resta: " . $totalResta;
echo "<br>";

$totalMulti = $operacion2->getMultiplicacion();
echo "Total multiplicación: " . $totalMulti;
echo "<br>";

$totalDiv= $operacion2->getDivision();
echo "Total división: " . $totalDiv;
echo "<br>";
?>