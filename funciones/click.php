<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumita</title>
    <script type="text/javascript">
    function borra(x){
        document.getElementById(x).innerHTML="<p style='background-color:blue'>.</p>";
    }

    function riete(x){
        var conexion;
        if(window.XMLHttpRequest){
            conexion = new XMLHttpRequest();
        }else{
            conexion = new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange = function(){
            if(conexion.readyState===4 && conexion.status===200){
                document.getElementById(x).innerHTML = conexion.responseText;
            }
        };
        conexion.open("GET","datos.php",true);
        conexion.send();
    }
</script>
</head>
<body style="text-align: center;">
<br /><br /><br /><br /> 
<button id="cosquilla" onmouseover = "riete('jaja')" onclick = "borra('jaja')">Plumita</button>
<br /> <br />   
<div id = "jaja">  
</div>
<br /> <br /> <br /> 
<?php

?>
    </body>
</body>
</html>