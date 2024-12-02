
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM intranet WHERE usuario='$username'");
	if($do=mysqli_fetch_assoc($sql2))
		{if($pass==$do['condo'])
			{
			$_SESSION['id']=$do['id'];
			$_SESSION['usuario']=$do['usuario'];
			$_SESSION['rol']=$do['rol'];
			echo '<script>alert("BIENVENIDO ESTIMADO DOCENTE")</script> ';
			echo "<script>location.href='docente.php'</script>";		
			}
		}


	$sql2=mysqli_query($mysqli,"SELECT * FROM intranet WHERE usuario='$username'");
	if($es=mysqli_fetch_assoc($sql2))
		{if($pass==$es['cones'])
			{
			$_SESSION['id']=$es['id'];
			$_SESSION['usuario']=$es['usuario'];
			$_SESSION['rol']=$es['rol'];
			echo '<script>alert("BIENVENIDO QUERIDO ESTUDIANTE")</script> ';
			echo "<script>location.href='estudiante.php'</script>";		
			}
		}



	$sql2=mysqli_query($mysqli,"SELECT * FROM intranet WHERE usuario='$username'");
	if($ap=mysqli_fetch_assoc($sql2))
		{if($pass==$ap['conap'])
			{
			$_SESSION['id']=$ap['id'];
			$_SESSION['usuario']=$ap['usuario'];
			$_SESSION['rol']=$ap['rol'];
			echo '<script>alert("BIENVENIDO PADRE DE FAMILIA")</script> ';
			echo "<script>location.href='apoderado.php'</script>";		
			}
		}


	$sql2=mysqli_query($mysqli,"SELECT * FROM intranet WHERE usuario='$username'");
	if($ad=mysqli_fetch_assoc($sql2)){
		if($pass==$ad['conad']){
			$_SESSION['id']=$ad['id'];
			$_SESSION['usuario']=$ad['usuario'];
			$_SESSION['rol']=$ad['rol'];
			echo '<script>alert("BIENVENIDO DISTINGUIDO ADMINISTRATIVO")</script> ';
			echo "<script>location.href='administrativo.php'</script>";
			//header("Location:administrativo.php");
		}else{
			echo '<script>alert("LA CONTRASEÑA ES INCORRECTA")</script> ';
		
			echo "<script>location.href='acceder.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, INTÉNTALO OTRA VEZ")</script> ';
		
		echo "<script>location.href='acceder.php'</script>";	

	}

?>