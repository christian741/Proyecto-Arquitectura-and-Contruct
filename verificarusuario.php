
<?php 
session_start();
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);

$nickname = $_POST['nickname'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$result = $conexion->query($sql);



if($result->num_rows > 0){
 

 	$row = $result->fetch_array(MYSQLI_ASSOC);

 	if($password==$row['password']){
 	    //crean las variables de sesion
 		$_SESSION['ingreso'] =true;
 		$_SESSION['nickname']=$nickname;
 		//sesion start sesion expire
 		
 	} 
   else{
    header('Location: login2.html');
 	}
}

if(isset($_SESSION['ingreso']) && $_SESSION['ingreso'] ==true){
	header('Location: verificarusuario2.php');
}
else{
	 header('Location: login2.html');
}

?>