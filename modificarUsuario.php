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

$conn3= new Conexion();
$colombia3=$conn3->Conectar();
$sql3 = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$result3 = $conexion->query($sql3);




if ($password != $conpassword) {
	header('Location: modificar.php?id='.$nickname.'');
}
if(strlen($nickname)<8 || (strlen($password)<8 && strlen($password)>16)){
   header('Location: modificar.php?id='.$nickname.'');
}

//numeros aleatorios
$indicador = rand(0,10000);
$dia = date('z');

$ruta="fotosavatar/".$indicador.$dia.$imagen;
$carga = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

//echo $nickname;
if ($imagen!=null) {
	$conn= new Conexion();
    $colombia=$conn->Conectar();
	$sql ="UPDATE usuarios SET imagen='$ruta' WHERE nickname='$nickname'";
	$stmt=$colombia->prepare($sql);
	$stmt->execute();
}

if ($password!=null) {
	$conn= new Conexion();
    $colombia=$conn->Conectar();
	$sql ="UPDATE usuarios SET password='$password' WHERE nickname='$nickname'";
	$stmt=$colombia->prepare($sql);
	$stmt->execute();
}
if ($correo!=null) {
	$conn= new Conexion();
    $colombia=$conn->Conectar();
	$sql ="UPDATE usuarios SET email='$correo' WHERE nickname='$nickname'";
	$stmt=$colombia->prepare($sql);
	$stmt->execute();
}
if ($fecha!=null) {
	$conn= new Conexion();
    $colombia=$conn->Conectar();
	$sql ="UPDATE usuarios SET fecha='$fecha' WHERE nickname='$nickname'";
	$stmt=$colombia->prepare($sql);
	$stmt->execute();
}
 header('Location: verificarusuario2.php?id='.$nombre.'');
 	

?>













