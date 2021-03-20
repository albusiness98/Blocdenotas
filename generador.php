<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Directorios y Archivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generador de Directorios y Archivos</h1>
    <?php
    
    if (isset($_POST['generate']) == 'Aceptar'){

    // variables
    $folder = $_POST['directory'];
    $validate_name_file = $_POST['file'];
    $file = $_POST['file']. ".txt";
    $words = $_POST['words'];
    $route = ($folder . "/" . $file);
    $show_files = scandir("../generador de directorios y archivos" , 1);
    
    


    if (!empty($route) && !empty($validate_name_file)) {
    //Creacion de la carpeta
        if (!file_exists($folder)) {
            mkdir($folder);
            echo ("<h3>Carpeta creada exitosamente</h3>");
            echo ("<br><h3>Nombre de la Carpeta creada: </h3>" .$folder);
        } else {
            echo ("<h3>Carpeta ya existe</h3>");
            echo ("<br><h3>Nombre de la Carpeta: </h3>" .$folder);
        }

    //Cambio de directorio
    chdir($folder);
    


    //Creacion del archivo
        if (!file_exists($file)) {
            $fp = fopen($file, "w");
            echo ("<br><h3>Nombre del Archivo creado: </h3>" .$file);

        } else {
            echo("<br><h3> El Archivo a crear ya existe</h3>");
            echo("<h3>El contenido del archivo ha sido cambiado</h3>");
            $fp = fopen($file, "w+");
        }

        fwrite($fp, $words);
 }else {
        echo("<h3>Por favor rellene todos los campos</h3>");
    }

    echo ("<a href=dwl.php?file=".$file."&folder=".$folder."><button>Descargar</button></a>");
    print_r($show_files); } 
    ?>

    <div id="regresar">
    <a href="index.php"><button>Regresar</button></a>
    </div>
</body>
</html>
