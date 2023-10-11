<?php

$a="Esta es una cadena larga que presuntamente será troceada";

chunk_split ($a,76,"-");

echo $a;

?>