<?php

require "./clases/Personas.php";

class Doctores extends Personas{
    protected $especialidad;
    private $horas_trabajo;
    public $titulo;
    private $lugar_trabajo;
    public $JVPM;

    public function __construct($nombre, $genero, $edad, $direccion, $telefono, $correo, $especialidad, $titulo, $carnet)
    {
        //heredamos la informacion del constructor padre
        parent::__construct($nombre, $genero, $edad, $direccion, $telefono, $correo);
        $this->especialidad = $especialidad;
        $this->titulo = $titulo;
        $this->JVPM = $carnet;
    }

    //atributos privados utilizamos los metodos get y set
    /**
     * get => imprimir el atributo (retornarlo)
     * set => captura la informacion del atributo
     */

    public function setHorasTrabajo($horas){
        $this->horas_trabajo = $horas;
    }

    public function getHorasTrabajo(){
        return "Horas de trabajo: " . $this->horas_trabajo;
    }

    public function setLugarTrabajo($lugar){
        $this->lugar_trabajo = $lugar;
    }

    public function getLugarTrabajo(){
        return "Lugar de trabajo: " . $this->lugar_trabajo;
    }

    //implementando el metodo obligatorio de la clase padre
    public function obtenerInformacion()
    {
        return "<div class='card'>
            <div class='card-body'>
            <h5 class='card-title'>$this->nombre</h5>
            <h6 class='card-subtitle mb-2 text-body-secondary'>$this->especialidad</h6>
            <p class='card-text'>
                <b>Titulo: </b>$this->titulo<br>
                <b>Genero: </b>$this->genero<br>
                <b>Edad: </b>$this->edad<br>
                <b>Direccion: </b>$this->direccion<br>
                <b>Telefono: </b>$this->telefono<br>
                <b>Correo: </b>$this->correo<br>
                <b>JVPM: </b>$this->JVPM<br>
            </p>
            </div>
        </div>";
    }
}




?>