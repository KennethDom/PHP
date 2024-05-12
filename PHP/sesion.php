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
        $_SESSION['Color'] = 'rojo';
        if(isset($_SESSION['Cuenta'])){
            $_SESSION['Cuenta'] -= 1;
        }
        else{
            $_SESSION['Cuenta'] = 5;
        }
    ?>
    <a href="sesion2.php">Pagina 2</a>
</body>
</html>