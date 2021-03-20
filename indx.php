<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 align="center">Generador de Directorios y Archivos</h1> <br><br>
<form method="POST" action="generador.php">
<table border="1" align="center">
<tr>
        <td>Nombre del Archivo</td>
        <td><input type="text" name="file"></td>
    </tr>
    <tr>
        <td>Texto del Archivo:</td> 
        <td><input type="text" id="textarea" name="words" placeholder=""></td>
    </tr>
    <tr>
        <td>Carpeta:</td> 
        <td><input type="text" name="directory"></td>
    </tr>
</table>
<table border="1" align="center">
    <tr>
       <td><input type="submit" class="btn" name="generate" value="Aceptar"></td>
       <td><input type="reset" class="btn" name="clean" value="Borrar"></td>
    
    </tr>
</table>
    
</form>
</body>
</html>
