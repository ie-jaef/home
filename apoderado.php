<!DOCTYPE html>

    <?php
    session_start();
    if (@!$_SESSION['usuario']) {
        header("Location:apoderado.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:docente.php");
    }elseif ($_SESSION['rol']==2) {
        header("Location:estudiante.php");
    }elseif ($_SESSION['rol']==4) {
        header("Location:administrativo.php");
    }
    ?>

<html lang="es">
<head>
	<title>Padre de familia</title>
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
                <li>Bienvenido padre de familia: <?php echo $_SESSION['usuario'];?>
                     <a style="text-decoration: none; color: #ffff00; font-size: 22px; text-shadow: 0px 0px 3px #ff0000;" href="desconectar.php"><span style="border-radius: 15px; background: rgba(0,0,0,0.5); padding: 5px; padding-left: 12px; padding-right: 12px; margin-left: 50px; box-shadow: 0px 0px 3px 1px #000">Cerrar sesión</span> </a>
                </li>            
            </ul>
        </section><br>

		<section id="titulogeneral2">
			<h1>INTERACTÚA ENTRE PADRES DE FAMILIA MEDIANTE ÉSTE FORMULARIO:</h1>
		</section><br>
        <section id="contenidos">
                <form id="contact-form" method="post" action="enviadatosapoderado.php">
                    <fieldset>
                        <label>
                            <span>Nombres y Apellidos:</span>
                            <input  type="text" name="napod" placeholder="Escribe tus nombres y apellidos">
                        </label><br>
                        <label>
                            <span>Cargo:</span>
                            <select style="background: #e6e6fa; border-radius: 2px; border-color: #2f0000;" name="capod">
                                <option>Padre de familia</option>
                            </select>
                        </label><br>
                        <label>
                            <span>Mensaje:</span> 
                            <textarea name="mapod" placeholder="Escribe tu mensaje aquí..."></textarea>
                        </label><br>
                        <div class="btns">
                            <a class="button" onClick="document.getElementById('contact-form').reset()">Borrar</a>
                            <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a> 
                        </div>
                    </fieldset>
                 </form>
        </section><br>

        <section id="titulogeneral1">
            <h1>ANTES DE ENVIAR TU COMENTARIO DEBES VER EL SIGUIENTE VIDEO</h1>
        </section><br>
        <font style="color: #000; font-size: 14px; text-shadow: 0px 0px 0px #000;">Hola, te invito a ver el video, debes tener en cuenta las Reglas de Netiqueta para interactuar con las personas. Adelante, envía tu mensaje y sé parte del cambio y la innovación, comparte tus conocimientos y aprende en red con la Comunidad Educativa Gamarrina.</font><br><br>

        <section id="contenidos">
            <iframe style="border-radius: 5px; box-shadow: 0px 0px 5px 1px #000;" width="100%" height="450px" src="https://www.youtube.com/embed/u9LTNiTzDAM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section><br>


        <section id="titulogeneral4">
            <h1>LISTA DE DIÁLOGO ENTRE PADRES DE FAMILIA</h1>
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
				 echo "<th>".$fila['fecha']."<br>".$fila['nomapod']."<br>".$fila['cargoapod']." dice:"."<br>"."<br>".$fila['mensajeapod']."</th>";	
    			 echo "</tr>"."<br>"."<br>"."<br>";	
			}
		?>
        </section>	

	</section>
</body>
</html>