<?php
session_start();

if(isset($_SESSION['logeado']))
{
    if(isset($_POST['submit'])){
            require ('conexion.php');
            $nombre = $_POST['nom_aut'];
            $apellido = $_POST['ape_aut'];

            $query = $miconexion->prepare("select nombre, apellido from autores where nombre=? and apellido=?");
            $query->bindParam(1,$nombre);
            $query->bindParam(2,$apellido);
            $query->execute();
            $contar = $query->rowCount();

        if($contar==0){

                $insert_query = $miconexion->prepare("insert into autores (nombre, apellido) values(:nombre, :apellido)");
                $insert_query->bindParam(':nombre',$nombre);
                $insert_query->bindParam(':apellido',$apellido);
                $insert_query->execute();


                header("Refresh: 5; URL=../admin.php?pagina=boton1");
                echo "<p id='ok'>Registro dado de alta con éxito</p>";

        }else{

                header("Refresh: 5; URL=../admin.php?pagina=boton1");
                echo "<p id='error'>El registro ya éxiste en la BBDD</p>";
        }

    }


?>
        <div class="main-container">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form-reg">
                <div class="inputs">
                    <h2>Alta Autores</h2>
                    <label for="nom_aut">Nombre</label>
                    <input type="text" id="nom_aut" name="nom_aut" required placeholder="Nombre del autor">
                    <label for="nom_aut">Apellidos</label>
                    <input type="text" id="ape_aut" name="ape_aut" required placeholder="Apellidos del autor">
                    <input type="submit" value="Dar de alta" name="submit">
                </div>
            </form>
        </div>

<?php
}else{
  header('Location: error.php');
}
?>
