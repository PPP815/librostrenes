<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta Autores</title>
    <meta name="description" content="alta autores">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="background-container">
        <a href="../index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
        <div class="main-container">
            <form action="r_alta-autores.php" method="post" id="form-reg">
                <div class="inputs">
                    <h2>Alta Autores</h2>
                    <label for="nom_aut">Autor</label>
                    <input type="text" id="nom_aut" name="nom_aut" required placeholder="Nombre">
                    <input type="text" id="ape_aut" name="ape_aut" required placeholder="Apellido">
                    <input type="submit" value="Dar de alta">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
