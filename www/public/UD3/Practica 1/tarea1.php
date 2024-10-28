<?php
$Nombre="Juan";
$MiTexto = "Alan Mathison Turing (Paddington, Londres; 23 de junio de 1912-Wilmslow, Cheshire; 7 de junio de 1954) 
    fue un matemático, lógico, informático teórico, criptógrafo, filósofo y biólogo teórico británico. 
    Es considerado como uno de los padres de la ciencia de la computación y precursor de la informática moderna. 
    Proporcionó una formalización influyente de los conceptos de algoritmo y computación: la máquina de Turing.";
$CorreoElectronico = "elprofesoralberto@gmail.com";
$abecedario = "abcdefghijklmnñopqrstuvwz";
$abc = "abc";


echo "<h1>Ejercicios de expresiones regulares<//h1>";
//Ejercicio 1 - Usando "preg_match()" comprueba se en la variable abecedario existe el patron "abc"
preg_match('/abc/',$abecedario,$matches);
print_r($matches);

//Ejercicio 2 - Usando "preg_match()" comprueba se en la variable abecedario existe el patron "fyu"
preg_match('/fyu/',$abecedario,$matches);
print_r($matches);

//Ejercicio 3 - Comprueba si el la variable "Mitexto" empieza por una a


//Ejercicio 3 b - Usa un "insensitive" para comproebar que  la variable "Mitexto" empieza por una a, independientemente si es mayuscula o minuscula


//Ejercicio 4 - Comprueba si el la variable "Mitexto" termina con la expresión "Turing."


//Ejercicio 5 - Comprueba si en la variable "Nombre" la segunda letra es una vocal.


//Ejercicio 6 - Compruebame que la variable "abecedario" solo contiene letras minusculas


//Ejercicio 7 - Explica para que sirve los metacaracteres "*", "+", y "?" usando un ejemplo de cada uno.


//Ejercicio 8 - Explica para que serve los metacaracteres "{}" Usa un ejemplo.


//Ejercicio 9 - Comprueba que en la variable "MiTexto" aparece la palabra "algoritmo", "ordenador", o "computación"


//Ejericico 10 - Comprueba cuantas veces aparece la palabra "computación" en el texto


//Ejericico 11 - Comprueba cuantas veces aparece la palabra "computación" o "moderna" en el texto


//Ejercicio 12 - Remplaza en "MiTexto" la palabra "padres" por "progenitores"


//Ejercicio 13 - Cuenta cuantos números hay en el texto "MiTexto


//Ejercicio 14 - Comprueba que el correo de la variable $CorreoElectronico es un correo valido, es decir, esta formado por una cadena de al menos 1 caracter de caracteres con
//              letras o numeros, seguido de un "@", seguido de otra cadena de caracteres sin numeros, seguido de ".com"


?>