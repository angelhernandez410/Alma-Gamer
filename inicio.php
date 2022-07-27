<?php
$host="localhost";
$usuario="root";
$contraseña="2001";
$base="personaconsola";

$conexion= mysqli_connect($host, $usuario, $contraseña, $base);
if (!$conexion){
	echo"Fallo la conexion con el servidor";
}

session_start();
    if(!isset($_SESSION['usuario'])){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlmaGamer</title>
    <link rel="shortcut icon" href="img/Logo almagamer.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="inicio">
        <img src="img/hamburguesa.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <a href="cerrarsesion.php">CERRAR SESIÓN</a>
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#especificaciones">Especificaciones</a>
            <a href="#galeria">Galería</a>
            <a href="#solicitar-resenas">Solicitar Nuevas Consolas</a>
            <a href="#mostrar-solicitudes">Consolas solicitadas</a>
            <a href="#empresa">Redes Sociales</a>
        </nav>
        <div class="contenedor head">
            <img src="img/Logo almagamer.png" alt="" class="img-inicio">
            <h1 class="titulo">La mejor información sobre tus consolas favoritas</h1>
            <p class="titulo2">en el mejor lugar para los Gamers</p>
        </div>
    </header>
    <main>
        <section class="contenedor" id="nosotros">
            <h2 class="subtitulo">Acerca de Nosotros</h2>
            <div class="contenedor-aboutus">
                <img src="img/ControlPs.svg" alt="">
                <div class="info-aboutus">
                    <p>AlmaGamer es un sitio web dedicado a informar a toda la comunidad amante de los videojuego y las videoconsolas. 
                        Nuestro objetivo es ofrecerte las especificaciones de los mejores equipos gamer del mercado, 
                        para que puedas elegir aquel que se adapte más a lo que desees.</p>
                </div>
            </div>
        </section>
        <section class="review" id="especificaciones">
            <h2 class="subtitulo">Especificaciones de las Consolas</h2>
            <div class="contenedor-review">
                <img src="img/palystation5.jpg" alt="">
                <div class="contenido-review">
                    <h3 class="titulo-review">Playstation 5</h3>
                    <ul class="vineta">
                        <?php
                            $xml = simplexml_load_file('index.xml');
                            $desarrolladora = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Desarrolladora');
                            $modelo = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Modelo');
                            $tipo = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Tipo');
                            $generacion = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Generacion');
                            $ano = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/ano');
                            $cpu = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/cpu');
                            $gpu = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/gpu');
                            $memoria = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Memoria');
                            $almacenamiento = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Almacenamiento');
                            $unidadoptica = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/UnidadOptica');
                            $peso = $xml->xpath('/Consolas/Consola[@Nombre = "Playstation 5"]/Peso');
                            
                            foreach ($desarrolladora as $desarrolladoras){
                                echo "<li><b>Desarroladora:</b> $desarrolladoras</li>";
                            }
                            foreach ($modelo as $modelos){
                                echo "<li><b>Modelo:</b> $modelos</li>";
                            }
                            foreach ($tipo as $tipos){
                                echo "<li><b>Tipo:</b> $tipos</li>";
                            }
                            foreach ($generacion as $generaciones){
                                echo "<li><b>Generación:</b> $generaciones</li>";
                            }
                            foreach ($ano as $anos){
                                echo "<li><b>Año:</b> $anos</li>";
                            }
                            foreach ($cpu as $cpu_1){
                                echo "<li><b>CPU:</b> $cpu_1</li>";
                            }
                            foreach ($gpu as $gpu_1){
                                echo "<li><b>GPU:</b> $gpu_1</li>";
                            }
                            foreach ($memoria as $memoria_1){
                                echo "<li><b>Memoria:</b> $memoria_1</li>";
                            }
                            foreach ($almacenamiento as $almacenamiento_1){
                                echo "<li><b>Almacenamiento:</b> $almacenamiento_1</li>";
                            }
                            foreach ($unidadoptica as $unidadoptica_1){
                                echo "<li><b>Unidad Óptica:</b> $unidadoptica_1</li>";
                            }
                            foreach ($peso as $peso_1){
                                echo "<li><b>Peso:</b> $peso_1</li>";
                            }
                        ?>
                    </ul>
                </div>
                <img src="img/xboxsx.jpg" alt="">
                <div class="contenido-review">
                    <h3 class="titulo-review">Xbox X Series</h3>
                    <ul class="vineta">
                    <?php
                            $desarrolladora = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Desarrolladora');
                            $modelo = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Modelo');
                            $tipo = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Tipo');
                            $generacion = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Generacion');
                            $ano = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/ano');
                            $cpu = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/cpu');
                            $gpu = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/gpu');
                            $memoria = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Memoria');
                            $almacenamiento = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Almacenamiento');
                            $unidadoptica = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/UnidadOptica');
                            $peso = $xml->xpath('/Consolas/Consola[@Nombre = "Xbox X Series"]/Peso');
                            
                            foreach ($desarrolladora as $desarrolladoras){
                                echo "<li><b>Desarroladora:</b> $desarrolladoras</li>";
                            }
                            foreach ($modelo as $modelos){
                                echo "<li><b>Modelo:</b> $modelos</li>";
                            }
                            foreach ($tipo as $tipos){
                                echo "<li><b>Tipo:</b> $tipos</li>";
                            }
                            foreach ($generacion as $generaciones){
                                echo "<li><b>Generación:</b> $generaciones</li>";
                            }
                            foreach ($ano as $anos){
                                echo "<li><b>Año:</b> $anos</li>";
                            }
                            foreach ($cpu as $cpu_1){
                                echo "<li><b>CPU:</b> $cpu_1</li>";
                            }
                            foreach ($gpu as $gpu_1){
                                echo "<li><b>GPU:</b> $gpu_1</li>";
                            }
                            foreach ($memoria as $memoria_1){
                                echo "<li><b>Memoria:</b> $memoria_1</li>";
                            }
                            foreach ($almacenamiento as $almacenamiento_1){
                                echo "<li><b>Almacenamiento:</b> $almacenamiento_1</li>";
                            }
                            foreach ($unidadoptica as $unidadoptica_1){
                                echo "<li><b>Unidad Óptica:</b> $unidadoptica_1</li>";
                            }
                            foreach ($peso as $peso_1){
                                echo "<li><b>Peso:</b> $peso_1</li>";
                            }
                        ?>
                    </ul>
                </div>
                <img src="img/switch.jpg" alt="">
                <div class="contenido-review">
                    <h3 class="titulo-review">Nintendo Switch</h3>
                    <ul class="vineta">
                    <?php
                            $desarrolladora = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Desarrolladora');
                            $modelo = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Modelo');
                            $tipo = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Tipo');
                            $generacion = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Generacion');
                            $ano = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/ano');
                            $cpu_gpu = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/cpu_gpu');
                            $pantalla = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Pantalla');
                            $almacenamiento = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Almacenamiento');
                            $tamano = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Tamano');
                            $peso = $xml->xpath('/Consolas/Consola[@Nombre = "Nintendo Switch"]/Peso');
                            
                            foreach ($desarrolladora as $desarrolladoras){
                                echo "<li><b>Desarroladora:</b> $desarrolladoras</li>";
                            }
                            foreach ($modelo as $modelos){
                                echo "<li><b>Modelo:</b> $modelos</li>";
                            }
                            foreach ($tipo as $tipos){
                                echo "<li><b>Tipo:</b> $tipos</li>";
                            }
                            foreach ($generacion as $generaciones){
                                echo "<li><b>Generación:</b> $generaciones</li>";
                            }
                            foreach ($ano as $anos){
                                echo "<li><b>Año:</b> $anos</li>";
                            }
                            foreach ($cpu_gpu as $cpu_gpu_1){
                                echo "<li><b>CPU/GPU:</b> $cpu_gpu_1</li>";
                            }
                            foreach ($pantalla as $pantalla_1){
                                echo "<li><b>Pantalla:</b> $pantalla_1</li>";
                            }
                            foreach ($almacenamiento as $almacenamiento_1){
                                echo "<li><b>Almacenamiento:</b> $almacenamiento_1</li>";
                            }
                            foreach ($tamano as $tamano_1){
                                echo "<li><b>Tamaño:</b> $tamano_1</li>";
                            }
                            foreach ($peso as $peso_1){
                                echo "<li><b>Peso:</b> $peso_1</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Galería</h2>
                <div class="contendor-galeria">
                    <img src="img/ps5.jpg" alt="" class="img-galeria">
                    <img src="img/cps5.jpg" alt="" class="img-galeria">
                    <img src="img/xsx.jpg" alt="" class="img-galeria">
                    <img src="img/cxsx.jpg" alt="" class="img-galeria">
                    <img src="img/nintendos.jpg" alt="" class="img-galeria">
                    <img src="img/cnintendos.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-light">
            <img src="img/close.svg" alt="" class="cerrar">
            <img src="" alt="" class="agregar-imagen">
        </section>
        <section class="form" id="solicitar-resenas">
            <div class="contenedor">
                <h2 class="subtitulo">Solicitar Nuevas Consolas</h2>
                <form action= "save_info.php" class="formulario" method= "POST">
                    <h4>Formulario</h4>
                    <input class="controls" type="text" name="nombre_usuario" placeholder="Ingrese su nombre">
                    <input class="controls" type="text" name="nombre_consola" placeholder="Ingrese el nombre de la consola">
                    <input class="controls" type="number" name="ano_consola" placeholder="Ingrese el año de salida de la consola">
                    <input class="controls" type="text" name="desarrolladora" placeholder="Ingrese el nombre de la desarroladora">
                    <input class="controls" type="text" name="modelo" placeholder="Ingrese el modelo de la consola">
                    <input class="controls" type="text" name="tipo" placeholder="Ingrese el tipo de consola">
                    <input class="controls" type="text" name="generacion" placeholder="Ingrese la genaracion de la consola">
                    <input class="botons" type="submit" name="save_info" value="Enviar">
                </form>
            </div>
        </section>
        <section class="mostrar" id="mostrar-solicitudes">
            <div class = "contenedor">
                <h2 class="subtitulo">Consolas Solicitadas</h2>
                <div class= "tabla">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nombre de Usuario</th>
                            <th>Nombre de la Consola</th>
                            <th>Año</th>
                            <th>Desarrolladora</th>
                            <th>Modelo</th>
                            <th>Tipo</th>
                            <th>Generación</th>
                        </tr>
                        <?php
                            $consulta = "SELECT * FROM infoconsola";
                            $ejecutarConsulta = mysqli_query($conexion, $consulta);
                            $verFilas = mysqli_num_rows ($ejecutarConsulta);
                            $fila = mysqli_fetch_array($ejecutarConsulta);

                            if(!$ejecutarConsulta){
                                echo"Error al consultar los datos";
                            }else{
                                if($verFilas < 1){
                                    echo"<tr><td>Sin Registros</td></tr>";
                                }else{
                                    for($i=0; $i<=$fila; $i++){
                                        echo'<tr>
                                                <td>'.$fila[0].'</td>
                                                <td>'.$fila[1].'</td>
                                                <td>'.$fila[2].'</td>
                                                <td>'.$fila[3].'</td>
                                                <td>'.$fila[4].'</td>
                                                <td>'.$fila[5].'</td>
                                                <td>'.$fila[6].'</td>
                                                <td>'.$fila[7].'</td>
                                             </tr>
                                        ';
                                        $fila = mysqli_fetch_array($ejecutarConsulta);
                                    }
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer id="empresa">
        <div class="contenedor footer-content">
            <div class="empresa-info">
                <h2 class="brand">AlmaGamer</h2>
                <p>La mejor información sobre tus consolas favoritas</p>
                <p>en el mejor lugar para los gamers</p>
            </div>
            <div class="social-media">
                <a href="https://es-la.facebook.com/" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://twitter.com/?lang=es" class="social-media-icon">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a href="https://www.instagram.com/?hl=es" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>

    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>