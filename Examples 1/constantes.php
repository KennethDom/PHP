<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
    define("G",9.81);
    // echo "La constante es G <br/>"; No funciona asi que usamos lo de abajo
    echo "la constante es ".G;

    // Esto de abajo es un switch/case/default
    $n=5;
        switch ($n%2) {
            case 0: echo "El numero $n es par <br />";
                break;
            case 1: printf ("El numero $d es impar <br />",$n);
                break;
            default: printf(" no es par ni impar");
                break;
        }

    // Esto de abajo es un break continue 
    for (&i=1;$i<11;$i++){
        if ($i%3==0){
            continue;
        }
        if($i==7){
            break;           
        }
        echo "$i<br />";
    }
        
    ?>
</body>
</html>