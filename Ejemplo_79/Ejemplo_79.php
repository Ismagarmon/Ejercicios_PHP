<!-- empezaríamos incluyendo el fichero que contiene            
las funciones. No escribiría nada hasta que las            
funciones que contiene no fueran invocadas //--> 
<?php include("ejemplo2.inc.php") ?> 
<!-- Insertaremos un script PHP que invoque            
la función encabezado. Debe llevar las etiquetas            
de apertura y cierre -->
<?php Encabezado() ?> 
<!-- Insertaremos código HTML               
según nuestra conveniencia   //--> 
Aquí iría el contenido de la página<br> 
.... esto es texto HTML................
<br> ...........................<br><br><br>
<!-- Incluimos el fichero ejemplo1.inc.php y dado que no contiene            
ninguna función, insertará aquí todo su contenidos //--> 
<?php include("ejemplo1.inc.php") ?> 
<!-- Insertaremos más codigo  HTML --> 
....................<br> ...........................<br><br><br>
<!-- Incluimos nuevamente el fichero ejemplo1.inc.php  Puede repetirme            
la inclusión porque no contiene funciones Utilización de ficheros externos PHP dispone de funciones que permiten insertar en un docu- mento una parte o la totalidad de los contenidos de otro. 
Esta opción resulta muy interesante, tanto desde el punto de vista operativo como en lo relativo a la seguridad. 
Estas son algunos de los recursos que permiten ese tipo de inclusiones: include("nom. del fichero") El parámetro nom. 
del fichero es una cadena que contiene el path y el nombre del fichero cuyos contenidos pretendemos incluir. 
Pueden incluirse ficheros con cualquier extensión aunque es muy habitual utilizar archivos con extensión .inc.php.            
porque una funcion no puede estar definida dos veces            
con el mismo nombre. La instrucción include            
como en todos los casos deberá ir dentro de un script PHP     -->       

<?php include("ejemplo1.inc.php") ?>

<?php print "Aquí va el resultado de la multiplicación: ".Calcula(7,9); ?> 
<!-- Por ultimo invocaremos la función Pie() --> 
<?php Pie() ?>