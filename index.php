<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Medik</title>

		<link rel="stylesheet" href="css/paciente_style.css">
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/crearCita_controller.js"></script>
	</head>

	<body>
		<section id="inicio">
			<header id="principal">
				<img src="files/icon_microscope.png" id="logo">
				<span id="titulo">Medik</span>
			</header>

			<div id="parrafo">
				<p> Si usted está afiliado a seguros Medik cree aqui su cita.</p>
			</div>

			<div id="buttons">
				<div class="button" id="crearCita_btn" onclick="mostrarFormulario()">
					<img src="files/icon_crear_citas.svg" id="img">
					<p id="nombre">Crear cita</p>
				</div>

				<div class="button" id="consultarCitas_btn" onclick="mostrarFormulario()">
					<img src="files/icon_ver_citas.svg" id="verCitas_img">
					<p id="consultarCitas_texto">Consultar citas</p>
				</div>
			</div>
		</section>

		<section id="form" style="display:none">
			<form action="" id="formulario">

				<p id="n2"> Crea tu cita</p>
				<input type="text" name="Nombre" placeholder="Nombre" required>
				<input type="number" name="edad" min="0" max="120" placeholder="Edad" required>
				<input type="text" name="ID" placeholder="Id de seguro" required>

				<div style="">
					<input type="submit" id="enviar_btn">
					<input type="button" id="cancelar_btn" onclick="mostrarFormulario()" value="Cancelar">
				</div>
			</form>

		</section>

		<footer style="display:none">
			Derechos Reservados &copy; 2016-2020
		</footer>
	</body>
</html>
