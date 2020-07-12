<?php
require_once "../Modelo/gestores/modeloRegistrar.php";
require_once "../Modelo/clases/usuarios.php";
class ControladorRegistrar{
	private $gestorUsuarios;
	public function __construct(){
		$this->gestorUsuarios = new ModeloRegistrar();
	}

	private function encriptarContraseña($contraseña){
		$primerFiltro = md5($contraseña);
		$contraseñaEncriptada = crypt($contraseña, $primerFiltro);
		$encriptadoFinal = md5($contraseñaEncriptada.$primerFiltro);
		return $encriptadoFinal;
	}

	public function registrarUsuario($avatar,$correo,$usuario,$contraseña,$confirmacion){
		if ($contraseña == $confirmacion) {
			$usuarios = new Usuarios($usuario,$correo,$this->encriptarContraseña($contraseña),$avatar);
			return $this->gestorUsuarios->registrarUsuarioBD($usuarios);
			//$this->gestorUsuarios->pru($avatar,$correo,$usuario,$this->encriptarContraseña($contraseña));
		}
	}

}
?>