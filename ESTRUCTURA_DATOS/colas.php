<?php

/**
 * Colas: Es una estructura de datos se basa "primero en entrar, primero en salir" (FIFO) (queue)
 */

$cola_verduras = array();

//agregando elementos al arreglo
array_push($cola_verduras, "tomates");
array_push($cola_verduras, "zanahoria");
array_push($cola_verduras, "cebolla");
array_push($cola_verduras, "brocoli");

print_r($cola_verduras);

//array_shift()  => saca el primer elemento del arreglo
array_shift($cola_verduras);
echo "<br>";
print_r($cola_verduras);

//utilizando la clase splQueue (avanzado)

$cola_productos = new SplQueue();
//agregamos elementos a la cola
$cola_productos->enqueue("celular samsung");
$cola_productos->enqueue("teclado");
$cola_productos->enqueue("computadora");
echo "<br>";
print_r($cola_productos);
//quitamos el primer elemento
$cola_productos->dequeue();
echo "<br>";
print_r($cola_productos);
?>