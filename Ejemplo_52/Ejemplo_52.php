<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo_52</title>
</head>

<body>
    <?php

    $z = array(
        0 => array(
            0 => 34,
            1 => 35,
            2 => 36
        ),
        1 => array(
            0 => 134,
            1 => 135,
            2 => 136
        )
    );


    foreach ($z as $pepe => $pepa) {
        echo "Indice: ", $pepe, "  Valor: ", $pepa, "<br>";
    };

    foreach ($z as $ind1 => $valor1) {
        foreach ($valor1 as $ind2 => $valorReal) {
            echo "Ind. 1: ", $ind1, "Ind. 2: ", $ind2, " Valor: ", $valorReal, "<br>";
        };
    };

    ?>
</body>

</html>