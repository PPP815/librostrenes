<?php
require ('conexion.php');

    $desplegable = $_GET['desplegable'];


    $query = $miconexion->prepare("SELECT
    autores.nombre,
    autores.apellido,
	libros.id_libro,
    libros.titulo,
    libros.ruta,
    tema.id_tema,
    tema.nom_tema,
    editorial.nom_editorial,
    idioma.nom_idioma,
    libros.anno,
    libros.num_paginas,
    libros.isbn
    FROM libros
    inner join autores on libros.id_autor=autores.id_autor
    inner join editorial on libros.id_editorial=editorial.id_editorial
    inner join idioma on libros.id_idioma=idioma.id_idioma
    inner join pais on libros.id_pais=pais.id_pais
    inner join tema on libros.id_tema=tema.id_tema WHERE libros.id_tema='$desplegable' order by libros.anno ASC");
    $query->bindParam(1,$desplegable);
    $query->execute();
    $contar = $query->rowCount();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Vista Resultados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
   <div class="background-container">
    <a href="index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
    <h2 id="rdos">Resultados</h2>
    <div class="container">
        <?php
        if ($contar!=0)
         while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="cont_1">

                    <h3><?php echo $fila['titulo'] ?></h3>
        </div>
        <div class="cont_2">

                    <img src="<?php echo $fila['ruta'] ?>" loading="lazy"  alt="portada">
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
                    <p>ISBN</p>
                    <p><?php echo $fila['isbn'] ?></p>
                    <p>Tema</p>
                    <p><?php echo $fila['nom_tema'] ?></p>
                    </div>
        <?php
        }else{
             echo "<p id='error'>No hay libros sobre este tema</p>";
         }
        ?>
    </div>
</div>
    <div class="go-top-container">
        <div class="go-top-button" title="Volver arriba">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/gotop.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html

