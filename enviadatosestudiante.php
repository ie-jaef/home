<?php
require ('conexion.php');


	$ne=$_POST['nestud'];
	$ce=$_POST['cestud'];
	$me=$_POST['mestud'];


$conexion->query("INSERT INTO login (id, cliente, correo, mensaje, nomadmi, cargoadmi, mensajeadmi, nomapod, cargoapod, mensajeapod, nomdocente, cargodocente, mendocente, nomestud, cargoestud, menestud ) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '$ne', '$ce', '$me')");

?>

<script language = javascript>
alert("Gracias, su mensaje se envió correctamente");
self.location = "estudiante.php";
</script>