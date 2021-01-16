<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id_autor, nombre, apellido from autores");
    $sent_select->execute();


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación de Autores</title>
</head>
<body>

<div class="main-container">
        <h2>Lista de Autores</h2>
        <table class="lista">
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>

            <?php
                while($fila = $sent_select->fetch(PDO::FETCH_ASSOC)){

                    ?>
                    <tr>
                    <td><a href="admin.php?pagina=boton11&dato=<?php echo $fila['id_autor'];?>"><?php echo $fila['id_autor']; ?></a></td>
                    <td><a href="admin.php?pagina=boton11&dato=<?php echo $fila['id_autor'];?>"><?php echo $fila['nombre']; ?></a></td>
                    <td><a href="admin.php?pagina=boton11&dato=<?php echo $fila['id_autor'];?>"><?php echo $fila['apellido']; ?></a></td>

                <?php
                }
                ?>

            </table>
         </div>
<?php
}else{
  header('Location: error.php');
}
?>

</body>
</html>
