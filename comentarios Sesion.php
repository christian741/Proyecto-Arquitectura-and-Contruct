<?php 
session_start();
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);

$nickname=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi juego</title>
	<script src="https://use.fontawesome.com/502b7294a9.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos3.css">
	<link rel="stylesheet" type="text/css" href="redes.css">
	<link rel="stylesheet" type="text/css" href="formulario1.css">
	<link rel="stylesheet" type="text/css" href="contenedor.css">
	
</head>
<body>
  <header>
  <section class="ancho">
    <article class="logo">
      <!--<img src="imagenes/images.jpg" alt="logo" width="30%">-->
      </article>
    <nav>
      <ul>
          <li><a href = "modificar.php?id=<?php echo($nickname) ?>"> Modificar Cuenta </a></li>
         <li><a href = "verificarusuario2.php?id=<?php echo($nickname) ?>"> Juego </a></li>
        <li><a href = "comentarios Sesion.php?id=<?php echo($nickname) ?>"> crear publicacion </a></li>
        <li><a href = "publicaciones.php?id=<?php echo($nickname) ?>"> Publicaciones </a></li>
        <li><a href = "eliminarCuenta.php?id=<?php echo($nickname) ?>"> Eliminar Cuenta </a></li>
         <li><a href = "cerrar_sesion.php" style="background-color: white;padding-top: 30px;padding-bottom: 30px;color: #E74C3C "> Cerrar Sesión </a></li>
      </ul>
    </nav>
  </section>
</header>

<section class="red">
	<section id="facebook"><a href="https://www.facebook.com/" target="none" class="fa fa-facebook"></a></section>
	<section id="youtube"><a href="https://www.youtube.com" target="none" class="fa fa-youtube-play"></a></section>
	<section id="twitter"><a href="http://www.twitter.com" target="none" class="fa fa-twitter"></a></section>
	<section id="correo"><a href="#" class="fa fa-envelope"></a></section>
	<section id="instagram"><a href="http://www.instagram.com" target="none" class="fa fa-instagram"></a></section>
</section>

      
<section style="padding-top:69px;">
<table  border="" style="width:100%;border:5px solid #E74C3C;background-color: #F9E79F;"  >
  <tr >
    <th style="padding-top: 10px;color:#B03A2E;"><center>SEA USTED BIENVENIDO: </center> </th>
    <th style="padding-top: 10px;color:#B03A2E; "> NOMBRE: <?php echo $nickname; ?></th>
  
<?php
/*_______________________________________________________________________________
                                   IMAGEN DE LA USUARIA
________________________________________________________________________________
*/
require_once('conexion.php');
 

 $conn= new Conexion();
 $consulta= $conn->Conectar();
 $sql="SELECT imagen FROM usuarios WHERE nickname='$nickname'";
 $stmt=$consulta->prepare($sql);
 $stmt->execute();


 while($fila =$stmt->fetch()){
  
   echo'<th style="padding-left:20px"><img src="'.$fila['imagen'].'"width="30%"  ></th>';
 }
  /*_______________________________________________________________________________
                                   IMAGEN DE LA USUARIA
________________________________________________________________________________
*/
   ?>
  </tr>
</table>
</section>
   

<section style="background-color: #F4D03F">
<section class="fondo-comentario" style="">
  <center><h2> COMENTA LO QUE DESEES </h2></center></section>
  <form action="comentarios.php" method="post" enctype="multipart/form-data">
    <h2>Comentar </h2>
    <input type="" name="nombre" readonly="readonly" value="<?php echo($nickname); ?>">
    <textarea name="mensaje" placeholder="Escriba su texto aqui" required=""></textarea>

    <p style="color: black;font-size: 30px;font-family: udec;font-weight: 3px"> VOTA EL JUEGO</p> 

         <p class="clasificacion">
              <input type="hidden" name="estrellas" value="0">
          <input id="radio1" type="radio" name="estrellas" value="5">
          <label for="radio1">★</label>
          <input id="radio2" type="radio" name="estrellas" value="4">
          <label for="radio2">★</label>
          <input id="radio3" type="radio" name="estrellas" value="3">
          <label for="radio3">★</label>
          <input id="radio4" type="radio" name="estrellas" value="2">
          <label for="radio4">★</label>
          <input id="radio5" type="radio" name="estrellas" value="1">
          <label for="radio5">★</label>
       </p>
           
    <input type="submit" value="Comentar" id="boton">
  </form>
</section>


</body>
</html>




