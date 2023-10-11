<?php

    $numero = $_REQUEST['numero'];

    $resultado = round($numero%12);

    $p_valores["0"] = "División exacta";
    $p_valores["1"] = 1;
    $p_valores["2"] = 2;
    $p_valores["3"] = 3;
    $p_valores["4"] = 4;
    $p_valores["5"] = 5;
    $p_valores["6"] = 6;
    $p_valores["7"] = 7;
    $p_valores["8"] = 8;
    $p_valores["9"] = 9;
    $p_valores["10"] = 10;
    $p_valores["11"] = 11;

    for ($i = 0; $i <12; $i++){
        if(($numero %12) == $i){
            echo "El resto de dividir entre 12 el número que has pasado es: ".$p_valores[strval($i)];
        }
    }

    


?>