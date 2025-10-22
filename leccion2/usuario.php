<?php

	require_once ("ClassUsuario.php");

	$objUsuarioUno = new Usuario("Andres Cardona", "andres@info.com", "Admin");

	$objAndrea = new Usuario("Andrea Arana", "andrea@info.com", "Cliente");

	echo $objUsuarioUno->getPerfil();

	echo "<br><br>";

	echo $objAndrea->getPerfil();
	$objAndrea->setCambiarClave("Andrea123");

	echo "<br><br>";
	echo $objAndrea->getPerfil();

?>