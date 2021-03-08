<?php
    if(isset($_POST['submit'])){

        require('conexion.php');
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $contador = 0;
        $query = $miconexion->prepare("Select * from usuarios where usuario = :usuario");
        $query->bindValue(':usuario', $usuario);
        $query->execute();

        while($fila = $query->fetch(PDO::FETCH_ASSOC)){

            if (password_verify($password, $fila['password'])){

                $contador++;
                setcookie('control', $fila['nombre'] . ' ' .  $fila['apellidos'], time() + 31104000);
            }

        }

        if($contador > 0){

            session_start();

            $_SESSION['logeado']=$usuario;



            header('Location: admin.php');

        }else{

            header("Refresh: 4; URL=login.php");
            echo "<p id='error'>Usuario o contraseña incorrectos";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/admin-styles.css">
</head>
<body>

    <div class="main__container-login">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form-reg">
            <div class="inputs">
                <h2>Login</h2>
                <label for="usuario">Usuario</label>
                <input type="email" name="usuario" required placeholder="Escriba su email">
                <label for="password">Contraseña</label>
                <input type="password" name="password" required placeholder="Contraseña (min. 6 caracteres)" minlength=6>
                <input type="submit" value="Entrar" name="submit">
            </div>
        </form>
    </div>
    <div class="last"></div>
</body>
</html>
