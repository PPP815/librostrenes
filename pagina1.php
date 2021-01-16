<?php
session_start();

if ($_SESSION['logeado']){

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADMINISTRADOR</h1>
    <?php var_dump($_SESSION['logeado']);?>
</body>
</html>
<?php

}else{
    header('location: http://www.plataforma-n.com');
}
?>
