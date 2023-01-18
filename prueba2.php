<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Examen</title>
</head>
<body>
	<form action="prueba.php" method="POST">
		<label>Nombres</label>
		<input type="text" name="Nombre" id="Nombre"><br>
		<label>Apellidos</label>
		<input type="text" name="Apellido" id="Apellido"><br>
		<label>Sexo</label>
		<select id="Sexo" name="Sexo">
			<option>M</option>
			<option>F</option>
		</select><br>
		<label>Evaluacion 1</label>
		<input type="number" step="0.01" name="Evaluacion1" id="Evaluacion1"><br>
		<label>Evaluacion 2</label>
		<input type="number" step="0.01" name="Evaluacion2" id="Evaluacion2"><br>
		<label>Evaluacion 3</label>
		<input type="number" step="0.01" name="Evaluacion3" id="Evaluacion3"><br>
		<label>Evaluacion 4</label>
		<input type="number" step="0.01" name="Evaluacion4" id="Evaluacion4"><br>
		<label>Evaluacion 5</label>
		<input type="number" step="0.01" name="Evaluacion5" id="Evaluacion5">
		<button type="submit">Enviar</button><br>
	</form>
	<?php
		$nombre = "";
		$apellido = "";
		$sexo = "";
		$e1 = 0.0;
		$e2 = 0.0;
		$e3 = 0.0;
		$e4 = 0.0;
		$e5 = 0.0;

		if (empty($_POST['Nombre'])) ? $nombre = "" : $nombre = $_POST['Nombre'];
		if (empty($_POST['Apellido'])) ? $apellido = "" : $apellido = $_POST['Apellido'];
		if (empty($_POST['Sexp'])) ? $sexo = "" : $sexo = $_POST['Sexp'];
		if (empty($_POST['Evaluacion1'])) ? $e1 = "" : $e1 = $_POST['Evaluacion1'];
		if (empty($_POST['Evaluacion2'])) ? $e2 = "" : $e2 = $_POST['Evaluacion2'];
		if (empty($_POST['Evaluacion3'])) ? $e3 = "" : $e3 = $_POST['Evaluacion3'];
		if (empty($_POST['Evaluacion4'])) ? $e4 = "" : $e4 = $_POST['Evaluacion4'];
		if (empty($_POST['Evaluacion5'])) ? $e5 = "" : $e5 = $_POST['Evaluacion5'];
		$promedio = 0.0;

		if ($sueldo > 5000.99) {
			// code...
			$descuento = $sueldo * 0.1;
			$sueldo_neto = $sueldo - $descuento;
			echo 'El sueldo neto del trabajador es S/.'.$sueldo_neto;
		} else {
			$descuento = $sueldo * 0.03;
			$sueldo_neto = $sueldo - $descuento;
			echo 'El sueldo neto del trabajador es S/.'.$sueldo_neto;
		}
	?>
</body>
</html>