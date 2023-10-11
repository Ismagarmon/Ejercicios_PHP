<?php

    $cadena1 = <<< Isma
    La etiqueta &#60;HTML&#62; sirve para definir la etiqueta principal de
    "HTML" en la que se van a meter ostras etiquetas más importantes 
    Isma;

    echo $cadena1;

    $cadena2 = "<br>"."La etiqueta &#60;BODY&#62; sirve para meter el cuerpo";
    $cadena3 = " del la pagina web y donde se va a construir toda la pag web."."<br>";

    $union1 = $cadena2.$cadena3;

    echo $union1;

    $cadena4 = "La etiqueta &#60;HEAD&#62; sirve para meter etiquetas para que la pagina funcione correctamente";

    $cadena4 .= " , en este apartado se linkea el css, los scripts, etc ....."."<br>";

    echo $cadena4;

?>