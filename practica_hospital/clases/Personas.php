<?php

/**
 * asignando la clase padre como abstracta
 */

abstract class Personas{
    protected $nombre;
    protected $genero;
    protected $edad;
    protected $direccion;
    protected $telefono;
    protected $correo;

    public function __construct($nombre, $genero, $edad, $direccion, $telefono, $correo)
    {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->edad = $edad;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    //metodo obligatorio para las clases hijas
    abstract function obtenerInformacion();
}

?>