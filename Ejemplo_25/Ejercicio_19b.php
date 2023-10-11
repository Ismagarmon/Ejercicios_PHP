<?php

    $number = $_REQUEST['number'];

    echo gettype($number);

    echo "<br>";
    if(isset($_REQUEST['number'])){
        switch($number){
            case 0: echo "El número pasado es 0."; break;
            default: echo "Introduce un número."; break;
            case $number>0: echo "El número es positivo."; break;
            case $number<0: echo "El número es negativo."; break;
        }  
    }
?>