<?php
    require("../conexion.php");

    $usuario = $_GET['dato'];

    $query = $miconexion->prepare("DELETE from usuarios where id = :usuario");
    $query->bindParam(':usuario', $usuario);
    $query->execute();

    if ($query){
        header("Location: ../admin.php?pagina=boton8");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
