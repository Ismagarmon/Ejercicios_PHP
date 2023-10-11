<?php

    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];

    $p_pregunta = $_REQUEST['opcion'];

    if (isset($_REQUEST['gs']))
        $DAW = $_REQUEST['gs'];

    if (isset($_REQUEST['gm']))
        $ASMR = $_REQUEST['gm'];

    if (isset($_REQUEST['gs1']))
        $ASIR = $_REQUEST['gs1'];

    if (isset($_REQUEST['gs2']))
        $DAM = $_REQUEST['gs2'];

    echo "La persona con nombre ".$nombre.", y apellidos ".$apellidos.", tiene esta calificación: ";

    echo "<br>";

    if($p_pregunta === "GS") 
        echo "Respueta 1 correcta."."<br>";
    else 
        echo "Respuesta 1 incorrecta."."<br>";

    if(isset($_REQUEST['gs']) && isset($_REQUEST['gm']) && isset($_REQUEST['gs1']))
        echo "Respueta 2 correcta."."<br>";
    else 
        echo "Respuesta 2 incorrecta."."<br>";

?>