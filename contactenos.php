<?php
session_start();
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);
require_once ('conexion.php');
//pdo mysqli
//require_once ('conexion.php');
//traer variables del formularioname

$correo = $_POST['correo'];
$nombre = $_POST['name'];
$telefono=$_POST['telefono'];
$mensaje = $_POST['mensaje'];

$conn= new Conexion();
$colombia=$conn->Conectar();
$sql3 ="INSERT INTO contactos VALUES('','$correo','$nombre','$telefono','$mensaje')";
$stmt3=$colombia->prepare($sql3);
$stmt3->execute();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fight Anime/ Contactos</title>
    <meta name="viewport" content="initial-scale=1.0">
   <meta charset="utf-8">
   
  </head>
  <body>
    <meta charset="UTF-8">
  <title>Mi juego</title>
  <link rel="stylesheet" href="estilosjuego1.css">
  <link rel="stylesheet" href="slider1.css">
  <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="secciones1.css">
  <link rel="stylesheet" href="formulario1.css">
  <script src="https://use.fontawesome.com/502b7294a9.js"></script>
  <link rel="stylesheet" href="video1.css">
  <link rel="stylesheet" href="redes.css">
  <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
    <!--<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">-->
  <link rel="stylesheet" type="text/css" href="reset.css" />
  <link rel="stylesheet" type="text/css" href="index1.css" />
</head>
<body>
<section class="red">
  <section id="facebook"><a href="https://www.facebook.com/" target="none" class="fa fa-facebook"></a></section>
  <section id="youtube"><a href="https://www.youtube.com" target="none" class="fa fa-youtube-play"></a></section>
  <section id="twitter"><a href="http://www.twitter.com" target="none" class="fa fa-twitter"></a></section>
  <section id="correo"><a href="#" class="fa fa-envelope"></a></section>
  <section id="instagram"><a href="http://www.instagram.com" target="none" class="fa fa-instagram"></a></section>

</section>
<header>

  <section class="ancho">
    <article class="logo">
      <img src="imagenes/images.jpg" alt="logo" width="30%">
      </article>
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="Nosotros.html">Nosotros</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <li><a href="contactos.php">Contacto</a></li>
        <li><a class="active" href="nuevo_usuario.html">Registrate</a></li>
        <li><a class="active" href="Login.html">| Login</a></li>
      </ul>
    </nav>
  </section>
</header>
<!--<section class="ancho-letras">
  <article class="letras-slider">
    <h1 class="animated zoomIn">Dodge attacks</h1>
    <p class="animated slideInUp">Te presentamos nuestro nuevo juego</p>
  </article>
</section>
<section id="particles-js"></section>



<section class="banner-1">
  <h3>Registrate para darnos tu comentario :D.<a href="nuevo_usuario.html">Registrate</a></h3></section>-->

<section style="background-color: #F7DC6F  ">
<section class="wap" style="padding-top: 70px; ">
  <article class="bienvenidos" > 
    <h2 style="color:  #229954   ">UBICACION</h2><br>
  </article>
</section>
  <section class="contenedor-columnas">
    <article class="columnasx3">
      <img src="imagenes/Escudo_udec.png" style="padding-left: 120px;padding-right: 120px" width="20%" height="300px" >
      <br><br>
      <p style="color: black">La Universidad de Cundinamarca (UDEC) es una universidad pública, estatal y departamental Colombiana, con sede principal en Fusagasugá. Fue creada mediante la Ordenanza 045 de diciembre 19, con el nombre de Instituto Universitario de Cundinamarca. A 2015 cuenta con sedes distribuidas en ocho municipios de Cundinamarca.</p>
    </article>
    <article class="columnasx3">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.8277229881585!2d-74.35646317899227!3d4.829090285119369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f7c543a6dbe2f%3A0x803f96089459fa88!2sUniversidad+de+Cundinamarca!5e0!3m2!1ses-419!2sco!4v1525991991700" width="600" height="450" frameborder="0" style="border:0;padding-right: 10px" allowfullscreen></iframe>
    </article>
    <p>_</p>
    <article class="bienvenidos" style="background-color: #B03A2E "> 
      <br>
    <h2 style="color:#fff ">CONTACTE A LOS ADMINISTRADORES</h2>
      <br>
  </article>
  <section class="contenedor-columnas">
    <article class="columnasx3" style="background-color: #F1948A "">
      <h4>Cristian Camilo Medina </h4>
      <h3 style=" color: #fff">Informacion:</h3>
      <h5 style=" color: #B03A2E"><li>Telefono Celular: </li></h5><p style="color: black"> 3123213212</p>
      <h5 style=" color: #B03A2E"> <li>Correo:</li> </h5><p style="color: black"> camilomedina@gmail.com</p>
    </article>
    <article class="columnasx3" style="background-color: #F1948A "">
      <h4>Christian David Diaz</h4>
      <h3 style=" color: #fff">Informacion:</h3>
      <h5 style=" color: #B03A2E"><li>Telefono Celular: </li></h5><p style="color: black"> 3196795802</p>
      <h5 style=" color: #B03A2E"> <li>Correo:</li> </h5><p style="color: black"> cd--55@hotmail.com</p>
    </article>
    
  </section>
  </section>
</section>

<section style="background-color: #F4D03F">
<section class="fondo-comentario" style="">
  <center><h2> CONTACTANOS</h2></center></section>
  <center><label style="color: red"> Su Mensaje ha sido enviado muy pronto se comunicaran con usted</label></center>
  <form action="contactenos.php" method="post" enctype="multipart/form-data">
    <h2>Informanos:</h2>
    <input type="text" name="correo" placeholder="Correo" required="">
    <input type="text" name="name" placeholder="Nombre" required="">
    <input type="numbre" name="Telefono" placeholder="Telefono" required="">
    <textarea name="mensaje" placeholder="Escriba su texto aqui" required=""></textarea>

    <input type="submit" value="Comentar" id="boton">
  </form>
</section>



<section class="banner-1">
  <h3>Registrate para darnos tu comentario :D.<a href="nuevo_usuario.html">Registrate</a></h3></section>

<footer>

<section class="container" style="position: fixed;left:1040px;top:220px;background-color: #3498DB  ">
      <h1 class="title">BotFight</h1>
      <article class="chat"></article>
      <article class="busy"></article>
      <article class="input">
        <input type="text" placeholder="Habla conmigo!!!!" style="width: 200px" />
        <a>Enviar</a>
      </article>
    </section>
</footer>
    <script type="text/javascript" src="jquery-1.7.2.js"></script>
    <script type="text/javascript" src="chat-bot1.js"></script>
    <script type="text/javascript" src="index1.js"></script>

<script src="particles.js"></script>
<script src="app.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="alto.js"></script>
<script src="sss/sss.js"></script>
   
  </body>
</html>