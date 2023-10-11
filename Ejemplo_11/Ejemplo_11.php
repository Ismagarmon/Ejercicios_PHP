<?php

    function sinEstaticas() {
        $a = 0;
        $b = 0;

        echo "Valor inicial de $a: ",$a,"<br>";        
        echo "Valor inicial de $b: ",$b,"<br>";

        $a +=5;        
        $b -=7;

        echo "Valor final de $a: ",$a,"<br>";        
        echo "Valor final de $b: ",$b,"<br>";
    }

    echo "--------------------------------<br>";

    sinEstaticas();
    echo "--------------------------------<br>";

    function conEstaticas(){ # Definimos $b como estática         
        $a=0; 

        static $b=0;   

        echo "Valor inicial de $a: ",$a,"<br>";        

        echo "Valor inicial de $b: ",$b,"<br>";     

        $a +=5;        
        $b -=7;   

        echo "Nuevo valor de $a: ",$a,"<br>";        
        echo "Nuevo valor de $b: ",$b,"<br>"; 
    
    }

    conEstaticas();
    echo "--------------------------------<br>";
    conEstaticas();
?>

<?php 

    $color = "rojo";
    $$color = " es mi color preferido";

    echo "--------------------------------<br>";

    print ("El color ".$color.$rojo."<br>");
?>