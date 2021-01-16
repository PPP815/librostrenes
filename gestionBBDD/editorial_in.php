<?php
session_start();

if(isset($_SESSION['logeado']))
{
    if(isset($_POST['submit'])){
        require ('conexion.php');

        $editorial = $_POST['edit'];
        $email = $_POST['email'];

        //Asi podemos meter nombres con apostrofes y a la vez evitar inyección sql
        $query = $miconexion->prepare("select nom_editorial from editorial where nom_editorial=?");
        $query->bindParam(1,$editorial);
        $query->execute();
        $contar = $query->rowCount();

        if($contar==0){

             $insert_query = $miconexion->prepare("insert into editorial (nom_editorial, email) values(:nom_editorial, :email)");
             $insert_query->bindParam(':nom_editorial',$editorial);
             $insert_query->bindParam(':email',$email);
             $insert_query->execute();

             header("Refresh: 5; URL=../admin.php?pagina=boton2");
             echo "<p id='ok'>Registro dado de alta con éxito</p>";

        }else{

            header("Refresh: 5; URL=../admin.php?pagina=boton2");
            echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
        }

    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta Editorial</title>
    <meta name="description" content="alta autores">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

        <div class="main-container">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form-reg">
                <div class="inputs">
                    <h2>Alta Editorial</h2>
                    <label for="edit">Editorial</label>
                    <input type="text" id="edit" name="edit" required placeholder="Nombre de la Editorial">
                    <label for="emailIn">Email</label>
                    <input type="email" id="emailIn" name="email" required placeholder="Correo Electrónico">
                    <input type="submit" value="Dar de alta" name="submit">
                </div>
            </form>
        </div>
<?php
}else{
  header('Location: error.php');
}
?>
</body>

</html>
