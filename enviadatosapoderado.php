<?php
require ('conexion.php');


	$nap=$_POST['napod'];
	$cap=$_POST['capod'];
	$map=$_POST['mapod'];
		

$conexion->query("INSERT INTO login (id, cliente, correo, mensaje, nomadmi, cargoadmi, mensajeadmi, nomapod, cargoapod, mensajeapod, nomdocente, cargodocente, mendocente, nomestud, cargoestud, menestud ) VALUES (NULL, '', '', '', '', '', '', '$nap', '$cap', '$map', '', '', '', '', '', '')");

?>

<script language = javascript>
alert("Gracias, su mensaje se envió correctamente");
self.location = "apoderado.php";
</script>