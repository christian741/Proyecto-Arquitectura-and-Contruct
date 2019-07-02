<?php 
session_start();
require_once ('conexion.php');
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);

$nickname = $_POST['nickname'];
$password = $_POST['password'];

$conn= new Conexion();
$colombia=$conn->Conectar();

$conn= new Conexion();
$colombia=$conn->Conectar();

$sql = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$result = $conexion->query($sql);
$sql2 ="SELECT * FROM comentarios WHERE nombre = '$nickname'";
$result2 =$conexion->query($sql2);



if($result->num_rows > 0){
 

 	$row = $result->fetch_array(MYSQLI_ASSOC);

 	if($password==$row['password']){


 		$sql3="DELETE FROM usuarios WHERE nickname='$nickname'";
        $sql4="DELETE FROM comentarios WHERE nombre='$nickname'";
        $sql5="DELETE FROM puntajes WHERE nombre='$nickname'";

        /*
          UPDATE `ingresar_usuario`.`comentario` SET `nombre`='christiadiaz' WHERE `id`='13';
        */
 			
 		$stmt3=$colombia->prepare($sql3);
 		$stmt3->execute();

        $stmt4=$colombia->prepare($sql4);
 		$stmt4->execute();

 		 $stmt5=$colombia->prepare($sql5);
 		$stmt5->execute();

 		$variable=true;


 	} else{
 		$variable=false;
 	}
}

if($variable==true){
	session_destroy();
	header('Location: index.html');
}
else{
	header("Location: eliminarCuenta2.php?id=".$nickname);
}

?>