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
    <title>Login</title>
</head>
<body>
    <div>
        <div class="form-body">
            <img src="img/Logo almagamer.png" alt="user-login">
            <p class ="titulo">Bienvenido a AlmaGamer</p>
            <form action ="control.php" method = "POST" class = "login-form">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="password">
                <input type="submit" value="Iniciar Sesión">
                <p class="text">¿No tienes una cuenta? <a href="Registro.php" class="enlace1">¡Registrate!</a></p>
                <a href="index.php" class="enlace2">Volver</a>
            </form>
        </div>
        <div id="error" class = "error">
            
        </div>
    </div>
</body>
</html>