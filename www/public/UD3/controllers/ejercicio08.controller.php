<?php



$data['titulo'] = 'Ejercicio 08';
$data['div_titulo-ej8'] = 'Ejercicio JSON';

if (isset($_POST)){
    $errors = checkForm($_POST);
    $data['input_texto'] = filter_var($_POST, FILTER_SANITIZE_SPECIAL_CHARS);

}

function checkForm($data): array{

    $errors = [];


    if(empty($data['texto'])){

        $errors['texto'] = 'Inserte un valor en este campo';

    }
    else {
        $datos = json_decode($data['texto'], true);

        if (is_null($data)) {

            $errors['texto'] = 'Inserte un valor en este campo';

        } else{


        }
    }
    return $errors;

}

include 'views/templates/header.php';
include 'views/ejercicio08.view.php';
include 'views/templates/footer.php';