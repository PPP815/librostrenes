<?php
session_start();

if(isset($_SESSION['logeado']))
{

	require ("conexion.php");

	$seleccion=$_GET['dato'];

    $sent_select=$miconexion->prepare("SELECT id,nombre, apellidos, usuario, user_type from usuarios WHERE id = :seleccion");
    $sent_select->bindParam(':seleccion',$seleccion);
    $sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);

?>
    <div class="main-container">

        <form id="form-reg" action="gestionBBDD/modificar-usuario3.php" method="post">
        <div class="inputs">
            <h2>Modificación Usuario</h2>
            <input type="hidden" name="id" value="<?php echo $fila['id']?>" readonly>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $fila['nombre']?>" required>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $fila['apellidos']?>" required>
            <label for="usuario">Usuario</label>
            <input type="email" name="usuario" value="<?php echo $fila['usuario']?>" required>
            <label for="userType">User Type</label>
            <input type="text" name="userType" value="<?php echo $fila['user_type']?>" readonly>
            <label for="newContra">Nueva Contraseña</label>
            <input type="password" name="newContra" required>
            <input type="submit" name="submit" value="Actualizar">
            <a href="gestionBBDD/borrado-usuarios.php?dato=<?php echo $fila['id']; ?>" class="borrar"><i class="fas fa-trash-alt"></i> Eliminar Usuario</a>
       </div>
        </form>
    </div>
<script src="js/confirmacion.js"></script>
<?php
}else{
  header('Location: error.php');
}
?>
