<?php
    include ('../conexion.php');
    //Selección de autores
    $query = $miconexion->prepare("select id_autor, nombre, apellido from autores order by apellido ASC");
    $query->execute();
    //Selección de pais
    $query2 = $miconexion->prepare("select id_pais, nom_pais from pais order by nom_pais ASC");
    $query2->execute();
    //Selección de tema
    $query3 = $miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
    $query3->execute();
    //Selección de idioma
    $query4 = $miconexion->prepare("select id_idioma, nom_idioma from idioma order by nom_idioma ASC");
    $query4->execute();
    //Selección de editorial
    //Selección de tema
    $query5 = $miconexion->prepare("select id_editorial, nom_editorial from editorial order by nom_editorial ASC");
    $query5->execute();
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alta Libros</title>
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
   <div class="background-container">
    <a href="../index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
    <div class="main-container">
        <form id="form-reg" action="r_alta-libros.php" method="post" enctype="multipart/form-data">
            <h1>Alta de Libros</h1>
            <input type="hidden" name="idlibro">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titel" required placeholder="Título">
            <label for="nump">Nº Páginas</label>
            <input type="text" name="nump" id="nump" required placeholder="Nº páginas">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required placeholder="ISBN">
            <label for="anno">Año</label>
            <input type="text" name="anno" id="anno" required placeholder="Año">
            <label for="autor">Autor</label>
            <select name="autor" id="autor" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row['id_autor']?>"><?php echo $row['nombre'] .' ' . $row['apellido']?></option>
                <?php
                }
                ?>
            </select>
            <label for="pais">País</label>
            <select name="pais" id="pais" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row2 = $query2->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row2['id_pais']?>"><?php echo $row2['nom_pais']?></option>
                <?php
                }
                ?>
            </select>
            <label for="tema">Tema</label>
            <select name="tema" id="tema" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row3 = $query3->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row3['id_tema']?>"><?php echo $row3['nom_tema']?></option>
                <?php
                }
                ?>
            </select>
            <label for="idioma">Idioma</label>
            <select name="idioma" id="idioma" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row4 = $query4->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row4['id_idioma']?>"><?php echo $row4['nom_idioma']?></option>
                <?php
                }
                ?>
            </select>
            <label for="editorial">Editorial</label>
            <select name="editorial" id="editorial" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row5 = $query5->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row5['id_editorial']?>"><?php echo $row5['nom_editorial']?></option>
                <?php
                }
                ?>
            </select>
            <input type="file" name="imagen" id="file">
            <input type="submit" name="submit" value="Registrar">
        </form>
    </div>
    </div>
</body>

</html>
