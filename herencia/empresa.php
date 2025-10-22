<?php

require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objEmpleado = new Empleado(78978, "Andrés Pérez", 25);
$objEmpleado->setPuesto("Administrador");
$objEmpleado->setMensaje("Bienvenido Empleado:");

echo "<h2>" . $objEmpleado->getMensaje() . "</h2>";
echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

echo "<br><br>";

$objCliente = new Cliente(434543, "Elena Castillo", 20);
$objCliente->setCredito(1000);
$objCliente->setMensaje("Bienvenido Cliente:");

echo "<h2>" . $objCliente->getMensaje() . "</h2>";
echo $objCliente->getDatosPersonales();
echo "Crédito: " . $objCliente->getCredito();
