<?php
//bd=ID AUTO INCREMENTABLE, TOTAL,nickname
//crear un boton y añadir un boton al hacer click a el boton hacer una accion metodo post, Url, methodo post, data"Score="& Score &"jugador="& jugador.tesxt

session_start();

$bd = "datos_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);

//pdo mysqli
require_once ('conexion.php');
$score=$_POST['id'];

$nickname=$_SESSION['nickname'];
echo $nickname;
echo $score;
//$Score='300';
//$jugador='alex';

//insercion de datos

$conn2= new Conexion();
$consulta2= $conn2->Conectar();
$sql2="UPDATE puntajes SET puntaje=puntaje+'$score' WHERE nombre='$nickname'";
$stmt2=$consulta2->prepare($sql2);
$stmt2->execute();

 

?>