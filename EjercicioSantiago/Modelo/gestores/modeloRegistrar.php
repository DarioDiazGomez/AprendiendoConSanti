<?php
require_once "../Modelo/Conexion.php";
class ModeloRegistrar{

	private $conexion;

	public function __construct(){
		$this->conexion = Conexion::getInstance();
	}

	public function registrarUsuarioBD(Usuarios $usuarios){
		$sql = "INSERT INTO usuarios(usuario, correo, contrasena, avatar) VALUES (?, ?, ?, ?)";
		try{
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->bindValue(1,$usuarios->getUsuario());
			$PreparedStatement->bindValue(2,$usuarios->getCorreo());
			$PreparedStatement->bindValue(3,$usuarios->getContraseña());
			$PreparedStatement->bindValue(4,$usuarios->getAvatar());
			return $PreparedStatement->execute();
		}catch(PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
		//echo $sql." - ".$usuarios->getUsuario()." - ".$usuarios->getCorreo()." - ".$usuarios->getContraseña()." - ".$usuarios->getAvatar();
	}

	public function pru($avatar,$correo,$usuario,$contraseña){
		$sql = "INSERT INTO usuarios(usuario, correo, contrasena, avatar) VALUES ($usuario, $correo, $contraseña, $avatar)";
		echo $sql;
	}
}
?>