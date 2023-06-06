<?php
include("conexion.php");
if(isset($_POST ['Iniciar sesión'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1){
        $name = trim($_POST['name']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO dengue(Nombre_Completo,Telefono,Correo, Contraseña) VALUES ('$name', 't$elefono','$email', '$contraseña')";
        $resultado = mysqli_query($enlace, $consulta);
        }
    }

?>