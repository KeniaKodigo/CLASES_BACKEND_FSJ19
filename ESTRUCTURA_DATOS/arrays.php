<?php

//arreglo indexado
$frutas = ["manzana","fresas","melocotones","peras"];
//posiciones (index) empiezan de 0

//arreglo asociativo
$uvas = [
    "nombre_fruta" => "uvas",
    "colores" => ["moradas","verdes"],
    "forma" => "redonda"
];
$uvas["colores"]; //["moradas","verdes"]

//arreglo multidimensional (matriz)
$numeros = array(
    array(23,4,5),
    array(34,45,67),
    array(78,90,43)
);

$numeros[2]; //[78,90,43]
$numeros[2][1]; //90

/** arreglo multidimensional asociativo */

$frutas2 = array(
    "fruta1" => [
        "nombre_fruta" => "uvas",
        "colores" => ["moradas","verdes"],
        "forma" => "redonda"
    ],
    "fruta2" => [
        "nombre_fruta" => "manzanas",
        "colores" => ["rojas","verdes"],
        "forma" => "redonda, tiene forma de corazon"
    ],
    "fruta3" => [
        "nombre_fruta" => "naranjas",
        "colores" => ["amarillas","verdes","naranjas"],
        "forma" => "redonda"
    ]
);

$frutas2["fruta1"]["nombre_fruta"]; //uvas



?>