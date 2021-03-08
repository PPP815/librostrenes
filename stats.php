<?php
//Conexión con la bbdd
require ('conexion.php');
//Código php desde la carpeta includes
include ('includes/codigo-stats.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Estadísticas</title>
    <meta name="description" content="Estadísticas libros trenes">
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
        <a href="index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
        <h2 id="statsH2">Libros por temas</h2>
        <div class="stats-container">
            <div class="theme">
                <dl>
                    <dt>Total Libros</dt>
                    <dd><?php echo $total ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt><a href="vista_rdos.php?desplegable=5">Coches de Viajeros</a></dt>
                    <dd><?php echo $coches_viajeros ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=13">Empresas Ferroviarias</a></dt>
                    <dd><?php echo $empresas ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=10">Ferrocarril</a></dt>
                    <dd><?php echo $ferrocarril ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=3">Infraestructuras</a></dt>
                    <dd><?php echo $infra ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=7">Lineas</a></dt>
                    <dd><?php echo $lineas ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=4">Locomotoras</a></dt>
                    <dd><?php echo $loco ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=8">Metros</a></dt>
                    <dd><?php echo $metros ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=15">Metros y Tranvías</a></dt>
                    <dd><?php echo $metrotran ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=9">Modelismo</a></dt>
                    <dd><?php echo $model ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=14">Narrativa Ferrocarril</a></dt>
                    <dd><?php echo $narra ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=11">Señalización</a></dt>
                    <dd><?php echo $signs ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=2">Tranvías</a></dt>
                    <dd><?php echo $tran ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=1">Trenes</a></dt>
                    <dd><?php echo $trenes ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=6">Vagones</a></dt>
                    <dd><?php echo $vagones ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
					<dt><a href="vista_rdos.php?desplegable=12">Varios</a></dt>
                    <dd><?php echo $varios ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <script src="js/gotop.js"></script>
    <div class="last"></div>
</body>

</html>
