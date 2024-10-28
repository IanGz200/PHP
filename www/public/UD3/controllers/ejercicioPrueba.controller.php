<?php

$data['titulo'] = "Ejercicio Prueba";
$data['titulo2'] = "AAAAAA";
if (isset($_POST['numeros'])){
    $data['cadena_texto'] = $_POST['numeros'];
    wordCount($data['cadena_texto']);
}

function wordCount($data)
{

}

var_dump($data);
/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/ejercicioPrueba.view.php';
include 'views/templates/footer.php';