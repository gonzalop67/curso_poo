<?php 

require_once ("ClassEmpleado.php");
require_once ("ClassCliente.php");

$objEmpleado = new Empleado(78978, "Andrés Pérez", 25);
$objEmpleado->setPuesto("Administrador");

echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

$objCliente = new Cliente(434543, "Elena Castillo", 20);
$objCliente->setCredito(1000);

echo $objCliente->getDatosPersonales();
echo "Crédito: " . $objCliente->getCredito();

?>