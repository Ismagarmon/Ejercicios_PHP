<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_25</title>
</head>

<body>
    <?php

    $clase = array(
        "Ismael" => array(
            "Mates" => 6,
            "Biologia" => 5,
            "Física" => 8
        ),
        "Pablo" => array(
            "Mates" => 6,
            "Biologia" => 5,
            "Física" => 8
        )
    );

    foreach ($clase as $clave => $valor) {
        foreach ($valor as $clave2 => $valor2) {
            echo "El alumno: " . $clave . " tiene estas notas: " . $clave2 . ": " . $valor2 . "<br>";
        };
    };

    ?>
</body>

</html>