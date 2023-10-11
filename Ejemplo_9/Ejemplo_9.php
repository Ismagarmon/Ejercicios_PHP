<HTML>

<HEAD> </HEAD>

<BODY>
    <?php 
    # Definimos la variable $pepe como vacía 
    $pepe=""; 
    # Definimos las variables $Pepe y $Pepa (ojo con mayúsculas y minúsculas) 
    $Pepe="Me llamo Pepe y soy serio y formal"; 
    $Pepa="Me llamo Pepa y también soy seria y formal"; 
    ?>

    <!-- esto es HTML, hemos cerrado el script -->

    <center><b>Vamos a ver el contenido de las variables</b></center> <!--   un nuevo script PHP -->

    <?php 
    echo "<br> El valor de la variable pepe es: ", $pepe;
    echo "<br> No ha puesto nada porque $pepe esta vacía";
    echo "<br> El valor de la variable Pepe es: ", $Pepe; 
    ?>

    <center><b><br>Invocando la variable desde una función</b></center>

    <?php 
    /* Escribiremos una function llamada vervariable   Observa la sintaxis. La palabra function delante   y el () al final seguidos de la llave.   Hasta que no cerremos la llave todas las líneas   serán consideradas parte de la función */
    function vervariable()
    {
        echo "<br> Si invoco la variable Pepe desde una función";
        echo "<br>me aparecerá en blanco";
        echo "<br>El valor de la variable Pepe es: ", $Pepe;
    } 
    /* esta llave de arriba señala el final de la función.  
    Los contenidos que hay en adelante ya no pertenecen a ella *//* Haremos una llamada a la funcion vervariable.   
    Las funciones no se ejecutan hasta que no se les ordena   y se hace de esta forma que ves aquí debajo:   nombre de la funcion seguido de los famosos paréntesis 
    */
    vervariable(); 
    ?>

    <!-- mas HTML puro  -->

    <center><b><br>Ver la variable desde la función poniendo <i>global</i></b></center>

    <?php 
    # una nueva funcion ¿Qué es una variable? Podríamos decir que es un espacio de la memoria RAM del ordenador que se reserva –a lo largo del tiempo de ejecución de un script– para almacenar un determinado tipo de datos cuyos valores son susceptibles de ser modificados por medio de las instrucciones contenidas en el propio programa. Nombres de variables En PHP todos los nombres de variable tienen que empezar por el símbolo $. Las nombres de las variables han de llevar una letra inme- diatamente después del sím- bolo $ –$pepe1 es un nombre válido, pero $1pepe no es un nombre válido–. Para PHP las letras mayúsculas y las minúsculas son distintas. La variable $pepe es distinta de $Pepe. Tipos de variables En PHP no es necesario definir el tipo de variable, por lo tanto, una misma variable puede contener una cadena de caracteres en un momento del proceso y, posteriormente, un valor numérico, susceptible de ser operado matemáticamente. Definición de variables PHP no requiere una definición previa de las variables. Se definen en el momento en que son necesarias y para ello basta que se les asigne un valor. La sintaxis es esta: $variable=valor; El valor puede ser una cadena (texto o texto y números que no requieren ser operados matemáticamente) o sólo un número. En el primero de los casos habría que escribir el valor entre comillas. Ámbito de las variables Los valores de una variable definida en cualquier parte de un script –siempre que no sea dentro de una función– pueden ser utilizados desde cualquier otra parte de ese script, excepto desde dentro de las funciones que contuviera el propio script o desde las que pudieran estar contenidas en un fichero externo. Si una variable es definida dentro de una función sólo podrá ser utilizada dentro esa función. Si en una función aludimos a una variable externa a ella PHP considerará esa llamada como si la variable tuviera valor cero (en caso de ser tratada como número) o una cadena vacía ("" es una cadena vacía). Igual ocurriría si desde fuera de una función hiciéramos alusión a una variable definida en ella. Si definimos dos variables con el mismo nombre, una dentro de una función y otra fuera, PHP las considerará distintas. La función utilizará –cuando sea ejecutada– 
    function ahorasi(){        
        # aqui definiremos a $Pepe como global        
        # la función leerá su valor externo   

        global $Pepe;   
        
        echo "<br><br> Hemos asignado ámbito global a la variable";   

        echo "<br>ahora Pepe aparecerá";   
        echo "<br>El valor de la variable  Pepe es: ", $Pepe;

    } 
    # hemos cerrado ya la funcion con la llave. # Tendremos que invocarla para que se ejecute ahora 
    ahorasi(); 
    ?>

    <center><b><br>Un solo nombre y dos <i>variables distintas</i></b><br> Dentro de la función el valor de la variable es <br></center>

    <?php 
    function cambiaPepa()
    {
        $Pepa = "Ahora voy a llamarme Luisa por un ratito";
        echo "<br>", $Pepa;
    }
    cambiaPepa(); 
    ?>

    <center>... pero después de salir de la función vuelvo al valor original...</center>

    <?php 
    echo "<br>", $Pepa; 
    ?>
</BODY>

</HTML>