<!DOCTYPE html>
<html lang="es">
<head>
	<title>Intranet iniciar sesión</title>
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
			<h1>INICIAR SESIÓN: ADMINISTRATIVO</h1>
		</section><br>
        <section id="contenidos">
                <form id="contact-form" method="post" action="validar.php">
                    <fieldset>
                        <label>
                            <span>Usuario:</span>
                            <input  style="border-radius: 5px" type="text" name="mail" placeholder="Escribe el usuario">
                        </label><br>
                        <label>
                            <span>Contraseña:</span>
                            <input style="border-radius: 5px" type="password" name="pass" placeholder="*********">
                        </label><br>
                        
                        <div class="btns">
                            <a class="button" onClick="document.getElementById('contact-form').submit()">Acceder</a> 
                        </div>
                    </fieldset>
                 </form>
        </section><br> 
        <section id="contenidos">
                <p>
                <b>¿Qué es intranet?</b><br><br>
                Es una red privada que permite el acceso sólo a usuarios autorizados dentro de la comunidad educativa de la I. E. "Mariscal Agustín Gamarra". La intranet se utiliza para descargar documentos, recursos digitales, diálogo y participacion entre usuarios de la red.<br><br><br>
                <b>¿Quiénes pueden acceder la intranet?</b><br><br>
                Director, Coordinadores, Personal administrativo, Docentes, Estudiantes y Padres de familia de la comunidad educativa Gamarrina.<br><br><br>
                <b>¿Los padres de familia pueden ver a las notas de sus hijos?</b><br><br>
                Sí, los padres de familia pueden ver las notas de sus hijos para que puedan tomar desiciones, además pueden escribir y enviar sus preguntas, inclusive sacar cita para Atención de Padres de Familia con el docente del área correspondiente.
                </p><br><br>

                <p>
                <b>¿Qué contiene cada área curricular?</b><br><br>
                Contiene informacion relacionado a las sesiones de clases, puedes descargar informacion, ver videos, descargar imágenes, resumen y además podrás dar evaluación virtual del curso.
                <br><br>
                </p><br>
        </section>       

	</section>
</body>
</html>