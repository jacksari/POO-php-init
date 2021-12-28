<?php   

    // require_once detiene el proceso en caso de error
    // include no detiene el proceso
    require_once("ClassOperation.php");

    $operacion1 = new Operation(10, 2);
    $totalSuma = $operacion1->getSuma();
    echo $operacion1->getResta();

?>