<?php

function verificarPalindromo($cadena){
    //eliminando los espacios de la cadena
    //hola como esta
    //holacomoestas
    $cadena = strtolower(str_replace(' ','',$cadena));

    $objeto_pila = new SplStack();
    $objeto_cola = new SplQueue();

    for($i=0; $i < strlen($cadena); $i++){
        //agregamos los caracteres de la cadena a la pila y a la cola
        $objeto_pila->push($cadena[$i]); //[h,o,l,a,c,o,m,o,e,s,t,a,s]
        $objeto_cola->enqueue($cadena[$i]); //[h,o,l,a,c,o,m,o,e,s,t,a,s]
    }

    while(!$objeto_pila->isEmpty() && !$objeto_cola->isEmpty()){
        if($objeto_pila->pop() !== $objeto_cola->dequeue()){
            return "No es palindromo";
        }
    }

    return "Es palindromo";
}

echo verificarPalindromo("hola, como estas");

?>