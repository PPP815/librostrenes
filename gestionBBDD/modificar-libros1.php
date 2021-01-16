<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT autores.nombre,autores.apellido,libros.id_libro,libros.titulo,libros.anno,tema.nom_tema FROM autores
    INNER JOIN libros ON autores.id_autor=libros.id_autor INNER JOIN tema on libros.id_tema=tema.id_tema");
    $sent_select->execute();


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación de Libros</title>
</head>
<body>

<div class="main-container">
        <h2>Lista de Libros</h2>
        <table class="lista">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Titulo</th>
            <th>Año</th>
            <th>Tema</th>

            <?php
                while($fila = $sent_select->fetch(PDO::FETCH_ASSOC)){

                    ?>
                    <tr>
                    <td class="quien" ><a href="admin.php?pagina=boton6&dato=<?php echo $fila['id_libro'];?>"><?php echo $fila['nombre']; ?></a></td>
                    <td class="quien"><a href="admin.php?pagina=boton6&dato=<?php echo $fila['id_libro'];?>"><?php echo $fila['apellido']; ?></a></td>
                    <td><a href="admin.php?pagina=boton6&dato=<?php echo $fila['id_libro'];?>"><?php echo $fila['titulo']; ?></a></td>
                    <td><a href="admin.php?pagina=boton6&dato=<?php echo $fila['id_libro'];?>"><?php echo $fila['anno']; ?></a></td>
                    <td><a href="admin.php?pagina=boton6&dato=<?php echo $fila['id_libro'];?>"><?php echo $fila['nom_tema']; ?></a></td>
                    </tr>
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
