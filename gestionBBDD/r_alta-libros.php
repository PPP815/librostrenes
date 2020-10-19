<?php
    require ('../conexion.php');

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
    $nombre = "../fotos_subidas/" . $nombre;
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $temporal = $_FILES['imagen']['tmp_name'];


    $query = $miconexion->prepare("select titulo from libros where titulo=?");
    $query->bindParam(1,$titulo);
    $query->execute();

    $contar = $query->rowCount();

    if($contar==0){


    if(($tipo=='image/jpeg' or $tipo=='image/gif' or $tipo=='image/png') and $tamano<1000000 and $tamano!=0)
	   {
		  move_uploaded_file($temporal,$nombre);
          echo "<p id='ok'>Imagen dada de alta con éxito</p>";

         $nombreFinal = substr($nombre,3);

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

         echo "<p id='ok'>Registro dado de alta con éxito</p>";

        }
	   else
	   {
		  $nombre="";
          echo "<p id='error'>La imagen debe ser de tipo .jpg/jpeg/gif/png y no superior a 1M</p>";

	   }



}else{

    echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta Alta Libros</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
 <div class="respuesta">
  <a href="alta-libros.php">Volver a Alta de Libros</a>
  </div>
</body>
</html>

