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
        function tabla($m=2){
            for ($i=1;$i<11;$i++){
                $r = $i * $m; 
                echo "$m * $i =$r <br />";
            }
        }
        tabla();
    ?>
</body>
</html>