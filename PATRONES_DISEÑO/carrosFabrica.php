<?php

#carro

interface Automovil{
    public function frenar();
    public function acelerar();
    public function retroceder();
}

#productos
class Camioneta implements Automovil{
    public function frenar(){
        return "Has frenado la camioneta";
    }
    public function acelerar(){
        return "Has acelerado la camioneta";
    }
    public function retroceder(){
        return "Has retrocedido la camioneta";
    }
}

class Sedan implements Automovil{
    public function frenar(){
        return "Has frenado el sedan";
    }
    public function acelerar(){
        return "Has acelerado el sedan";
    }
    public function retroceder(){
        return "Has retrocedido el sedan";
    }
}

#metodo fabrica
abstract class FabricaAutos{
    //crear el auto
    abstract function crearAuto() : Automovil; 

    //metodo para imprimir los comportamientos
    public function imprimirComportamiento(){
        //llamamos el metodo para saber que tipo de auto y llamar a sus metodos
        $auto = $this->crearAuto();

        echo $auto->acelerar() . "<br>";
        echo $auto->frenar() . "<br>";
        echo $auto->retroceder() . "<br>";
    }
}

class Toyota extends FabricaAutos{

    public function crearAuto(): Automovil
    {
        return new Sedan;
    }
}

class Honda extends FabricaAutos{
    public function crearAuto(): Automovil
    {
        return new Camioneta;
    }
}

#metodo que devuelve un objeto de la fabrica (FabricaAutos)
function devolverAuto(FabricaAutos $auto){
    $auto->imprimirComportamiento();
}

devolverAuto(new Toyota);
echo "<br>";
devolverAuto(new Honda);





?>