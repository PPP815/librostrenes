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
    <meta name="description" content="Estadísticas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <div class="background-container">
        <a href="index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
        <h2 id="statsH2">Estadísticas de libros por temas</h2>
        <div class="stats-container">
            <div class="theme">
                <dl>
                    <dt>Total Libros</dt>
                    <dd><?php echo $total ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Coches de Viajeros</dt>
                    <dd><?php echo $coches_viajeros ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Empresas Ferroviarias</dt>
                    <dd><?php echo $empresas ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Ferrocarril</dt>
                    <dd><?php echo $ferrocarril ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Infraestructuras</dt>
                    <dd><?php echo $infra ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Lineas</dt>
                    <dd><?php echo $lineas ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Locomotoras</dt>
                    <dd><?php echo $loco ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Metros</dt>
                    <dd><?php echo $metros ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Metros y Tranvías</dt>
                    <dd><?php echo $metrotran ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Modelismo</dt>
                    <dd><?php echo $model ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Narrativa Ferrocarril</dt>
                    <dd><?php echo $narra ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Señalización</dt>
                    <dd><?php echo $signs ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Tranvías</dt>
                    <dd><?php echo $tran ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Trenes</dt>
                    <dd><?php echo $trenes ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Vagones</dt>
                    <dd><?php echo $vagones ?></dd>
                </dl>
            </div>
            <div class="theme">
                <dl>
                    <dt>Varios</dt>
                    <dd><?php echo $varios ?></dd>
                </dl>
            </div>

        </div>










    </div>







    <script src="js/gotop.js"></script>
</body>

</html>
