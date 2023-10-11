<HTML>

<HEAD>
    <TITLE>Constantes</TITLE>
</HEAD>

<body>
    <?php

    $Numero = 9999;

    vervariables();

    print("El valor de la segunda variable es: $Numero <br>");
    ?>

    <?php
    function vervariables()
    {
        define("numero", 9999);
        define("cadena", "Esto es una cadena");

        echo "El valor de la primera variable es: ", numero, "<br>";
        echo "El valor de la segunda variable es: ", cadena, "<br>";

        print "El valor de la primera variable es: " . numero . "<br>";
        print("El valor de la segunda variable es: " . cadena . "<br>");

    }
    ?>
</body>

</HTML>