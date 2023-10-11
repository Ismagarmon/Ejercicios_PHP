<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo_66</title>
</head>

<body>
    <?php
    # definamos dos variables y asignémosles un valor 

    $a = 5;
    $b = 47;

    # escribamos una funcion a1 y pidámosle que imprima sus valores

    function a1()
    {
        echo "Este es el valor de a en la función a1: ", $a, "<br>";
        echo "Este es el valor de b en la función a1: ", $b, "<br>";
    }

    # hagamos una llamada a la funcion anterior 
    # no nos escribirá ningún valor porque esas variables no pertenecen 
    # al ámbito de la función y serán consideradas como vacias 
    # en el ambito de la funcion

    a1();

    # escribamos una nueva función, definamos como global $a 
    # y comprobemos que ahora si la hemos incluido en el ambito 
    # de la funcion

    function a2()
    {
        global $a;
        echo "Este es el valor de a en la función a2: ", $a, "<br>";
        echo "Este es el valor de b en la función a2: ", $b, "<br>";
    }

    a2();

    # creemos una nueva funcion y ahora modifiquemos dentro de ella 
    # ambas variables

    function a3()
    {
        global $a;
        $a += 45;
        $b -= 348;
        echo "Este es nuevo valor de a en la función a3: ", $a, "<br>";
        echo "Este es el valor de b en la función a3: ", $b, "<br>";
    }

    # invoquemos la funcion a3 
    a3();

    # comprobemos -desde fuera del ámbito de la función 
    # que ocurrió con los valores de las variables

    echo "El valor de a HA CAMBIADO despues de ejecutar a3 es: ", $a, "<br>";
    echo "El valor de b NO HA CAMBIADO despues de ejecutar a3 es: ", $b, "<br>";

    # probemos que ocurre con una variable superglobal 
    # veremos que sin ser definida expresamente en a4 
    # si pertenece a su ambito y por lo tanto visualizamos su contenido

    function a4()
    {
        print "La superglobales si están: " . $_SERVER['SERVER_NAME'] . "<br>";
    }
    # invoquemos esta nueva funcion 
    a4();

    ?>
</body>

</html>