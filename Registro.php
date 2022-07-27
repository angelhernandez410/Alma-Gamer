<?php
$host="localhost";
$usuario="root";
$contraseña="2001";
$base="personaconsola";

$conexion= mysqli_connect($host, $usuario, $contraseña, $base);
if (!$conexion){
	echo"Fallo la conexion con el servidor";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Logo almagamer.png" type="image/x-icon">
    <link rel="stylesheet" href="css/formularios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <div>
        <div class="form-body">
            <img src="img/Logo almagamer.png" alt="user-login">
            <p class ="titulo">Formulario de Registro</p>
            <form action = "save_users.php" class = "login-form" method = "POST">
                <input type="text" placeholder="Correo Electrónico" name = "email">
                <input type="text" placeholder="Ingrese un usuario" name = "usuario1" style="margin-top: 20px;">
                <input type="password" placeholder="Ingrese una contraseña" name = "password1">
                <input type="submit" value="Registrarse" name="save">
                <p class="text">¿Ya tienes una cuenta? <a href="Login.php" class="enlace1">¡Inicia Sesión!</a></p>
                <a href="index.php" class="enlace2">Página Principal</a>
            </form>
        </div>
        <div id="exito" class = "exito">
            
        </div>
    </div>
</body>
</html>