<!DOCTYPE html>
<html lang="es">
<head>
	<title>Interactúa con nosotros</title>
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
			<h1>INTERACTÚA CON NOSOTROS MEDIANTE ÉSTE FORMULARIO:</h1>
		</section><br>
        <section id="contenidos">
                <form id="contact-form" method="post" action="enviadatos.php">
                    <fieldset>
                        <label>
                            <span>Nombres y Apellidos:</span>
                            <input style="border-radius: 5px" type="text" name="ennombre" placeholder="Escribe tus nombres y apellidos">
                        </label><br>
                        <label>
                            <span>Cargo:</span>
                            <select style="background: #e6e6fa; border-radius: 2px; border-color: #2f0000;" name="encorreo">
                                <option>Seleccionar</option>
                                <option>Director</option>
                                <option>Coordinador</option>
                                <option>CARE</option>
                                <option>Docente</option>
                                <option>Estudiante</option>
                                <option>Auxiliar</option>
                                <option>Administrativo</option>
                                <option>Personal de Mantenimiento</option>
                                <option>Personal de Servicio</option>
                                <option>Personal de Vigilancia</option>
                                <option>CIST</option>
                                <option>Padre de Familia</option>
                                <option>Usuario Público</option>
                            </select>
                        </label><br>
                        <label>
                            <span>Mensaje:</span> 
                            <textarea name="enpedido" placeholder="Escribe tu mensaje aquí..."></textarea>
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
        <font style="color: #000; font-size: 16px; text-shadow: 0px 0px 0px #000;">Hola, te invito a ver el siguiente video, debes tener en cuenta las Reglas de Netiqueta para interactuar con las personas. <br>Adelante, envía tu mensaje e interactúa con nosotros, sé parte del cambio y la innovación, comparte tus conocimientos y aprende en red con la Comunidad Educativa Gamarrina.</font><br><br>

        <section id="contenidos">
            <iframe style="border-radius: 5px; box-shadow: 0px 0px 5px 1px #000;" width="100%" height="450px" src="https://www.youtube.com/embed/u9LTNiTzDAM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section><br>
	</section>
    <script>

// Numero de copos, recomendados entre 30 y 40
var nieve_cantidad=70;

// Colores de los copos se mostraran de forma aleatoria
var nieve_colorr=new Array("#aaaacc","#ddddFF","#ccccDD")

// Tipo de letra de los copos
var nieve_tipo=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Valor o letra de los copos
var nieve_letra="*"

// velocidad de caida
var nieve_velocidad=1.0;

// tamaño mas grande de los copos
var nieve_cantidadsize=30

// tamaño mas pequeño de los copos
var nieve_chico=8

// 1 toda la pagina - 2 zona izquierda - 3 centro de pagina - 4 zona derecha
var nieve_zona=1

var nieve=new Array()
var marginbottom
var marginright
var timer
var i_nieve=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function aleatorio(range) {    
    rand=Math.floor(range*Math.random())
    return rand
}

function initnieve() {
    if (ie5 || opera) {
        marginbottom = document.body.clientHeight
        marginright = document.body.clientWidth
    }
    else if (ns6) {
        marginbottom = window.innerHeight
        marginright = window.innerWidth
    }
    var nievesizerange=nieve_cantidadsize-nieve_chico
    for (i=0;i<=nieve_cantidad;i++) {
        crds[i] = 0;                      
        lftrght[i] = Math.random()*15;        
        x_mv[i] = 0.03 + Math.random()/10;
        nieve[i]=document.getElementById("s"+i)
        nieve[i].style.fontFamily=nieve_tipo[aleatorio(nieve_tipo.length)]
        nieve[i].size=aleatorio(nievesizerange)+nieve_chico
        nieve[i].style.fontSize=nieve[i].size
        nieve[i].style.color=nieve_colorr[aleatorio(nieve_colorr.length)]
        nieve[i].sink=nieve_velocidad*nieve[i].size/5
        if (nieve_zona==1) {nieve[i].posx=aleatorio(marginright-nieve[i].size)}
        if (nieve_zona==2) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)}
        if (nieve_zona==3) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/4}
        if (nieve_zona==4) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/2}
        nieve[i].posy=aleatorio(2*marginbottom-marginbottom-2*nieve[i].size)
        nieve[i].style.left=nieve[i].posx
        nieve[i].style.top=nieve[i].posy
    }
    movenieve()
}

function movenieve() {
    for (i=0;i<=nieve_cantidad;i++) {
        crds[i] += x_mv[i];
        nieve[i].posy+=nieve[i].sink
        nieve[i].style.left=nieve[i].posx+lftrght[i]*Math.sin(crds[i]);
        nieve[i].style.top=nieve[i].posy

        if (nieve[i].posy>=marginbottom-2*nieve[i].size || parseInt(nieve[i].style.left)>(marginright-3*lftrght[i])){
            if (nieve_zona==1) {nieve[i].posx=aleatorio(marginright-nieve[i].size)}
            if (nieve_zona==2) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)}
            if (nieve_zona==3) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/4}
            if (nieve_zona==4) {nieve[i].posx=aleatorio(marginright/2-nieve[i].size)+marginright/2}
            nieve[i].posy=0
        }
    }
    var timer=setTimeout("movenieve()",50)
}

for (i=0;i<=nieve_cantidad;i++) {
    document.write("<span id='s"+i+"' style='position:absolute;top:-"+nieve_cantidadsize+"'>"+nieve_letra+"</span>")
}
if (browserok) {
    window.onload=initnieve
}
</script>
</body>
</html>