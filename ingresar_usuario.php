<?php
//llamar a conexion
require_once ('conexion.php');
$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);
//traer variables del formulario name
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
$correo = $_POST['correo'];
$fecha = $_POST['fecha'];
$imagen = $_FILES['imagen']['name'];

if ($password != $conpassword) {
	header('Location: nuevo_usuario2.html');
}
if(strlen($nickname)<8 || (strlen($password)<8 && strlen($password)>16)){
   header('Location: nuevo_usuario2.html');
}



//numeros aleatorios
$indicador = rand(0,10000);
$dia = date('z');

$ruta="fotosavatar/".$indicador.$dia.$imagen;
$carga = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

//echo $nickname;

//insercion de datos a la base de datos

$conn= new Conexion();
$colombia=$conn->Conectar();
$conn2= new Conexion();
$colombia2=$conn2->Conectar();

$conn3= new Conexion();
$colombia3=$conn3->Conectar();
$sql3 = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$result3 = $conexion->query($sql3);

$sql ="INSERT INTO usuarios VALUES('$nickname','$password','$correo', '$fecha', '$ruta')";
$sql2="INSERT INTO comentarios VALUES('','$nickname','Bienvenido al grupo')";

$sql7="INSERT INTO puntajes VALUES('','$nickname','')";
if($result3->num_rows >= 0){
 

 	$row = $result3->fetch_array(MYSQLI_ASSOC);

 	if($nickname==$row['nickname']){
 	    header('Location: nuevo_usuario2.html');
 		
 	} 
 	else{
 		$stmt=$colombia->prepare($sql);
        $stmt->execute();

        $stmt2=$colombia2->prepare($sql2);
        $stmt2->execute();

        $stmt7=$colombia3->prepare($sql7);
        $stmt7->execute();

 		header('Location: Login.html');
 	}
 }


?>













