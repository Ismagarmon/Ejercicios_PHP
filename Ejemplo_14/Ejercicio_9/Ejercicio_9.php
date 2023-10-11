<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_9</title>
</head>
<body>
    <form name="formulario" method="post" action="visor_1.php">
        Nombre: <input type='text' name='nombre' value='' size=15><br>
        Password: <input type='password' name='clave' value=''><br>
        Teléfono: <input type='number' name='telefono' value='' size=15><br>
        Dirección: <input type='text' name='direccion' value='' size=15><br>
        Cuidad: <input type='text' name='cuidad' value='' size=15><br>
        Calificación: <input type='number' name='calificacion' value='' size=15><br>
        <br>
        <br>
        Comentario sobre el alumno:
        <textarea rows=5 cols=50 name='texto'></textarea>

        <input type="hidden" name='oculto' value='Esto iría oculto'><br>

        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>