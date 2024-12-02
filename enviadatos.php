<?php
require ('conexion.php');

	$n=$_POST['ennombre'];
	$c=$_POST['encorreo'];
	$m=$_POST['enpedido'];

$conexion->query("INSERT INTO login (id, cliente, correo, mensaje, nomadmi, cargoadmi, mensajeadmi, nomapod, cargoapod, mensajeapod, nomdocente, cargodocente, mendocente, nomestud, cargoestud, menestud ) VALUES (NULL, '$n', '$c', '$m', '', '', '', '', '', '', '', '', '', '', '', '')");

?>

?>

<script language = javascript>
alert("Gracias, su mensaje se envió correctamente");
self.location = "consulta.php";
</script>