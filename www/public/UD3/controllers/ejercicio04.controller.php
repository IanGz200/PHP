<?php
$data['titulo'] = 'Ejercicio 04';

if (!empty($_POST)){
    $errors = checkForm($_POST);
} else {

}

function checkForm($data) {
    $errors = [];
    $letters = $data['letters'];
}

include 'views/templates/header.php';
include 'views/ejercicio04.view.php';
include 'views/templates/footer.php';