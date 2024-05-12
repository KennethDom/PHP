<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
    <link rel="stylesheet" type = "text/css" href = "estilo.css"/>
    <script>
        function describe(x){
            var conexion;
            if(window.XMLHttpRequest){
                conexion = new XMLHttpRequest();
            }else{
                conexion = new ActiveXObject("Microsoft.XMLHTTP");
            }
            conexion.onreadystatechange = function(){
                if (conexion.readyState===4 && conexion.status===200){
                document.getElementById('i').innerHTML = conexion.responseText;
            }
        };
        conexion.open("GET","desc.php?n="+x.id,true);
        conexion.send();
        }; 
    </script>
</head>
<body>
    <div>
        <img src = "img/aguila.jpg" alt="" id="m" onmouseover= "describe(this)"/>
        <img src = "img/camaleon.jpg" alt="" id="n" onmouseover= "describe(this)"/>
        <img src = "img/gato.jpg" alt="" id="o" onmouseover= "describe(this)"/>
        <img src = "img/hamster.jpg" alt="" id="p" onmouseover= "describe(this)"/>
        <img src = "img/jirafa.jpg" alt="" id="q" onmouseover= "describe(this)"/>
        <img src = "img/leon.jpg" alt="" id="r" onmouseover= "describe(this)"/>
        <img src = "img/perro.jpg" alt="" id="s" onmouseover= "describe(this)"/>
        <img src = "img/pescado.jpg" alt="" id="t" onmouseover= "describe(this)"/>
    </div><br />
    <div id="i" class="desc">Descripcion de la Imagen</div>
    <?php

    ?>
</body>
</html>