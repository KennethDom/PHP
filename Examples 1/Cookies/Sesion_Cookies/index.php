<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <h1>Has Entrado</h1>
    <a href="logoff.php" style="text-decoration: none;">Cerrar Sesion</a>
    <?php
        if(isset($_COOKIE['ok'])){                             //Si la cooki ok existe, que es cuando el usuario y la contraseña es igual
            $sesion = filter_input(2, 'ok');
            if($sesion != 1){
                header('Location: login.php');
            }
        }else{
            setcookie('ok', 0,time()+60);
            header('Location: login.php');
        }
    ?>
</body>
</html>

<!-- Investigar que se recargue cada 5 segundos la pagina  -->