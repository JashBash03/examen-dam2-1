<?php
// Generar un número aleatorio entre 1 y 100
$randomNumber = rand(1, 100);

// Determinar si el número es par o impar
$isEvenOrOdd = ($randomNumber % 2 === 0) ? "par" : "impar";

// Crear un array con al menos 5 elementos
$array = ["manzana", "banana", "cereza", "uva", "naranja"];

// Elegir un elemento aleatorio del array
$randomElement = $array[array_rand($array)];

// Crear el arreglo de resultados
$result = [
    "numero" => $randomNumber,
    "es_par_o_impar" => $isEvenOrOdd,
    "elemento_aleatorio" => $randomElement
];

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($result);
?>