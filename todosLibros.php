<?php
    include('conexion.php');
    $query = $miconexion->prepare("select titulo,ruta from libros order by titulo ASC");
    $query->execute();
    $contar = $query->rowCount();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista Total de Libros Ferroviarios</title>
    <meta name="description" content="Colección libros trenes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>


<body>
  <div class="container-progressbar">
  	<div class="progressbar"></div>
  </div>
   <div class="background-container">
    <a href="index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
    <span id="seleccion" class="active">Haga click en el libro para ver aquí su titulo</span>
    <div class="book-container">
        <?php
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            ?>
            <img src="<?php echo $row['ruta']?>" title="<?php echo $row['titulo']?>"alt="imagenes">
        <?php
        }

        ?>


    </div>
    <div class="go-top-container">
        <div class="go-top-button" title="Volver arriba">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/gotop.js"></script>
    <script src="js/scroll.js"></script>
</body>
</html>
