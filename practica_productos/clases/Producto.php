<?php

abstract class Producto{
    protected $nombre;
    protected $precio;
    protected $marca;

    public function __construct($nombre, $precio, $marca)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->marca = $marca;
    }

    public abstract function informacionProducto();
}


?>