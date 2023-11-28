<?php

#asignando los productos (los objetos que vamos a crear)
//Barco y Camion

#creando la interfaz para los productos
interface Transporte{
    public function procesarEnvio();
}

class Camion implements Transporte{
    
    public function procesarEnvio()
    {
        return "El envio se ha realizado a travez de un camion";
    }
}

class Barco implements Transporte{
    
    public function procesarEnvio()
    {
        return "El envio se ha realizado a travez de un barco";
    }
}

class Moto implements Transporte{
    public function procesarEnvio()
    {
        return "El envio se ha realizado a travez de un moto";
    }
}


#crear el metodo de fabrica (clase abstracta)
abstract class Logistica{
    #metodo abstracto que devuelva un producto
    abstract function crearTransporte() : Transporte; //crear objetos, hacer una instancia (new Camion) (new Barco)

    //abstract function otro(Transporte $transporte); //llamar el proceso de lo que yo tenga en las clases

    public function procesarComportamientoTransporte(){
        //llamamos al metodo crearTransporte()
        $transporte = $this->crearTransporte(); //Camion
        return $transporte->procesarEnvio(); //"El envio se ha realizado a travez de un camion";
    }
}

#subfabricas 
//las subfabricas van a contener el productos o los productos que quiero crear
class viaTerrestre extends Logistica{

    public function crearTransporte(): Transporte
    {
        return new Camion;
    }
}

class viaMaritima extends Logistica{

    public function crearTransporte(): Transporte
    {
        return new Barco;
    }
}

#instanciemos las clases
//crear un metodo extra
function obtenerTipoLogistica(Logistica $envio){
    return $envio->procesarComportamientoTransporte();
}

//llamado
echo obtenerTipoLogistica(new viaMaritima); //El envio se ha realizado a travez de un barco

echo obtenerTipoLogistica(new viaTerrestre); //El envio se ha realizado a travez de un camion

?>