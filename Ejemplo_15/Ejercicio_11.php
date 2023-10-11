<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
</head>
<body>
    <form method="post" action="">

        Introduce el primer número: <input type="number" name="p_numero"><br>
        Introduce el segundo número: <input type="number" name="s_numero"><br>

        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

    <p>La suma es <?php echo $_REQUEST['p_numero']+$_REQUEST['s_numero'] ?></p>
    <p>La resta es <?php echo $_REQUEST['p_numero']-$_REQUEST['s_numero'] ?></p>
    <p>La multiplicación es <?php echo $_REQUEST['p_numero']*$_REQUEST['s_numero'] ?></p>
    <p>La división es <?php 
    $a = $_REQUEST['p_numero'];
    $b = $_REQUEST['s_numero'];
    if ($b == 0)
        echo "No se puede dividir entre 0.";
    else
        echo ceil($a/$b);
    
    ?></p>

</body>
</html>