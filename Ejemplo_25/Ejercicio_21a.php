<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_10</title>
</head>
<body>
    <form name="formulario" method="post" action="Ejercicio_21b.php">
        Nombre: <input type='text' name='nombre' value='' size=15><br>
        Apellidos: <input type='text' name='apellidos' value='' size=15><br>

        <br>
        ¿Qué nivel de estudios tienes?: <br>
        <input type="radio" name="opcion" value="GS">Grado superior<br>
        <input type="radio" name="opcion" value="GM">Grado medio<br>
        <input type="radio" name="opcion" value="GU">Grado uiversitario<br>
        <input type="radio" name="opcion" value="GUM">Grado universitario + máster<br>

        <br>
        ¿Qué grados tienes?: <br>
        <input type="checkbox" name="gs" value="DAW">DAW <br>
        <input type="checkbox" name="gm" value="ASMR" checked>ASMR <br>
        <input type="checkbox" name="gs1" value="ASIR">ASIR <br>
        <input type="checkbox" name="gs2" value="DAM">DAM <br>

        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>