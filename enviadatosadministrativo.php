<?php
require ('conexion.php');

	$nad=$_POST['nadmin'];
	$cad=$_POST['cadmin'];
	$mad=$_POST['madmin'];


$conexion->query("INSERT INTO login (id, cliente, correo, mensaje, nomadmi, cargoadmi, mensajeadmi, nomapod, cargoapod, mensajeapod, nomdocente, cargodocente, mendocente, nomestud, cargoestud, menestud ) VALUES (NULL, '', '', '', '$nad', '$cad', '$mad', '', '', '', '', '', '', '', '', '')");

?>

<script language = javascript>
alert("Gracias, su mensaje se envió correctamente");
self.location = "administrativo.php";
</script>