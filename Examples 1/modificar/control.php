<?php

$reg=random_int(0,10);
$usu=filter_input(0,"usuario");
$tipo=filter_input(0,"tipo");
$c1=filter_input(0,"contra1");
$c2=filter_input(0,"contra2");

if($usu !== null && $tipo !== null ){
    $usu=substr(trim($usu)."            ",0,12);
    $tipo=substr(trim($tipo)." ",0,1);
    $arch = fopen("usuarios.txt","r+");
    $dato=$usu.$tipo;
    fseek($arch,$reg*16);
    fwrite($arch,$dato);
    if($c1 !== null && $c2 !== null && $c1==$c2){
        $c1=substr($c1."   ",0,3);
        fwrite($arch,$c1);
        fclose($arch);
    }
}else{
    echo 'Algo salio mal, intentalo de nuevo';
}
?>