<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT autores.nombre,autores.apellido,libros.id_libro,libros.titulo,libros.anno,tema.nom_tema FROM autores
    INNER JOIN libros ON autores.id_autor=libros.id_autor INNER JOIN tema on libros.id_tema=tema.id_tema");
    $sent_select->execute();


?>
<table id="coleccion" class="display">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>          
            <th>Título</th>          
            <th>Año</th>          
            <th>Tema</th>          
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $sent_select->fetch(PDO::FETCH_ASSOC)){
                ?>
        <tr>
            <td class="quien" ><a href="admin.php?pagina=boton6&dato=<?php echo $row['id_libro'];?>"><?php echo $row['nombre']; ?></a></td>
            <td class="quien"><a href="admin.php?pagina=boton6&dato=<?php echo $row['id_libro'];?>"><?php echo $row['apellido']; ?></a></td>
            <td><a href="admin.php?pagina=boton6&dato=<?php echo $row['id_libro'];?>"><?php echo $row['titulo']; ?></a></td>
            <td><a href="admin.php?pagina=boton6&dato=<?php echo $row['id_libro'];?>"><?php echo $row['anno']; ?></a></td>
            <td><a href="admin.php?pagina=boton6&dato=<?php echo $row['id_libro'];?>"><?php echo $row['nom_tema']; ?></a></td>
        </tr>
        <?php
            }
            ?>
    </tbody>
</table>

<?php
}else{
  header('Location: error.php');
}
?>
