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
        $nombre = filter_input(0, 'nom');
        $pass = filter_input(0, 'pass');
        if($nombre == $pass){ 
            setcookie('ok', 1,time()+60);
        }else{
            setcookie('ok', $_COOKIE['ok']-1,time()+60);
        }
        header('Location: index.php');
    ?>
</body>
</html>