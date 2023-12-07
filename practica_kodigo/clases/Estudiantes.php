<?php

require "./clases/Conexion.php";

class Estudiante extends Conexion{
    //asignamos los atributos de la tabla estudiantes
    protected $id;
    protected $nombre;
    protected $direccion;
    protected $telefono;
    protected $carnet;
    protected $correo;
    protected $password;
    protected $id_bootcamp;

    //metodo para obtener los bootcamps
    public function getBootcamps(){
        //llamamos el metodo que contiene la informacion de la base de datos
        $pdo = $this->conectar();
        //select * from table

        //generamos la consulta sql
        $consulta = $pdo->query("SELECT * FROM bootcamps");
        //ejecutando la consulta sql
        $consulta->execute(); //me manda un arreglo de los bootcamps que hay en la base de datos []

        //asignamos en php que la informacion de la consulta es un arreglo que vamos a iterar
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC); //arreglo de objetos
        return $resultado;
    }
}

?>