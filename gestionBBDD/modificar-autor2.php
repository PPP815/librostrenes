<?php
session_start();

if(isset($_SESSION['logeado']))
{
	require ("conexion.php");

	$seleccion=$_GET['dato'];

    $sent_select=$miconexion->prepare("SELECT id_autor, nombre, apellido from autores WHERE id_autor = :seleccion");
    $sent_select->bindParam(':seleccion',$seleccion);
    $sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información del Autor</title>
    <meta name="description" content="Modificar Discos 2">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="main-container">
        <form id="form-reg" action="gestionBBDD/modificar-autor3.php" method="post">
        <div class="inputs">
            <h2>Modificación Autores</h2>
            <input type="hidden" name="id" value="<?php echo $fila['id_autor']?>" readonly>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $fila['nombre']?>">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="<?php echo $fila['apellido']?>">
            <input type="submit" name="submit" value="Actualizar">
            <a href="gestionBBDD/borrado-autores.php?dato=<?php echo $fila['id_autor']; ?>" class="borrar"><i class="fas fa-trash-alt"></i> Eliminar Autor</a>
        </div>
        </form>
    </div>
    <script src="js/confirmacion.js"></script>
<?php
}else{
  header('Location: error.php');
}
?>
</body>

</html>
