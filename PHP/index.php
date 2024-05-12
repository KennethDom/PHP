<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<a href="logoff.php" style="text-decoration: none;">Logout</a>
    <?php 
        session_start();
        if(isset($_SESSION['ok'])){
            if($_SESSION['ok'] != 1){
                header('Location: login.php');
            }
        }else{
            $_SESSION['ok'] = 0;
            header('Location: login.php');
        }
    <?
</body>
</html>