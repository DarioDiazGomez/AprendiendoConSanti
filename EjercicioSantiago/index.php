<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio</title>
	<link rel="stylesheet" type="text/css" href="Vista/CSS/estilos.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="usuario iniciar">
				<div class="cajaImagen">
					<img src="Vista/img/caset_amarillo.jpg" class="imagen">
				</div>
				<div class="formulario">
					<form>
						<h2>Iniciar sesi&oacute;n</h2>
						<input type="text" name="usuario" placeholder="Usuario">
						<input type="password" name="contraseña" placeholder="Contraseña">
						<button type="button" name="enviar">Iniciar</button>
						<p class="registrarse">¿No tiene cuenta? <a href="#" onclick="toggleForm()">Registrese</a></p>
					</form>
				</div>
			</div>
			<div class="usuario registrar">
				<div class="formulario">
					<form method="POST" action="recepcion/recepcionRegistrar.php" enctype="multipart/form-data">
						<h2>Crear cuenta</h2>
						<input type="file" name="avatar">
						<input type="text" name="usuario" placeholder="Usuario">
						<input type="email" name="correo" placeholder="E-mail">
						<input type="password" name="contraseña" placeholder="Crear contraseña">
						<input type="password" name="confirmacion" placeholder="Confirmar contraseña">
						<button type="submit" name="enviar" id="registrar" disabled>Registrar</button>
						<p class="registrarse">¿Ya tiene cuenta? <a href="#" onclick="toggleForm()">Inicie sesi&oacute;n</a></p>
					</form>
				</div>
				<div class="cajaImagen">
					<img src="Vista/img/caset_rojo.jpg" class="imagen">
				</div>
			</div>
		</div>	
	</section>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="Vista/js/index.js"></script>
</body>
</html>	