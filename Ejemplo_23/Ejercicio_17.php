<?php 

    $a = 12;
    $b = "12";

    if ( $a == $b )
        echo "La primera igualdad es verdadera.";
    else 
        echo "La primera igualdad es falsa.";
    
    echo '<br>';

    if ( $a === $b )
        echo "La segunda igualdad es verdadera.";
    else
        echo "La segunda igualdad es falsa.";

    echo '<br>';

    if ( $a <= $b )
        echo "La tercera igualdad es verdadera.";
    else   
        echo "La tercera igualdad es falsa.";

    echo '<br>';

    if ( $a >= $b )
        echo "La cuarta igualdad es verdadera.";
    else   
        echo "La cuarta igualdad es falsa.";

    echo '<br>';

    if ( $a != $b )
        echo "La quinta igualdad es verdadera.";
    else   
        echo "La quinta igualdad es falsa.";

    echo '<br>';
    
?>