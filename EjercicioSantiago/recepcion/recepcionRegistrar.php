<?php
require_once "../Controlador/controladorRegistrar.php";
require_once "../Controlador/controladorArchivos.php";
extract($_POST);
if (isset($_POST["correo"]) && isset($_POST["usuario"]) && isset($_POST["contraseña"]) && isset($_POST["confirmacion"]) && !empty($_POST["correo"]) && !empty($_POST["usuario"]) && !empty($_POST["contraseña"]) && !empty($_POST["confirmacion"])) {

	$controladorarchivos = new ControladorArchivos();

	$controladorregistrar = new ControladorRegistrar();

	if ($_FILES["avatar"]["error"] == 0) {

		$archivoExtension = explode(".", $_FILES["avatar"]["name"]);

		$nombreArchivo = "avatarUsuario".uniqid().".".end($archivoExtension);

		if (end($archivoExtension) == "jpeg" || end($archivoExtension) == "jpg" || end($archivoExtension) == "png") {

			if ($controladorarchivos->moverArchivos("../Vista/img/avatars/",$nombreArchivo,$_FILES["avatar"]["tmp_name"])) {

				if($controladorregistrar->registrarUsuario($nombreArchivo,$correo,$usuario,$contraseña,$confirmacion)){?>
					<script type="text/javascript">
						alert("Registrao papi");
						window.location.href="../";
					</script>
				<?php
				}
			}
		}
	}
}
?>