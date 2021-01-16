<?php
    require("../conexion.php");

    $editorial = $_GET['dato'];

    $query = $miconexion->prepare("DELETE from editorial where id_editorial = :editorial");
    $query->bindParam(':editorial', $editorial);
    $query->execute();


    if ($query){
        header("Location: ../admin.php?pagina=boton12");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
