<?php

/**
 * Pilas: Es una estructura de datos se basa "ultimo en entrar, primero en salir" (LIFO) (stack)
 */

$pila_verduras = array();

//agregando elementos al arreglo
array_push($pila_verduras, "tomates");
array_push($pila_verduras, "zanahoria");
array_push($pila_verduras, "cebolla");
array_push($pila_verduras, "brocoli");

print_r($pila_verduras);

//array_pop() 
array_pop($pila_verduras);
echo "<br>";
print_r($pila_verduras);

//utilizando la clase splStack (avanzado)

$pila_productos = new SplStack();
$pila_productos->push("celular samsung");
$pila_productos->push("teclado");
$pila_productos->push("computadora");
echo "<br>";
print_r($pila_productos);

$pila_productos->pop();
echo "<br>";
print_r($pila_productos);




?>