<?php
    require('../conexion.php');

    $id = $_POST['id'];
    $editorial = $_POST['editorial'];
    $email = $_POST['email'];


    $update_query = $miconexion->prepare("UPDATE editorial SET nom_editorial = :editorial, email = :email WHERE id_editorial = :id");
    $update_query->bindParam(':editorial', $editorial);
    $update_query->bindParam(':email', $email);
    $update_query->bindParam(':id', $id);
    $update_query->execute();

    if ($update_query){
        header("Location: ../admin.php?pagina=boton12");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
