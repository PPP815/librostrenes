<?php
    require('../conexion.php');
    //Recogida de la información del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $paginas = $_POST['numpag'];
    $isbn = $_POST['isbn'];
    $anno = $_POST['anno'];
    $id_tema = $_POST['tema'];


    $query = $miconexion->query("select titulo,num_paginas,isbn,anno,ruta,tipo,tamano,id_tema from libros where id_libro = '$id'");
    $query->execute();
    $rgto = $query->fetch(PDO::FETCH_ASSOC);

    //Para seleccionar imagen en caso de que ya haya imagen. Recogemos las variables y las asignamos a una variable para trabajar con ella.
    if(isset($_FILES['nuevafoto']) and ($_FILES['nuevafoto']['size']) > 0)
    {
        $nombre=$_FILES['nuevafoto']['name'];
        $nombre='../fotos_subidas/'.$nombre;
        $tipo=$_FILES['nuevafoto']['type'];
        $tamano=$_FILES['nuevafoto']['size'];
        $temporal=$_FILES['nuevafoto']['tmp_name'];
        $existe=1;
    }
    else
    {   //para actualizar todo excepto la imagen (dejando el input file sin seleccionar nada)
        $existe=0;
        $update_query = $miconexion->prepare("UPDATE libros SET titulo = :titulo, num_paginas = :num_paginas, isbn = :isbn, anno = :anno, id_tema = :id_tema WHERE id_libro = :id");
        $update_query->bindParam(':titulo', $titulo);
        $update_query->bindParam(':num_paginas', $paginas);
        $update_query->bindParam(':isbn', $isbn);
        $update_query->bindParam(':anno', $anno);
        $update_query->bindParam(':id_tema', $id_tema);
        $update_query->bindParam(':id', $id);
        $update_query->execute();
        header("Location: ../admin.php?pagina=boton4");

    }
    //si no hay foto subimos los archivos y actualizamos
    if($existe==1 and ($rgto['tamano']==0))
    {
        move_uploaded_file($temporal,$nombre);

        if($tipo=='image/jpeg' or $tipo=='image/gif' or $tipo=='image/png' and $tamano<100000 )
        {
            $update_query = $miconexion->prepare("UPDATE libros SET titulo = :titulo, num_paginas = :num_paginas, isbn = :isbn, anno = :anno, ruta = :ruta, tipo = :tipo, tamano = :tamano, id_tema = :id_tema WHERE id_libro = :id");
            $update_query->bindParam(':titulo', $titulo);
            $update_query->bindParam(':num_paginas', $paginas);
            $update_query->bindParam(':isbn', $isbn);
            $update_query->bindParam(':anno', $anno);
            $update_query->bindParam(':ruta', $nombre);
            $update_query->bindParam(':tipo', $tipo);
            $update_query->bindParam(':tamano', $tamano);
            $update_query->bindParam(':id_tema', $id_tema);
            $update_query->bindParam(':id', $id);
            $update_query->execute();
            header("Location: ../admin.php?pagina=boton4");
        }

    }
    //si existe borramos la que hay, subimos y actualizamos
    if($existe==1 and ($rgto['tamano']<>0))
    {
        unlink($rgto['ruta']);

        if($tipo=='image/jpeg' or $tipo=='image/gif' or $tipo=='image/png' and $tamano<100000)
        {

            move_uploaded_file($temporal,$nombre);
            $update_query = $miconexion->prepare("UPDATE libros SET titulo = :titulo, num_paginas = :num_paginas, isbn = :isbn, anno = :anno, ruta = :ruta, tipo = :tipo, tamano = :tamano, id_tema = :id_tema WHERE id_libro = :id");
            $update_query->bindParam(':titulo', $titulo);
            $update_query->bindParam(':num_paginas', $paginas);
            $update_query->bindParam(':isbn', $isbn);
            $update_query->bindParam(':anno', $anno);
            $update_query->bindParam(':ruta', $nombre);
            $update_query->bindParam(':tipo', $tipo);
            $update_query->bindParam(':tamano', $tamano);
            $update_query->bindParam(':id_tema', $id_tema);
            $update_query->bindParam(':id', $id);
            $update_query->execute();
            header("Location: ../admin.php?pagina=boton4");

        }
    }

?>
