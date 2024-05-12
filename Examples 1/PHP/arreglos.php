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
        $dia[1]='Lunes';
        $dia[6]='Martes';
        $dia[2]='Miercoles';
        $dia[3]='Jueves';
        $dia[4]='Viernes';
        $dia[5]='Sabado';
        $dia[0]='Domingo';
        for($i=1;$i<7;$i++){
            echo "$dia[$i]"."<br/>";
        }
        print_r($dia);
        echo "<br/>";

        foreach($dia as $d){
            print($d."<br/>");
        }
    ?>
</body>
</html>