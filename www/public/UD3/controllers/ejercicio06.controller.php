<?php

$data['titulo'] = "Ejercicio 06";

if (isset($_POST['numero'])){
    $numero = $_POST['numero'];

    if ($numero!="") {
        ComprobarPrimos($numero);
    }


    var_dump($numero);
}

function ComprobarPrimos($numero){



}

include 'views/templates/header.php';
include 'views/ejercicio06.view.php';
include 'views/templates/footer.php';