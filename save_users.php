<?php
$host="localhost";
$usuario="root";
$contraseña="2001";
$base="personaconsola";

$conexion= mysqli_connect($host, $usuario, $contraseña, $base);
if (!$conexion){
	echo"Fallo la conexion con el servidor";
}

if (isset($_POST['save'])) {
    $id = rand(1,1000);
    $email = $_POST["email"];
    $usuario = $_POST["usuario1"];
    $password = $_POST["password1"];
    $query = "INSERT INTO usuarios VALUES ('$id', '$email', '$usuario', '$password')";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("Query Failed.");
    }else{ 
    ?>
    <?php
    include("Registro.php");
    ?>
    <!DOCTYPE html>
        <html>
            <body>
                <script>
                    const mensaje = document.getElementById("exito");
                    const elementoHtml = document.createElement("p");
                    elementoHtml.textContent = "¡Registro Exitoso!";
                    mensaje.appendChild(elementoHtml);
                </script>
                <br></br>
            </body>
        </html>
    <?php
    }
}
?>