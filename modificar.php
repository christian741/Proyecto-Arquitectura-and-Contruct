<?php 
session_start();
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);

//pdo mysqli
require_once ('conexion.php');
$nickname=$_GET['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mi juego</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="reset.css">-->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="registro1.css">
	<title>Formulario</title>
</head>
<body style="background-image: url(imagenes/registro.jpg);">

<section class="red">
	<section id="facebook"><a href="https://www.facebook.com/" target="none" class="fa fa-facebook"></a></section>
	<section id="youtube"><a href="https://www.youtube.com" target="none" class="fa fa-youtube-play"></a></section>
	<section id="twitter"><a href="http://www.twitter.com" target="none" class="fa fa-twitter"></a></section>
	<section id="correo"><a href="#" class="fa fa-envelope"></a></section>
	<section id="instagram"><a href="http://www.instagram.com" target="none" class="fa fa-instagram"></a></section>

</section>
<section></section>
<section style="padding-left: 750px;">
	<div class="container" >
		<div class="form__top" >
			<h2><span>MODIFICA TU USUARIO</span></h2>
		</div>		
		  <form class="form__reg" action="modificarUsuario.php" method="post" enctype="multipart/form-data">
		   <center></center>
		   <center><input type="file" name = "imagen" ></center><br>
		   <label>Nombre: </label><br>
	       <input  value = "<?php echo $nickname?>" name="nickname" readonly="readonly"> <br>
	       <label>Modificar Contraseña: </label><br>
	       <input type="password" placeholder ="Ingrese  una contraseña " name="password"><br>
	       <label>Modificar Confirmar Contraseña: </label><br>
	       <input type="password" placeholder ="Escriba de nuevo contraseña " name="conpassword" ><br>
	       <label>Modificar Correo: </label><br>
	       <input type="email" placeholder="ingrese su correo" name = "correo" ><br>
	       <label>Modificar Fecha de Nacimiento :</label><br>
	       <input type="date" name = "fecha"  min="1958-01-01" max="2000-01-01"><br>
	       <center><a href="verificarusuario2.php?id=<?php echo($nickname) ?>" style="text-decoration: none;"><section style="background-color: #EB984E    ;color: white" >Volver al Inicio</section></a><br></center>
	       <input type="submit" value = "Registrar">	
		</form>
	</div>
	
</section>
</body>
</html>