<?php
    session_start();
if (!isset($_SESSION["sesion"]) || $_SESSION["sesion"] == 0) {
    header("location: indexInicioSesion.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stila.css">
</head>

<body>
    <h1>Sistema Web de Usuarios</h1>
    <nav id="menu">
        <ul>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="#">Procesos</a>
                <ul>
                    <li><a href="indexExportar.php" target="_blank">Exportar</a></li>
                    <li><a href="indexImportar.php">Importar</a></li>
                </ul>
            </li>
            <li><a href="#">Reportes</a>
                <ul>
                    <li><a href="usuarios_re.php">Usu Alfa</a></li>
                    <li><a href="#">Usu Cron</a></li>
                </ul>
            </li>
            <li><a href="indexSalir.php">Salir</a></li>
        </ul>
    </nav>
    <br>
    <?php
        if(isset($_SESSION['mod'])){
            $mod = $_SESSION["mod"];
            $nombre = substr($_SESSION["usuarios"][$mod], 0, 12);
            ?>
                <h2>Sesion iniciada con: <?php echo $nombre ?></h2>
            <?php
        }
    ?>
</body>
</html>