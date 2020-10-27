<?php

	require ("../conexion.php");

	$seleccion=$_GET['info'];

	$sent_select=$miconexion->query("select interpretes.id_interprete,
    interpretes.solista_grupo,
    discos.id,
    discos.titulo,
    discos.fecha,
    discos.discografica,
    discos.genero,
    discos.formato,
    discos.comentarios,
    discos.in_app
    from interpretes inner join discos
    on interpretes.id_interprete=discos.id_interprete
    where discos.id='$seleccion'");
	$sent_select->execute();

    $fila = $sent_select->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información del Disco</title>
    <meta name="description" content="Modificar Discos 2">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <p class="enlace"><a href="../index.php">Página Index</a></p>
    <div class="container">
        <form id="form-reg" action="modificar-disco-3.php" method="post">
            <h1>Modificación de CDs</h1>
            <input type="hidden" name="id" value="<?php echo $fila['id']?>">
            <label for="interprete">Solista / Grupo</label>
            <input type="text" name="interp" value="<?php echo $fila['solista_grupo']?>" readonly>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titel" value="<?php echo $fila['titulo']?>">
            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" id="fechaform" value="<?php echo $fila['fecha']?>">
            <label for="discografica">Discografica</label>
            <input type="text" id="auto" name="discografica" id="discografica" value="<?php echo $fila['discografica']?>">
            <label for="genero">Género</label>
            <input type="text" name="genero" id="genero" value="<?php echo $fila['genero']?>">
            <label for="formato">Formato</label>
            <input type="text" name="formato" id="formato" value="<?php echo $fila['formato']?>">
            <label for="comentarios">Comentarios</label>
            <input type="text" name="comentarios" id="comentarios" value="<?php echo $fila['comentarios']?>">
            <label for="inapp">In App</label>
            <input type="text" name="inapp" id="inapp" value="<?php echo $fila['in_app']?>">
            <input type="submit" name="submit" value="Actualizar">

        </form>
    </div>

</body>

</html>
