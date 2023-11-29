<?php

class Pagos{
    public function procesar($tipo){
        switch($tipo){
            case "contado":
                //code..
        }
    }
}

#creamos la interfaz Strategy (donde se van a manejar todas las estrategias)
interface StrategyPagos{
    public function procesar($cantidad);
}

#creamos las estrategias
class Contado implements StrategyPagos{
    public function procesar($cantidad)
    {
        return "Pagas al contado $$cantidad";
    }
}

class TarjetaCredito implements StrategyPagos{
    public function procesar($cantidad)
    {
        return "Pagas con tarjeta de credito $$cantidad";
    }
}

class PayPal implements StrategyPagos{
    public function procesar($cantidad)
    {
        return "Pagas con paypal $$cantidad";
    }
}

#clase que reciba la estrategia que va utilizar el usuario
class HacerPago{

    #atributo privado
    private StrategyPagos $tipo; //objeto de tipo StrategyPagos 
    //get(), set()

    public function setPagos(StrategyPagos $estrategia){
        $this->tipo = $estrategia;
    }

    public function getPagos($cantidad){
        return  $this->tipo->procesar($cantidad);
    }
}

$pago = new HacerPago();
$pago->setPagos(new Contado);
echo $pago->getPagos(500);
echo "<br>";
$pago2 = new HacerPago();
$pago2->setPagos(new TarjetaCredito);
echo $pago2->getPagos(2300);




?>