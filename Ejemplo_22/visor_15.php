<?php 

    $numero = $_REQUEST['texto'];
    $texto = $_REQUEST['contenido'];

    printf("%'*12.2f euros",$numero);
    echo '<br>';
    echo strtoupper(substr(nl2br($texto),0,10)).strtolower(substr(nl2br($texto),10));

?>