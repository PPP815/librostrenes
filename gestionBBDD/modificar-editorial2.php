<?php
session_start();

if(isset($_SESSION['logeado']))
{

	require ("conexion.php");

	$seleccion=$_GET['dato'];

    $sent_select=$miconexion->prepare("SELECT id_editorial, nom_editorial, email from editorial WHERE id_editorial = :seleccion");
    $sent_select->bindParam(':seleccion',$seleccion);
    $sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);

?>
    <div class="main-container">
        <form id="form-reg" action="gestionBBDD/modificar-editorial3.php" method="post">
        <div class="inputs">
            <h2>Modificación Editoriales</h2>
            <input type="hidden" name="id" value="<?php echo $fila['id_editorial']?>" readonly>
            <label for="editorial">Editorial</label>
            <input type="text" name="editorial" value="<?php echo $fila['nom_editorial']?>">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" value="<?php echo $fila['email']?>">
            <input type="submit" name="submit" value="Actualizar">
            <a href="gestionBBDD/borrado-editoriales.php?dato=<?php echo $fila['id_editorial']; ?>" class="borrar"><i class="fas fa-trash-alt"></i> Eliminar Editorial</a>
        </div>
        </form>
    </div>
    <script src="js/confirmacion.js"></script>
<?php
}else{
  header('Location: error.php');
}
?>
