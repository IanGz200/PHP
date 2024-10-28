<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
$data['titulo'] = "Ejercicios Decisiones";


//Ejercicio1
$data["div_titulo-ej1"] = "Ejercicio 1";
$data["ej1-a"] = 2;
$data["ej1-b"] = 4;
if ($data["ej1-a"]%$data["ej1-b"]==0) {

    $data["ej1-c"] = "El numero es divisible";
}else{

    $data["ej1-c"] = "El numero no es divisible";

}
//Ejercicio2
$data["div_titulo-ej2"] = "Ejercicio 2";

//Ejercicio3
$data["div_titulo-ej3"] = "Ejercicio 3";

//Ejercicio4
$data["div_titulo-ej4"] = "Ejercicio 4";

//Ejercicio5
$data["div_titulo-ej5"] = "Ejercicio 5";

//Ejercicio6
$data["div_titulo-ej6"] = "Ejercicio 6";

//Ejercicio7
$data["div_titulo-ej7"] = "Ejercicio 7";
$data["bebida"] = "Coca-Cola";

switch ($data["bebida"]) {
    case "Coca-Cola" or "Bonka":
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';