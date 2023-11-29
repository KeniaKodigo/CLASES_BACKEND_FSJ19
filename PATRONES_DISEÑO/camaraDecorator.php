<?php

interface Camara{
    public function capturarFoto();
}

class Sonic implements Camara{
    public function capturarFoto()
    {
        return "La camara que se utilizo fue la sonic";
    }
}

class Canon implements Camara{
    public function capturarFoto()
    {
        return "La camara que se utilizo fue la canon";
    }
}

class Olimpus implements Camara{
    public function capturarFoto()
    {
        return "La camara que se utilizo fue la sonic";
    }
}

class DecoratorCamara implements Camara{
    protected $propiedad_camara;

    public function __construct(Camara $camara)
    {
        $this->propiedad_camara = $camara;
    }

    public function capturarFoto()
    {
        return $this->propiedad_camara->capturarFoto();
    }
}

class Lente extends DecoratorCamara{

    public function capturarFoto()
    {
        return parent::capturarFoto() . " y tiene un lente de 18mm";
    }
}

class Flash extends DecoratorCamara{

    public function capturarFoto()
    {
        return parent::capturarFoto() . " y tiene flash";
    }
}

class Tripode extends DecoratorCamara{

    public function capturarFoto()
    {
        return parent::capturarFoto() . " y tiene tripode";
    }
}

class Estabilizador extends DecoratorCamara{

    public function capturarFoto()
    {
        return parent::capturarFoto() . " y tiene estabilizador";
    }
}

function hacerFoto(Camara $camara){
    echo $camara->capturarFoto();
}

$camara = new Sonic();
$camara = new Lente($camara);
$camara = new Tripode($camara);
$camara = new Flash($camara);

hacerFoto($camara);


?>