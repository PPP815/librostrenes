<?php
    require ('../conexion.php');
    //Recogida de la información de la editorial
    $editorial = $_POST['edit'];


    //Asi podemos meter nombres con apostrofes y a la vez evitar inyección sql
    $query = $miconexion->prepare("select nom_editorial from editorial where nom_editorial=?");
    $query->bindParam(1,$editorial);
    $query->execute();
    $contar = $query->rowCount();

if($contar==0){

         $insert_query = $miconexion->prepare("insert into editorial (nom_editorial) values(:nom_editorial)");
         $insert_query->bindParam(':nom_editorial',$editorial);
         $insert_query->execute();

         echo "<p id='ok'>Registro dado de alta con éxito</p>";

}else{

        echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Respuesta alta Editorial</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
<div class="respuesta">
    <a href="alta-editorial.php">Volver a alta editoriales</a>
</div>
</body>

</html>
