<?php
    require('../conexion.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $userType = $_POST['userType'];
    $password = $_POST['newContra'];
    $pass_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));

    $update_query = $miconexion->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, usuario = :usuario, user_type = :user_type,
    password = :password WHERE id = :id");
    $update_query->bindParam(':nombre', $nombre);
    $update_query->bindParam(':apellidos', $apellidos);
    $update_query->bindParam(':usuario', $usuario);
    $update_query->bindParam(':user_type', $userType);
    $update_query->bindParam(':password', $pass_cifrada);
    $update_query->bindParam(':id', $id);
    $update_query->execute();

    if ($update_query){
        header("Location: ../admin.php?pagina=boton8");
    }else{
        echo ("<script>alert('No se pudo eliminar'); window.history.go(-1);</script>");
    }


?>
