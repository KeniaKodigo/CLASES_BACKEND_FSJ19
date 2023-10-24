<?php

/**
 * arreglos asociativos
 */

$arreglo_personas = [
    array("nombre" => "Ignacio", "edad" => 25),
    array("nombre" => "Ismar", "edad" => 23),
    array("nombre" => "Claudia", "edad" => 17),
    array("nombre" => "Christian", "edad" => 27),
    array("nombre" => "Maria", "edad" => 24)
];

//filter => array_filter()
$arreglo_filtrado = array_filter($arreglo_personas, function($persona){
    return $persona["edad"] > 18;
});

print_r($arreglo_filtrado);




?>