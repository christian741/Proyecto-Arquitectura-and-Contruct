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
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$votacion = $_POST['estrellas'];

//$conn= new Conexion();
//$colombia=$conn->Conectar();
$sql = "SELECT * FROM usuarios WHERE nickname = '$nombre'";
$result = $conexion->query($sql);
 
$row= $result->fetch_array(MYSQLI_ASSOC);
//$stmt=$colombia->prepare($sql);
//$stmt->execute();


if($result->num_rows > 0){
   
 
 	if($nombre==$row['nickname']){

 	      $sql1 = "SELECT * FROM comentarios WHERE nombre = '$nombre'";
            $result1 = $conexion->query($sql1);

            $row1 = $result1->fetch_array(MYSQLI_ASSOC);
               
            if($nombre==$row1['nombre']){

            		$conn= new Conexion();
      					$colombia=$conn->Conectar();
      					$sql3 ="INSERT INTO comentarios VALUES('','$nombre','$mensaje')";
      					$stmt3=$colombia->prepare($sql3);
      					$stmt3->execute();
      					
          
                header('Location: publicaciones.php?id='.$nombre.'');
            		
            }
               //DELETE FROM `ingresar_usuario`.`comentario` WHERE `id`='1';
               //UPDATE `ingresar_usuario`.`comentario` SET `nombre`='claro' WHERE `id`='9';
 	} 
    else{
 		echo "mandarlo a registrar";
 	}
 
}else{
	echo "no entre";
}

?>

