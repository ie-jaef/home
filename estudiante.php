<!DOCTYPE html>

    <?php
    session_start();
    if (@!$_SESSION['usuario']) {
        header("Location:estudiante.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:docente.php");
    }elseif ($_SESSION['rol']==3) {
        header("Location:apoderado.php");
    }elseif ($_SESSION['rol']==4) {
        header("Location:administrativo.php");
    }
    ?>

<html lang="es">
<head>
	<title>Estudiante</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta http-equiv="content-Languaje" content="es"/>
	<link rel="shortcut icon" type="image/png" href="logo/icono.png">
	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Institucion Educativa MARISCAL AGUSTÍN GAMARRA">
    <meta name="author" content="Elvis Ayuque Espinoza">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/miestilo.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>

<body>

	<header>
    <div class="inner">    	
            <h1 class="logo" title="I.E. MARISCAL AGUSTÍN GAMARRA - HUANDO - HUANCAVELICA"><a hrf="index.html">MAG</a></h1>
            <nav>
                <ul class="sf-menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="current"><a href="#">GALERÍA</a>
                        <ul>
                            <li><a href="fotos.php">Fotos</a></li>
                            <li><a href="videos.php">Videos</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="#">Intranet</a>
                        <ul>
                            <li><a href="acceder-administrativo.php">Administrativo</a></li>
                            <li><a href="acceder-docente.php">Docente</a></li>
                            <li><a href="acceder-estudiante.php">Estudiante</a></li>
                            <li><a href="acceder-padredefamilia.php">Padre de familia</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="#">Areas curriculares</a>
                        <ul>
                            <li><a href="ept.php">Educación para el trabajo</a></li>
                            <li><a href="#">Matemática</a></li>
                            <li><a href="#">Comunicación</a></li>
                            <li><a href="#">Inglés</a></li>
                            <li><a href="#">Ciencias Sociales</a></li>
                            <li><a href="#">Educación física</a></li>
                            <li><a href="#">Arte y cultura</a></li>
                            <li><a href="#">Ciencia y tecnología</a></li>
                            <li><a href="#">Educación religiosa</a></li>
                            <li><a href="#">Desarrollo personal, ciudadanía y cívica</a></li>
                        </ul>
                    </li>
                    <li><a href="consulta.php">Contáctenos</a></li>
                </ul>
            </nav>
  	</header><br>
   
	<section id="areatotalcontenidos">

        <section id="titulogeneral2">
            <ul>
                <li>Bienvenido querido(a): <?php echo $_SESSION['usuario'];?>
                    <a style="text-decoration: none; color: #ffff00; font-size: 22px; text-shadow: 0px 0px 3px #ff0000;" href="desconectar.php"><span style="border-radius: 15px; background: rgba(0,0,0,0.5); padding: 5px; padding-left: 12px; padding-right: 12px; margin-left: 50px; box-shadow: 0px 0px 3px 1px #000">Cerrar sesión</span> </a>
                </li>            
            </ul>
        </section><br>
                <p>
                <b>¿Qué contiene cada área curricular?</b><br><br>
                Contiene informacion relacionado a las sesiones de clases, puedes descargar informacion, ver videos, descargar imágenes, resumen y además podrás dar evaluación virtual del curso.
                <br><br>Por ahora sólo se encuenta disponible el área Educacion para el Trabajo. No olvides de enviar tus sugerencias para la mejora de la pagina web, sus aportes serán de gran ayuda y será calificado en dos de las competencias transversales:<br><br><li> <b> SE DESEMVUELVE EN ENTORNOS VIRTUALES GENERADOS POR LAS TIC</b></li><br><li><b>GESTIONA SU APRENDIZAJE DE MANERA AUTÓNOMA</b></li>  <br><br><br>
                </p><br>
		<section id="titulogeneral1">
			<h1>ACCEDER A LAS ÁREAS CURRICULARES:</h1>
		</section><br>                

                <a href="eptintranet.php"><img id="img-areas" title="Educación para el trabajo" alt="EDUCACIÓN PARA EL TRABAJO" src="images/areaept.png"></a>
                <img id="img-areas" src="images/areacomunicacion.png">
                <img id="img-areas" src="images/areamatematica.png">                
                <img id="img-areas" src="images/areaingles.png">
                <img id="img-areas" src="images/areaeducacionfisica.png">
                <img id="img-areas" src="images/areaarteycultura.png">                
                <img id="img-areas" src="images/areacienciaytecnologia.png">
                <img id="img-areas" src="images/areaeducacionreligiosa.png">
                <img id="img-areas" src="images/areacienciassociales.png">                
                <img id="img-areas" src="images/areadpcyc.png">

        <section id="contenidos">
                <form id="contact-form" method="post" action="enviadatosestudiante.php">
                    <fieldset>
                        <label>
                            <span>Nombres y Apellidos:</span>
                            <input style="border-radius: 5px" type="text" name="nestud" placeholder="Escribe tus nombres y apellidos">
                        </label><br>
                        <label>
                            <span>Cargo:</span>
                            <select style="background: #e6e6fa; border-radius: 2px; border-color: #2f0000;" name="cestud">
                                <option>Estudiante</option>
                            </select>
                        </label><br>
                        <label>
                            <span>Mensaje:</span> 
                            <textarea name="mestud" placeholder="Escribe tu mensaje aquí..."></textarea>
                        </label><br>
                        <div class="btns">
                            <a class="button" onClick="document.getElementById('contact-form').reset()">Borrar</a>
                            <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a> 
                        </div>
                    </fieldset>
                 </form>
        </section><br>


        <section id="titulogeneral4">
            <h1>LISTA DE COMENTARIOS ENTRE ESTUDIANTES</h1>
        </section><br>

        <section id="contenidoscomentarios">

        <?php
            include("conexion.php");
                $sql_consulta="SELECT * FROM login";
                $resultados=$conexion->query($sql_consulta);
        ?>

        <?php
		  foreach ($resultados as $fila) {
		      echo "<table width=\"100%\">";

			     echo "<tr>";
				 echo "<th>".$fila['fecha']."<br>".$fila['nomestud']."<br>".$fila['cargoestud']." dice:"."<br>"."<br>".$fila['menestud']."</th>";	
    			 echo "</tr>"."<br>"."<br>"."<br>";	
			}
		?>
        </section>	

	</section>
</body>
</html>