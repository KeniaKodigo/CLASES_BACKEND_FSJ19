<?php

#violando el principio
class Tarea{
    public $titulo;
    public $descripcion;
    public $fecha;

    public function __construct()
    {
        
    }

    public function agregar(){
        //code..
        CRUDConsultas::insert("tareas",[""]); //generar en la bd
    }

    public function actualizar(){

    }

    public function marcar_completada(){
        //code..
    }

}

#solucion para aplicar el principio de responsabilidad unica

class Conexion{
    protected $servidor;
    protected $puerto;
    protected $gestor;
    protected $nombre_bd;

    public function conectarBD(){
        //code..
    }

}

class CRUDConsultas{

    public static function insert($table, $valores){
        //insert into $table () VALUES ()..
    }

    public static function update(){
        //update table ..
    }
}

class GenerarDocumento{
    public function tareasPendientes(){
        //code..
    }

    public function tareasHechas(){
        //code..
    }
}


?>