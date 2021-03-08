<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id_autor, nombre, apellido from autores order by apellido ASC");
    $sent_select->execute();


?>
<table id="coleccion" class="display">
    <thead>
        <tr>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $sent_select->fetch(PDO::FETCH_ASSOC)){
                ?>
        <tr>
            <td><a href="admin.php?pagina=boton11&dato=<?php echo $row['id_autor'];?>"><?php echo $row['apellido'] . ', ' . $row['nombre']; ?></a></td>
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
