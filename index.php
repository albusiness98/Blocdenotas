<?php

include_once("index.html");

$ar=fopen("archivo.txt","a") or die ("Error al crear");

$asu=$_REQUEST['asunto'];
$des=$_REQUEST['descripcion'];

fwrite($ar, $asu);
fwrite($ar, "\n");
fwrite($ar, $des);
fwrite($ar, "\n");
echo "Se creo correctamente el archivo de texto";

?>
