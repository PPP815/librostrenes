<?php
session_start();

if(isset($_SESSION['logeado']))
{

	require ("conexion.php");

	$seleccion=$_GET['dato'];

    $sent_select=$miconexion->prepare("SELECT dvb.id, dvb.titulo, dvb.agno, dvb.formato, dvb.id_tema, dvb.id_idioma, dvb.ruta, dvb.tipo, dvb.tamano FROM dvdybluray as dvb WHERE dvb.id = :seleccion");
    $sent_select->bindParam(':seleccion',$seleccion);
    $sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);
   
    //selección de los idiomas
    $query = $miconexion->prepare("select id_idioma, nom_idioma from idioma order by nom_idioma ASC");
    $query->execute();
    //Selección del tema
    $query2 = $miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
    $query2->execute();

?>
    <div class="main-container">
        <div class="book__container">
            <form id="form-reg" action="gestionBBDD/modificar-dvd3.php" method="post" enctype="multipart/form-data">
            <div class="inputs">
                <h2>Modificación Película</h2>
                <input type="hidden" name="id" value="<?php echo $fila['id']?>" readonly>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" value="<?php echo $fila['titulo']?>">
                <label for="agno">Año</label>
                <input type="text" name="agno" value="<?php echo $fila['agno']?>">
                <label for="formato">Formato</label>
                <input type="text" name="formato" value="<?php echo mb_strtoupper($fila['formato'])?>">
                <label for="idioma">Idioma</label>
                <select name="idioma" required>
                <option value="" selected disabled>Elija Idioma</option>
                <?php

                    while($row = $query->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                        <option value="<?php echo $row['id_idioma']?>"><?php echo $row['nom_idioma']?></option>
                        <?php

                    }
                ?>
                </select>

                <label for="tema">Tema</label>
                <select name="tema" required>
                <option value="" selected disabled>Elija Tema</option>
                <?php

                    while($row = $query2->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                        <option value="<?php echo $row['id_tema']?>"><?php echo $row['nom_tema']?></option>
                        <?php

                    }
                ?>
                </select>

                <input type="file" name="nuevafoto">
                <input type="submit" name="submit" value="Actualizar">
                <a href="#.php?dato=<?php echo $fila['id']; ?>" class="borrar"><i class="fas fa-trash-alt"></i> Eliminar Película</a>
            </div>
            </form>
            <div class="img__container">
                <img src="<?php echo $fila['ruta'];?>" alt="carátula">
            </div>
        </div>
    </div>
    <script src="js/confirmacion.js"></script>
<?php
}else{
  header('Location: error.php');
}
?>
