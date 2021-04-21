<?php
//Contar todos los libros
$query = $miconexion->prepare("select id_libro from libros");
$query->execute();
$total = $query->rowCount();
//Contar libros por temas
$query2 = $miconexion->prepare("select nom_tema from tema inner join libros on tema.id_tema=libros.id_tema where tema.nom_tema=?");
$query2->bindValue(1,'Coches Viajeros');
$query2->execute();
$coches_viajeros = $query2->rowCount();
//**********************************************
$query2->bindValue(1,'Empresas Ferroviarias');
$query2->execute();
$empresas = $query2->rowCount();
//**********************************************+
$query2->bindValue(1,'Ferrocarril');
$query2->execute();
$ferrocarril = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Infraestructuras');
$query2->execute();
$infra = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Lineas');
$query2->execute();
$lineas = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Locomotoras');
$query2->execute();
$loco = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Metros');
$query2->execute();
$metros = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Metros y Tranvías');
$query2->execute();
$metrotran = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Modelismo');
$query2->execute();
$model = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Narrativa sobre Ferrocarriles');
$query2->execute();
$narra = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Señalización');
$query2->execute();
$signs = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Tranvías');
$query2->execute();
$tran= $query2->rowCount();
//************************************************
$query2->bindValue(1,'Trenes');
$query2->execute();
$trenes = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Vagones');
$query2->execute();
$vagones = $query2->rowCount();
//************************************************
$query2->bindValue(1,'Varios');
$query2->execute();
$varios = $query2->rowCount();
//************************************************
//ESTADÍSTICAS SOBRE LOS DVD Y BLU-RAY
$query_dvd = $miconexion->prepare("SELECT id FROM dvdybluray");
$query_dvd->execute();
$num_films = $query_dvd->rowCount();

?>
