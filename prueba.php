<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Examen</title>
</head>
<body>
	<form action="prueba.php" method="POST">
		<label>Sueldo del trabajador 222</label>
		<input type="number" step="0.01" name="Sueldo" id="Sueldo">
		<button type="submit">Enviar</button>
	</form>
	<?php
		$sueldo = 0.0;
		if (empty($_POST['Sueldo'])) {
			// code...
			$sueldo = 0.0;
		} else {
			$sueldo = $_POST['Sueldo'];
		}
		$descuento = 0.0;
		$sueldo_neto = 0.0;

		if ($sueldo > 5000.99) {
			// code...
			$descuento = $sueldo * 0.2;
			$sueldo_neto = $sueldo - $descuento;
			echo 'El sueldo neto del trabajador es S/.'.$sueldo_neto;
		} else {
			$descuento = $sueldo * 0.05;
			$sueldo_neto = $sueldo - $descuento;
			echo 'El sueldo neto del trabajador es S/.'.$sueldo_neto;
		}
	?>
</body>
</html>