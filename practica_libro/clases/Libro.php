<?php

class Libro{
    #asignacion de atributos
    public $titulo;
    public $edicion;
    public $autor;
    protected $numero_paginas;
    public $descripcion;
    public $categoria;
    public $editorial;
    

    //constructor para inicializar nuestro objeto Libro
    public function __construct($nombre, $edicion, $autor, $descripcion, $categoria)
    {
        //accediendo al atributo y asignadole argumento
        $this->titulo = $nombre;
        $this->edicion = $edicion;
        $this->autor = $autor;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
    }

    //metodo para ingresar anuncios en base a la categoria del libro
    public function verificarCategoria(){
        switch($this->categoria){
            case "aventuras":
                echo "<div class='alert alert-primary' role='alert'>
                    Hey! este libro tiene el 30% de descuento
                </div>";
                break;
            case "terror":
                echo "<div class='alert alert-secondary' role='alert'>
                    Si compras un segundo libro, te llevas un disfraz gratis
                </div>";
                break;
            case "ficcion":
                echo "<div class='alert alert-warning' role='alert'>
                    Llevate la tarjeta para acumular puntos y seguir comprando tus libros favoritos
                </div>";
                break; 
            case "programacion":
                echo "<div class='alert alert-success' role='alert'>
                    Vas a ser un buen programador!
                </div>";
                break;
            default:
                echo "Ingrese una categoria correcta";
        }
    }

    //metodo para verificar si la persona que selecciono la categoria "terror" verificar si su edad es mayor a 18 para comprarlo o no
    public function verificarEdadByCategoria($edad){
        if($this->categoria == "terror"){
            if($edad >= 18){
                echo "<div class='alert alert-primary' role='alert'>
                    Si puedes obtener todos los libros de terror que quieras!
                </div>";
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                    No puedes obtener el libro de terror :(
                </div>";
            }
        }
    }

    //metodos estaticos
    public static function infor(){
        //code
    }

}






?>