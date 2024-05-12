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
        function tabla($li, $m=2){
            $s=0;
            for($i=1;$i<=$li;$i++){
                $r= $i * $m;
                $s+=$r;   
                print "$m * $i = $r <br/>";
            }
            return $s;
        }

        $a=5;
        $b=12;
        tabla($b,$a);
        print (" <br/>");
        echo tabla($a,$b);
        printf("La tabla del %d hasta el %d <br/>",$a,$b);

    ?>
</body>
</html>