<?php
class ControladorArchivos{
	
	public function moverArchivos($ruta,$nombre,$temporal){
		$guardarArchivo = $ruta.$nombre;
		if (move_uploaded_file($temporal, $guardarArchivo)) {
			return true;
		}else{
			return false;
		}
	}

}
?>