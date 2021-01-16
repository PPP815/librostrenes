<?php
/* 1 -> OBTENIENDO EL CONTENIDO */

$end_point = 'https://api.openweathermap.org/data/2.5/weather?q=bilbao,spaink&APPID=92fecfa60dbb5fa73b44e088ac16b6d6';

$json_file = file_get_contents($end_point);
$vars = json_decode( $json_file );
/* 2 -> ASIGNANDO LOS VALORES */
$cond = $vars->main;
$temp_c = $cond->temp - 273.15;
$temp_f = 1.8 * ( $cond->temp - 273.15 ) + 32;
$name = $vars->name;
?>
<!-- 3 -> IMPRIMIR RESULTADOS-->
<p><?php echo round( $temp_c ) . "ºc"?></p>
