<html>

<head>

</head>

<body>

<form action="index.php" method="post">

Asunto:<br><input type="text" name="asunto"><br><br>

Descripcion: <br><textarea name="descripcion" rows="10" cols="30"></textarea>

<input type="submit" name="boton" value="Crear Archivo">

  




include_once("home.html");

$ar=fopen("archivo.txt","a") or die ("Error al crear");

$asu=$_REQUEST['asunto'];

$des=$_REQUEST['descripcion'];

fwrite($ar, $asu);

fwrite($ar, "\n");

fwrite($ar, $des);

fwrite($ar, "\n");



?>

</body>

</html>















