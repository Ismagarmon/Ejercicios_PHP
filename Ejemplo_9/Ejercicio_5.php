<HTML>

<HEAD>
    <TITLE>Constantes</TITLE>
</HEAD>

<body>
    <?php

    $Numero = 9999;

    print("El valor de la variable numero es: $Numero <br>");


    $Numero = 12;

    print("El valor de la variable numero es: $Numero <br>");


    cambiarvariable();

    print("El valor de la variable numero es: $Numero <br>");
    ?>

    <?php
    function cambiarvariable()
    {
        $Numero = 2323;
        print "El numero valor de la variable es: $Numero <br>";
    }
    ?>
</body>

</HTML>