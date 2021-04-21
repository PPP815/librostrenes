<?php
	require ( "conexion.php" );

	$buscar = $_GET["buscar"];

	$query = $miconexion->prepare("SELECT libros.titulo,libros.anno,libros.num_paginas,libros.ruta,autores.nombre,autores.apellido,editorial.nom_editorial,idioma.nom_idioma,pais.nom_pais,tema.nom_tema
	FROM libros
	INNER JOIN autores on libros.id_autor=autores.id_autor
	INNER JOIN editorial on libros.id_editorial=editorial.id_editorial
	INNER JOIN idioma on libros.id_idioma=idioma.id_idioma
	INNER JOIN pais on libros.id_pais=pais.id_pais
	INNER JOIN tema on libros.id_tema=tema.id_tema WHERE libros.titulo like '%$buscar%' OR libros.anno like '%$buscar%' OR autores.nombre like '%$buscar%' OR 	autores.apellido like '%$buscar%' OR editorial.nom_editorial like '%$buscar%' OR idioma.nom_idioma like '%$buscar%' OR pais.nom_pais like '%$buscar%' OR 	tema.nom_tema like '%$buscar%'" );
	$query->bindParam(1,$buscar);
	$query->bindParam(2,$buscar);
	$query->bindParam(3,$buscar);
	$query->bindParam(4,$buscar);
	$query->bindParam(5,$buscar);
	$query->bindParam(6,$buscar);
	$query->bindParam(7,$buscar);
	$query->bindParam(8,$buscar);
	$query->execute();
	$contar = $query->rowCount();



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Resultados de la Búsqueda</title>
    <meta name="description" content="Resultado del buscador">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
	<script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container-progressbar">
  	<div class="progressbar"></div>
  </div>
<div class="background-container">
	 <a href="index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>

	<div class="main-container">
	<?php
		if(!empty($_GET["buscar"])){
		 if($contar!=0){
			 ?>
			<p id="ok">Resultados obtenidos: <span><?php echo $contar ?></span></p>
	 <div class="container">

       		<?php
        	while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
        	?>
        	<div class="cont_1">

                    <h3><?php echo $fila['titulo'] ?></h3>
        	</div>
       		 <div class="cont_2">

                    <img src="<?php echo $fila["ruta"] ?>" alt="portada">
        	</div>
        	<div class="cont_3">
                    <p>Autor</p>
                    <p><?php echo $fila['nombre'] . ' ' . $fila['apellido'] ?></p>
                    <p>Editorial</p>
                    <p><?php echo $fila['nom_editorial'] ?></p>
                    <p>Idioma</p>
                    <p><?php echo $fila['nom_idioma'] ?></p>
                    <p>Año Publicaión</p>
                    <p><?php echo $fila['anno'] ?></p>
                    <p>Nº páginas</p>
					<p><?php echo $fila['num_paginas'] ?></p>
                    <p>Tema</p>
                    <p><?php echo $fila['nom_tema'] ?></p>
        	</div>

        <?php
			}
		 }else{
			 echo "<p id='error'><i class='fas fa-times-circle'></i> No éxisten registros para ese criterio</p>";
		 }
		}else{
			echo "<p id='error'><i class='fas fa-times-circle'></i> Escriba un criterio de búsqueda</p>";
		}
			?>
   		 </div>

	</div>

</div>
<div class="go-top-container">
        <div class="go-top-button" title="Volver arriba">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/gotop.js"></script>
    <script src="js/scroll.js"></script>
	<div class="last"></div>
</body>
</html>
