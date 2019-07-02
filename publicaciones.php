
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
<html>
<head>
	 <meta charset="UTF-8">
   <title>Mi juego</title>
   <link rel="stylesheet" type="text/css" href="estilos3.css">
   <link rel="stylesheet" type="text/css" href="contenedor.css">
   <link rel="stylesheet" type="text/css" href="formulario.css">
   <link rel="stylesheet" type="text/css" href="redes.css">
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

      
<section style="padding-top:69px;">
<table border="" style="width:100%;border:5px solid #E74C3C;background-color: #F9E79F;"  >
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
   


<table style="width:100%;border:5px solid #E74C3C;background-color: #F9E79F;"  >
  <tr >
    <th style="padding-top: 10px;color:#B03A2E; ">Nombre:</th>
    <th style="padding-top: 10px;color:#B03A2E ">Publicación:</th> 
  </tr>
<section style="padding-top: 0px">

<?php
/*_______________________________________________________________________________
                                   IMAGEN DE LA USUARIA
________________________________________________________________________________
*/
require_once('conexion.php');
 

$conn= new Conexion();
$colombia=$conn->Conectar();
$sql = "SELECT * FROM comentarios";
$result = $conexion->query($sql);
 while($fila =  $result->fetch_array(MYSQLI_ASSOC)){

  echo '<tr > <td style="padding-top:40px;padding-bottom:40px;color:#B03A2E  "> <center>'.$fila['nombre'].'</center></td>'.'<td style="padding-top:40px;padding-bottom:40px;color:#B03A2E "> <center>'.$fila['mensaje'].'</center></td> </tr>';
   }
  /*_______________________________________________________________________________
                                   IMAGEN DE LA USUARIA
________________________________________________________________________________
*/
   ?>  
</section>
</table>



</body>
</html>