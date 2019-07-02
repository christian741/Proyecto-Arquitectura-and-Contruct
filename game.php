<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mi juego</title>
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="slider.css">
  <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="secciones.css">
  <link rel="stylesheet" href="tabla.css">
  <script src="https://use.fontawesome.com/502b7294a9.js"></script>
  <link rel="stylesheet" href="redes.css">
  <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
</head>
<body>
<section class="red">
  <section id="facebook"><a href="https://www.facebook.com/" target="none" class="fa fa-facebook"></a></section>
  <section id="youtube"><a href="https://www.youtube.com" target="none" class="fa fa-youtube-play"></a></section>
  <section id="twitter"><a href="http://www.twitter.com" target="none" class="fa fa-twitter"></a></section>
  <section id="instagram"><a href="http://www.instagram.com" target="none" class="fa fa-instagram"></a></section>

</section>
<header>

  <section class="ancho">
    <article class="logo">
      <img src="imagenes/logo.png" alt="logo" width="30%">
      </article>
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="Nosotros.html">Nosotros</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </section>

</body>
</html>
<?php 
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso'] ==true){
}
else{
	echo "no tiene permisos para ingresar <br>";
  echo "<br> <a href = login.html>vuelva a logueo</a>";
    echo "<br> <a href = nuevo_usuario.html>registro</a>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h1>bienvenido al juego</h1>
   <?php
require_once('conexion.php');
 $a = $_GET['id'];
 echo $a;

 $conn= new Conexion();
 $consulta= $conn->Conectar();
 $sql="SELECT imagen FROM usuarios WHERE nickname='$a'";
 $stmt=$consulta->prepare($sql);
 $stmt->execute();


 while($fila = $stmt->fetch()){

   echo'<img src='.$fila['imagen'].'width=30%>';
 }



   ?>


   <?php
   $conn1= new Conexion();
   $consulta1= $conn1->Conectar();
   $sql1="SELECT puntos_max FROM puntaje WHERE nickname='$a'";
   $stmt1=$consulta->prepare($sql1);
   $stmt1->execute();


    while($fila1 = $stmt1->fetch()){

      echo'<br><br>Su puntaje es: '.$fila1['puntos_max'].'';
    }

   ?>
   <?php
   $conn2= new Conexion();
   $consulta2= $conn2->Conectar();
   $sql2="SELECT max(puntos_max) FROM puntaje";
   $stmt2=$consulta2->prepare($sql2);
   $stmt2->execute();


    while($fila2 = $stmt2->fetch()){

      echo'<br><br>El mayor puntaje es: '.$fila2[0].'';
    }

   ?>






   <section> aca va el juego</section>
   <br>
   <br>
   <a href = "cerrar_sesion.php"> cerrar sesion </a>
</body>
</html>


