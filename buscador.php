<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Buscador</title>
	<script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>

	<div class="background-container" id="search">
		<div class="main-container">
			<form action="buscador_rdos.php" method="get" id="form-buscador" enctype="multipart/form-data">

                <input type="text" id="buscar" name="buscar" placeholder="Escriba término a buscar">
                <label for="btn-submit"><i class="far fa-caret-square-right"></i></label>
                <input type="submit" value="Buscar" name="submit" id="btn-submit">

			</form>

		</div>

	</div>

</body>

</html>
