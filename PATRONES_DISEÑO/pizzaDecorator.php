<?php

#aplicando el patron decorator
interface Pizza{
    public function preparar();
}

#creamos las clases concretas que implemente la interfaz
class Capressa implements Pizza{
    public function preparar()
    {
        return "Cocinando una pizza capresa";
    }
}

class Hawaiiana implements Pizza{
    public function preparar()
    {
        return "Cocinando una pizza hawaiiana";
    }
}

class Margarita implements Pizza{
    public function preparar()
    {
        return "Cocinando una pizza margarita";
    }
}

class Calzon implements Pizza{
    public function preparar()
    {
        return "Cocinando una pizza margarita";
    }
}

#crear la clase decoradora
class DecoratorPizza implements Pizza{
    //atributo protegido
    protected $propiedad_pizza;

    //constructor, cuando se instancie la clase o clases hijas tiene que devolver la pizza que voy a decorar
    public function __construct(Pizza $pizza) //Hawaiiana
    {
        $this->propiedad_pizza = $pizza;
    }

    //implementamos el metodo de la interfaz
    public function preparar()
    {
        return $this->propiedad_pizza->preparar(); //Cocinando una pizza hawaiiana
    }
}

#clases decoradoras (toppings)
class ExtraQueso extends DecoratorPizza{

    public function preparar()
    {
        //Cocinando una pizza hawaiiana con extra de queso
        return parent::preparar() . " con extra de queso";
    }
}

class ExtraPeperoni extends DecoratorPizza{

    public function preparar()
    {
        //Cocinando una pizza hawaiiana con extra de queso
        return parent::preparar() . " con extra de peperoni";
    }
}

class Aceitunas extends DecoratorPizza{

    public function preparar()
    {
        //Cocinando una pizza hawaiiana con extra de queso
        return parent::preparar() . " con aceitunas";
    }
}

class Hongos extends DecoratorPizza{

    public function preparar()
    {
        //Cocinando una pizza hawaiiana con extra de queso
        return parent::preparar() . " con hongos";
    }
}

function hacerPizza(Pizza $pizza){
    echo "Su pizza ya esta lista: " . $pizza->preparar() . "<br>";
}

//Creamos la pizza con las instancias
$pizza1 = new Margarita();
$pizza1 = new ExtraQueso($pizza1);
$pizza1 = new Aceitunas($pizza1);

hacerPizza($pizza1);



?>