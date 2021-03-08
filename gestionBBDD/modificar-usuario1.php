<?php
session_start();

if(isset($_SESSION['logeado']))
{

    require ("conexion.php");

    $sent_select=$miconexion->query("SELECT id, nombre, apellidos, usuario, user_type from usuarios");
    $sent_select->execute();


?>
<table id="coleccion" class="display">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Usuario</th>           
            <th>User Type</th>           
        </tr>
    </thead>
    <tbody>
        <?php
        
          while($row = $sent_select->fetch(PDO::FETCH_ASSOC)){
                  if ($row['user_type'] == 'A'){
              ?>
              <tr>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['apellidos']; ?></td>
              <td><?php echo $row['usuario']; ?></td>
              <td title="ADMINISTRADOR" id="admin"><?php echo $row['user_type']; ?></td>
              </tr>
              <?php
                  }else{
                      ?>
              <tr>
              <td><a href="admin.php?pagina=boton9&dato=<?php echo $row['id'];?>"><?php echo $row['nombre']; ?></a></td>
              <td><a href="admin.php?pagina=boton9&dato=<?php echo $row['id'];?>"><?php echo $row['apellidos']; ?></a></td>
              <td><a href="admin.php?pagina=boton9&dato=<?php echo $row['id'];?>"><?php echo $row['usuario']; ?></a></td>
              <td><a href="admin.php?pagina=boton9&dato=<?php echo $row['id'];?>"><?php echo $row['user_type']; ?></a></td>
              </tr>
              <?php
              }
          }
          ?>
    </tbody>
</table>


<?php
}else{
  header('Location: error.php');
}
?>

