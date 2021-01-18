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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
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
                       <li><a href="?pagina=boton7"><i class="fas fa-plus-circle"></i> Añadir</a></li>
                       <li><a href="?pagina=boton8""><i class="fas fa-pen"></i> Editar</a></li>
                    </ul>
            </section>
            <section class="page-admin">
                <h2>Autores</h2>
                    <ul>
                        <li><a href="?pagina=boton1"><i class="fas fa-plus-circle"></i> Añadir</a></li>
                        <li><a href="?pagina=boton10"><i class="fas fa-pen"></i> Editar</a></li>
                    </ul>
            </section>
            <section class="page-admin">
                <h2>Editoriales</h2>
                    <ul>
                        <li><a href="?pagina=boton2"><i class="fas fa-plus-circle"></i> Añadir</a></li>
                        <li><a href="?pagina=boton12"><i class="fas fa-pen"></i> Editar</a></li>
                    </ul>
            </section>
            <section class="page-admin">
                <h2>Libros</h2>
                    <ul>
                        <li><a href="?pagina=boton3"><i class="fas fa-plus-circle"></i> Añadir</a></li>
                        <li><a href="?pagina=boton4"><i class="fas fa-pen"></i> Editar</a></li>
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
                case "boton4":
                    include ("gestionBBDD/modificar-libros1.php");
                    break;
                case "boton5":
                    include ("gestionBBDD/autores_in.php");
                    break;
                case "boton6":
                    include ("gestionBBDD/modificar-libros2.php");
                    break;
                case "boton7":
                    include ("gestionBBDD/usuarios_in.php");
                    break;
                case "boton8":
                    include ("gestionBBDD/modificar-usuario1.php");
                    break;
                case "boton9":
                    include ("gestionBBDD/modificar-usuario2.php");
                    break;
                case "boton10":
                    include ("gestionBBDD/modificar-autor1.php");
                    break;
                case "boton11":
                    include ("gestionBBDD/modificar-autor2.php");
                    break;
                case "boton12":
                    include ("gestionBBDD/modificar-editorial1.php");
                    break;
                case "boton13":
                    include ("gestionBBDD/modificar-editorial2.php");
                    break;
                default:
                    include ("gestionBBDD/vacio.php");
                }

                 ?>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
        $(document).ready(function() {
            $('#coleccion').DataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            } );
        } );
        </script>
<?php
}else{
  header('Location: error.php');
}
?>

</body>
</html>
