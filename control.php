<?php
$host="localhost";
$usuario="root";
$contraseña="2001";
$base="personaconsola";

$conexion= mysqli_connect($host, $usuario, $contraseña, $base);
if (!$conexion){
	echo"Fallo la conexion con el servidor";
}

$usuario = $_POST["usuario"];
$password = $_POST["password"];

session_start();
$_SESSION['usuario']=$usuario;

$consulta = "SELECT * FROM usuarios where usuario = '$usuario' AND pass = '$password'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");
} else{
    ?>
    <?php
    include("login.php");
    ?>
    <!DOCTYPE html>
        <html>
            <body>
                <script>
                    const mensaje = document.getElementById("error");
                    const elementoHtml = document.createElement("p");
                    elementoHtml.textContent = "Error de autenticación";
                    mensaje.appendChild(elementoHtml);
                </script>
                <br></br>
            </body>
        </html>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);