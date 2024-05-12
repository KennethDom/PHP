<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $color = $_SESSION['Color'];
        $cuenta = $_SESSION['Cuenta'] -=1;
        print("Tu color es: ".$color."</br>");
        print($cuenta."</br>");
        echo session_id();
        if($cuenta <= 0){
            header('Location: http://www.itparral.edu.mx/');
        }
    ?>
    <br><a href="sesion.php">Pagina 1</a>
</body>
</html>