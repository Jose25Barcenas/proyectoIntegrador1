<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario";
$enlace = mysqli_connect ($servidor , $usuario , $clave , $baseDeDatos);
if(!$enlace){
    die("no pudo conectarse a la base de datos" . mysqli_error());

}
echo "";
mysqli_close($enlace);
?>
