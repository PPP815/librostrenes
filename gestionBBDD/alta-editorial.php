<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta Editorial</title>
    <meta name="description" content="alta autores">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="background-container">
        <a href="../index.php" id="linkBack" title="Ir a Index"><i class="fas fa-home"></i></a>
        <div class="main-container">
            <form action="r_alta_editorial.php" method="post" id="form-reg">
                <div class="inputs">
                    <h2>Alta Editorial</h2>
                    <label for="edit">Editorial</label>
                    <input type="text" id="edit" name="edit" required placeholder="Editorial">
                    <input type="submit" value="Dar de alta">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
