<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
$data['titulo'] = "Ejercicios Basicos";

//Ejercicio1
$data["div_titulo-ej1"] = "Ejercicio 1";
$data["ej1_a"] = 3;
$data["ej1_b"] = $data["ej1_a"]**2;

//Ejercicio2
$data["div_titulo-ej2"] = "Ejercicio 2";
$data["ej2_a"] = 3;
$data["ej2_b"] = 2;
$data["ej2_c"] = $data["ej2_a"]*$data["ej2_b"];

//Ejercicio3
$data["div_titulo-ej3"] = "Ejercicio 3";
$data["ej3_a"] = 5;
$data["ej3_b"] = 10;
$data["ej3_c"] = $data["ej3_a"]*$data["ej3_b"];
$data["ej3_d"] = ($data["ej3_a"]+$data["ej3_b"])*2;

//Ejercicio4
$data["div_titulo-ej4"] = "Ejercicio 4";
$data["ej4_a"] = "Manuel";
$data["ej4_b"] = 23;
$data["ej4_c"] = 5.2;

//Ejercicio5
$data["div_titulo-ej5"] = "Ejercicio 5";
$data["ej5_a"] = 5;
$data["ej5_b"] = 10;
$data["ej5_c"] = 8;
$data["ej5_d"] = 4;
$data["ej5_e"] = $data["ej5_a"]*$data["ej5_b"];
$data["ej5_f"] = $data["ej5_c"]*$data["ej5_d"];
$data["ej5_g"] = $data["ej5_e"]+$data["ej5_f"];

//Ejercicio6
$data["div_titulo-ej6"] = "Ejercicio 6";
$data["ej6_a"] = 5;
$data["ej6_b"] = pi();
$data["ej6_c"] = round( pi()* ($data["ej6_a"]*$data["ej6_a"]),2);
$data["ej6_d"] = round( pi() *$data["ej6_a"],2);

//Ejercicio7
$data["div_titulo-ej7"] = "Ejercicio 7";
$data["ej7_a"] = 100;
$data["ej7_b"] = $data["ej7_a"]/3.6;

//Ejercicio8
$data["div_titulo-ej8"] = "Ejercicio 8";
$data["ej8_a"] = 123;
$data["ej8_b"] =intval($data["ej8_a"]/100);
$data["ej8_c"] =intval($data["ej8_a"]%100/10);
$data["ej8_d"] =intval($data["ej8_a"]%100%10);

//Ejercicio9
$data["div_titulo-ej9"] = "Ejercicio 9";
$data["ej9_a"] = "Texto separado por espacios";
$data["ej9_b"] = mb_strlen($data["ej9_a"]);
$data["ej9_c"] = str_word_count($data["ej9_a"]);

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/basicos.view.php';
include 'views/templates/footer.php';