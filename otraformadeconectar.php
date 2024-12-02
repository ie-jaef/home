<?php
class conexion extends mysqli{
	public function __construct(){
		parent::__construct('localhost','root','','bdinteractiva');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error con laconexión') : $r = 'Conexión establecida con la base de datos';
		echo $r;
		unset($r);
	}
}
$bd = New Conexion();
?>