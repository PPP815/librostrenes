<?php
session_start();

if(isset($_SESSION['logeado']))
{

  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  $recibe_pagina=$_GET['pagina'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración del Sitio</title>
    <script src="https://kit.fontawesome.com/973802f786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin-styles.css">
</head>

<body>
    <header class="header-admin">
        <h3><a href="admin.php">Panel de Administración</a></h3>
        <div class="controles">
            <p><span>Hola, </span><?php echo $_COOKIE['control'];?> | </p>
            <p><a href="cerrar.php" class="logOut"> Cerrar Sesión</a></p>
        </div>
    </header>
    <main class="main-admin">
        <div class="main-left">
            <section class="page-admin">
                <h2>Usuarios</h2>
                    <ul>
                       <li><p>Acceso sólo para el administrador</p></li>
                    </ul>
            </section>
            <section class="page-admin">
                <h2>Autores</h2>
                    <ul>
                        <li><a href="?pagina=boton1"><i class="fas fa-plus-circle"></i> Añadir</a></li>

                    </ul>
            </section>
            <section class="page-admin">
                <h2>Editoriales</h2>
                    <ul>
                        <li><a href="?pagina=boton2"><i class="fas fa-plus-circle"></i> Añadir</a></li>

                    </ul>
            </section>
            <section class="page-admin">
                <h2>Libros</h2>
                    <ul>
                        <li><a href="?pagina=boton3"><i class="fas fa-plus-circle"></i> Añadir</a></li>

                    </ul>
            </section>
        </div>
        <div class="main-right">

        <?php
                switch ($recibe_pagina){
                    case "boton1":
                    include ("gestionBBDD/autores_in.php");
                    break;
                case "boton2":
                    include ("gestionBBDD/editorial_in.php");
                    break;
                case "boton3":
                    include ("gestionBBDD/libros_in.php");
                    break;
                default:
                    include ("gestionBBDD/vacio.php");
                }

                 ?>


        </div>
<?php
}else{
  header('Location: error.php');
}
?>

</body>
</html>
