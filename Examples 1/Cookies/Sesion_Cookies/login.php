<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        header("refresh: 30");
        if(isset($_COOKIE['esper'])){
            $espera = filter_input(2,'esper');
            if($espera == 1){
                ?>
                    <h1>Mas de 3 intentos, espera 60 segundos</h1>

                <?php
            }
            else{
                setcookie('ok', 0,time()+60);
                ?>
                    <form action="logon.php" method="post">
                        Nombre  <input type="text" name="nom"><br>
                        Contraseña  <input type="password" name="pass" id="1"><br>
                        <input type="submit" value="Ingresar">
                    </form>
                <?php
            }
        }
        else{
            ?>
                <form action="logon.php" method="post">
                    Nombre  <input type="text" name="nom"><br>
                    Contraseña  <input type="password" name="pass" id="1"><br>
                    <input type="submit" value="Ingresar">
                </form>
            <?php
        }
        if(isset($_COOKIE['ok'])){
            $sesion = filter_input(2, 'ok');
            if($sesion == 1){
                setcookie('esp', 1,time()-1);
                header('Location: index.php');
            }
            elseif($sesion <= -3){
                setcookie('esper', 1,time()+60); 
                setcookie('ok', 0,time()-1);    
                header('Location: login.php');                  
            }
        }
        else{
            setcookie('ok', 0,time()+60);
        }
    ?>
</body>
</html>