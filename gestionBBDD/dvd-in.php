<?php
session_start();

if(isset($_SESSION['logeado']))
{
    include ('conexion.php');
    //Selección de tema
    $query3 = $miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
    $query3->execute();
    //Selección de idioma
    $query4 = $miconexion->prepare("select id_idioma, nom_idioma from idioma order by nom_idioma ASC");
    $query4->execute();
   
   if (isset($_POST['submit'])){
    //Recogida de la información del formulario
    $titulo = $_POST['titulo'];
    $anno = $_POST['anno'];
    $formato =$_POST['formato'];
    $tema = $_POST['tema'];
    $idioma = $_POST['idioma'];
   

    //Recogida de la información relativa a la imagenes
    $nombre = $_FILES['imagen']['name'];
    $nombre = "fotos_subidas/" . $nombre;
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $temporal = $_FILES['imagen']['tmp_name'];


    $query = $miconexion->prepare("select titulo from dvdybluray where titulo=?");
    $query->bindParam(1,$titulo);
    $query->execute();

    $contar = $query->rowCount();

    if($contar==0){


    if(($tipo=='image/jpeg' or $tipo=='image/jpg' or $tipo=='image/gif' or $tipo=='image/png') and $tamano<1000000 or $tamano==null)#null para poder no incluir img
	   {
		  move_uploaded_file($temporal,$nombre);
          echo "<p id='ok'>Imagen dada de alta con éxito</p>";

         $nombreFinal = $nombre;

         $insert_query = $miconexion->prepare("insert into dvdybluray (titulo, agno, formato, id_tema, id_idioma, ruta, tipo, tamano) values(:titulo, :agno, :formato, :id_tema, :id_idioma, :ruta, :tipo, :tamano)");
         $insert_query->bindParam(':titulo',$titulo);
         $insert_query->bindParam(':agno',$anno);
         $insert_query->bindParam(':id_tema',$tema);
         $insert_query->bindParam(':formato',$formato);
         $insert_query->bindParam(':id_idioma',$idioma);
         $insert_query->bindParam(':ruta',$nombreFinal);
         $insert_query->bindParam(':tipo',$tipo);
         $insert_query->bindParam(':tamano',$tamano);
         $insert_query->execute();

         header("Refresh: 1; URL=../admin.php?pagina=boton14");
         echo "<p id='ok'>Registro dado de alta con éxito</p>";

        }
	   else
	   {
		  $nombre="";
          echo "<p id='error'>La imagen debe ser de tipo .jpg/jpeg/gif/png y no superior a 1M</p>";

	   }


}else{

    header("Refresh: 1; URL=../admin.php?pagina=boton14");
    echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
}
}
?>

    <div class="main-container">
        <form id="form-reg" action="<?php htmlspecialchars($_POST['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <div class="inputs">
            <h2>Alta DVD o Blu-ray</h2>
            <input type="hidden" name="idlibro">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titel" required placeholder="Título">
            <label for="anno">Año</label>
            <input type="text" name="anno" id="anno" required placeholder="Año">
            <label for="formato">Formato</label>
            <select name="formato" id="formato" required autofocus>
                <option value="" selected>Seleccionar</option>
                <option value="dvd">DVD</option>
                <option value="blu-ray">BLU-RAY</option>
                <option value="cd-rom">CD-ROM</option>
                <option value="dvd-rom">DVD-ROM</option>
            </select>
            
            <label for="tema">Tema</label>
            <select name="tema" id="tema" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row3 = $query3->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row3['id_tema']?>"><?php echo $row3['nom_tema']?></option>
                <?php
                }
                ?>
            </select>
            <label for="idioma">Idioma</label>
            <select name="idioma" id="idioma" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row4 = $query4->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row4['id_idioma']?>"><?php echo $row4['nom_idioma']?></option>
                <?php
                }
                ?>
            </select>
            
            <input type="file" name="imagen" id="file">
            <input type="submit" name="submit" value="Registrar" name="submit">
            </div>
        </form>
    </div>
<?php
}else{
  header('Location: error.php');
}
?>

