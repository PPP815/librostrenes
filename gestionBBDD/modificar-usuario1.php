<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id, nombre, apellidos, usuario, user_type from usuarios");
    $sent_select->execute();


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación de Usuarios</title>

</head>
<body>
    <div class="main-container">
        <h2>Usuarios Registrados</h2>
        <table class="lista">
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>User Type</th>

            <?php
                while($fila = $sent_select->fetch(PDO::FETCH_ASSOC)){
                        if ($fila['user_type'] == 'A'){
                    ?>
                    <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apellidos']; ?></td>
                    <td><?php echo $fila['usuario']; ?></td>
                    <td title="ADMINISTRADOR"><?php echo $fila['user_type']; ?></td>
                    <?php
                        }else{
                            ?>
                            <tr>
                    <td><a href="admin.php?pagina=boton9&dato=<?php echo $fila['id'];?>"><?php echo $fila['nombre']; ?></a></td>
                    <td><a href="admin.php?pagina=boton9&dato=<?php echo $fila['id'];?>"><?php echo $fila['apellidos']; ?></a></td>
                    <td><a href="admin.php?pagina=boton9&dato=<?php echo $fila['id'];?>"><?php echo $fila['usuario']; ?></a></td>
                    <td><a href="admin.php?pagina=boton9&dato=<?php echo $fila['id'];?>"><?php echo $fila['user_type']; ?></a></td>
                    <?php
                    }
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
