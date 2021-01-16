<?php
    require("../conexion.php");

    $autor = $_GET['dato'];

    $query = $miconexion->prepare("DELETE from autores where id_autor = :autor");
    $query->bindParam(':autor', $autor);
    $query->execute();


    if ($query){
        header("Location: ../admin.php?pagina=boton10");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
