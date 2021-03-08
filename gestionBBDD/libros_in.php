<?php
session_start();

if(isset($_SESSION['logeado']))
{
    include ('conexion.php');
    //Selección de autores
    $query = $miconexion->prepare("select id_autor, nombre, apellido from autores order by apellido ASC");
    $query->execute();
    //Selección de pais
    $query2 = $miconexion->prepare("select id_pais, nom_pais from pais order by nom_pais ASC");
    $query2->execute();
    //Selección de tema
    $query3 = $miconexion->prepare("select id_tema, nom_tema from tema order by nom_tema ASC");
    $query3->execute();
    //Selección de idioma
    $query4 = $miconexion->prepare("select id_idioma, nom_idioma from idioma order by nom_idioma ASC");
    $query4->execute();
    //Selección de editorial
    $query5 = $miconexion->prepare("select id_editorial, nom_editorial from editorial order by nom_editorial ASC");
    $query5->execute();

   if (isset($_POST['submit'])){
    //Recogida de la información del formulario
    $titulo = $_POST['titulo'];
    $paginas = $_POST['nump'];
    $isbn = $_POST['isbn'];
    $anno = $_POST['anno'];
    $autor = $_POST['autor'];
    $pais = $_POST['pais'];
    $tema = $_POST['tema'];
    $idioma = $_POST['idioma'];
    $editorial= $_POST['editorial'];

    //Recogida de la información relativa a la imagenes
    $nombre = $_FILES['imagen']['name'];
    $nombre = "fotos_subidas/" . $nombre;
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $temporal = $_FILES['imagen']['tmp_name'];


    $query = $miconexion->prepare("select titulo from libros where titulo=?");
    $query->bindParam(1,$titulo);
    $query->execute();

    $contar = $query->rowCount();

    if($contar==0){


    if(($tipo=='image/jpeg' or $tipo=='image/gif' or $tipo=='image/png') and $tamano<1000000 or $tamano==null)#null para poder no incluir img
	   {
		  move_uploaded_file($temporal,$nombre);
          echo "<p id='ok'>Imagen dada de alta con éxito</p>";

         $nombreFinal = $nombre;

         $insert_query = $miconexion->prepare("insert into libros (titulo, num_paginas, isbn, anno, ruta, tipo, tamano, id_autor, id_pais, id_tema, id_idioma, id_editorial) values(:titulo, :num_paginas, :isbn, :anno, :ruta, :tipo, :tamano, :id_autor, :id_pais, :id_tema, :id_idioma, :id_editorial)");
         $insert_query->bindParam(':titulo',$titulo);
         $insert_query->bindParam(':num_paginas',$paginas);
         $insert_query->bindParam(':isbn',$isbn);
         $insert_query->bindParam(':anno',$anno);
         $insert_query->bindParam(':ruta',$nombreFinal);
         $insert_query->bindParam(':tipo',$tipo);
         $insert_query->bindParam(':tamano',$tamano);
         $insert_query->bindParam(':id_autor',$autor);
         $insert_query->bindParam(':id_pais',$pais);
         $insert_query->bindParam(':id_tema',$tema);
         $insert_query->bindParam(':id_idioma',$idioma);
         $insert_query->bindParam(':id_editorial',$editorial);
         $insert_query->execute();

         header("Refresh: 1; URL=../admin.php?pagina=boton3");
         echo "<p id='ok'>Registro dado de alta con éxito</p>";

        }
	   else
	   {
		  $nombre="";
          echo "<p id='error'>La imagen debe ser de tipo .jpg/jpeg/gif/png y no superior a 1M</p>";

	   }


}else{

    header("Refresh: 1; URL=../admin.php?pagina=boton3");
    echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
}
}
?>

    <div class="main-container">
        <form id="form-reg" action="<?php htmlspecialchars($_POST['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <div class="inputs">
            <h2>Alta de Libros</h2>
            <input type="hidden" name="idlibro">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titel" required placeholder="Título">
            <label for="nump">Nº Páginas</label>
            <input type="text" name="nump" id="nump" required placeholder="Nº páginas">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required placeholder="ISBN">
            <label for="anno">Año</label>
            <input type="text" name="anno" id="anno" required placeholder="Año">
            <label for="autor">Autor</label>
            <select name="autor" id="autor" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row['id_autor']?>"><?php echo $row['nombre'] .' ' . $row['apellido']?></option>
                <?php
                }
                ?>
            </select>
            <label for="pais">País</label>
            <select name="pais" id="pais" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row2 = $query2->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row2['id_pais']?>"><?php echo $row2['nom_pais']?></option>
                <?php
                }
                ?>
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
            <label for="editorial">Editorial</label>
            <select name="editorial" id="editorial" required autofocus>
                <option value="" selected>Seleccionar</option>
                <?php
                while ($row5 = $query5->fetch(PDO::FETCH_ASSOC)){
                ?>

                <option value="<?php echo $row5['id_editorial']?>"><?php echo $row5['nom_editorial']?></option>
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

