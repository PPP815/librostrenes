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
     <i class="fas fa-search" id="lupa" title="buscar"></i>
       <div class="search-container">
       	<?php  include("buscador.php");?>
       </div>
        <i class="fas fa-ellipsis-v" id="icon" title="Mostrar Menú"></i>
        <div class="menu">
            <ul>
                <i class="fas fa-times" title="Ocultar Menú"></i>
                <!-- <li><a href="informesPDF.php" target="_blank" class="info"><i class="far fa-file-pdf"></i> Ver colección en PDF</a></li> -->
                <li><a href="todosLibros.php" class="info"><i class="fas fa-book-open"></i> Ver todos los libros</a></li>
                <li><a href="stats.php" target="_blank" class="info"><i class="fas fa-chart-pie"></i>Ver Estadísticas</a></li>
                <li><a href="acercade.html" class="info"><i class="fas fa-info"></i> Acerca de...</a></li>
                <li><a href="audio-files.html" class="info"><i class="far fa-file-audio"></i> Audios</a></li>
               
                <div id="gestion">
                    <p><i class="fab fa-elementor"></i> Menú Gestión</p>
                    <li><a href="login.php"><i class="fas fa-unlock"></i> Ir al panel de administración</a></li>

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


        <footer>
            <a href="#" title="Ir a Configuración"><i class="fas fa-cog"></i></a>
            <div class="config">
            <li><a href="" data-src="img/fondo_oscuro.jpg" class="oscuro">Dark Theme</a></li>
            <li><a href="" data-src="img/blueWaves.jpg"class="claro">Ondas</a></li>
            <li><a href="" data-src="img/balasto.jpg" class="oscuro">Balasto</a></li>
            <li><a href="" data-src="img/ladrillos.jpg" class="claro">Ladrillos</a></li>
            <li><a href="" data-src="img/negroTiza.jpg" class="oscuro">Pizarra</a></li>
            <li><a href="" data-src="img/paisaje.jpg"  class="claro">Paiseje</a></li>
            <li><a href="" data-src="img/pared.jpg"  class="oscuro">Pared</a></li>
            <li><a href="" data-src="img/via.jpg"  class="claro">Vía</a></li>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
<div class="last"></div>
</body>


</html>
