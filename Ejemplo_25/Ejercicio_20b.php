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

    if($p_pregunta === "GS") 
        echo "Respueta correcta.";
    else 
        echo "Respuesta incorrecta.";

?>