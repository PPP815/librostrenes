<?php
    require ('../conexion.php');
    //Recogida de la información del autor
    $nombre = $_POST['nom_aut'];
    $apellido = $_POST['ape_aut'];


    $query = $miconexion->prepare("select nombre, apellido from autores where nombre=? and apellido=?");
    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apellido);
    $query->execute();
    $contar = $query->rowCount();

if($contar==0){

         $insert_query = $miconexion->prepare("insert into autores (nombre, apellido) values(:nombre, :apellido)");
         $insert_query->bindParam(':nombre',$nombre);
         $insert_query->bindParam(':apellido',$apellido);
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
    <title>Respuesta alta Autores</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
<div class="respuesta">
    <a href="alta-autores.php">Volver a alta autores</a>
</div>
</body>

</html>
