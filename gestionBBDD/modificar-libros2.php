<?php
session_start();

if(isset($_SESSION['logeado']))
{

	require ("conexion.php");

	$seleccion=$_GET['dato'];

    $sent_select=$miconexion->prepare("SELECT libros.id_libro,libros.titulo,libros.anno,libros.num_paginas,libros.isbn,libros.ruta,libros.tipo,libros.tamano FROM libros WHERE libros.id_libro = :seleccion" );
    $sent_select->bindParam(':seleccion',$seleccion);
    $sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);

    $query = $miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
    $query->execute();

?>
    <div class="main-container">
        <div class="book__container">
            <form id="form-reg" action="gestionBBDD/modificar-libros3.php" method="post" enctype="multipart/form-data">
            <div class="inputs">
                <h2>Modificación Libro</h2>
                <input type="hidden" name="id" value="<?php echo $fila['id_libro']?>" readonly>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" value="<?php echo $fila['titulo']?>">
                <label for="numpag">Nº Páginas</label>
                <input type="text" name="numpag" value="<?php echo $fila['num_paginas']?>">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" value="<?php echo $fila['isbn']?>">
                <label for="anno">Año</label>
                <input type="text" name="anno" value="<?php echo $fila['anno']?>">
                <label for="tema">Tema</label>
                <select name="tema" required>
                <option value="" selected disabled>Elija Tema</option>
                <?php

                    while($row = $query->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                        <option value="<?php echo $row['id_tema']?>"><?php echo $row['nom_tema']?></option>
                        <?php

                    }
                ?>
                </select>

                <input type="file" name="nuevafoto">
                <input type="submit" name="submit" value="Actualizar">
                <a href="gestionBBDD/borrado-libros.php?dato=<?php echo $fila['id_libro']; ?>" class="borrar"><i class="fas fa-trash-alt"></i> Eliminar Libro</a>
            </div>
            </form>
            <div class="img__container">
                <img src="<?php echo $fila['ruta'];?>" alt="foto_libro">
            </div>
        </div>
    </div>
    <script src="js/confirmacion.js"></script>
<?php
}else{
  header('Location: error.php');
}
?>
