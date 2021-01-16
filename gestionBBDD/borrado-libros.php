<?php
    require("../conexion.php");

    $libro = $_GET['dato'];

    $query = $miconexion->prepare("DELETE from libros where id_libro = :libro");
    $query->bindParam(':libro', $libro);
    $query->execute();


    if ($query){
        header("Location: ../admin.php?pagina=boton4");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
