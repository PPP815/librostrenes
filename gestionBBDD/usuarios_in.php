<?php
session_start();

if(isset($_SESSION['logeado']))
{
     require ('conexion.php');
    if(isset($_POST['submit'])){

            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $usuario = $_POST['usuario'];
            $user_type = $_POST['user_type'];
            $password = $_POST['password'];
            $password_repeat = $_POST['password_repeat'];

            $query = $miconexion->prepare("select usuario from usuarios where usuario=?");
            $query->bindParam(1,$usuario);
            $query->execute();
            $contar = $query->rowCount();


            $pass_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));

        if($contar == 0){
                if ($password == $password_repeat){
                    $insert_query = $miconexion->prepare("insert into usuarios (nombre, apellidos, usuario, user_type, password) values(:nombre, :apellidos, :usuario, :user_type, :password)");
                    $insert_query->bindParam(':nombre',$nombre);
                    $insert_query->bindParam(':apellidos',$apellidos);
                    $insert_query->bindParam(':usuario',$usuario);
                    $insert_query->bindParam(':user_type',$user_type);
                    $insert_query->bindParam(':password',$pass_cifrada);
                    $insert_query->execute();

                    header("Refresh: 5; URL=../admin.php?pagina=boton7");
                    echo "<p id='ok'>Registro dado de alta con éxito</p>";

                }else{

                    header("Refresh: 4; URL=../admin.php?pagina=boton7");
                    echo "<p id='error'>La contraseñas no coinciden. Repita el proceso.";
                }



        }else{

                    header("Refresh: 5; URL=../admin.php?pagina=boton7");
                    echo "<p id='error'>Ya existe un usuario con ese email</p>";
        }

    }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta Usuarios</title>
    <meta name="description" content="alta autores">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
        <div class="main-container">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form-reg">
                <div class="inputs">
                    <h2>Alta Usuario</h2>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required placeholder="Nombre usuario">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" required placeholder="Apellidos usuario">
                    <label for="usuario">Email Usuario</label>
                    <input type="email" name="usuario" required placeholder="Email usuario">
                    <input type="hidden" name="user_type" value='U'>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" required placeholder="Contraseña">
                    <label for="password_repeat">Repita Contraseña</label>
                    <input type="password" name="password_repeat" required placeholder="Repita contraseña">
                    <input type="submit" value="Dar de alta" name="submit">
                </div>
            </form>
        </div>
<?php
}else{
  header('Location: error.php');
}
?>
<div class="last"></div>
</body>

</html>
