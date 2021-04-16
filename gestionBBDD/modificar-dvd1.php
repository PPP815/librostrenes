<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT dvdybluray.id, dvdybluray.titulo, dvdybluray.agno, dvdybluray.formato, idioma.nom_idioma, tema.nom_tema FROM dvdybluray
    INNER JOIN idioma ON dvdybluray.id_idioma=idioma.id_idioma INNER JOIN tema on dvdybluray.id_tema=tema.id_tema");
    $sent_select->execute();


?>
<table id="coleccion" class="display">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Año</th>          
            <th>Formato</th>          
            <th>Idioma</th>          
            <th>Tema</th>          
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $sent_select->fetch(PDO::FETCH_ASSOC)){
                ?>
        <tr>
            <td class="quien" ><a href="admin.php?pagina=boton16&dato=<?php echo $row['id'];?>"><?php echo $row['titulo']; ?></a></td>
            <td class="quien"><a href="admin.php?pagina=boton16&dato=<?php echo $row['id'];?>"><?php echo $row['agno']; ?></a></td>
            <td><a href="admin.php?pagina=boton16&dato=<?php echo $row['id'];?>"><?php echo mb_strtoupper($row['formato']); ?></a></td>
            <td><a href="admin.php?pagina=boton16&dato=<?php echo $row['id'];?>"><?php echo $row['nom_idioma']; ?></a></td>
            <td><a href="admin.php?pagina=boton16&dato=<?php echo $row['id'];?>"><?php echo $row['nom_tema']; ?></a></td>
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
