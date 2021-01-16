<?php
    require('../conexion.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];


    $update_query = $miconexion->prepare("UPDATE autores SET nombre = :nombre, apellido = :apellido WHERE id_autor = :id");
    $update_query->bindParam(':nombre', $nombre);
    $update_query->bindParam(':apellido', $apellido);
    $update_query->bindParam(':id', $id);
    $update_query->execute();

    if ($update_query){
        header("Location: ../admin.php?pagina=boton10");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
