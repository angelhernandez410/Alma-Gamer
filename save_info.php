<?php

include("index.php");

if (isset($_POST['save_info'])) {
    $id_solicitud = rand(1,99);
    $nombre_usuario = $_POST["nombre_usuario"];
    $nombre_consola = $_POST["nombre_consola"];
    $ano_consola = $_POST["ano_consola"];
    $desarrolladora = $_POST["desarrolladora"];
    $modelo = $_POST["modelo"];
    $tipo = $_POST["tipo"];
    $generacion = $_POST["generacion"];
    $query = "INSERT INTO infoconsola VALUES ('$id_solicitud', '$nombre_usuario', '$nombre_consola', '$ano_consola','$desarrolladora','$modelo', '$tipo','$generacion')";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("Query Failed.");
    }
}
?>