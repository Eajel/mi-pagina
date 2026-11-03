<?php
$extension = ".zip"; // aqui colocas la extencion de los archivos


if (file_exists("$file$extension")) //Comprobamos si existe el archivo
{
header("Location: $file$extension"); // si existe redireccionamo s hacia donde se encuentra el archivo
$archivo = fopen("$file.txt","r");
$contar = fread($archivo, 100);
$contarx = ($contar + 1);
fclose($archivo);
$archivox = fopen("$file.txt","w");
fwrite($archivox, $contarx, 100);
fclose($archivox);
}
else {
echo (" Aqui puedes poner un mensaje de error ");
}
?>

