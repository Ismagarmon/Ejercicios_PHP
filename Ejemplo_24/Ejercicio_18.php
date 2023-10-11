<?php

    $langosta = 70;
    $angula = 65;
    $caviar = 30;

    if(($langosta>50 && $angula>50) ||
       ($langosta>50 && $caviar>50) ||
       ($angula>50 && $caviar>50)){
        echo "Cierto <br>";
    }
    else
        echo "Falso <br>";

?>