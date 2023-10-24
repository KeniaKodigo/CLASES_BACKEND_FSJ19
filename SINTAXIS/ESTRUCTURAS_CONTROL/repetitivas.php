<?php

/**
 * for, foreach, do while, while
 */

//un bucle que empieze del 50 hasta el 100
function bucleFor(){
    for($i = 50; $i <= 100; $i++){
        echo $i . "<br>";
    }
}
//bucleFor();

function bucleForV2(){
    $cadena = "Bootcamp FSJ19";
    /**
     * strlen() => tama;o de la cadena
     */
    for($i = 0; $i < strlen($cadena); $i++){
        #imprimimos cada caracter de la cadena
        echo $cadena[$i] . "<br>";
    }
}

bucleForV2();

function bucleForV3(){
    #iterar el arreglo al reves
    $arreglo = ["manzana","pera","melocoton","uvas"]; //[0]
    /**
     * count() => tama;o del arreglo
     */
    for($i = count($arreglo) - 1; $i >= 0; $i--){
        #imprimimos cada caracter de la cadena
        echo $arreglo[$i] . "<br>";
    }
}

//bucleForV3();

function calcularReprobadosAprobados(){
    $arreglo_notas = [10,2,5,8,6,7,8.5,9.2];
    /**
     * si la nota es mayor o igual a 7 aprueba
     * si es menor a 7 reprobado
     */

    $i = 0;
    $total_aprobados = 0;
    $total_reprobados = 0;
    while($i < count($arreglo_notas)){
        if($arreglo_notas[$i] >= 7){
            $total_aprobados++;
        }else{
            $total_reprobados++;
        }
        $i++;
    }

    echo "El total de estudiantes aprobados: $total_aprobados<br>Total de estudiantes reprobados: $total_reprobados";
}

//calcularReprobadosAprobados();

function doWhile(){
    //calcular la media (suma de los valores / tama;o del arreglo)
    $arreglo = [23,45,67,12,89];

    $i = 0;
    $suma = 0;
    /**
     * 0 + 23 = 23
     * 23 + 45 = 68
     * ...
     */
    do{
        $suma += $arreglo[$i] / count($arreglo);
        $i++;
    }while($i < count($arreglo));

    echo "La media del arreglo es: $suma";
}
doWhile();

#foreach => solo iterar arreglos
function iterarForeach(){
    $arreglo = ["Honduras","El Salvador","Guatemala","Belice"];

    foreach($arreglo as $pais){
        echo "Pais: $pais<br>";
    }
}
echo "<br>";
iterarForeach();







?>