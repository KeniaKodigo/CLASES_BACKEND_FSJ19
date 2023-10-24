<?php

#estructuras condicionales=> if-else, if-else if-else, switch, operador ternario

//if-else

/**
 * rango de salario 
 * renta +560 dolares
 */

function verificarRenta($salario){
    if($salario > 560){
        echo "Debes de pagar renta";
    }else{
        echo "No debes de pagar renta";
    }
}
verificarRenta(340);
#operador ternario
function verificarRentaV2($salario){
    return $salario > 560 ? "Debes de pagar renta" : "no debes de pagar renta";
}

echo verificarRentaV2(561);

#if-else if-else
/**
 * Vehículo	Impuesto
*Vehículo Particular	$0.75
*Autobús	$1.50
*Microbús	$1.25
*Moto taxi	$0.50
*Moto	$0.30
*Otros	$3.00

 */

function calcularImpuesto($vehiculo, $pasajeros){
    if($vehiculo == "vehiculo particular"){
        $total = $pasajeros * 0.75;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "autobus"){
        $total = $pasajeros * 1.50;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "microbus"){
        $total = $pasajeros * 1.25;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "moto taxi"){
        $total = $pasajeros * 0.50;
        echo "El total de impuestos es $total";
    }else if($vehiculo == "moto"){
        $total = $pasajeros * 0.30;
        echo "El total de impuestos es $total";
    }else{
        $total = $pasajeros * 3.00;
        echo "El total de impuestos es $total";
    }

}
echo "<br>";
calcularImpuesto(strtolower("MOTO"), 2);

#SWITCH
function calcularImpuestoV2($tipo, $cantidad){
    switch($tipo){
        case "vehiculo particular":
            $total = $cantidad * 0.75;
            echo "El total de impuestos es $$total";
            break;

        case "autubus":
            $total = $cantidad * 1.50;
            echo "El total de impuestos es $$total";
            break;

        case "microbus":
            $total = $cantidad * 1.25;
            echo "El total de impuestos es $$total";
            break;

        case "moto":
            $total = $cantidad * 1.25;
            echo "El total de impuestos es $$total";
            break;

        default:
            $total = $cantidad * 3.00;
            echo "El total de impuestos es $$total";
            
    }
}

echo "<br>";
calcularImpuestoV2("microbus", 10);



?>