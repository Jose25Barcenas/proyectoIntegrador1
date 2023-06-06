<?php
include("conexion.php");
if(isset($_POST ['Iniciar sesión'])){
    if(strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1){
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO login(Correo, Contraseña) VALUES ('$email', '$contraseña')";
        $resultado = mysqli_query($enlace, $consulta);
    }
}
?>