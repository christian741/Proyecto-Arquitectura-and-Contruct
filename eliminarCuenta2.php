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
	<link rel="stylesheet" href="login2.css">
	<title>Formulario</title>
</head>
<body>
<body style="background-image: url(imagenes/fondo2.jpg);background-width: 20% ">
<header>
<section class="red">
	<section id="facebook"><a href="https://www.facebook.com/" target="none" class="fa fa-facebook"></a></section>
	<section id="youtube"><a href="https://www.youtube.com" target="none" class="fa fa-youtube-play"></a></section>
	<section id="twitter"><a href="http://www.twitter.com" target="none" class="fa fa-twitter"></a></section>
	<section id="correo"><a href="#" class="fa fa-envelope"></a></section>
	<section id="instagram"><a href="http://www.instagram.com" target="none" class="fa fa-instagram"></a></section>
</section>
</header>
<section style="padding-top: 150px;">
<section class="container">
		<section class="form__top">
			<h2><span>Eliminar Cuenta:</span></h2>
		</section>		
		<form class="form__reg" action="eliminar.php" method="post" enctype="multipart/form-data">
			 <input class="input" type="" name="nickname" readonly="readonly" value="<?php echo($nickname); ?>">
			 <label style="color: red;">Contraseña Errada</label>
			 <input class="input" name="password" type="password" placeholder="&#8962;  Contraseña" required><br>

			<center><a href="verificarusuario2.php?id=<?php echo($nickname) ?>" style="text-decoration: none;"><section style="background-color:#2980B9;color: #85C1E9" >Volver  Inicio</section></a></center>
            
            <section class="btn__form">
            	<input class="btn__submit" type="submit" value="Login">
            	<!--<input class="btn__reset" type="reset" value="LIMPIAR">	-->
            </section>
		</form>
</section>
</section>
</body>
</html>