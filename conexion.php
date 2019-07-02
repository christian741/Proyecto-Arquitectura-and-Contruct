

<?php 
//clase conexion atrinutos y metodos
//mysqli_connect  obsoloeto....API
//mysql_connect re-obsoleto 
//API PDO 
class Conexion{

	private $db = 'mysql:host=localhost;dbname=datos_juego';
	private $user='root';
	private $pass='';

	//metodo

	public function Conectar(){
		$base = new PDO($this->db,$this->user, $this->pass);
		return $base;
	}

}







?>
