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
        define('o',1);
        $i=1;
        while($i<11){
            echo "1 * $i = ",(o * $i),"<br/>";
            $i=$i+1;
        }
    ?>
</body>
</html>