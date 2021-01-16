<?php

try{
    //ESTABLECEMOS LA CONEXIÓN Y LOS PARAMETROS EN CASO DE ERROR
    $miconexion = new PDO('mysql:host=localhost;dbname=librostrenes','root','');
    $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //ESTABLECEMOS EL JUEGO DE CARACTERES
    $miconexion->exec('SET CHARACTER SET UTF8');

    //EN CASO DE ERROR MOSTRAMOS MENSAJE
}catch(Exception $e){
    die('Error: ' . $e->GetMessage());
    echo "Linea del error: " . $e->getLine();

}

?>
