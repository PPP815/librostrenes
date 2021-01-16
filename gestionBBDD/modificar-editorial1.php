<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id_editorial, nom_editorial, email from editorial");
    $sent_select->execute();


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación de Editoriales</title>
</head>
<body>

<div class="main-container">
        <h2>Lista de Editoriales</h2>
        <table class="lista">
            <th>Id</th>
            <th>Editorial</th>
            <th>Correo Electrónico</th>

            <?php
                while($fila = $sent_select->fetch(PDO::FETCH_ASSOC)){

                    ?>
                    <tr>
                    <td><a href="admin.php?pagina=boton13&dato=<?php echo $fila['id_editorial'];?>"><?php echo $fila['id_editorial']; ?></a></td>
                    <td><a href="admin.php?pagina=boton13&dato=<?php echo $fila['id_editorial'];?>"><?php echo $fila['nom_editorial']; ?></a></td>
                    <td><a href="admin.php?pagina=boton13&dato=<?php echo $fila['id_editorial'];?>"><?php echo $fila['email']; ?></a></td>

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
