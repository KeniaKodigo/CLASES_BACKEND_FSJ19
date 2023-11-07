<?php


function quickSort($array){
    //izquierda = [7,14,1,34,56,789] //3
    //derecha = [30] //1
    //condicionamos si el arreglo tiene mas de un elemento
    if(count($array) > 1){
        //$pivote = count($array) - 1; //789
        $pivote = end($array); //789
        $derecha = [];
        $izquierda = [];

        //iterar el arreglo
        for($i = count($array) - 2; $i >= 0; $i--){
            if($pivote > $array[$i]){
                //agregamos un elemento al arreglo izquierda
                //push() => array_push()
                array_push($izquierda,  $array[$i]);
                //$izquierda[] = $array[$i];
            }else{
                array_push($derecha,  $array[$i]);
            }
        }

        //unimos los arreglos => array_merge()
        //izquierda = [7,14,1]
        //pivote = 23
        //derecha = [30]
        return array_merge(quickSort($izquierda),array($pivote),quickSort($derecha));
    }else{
        return $array;
    }
}

print_r(quickSort([23,7,14,30,1]));

?>