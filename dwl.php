<?php
$file=basename($_GET['file']);
$folder_file =basename($_GET['folder']);

if (!empty($file)) {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: text/plain");
    readfile($folder_file."/".$file);
} else {
    echo("FATAL ERROR: NO EXISTE EL ARCHIVO");
}




exit;

?>