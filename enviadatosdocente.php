<?php
require ('conexion.php');

	
	$nd=$_POST['ndocente'];
	$cd=$_POST['cdocente'];
	$md=$_POST['mdocente'];


$conexion->query("INSERT INTO login (id, cliente, correo, mensaje, nomadmi, cargoadmi, mensajeadmi, nomapod, cargoapod, mensajeapod, nomdocente, cargodocente, mendocente, nomestud, cargoestud, menestud ) VALUES (NULL, '', '', '', '', '', '', '', '', '', '$nd', '$cd', '$md', '', '', '')");

?>

<script language = javascript>
alert("Gracias, su mensaje se envió correctamente");
self.location = "docente.php";
</script>