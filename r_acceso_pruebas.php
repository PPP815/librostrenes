<?php

    require ('conexion.php');

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];


    $query = $miconexion->prepare("Select * from usuarios where usuario = :usuario");
    $query->bindValue(':usuario', $usuario);
    $query->execute();
    $contar = $query->rowCount();
    $fila = $query->fetch(PDO::FETCH_ASSOC);


    if($contar != 0 and $fila['user_type'] == 'A'){

       session_start();
       $_SESSION['logeado']=$usuario;
       header('Location: pagina1.php');

    }elseif ($contar != 0 and $fila['user_type'] == 'U'){

        session_start();
        $_SESSION['logeado']=$usuario;
        header('Location: pagina2.php');
    }else{

        header("location: http://www.plataforma-n.com");
        echo "<p id='error'>Usuario o contraseña incorrectos";
    }






?>
