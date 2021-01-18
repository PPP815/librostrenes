<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id_editorial, nom_editorial, email from editorial");
    $sent_select->execute();


?>
<table id="coleccion" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Editorial</th>
            <th>Correo Electrónico</th>           
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $sent_select->fetch(PDO::FETCH_ASSOC)){
                ?>
        <tr>
            <td><a href="admin.php?pagina=boton13&dato=<?php echo $row['id_editorial'];?>"><?php echo $row['id_editorial']; ?></a></td>
            <td><a href="admin.php?pagina=boton13&dato=<?php echo $row['id_editorial'];?>"><?php echo $row['nom_editorial']; ?></a></td>
            <td><a href="admin.php?pagina=boton13&dato=<?php echo $row['id_editorial'];?>"><?php echo $row['email']; ?></a></td>
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
