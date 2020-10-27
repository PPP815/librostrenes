<?php

   require ('conexion.php');
	$query=$miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
	$query->execute();
   	//query para las imágenes
	$query2=$miconexion->prepare("select ruta from libros");
	$query2->execute()

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Colección Libros Ferrocarril</title>
    <meta name="description" content="Colección libros trenes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#4682b4">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="background-container">
     <i class="fas fa-search" id="lupa"></i>
       <div class="search-container">
       	<?php  include("buscador.php");?>
       </div>
        <i class="fas fa-ellipsis-v" id="icon"></i>
        <div class="menu">
            <ul>
                <li><a href="informesPDF.php" target="_blank" class="info"><i class="far fa-file-pdf"></i> Ver colección en PDF</a></li>
                <li><a href="stats.php" target="_blank" class="info"><i class="fas fa-chart-pie"></i>Ver Estadísticas</a></li>
                <li><a href="contactar.html" class="info"><i class="far fa-envelope-open"></i> Contacto</a></li>
                <li><a href="version.html" class="info"><i class="fas fa-code-branch"></i> Versión</a></li>
                <li><a href="audio-files.html" class="info"><i class="far fa-file-audio"></i> Audios</a></li>
                <div class="config">
                    <li><a href="#" id="oscuro">Dark Theme</a></li>
                    <li><a href="#" id="claro">Light Theme</a></li>
                </div>

                <div id="gestion">
                    <p><i class="fab fa-elementor"></i> Menú Gestión</p>
                    <li><a href="gestionBBDD/alta-libros.php">Alta Libros</a></li>
                    <li><a href="gestionBBDD/alta-autores.php">Alta Autores</a></li>
                    <li><a href="gestionBBDD/alta-editorial.php">Alta Editoriales</a></li>
                </div>
            </ul>
        </div>

        <div class="main-container">

			<h1 id="main-head">Libros Ferrocarril</h1>
 <div class="index-container">

 	<form name="miformulario" action="vista_rdos.php" method="get">
 		<select name="desplegable" required>
 			<option value="" selected>Buscar por Tema
 			</option>
 			<?php
                while($rgto = $query->fetch(PDO::FETCH_ASSOC))
                {
                    ?>
 			<option value="<?php echo $rgto["id_tema"]?>"><?php echo $rgto["nom_tema"]?></option>
 			<?php
                }
                    ?>
 			<input type="submit" value="Consultar" name="submit">
 		</select>
 	</form>
 </div>
        </div>

        <footer>
            <a href="todosLibros.php" id="ver_lista">Ver todos los libros</a>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
</body>


</html>
