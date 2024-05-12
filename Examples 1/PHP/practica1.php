<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer PHP</title>
</head>
<body>
    <h1>Primera isla codificada</h1>
    <?php
        // Comentario en linea
        # Comenrarop en linea
        /* Comentario en bloque */
        // echo'Hola Mundo <br/>';
        // print("Hola Mundo <br/>");
        // phpinfo();
        // $i=10;
        // echo 'te sacaste un $i <br/>';
        // echo "te sacaste un $i <br/>";
        // echo `dir <br/>`;
        // define('G',9.81);
        // echo '<br/>La constante es<br/>'.G;

        // $n=8;
        // switch($n%3){
        //     case 0: echo 'El numero $n es par <br/>';break;
        //     case 1: printf( 'El numero %d es impar <br/>',$n);break;
        //     default: printf( 'no es par ni es impar');
        // }

        for($i=1;$i<11;$i++){
            if($i%3==0){
                continue;
            }
            if($i==7){
                break;
            }
            echo "$i<br/>";
            
        }
    ?>
</body>
</html>