<?php

    $name = $_POST['nombre'];
    $clave = $_POST['clave'];
    $color = $_POST['color'];
    $opcion = $_POST['precio'];

    echo "El metodo usado fue: ",$_SERVER['REQUEST_METHOD'],"<br>";
    print "Este es el nombre del coche: ".$name.".<br>";
    print "Esta es la clave del coche: ".$clave.".<br>";
    print "El color del coche: ".$color.".<br>";
    print "El precio del coche que has elegido es de: ".$opcion.".<br>";

?>