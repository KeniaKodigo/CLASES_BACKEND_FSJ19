<?php

require './Producto.php';

class Camara extends Producto{
    protected $sistema_operativo;
    protected $almacenamiento;

    public function __construct($nombre, $precio, $marca, $sistema, $almacenamiento)
    {
        parent::__construct($nombre, $precio, $marca);
        $this->sistema_operativo = $sistema;
        $this->almacenamiento = $almacenamiento;
    }

    public function informacionProducto()
    {
        return "<table class='table'>
                    <thead>
                        <th>Laptop</th>
                        <th>Marca</th>
                        <th>Sistema Operativo</th>
                        <th>Capacidad Almacenamiento</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$this->nombre</td>
                            <td>$this->marca</td>
                            <td>$this->sistema_operativo</td> 
                            <td>$this->almacenamiento</td>
                            <td>$$this->precio</td>
                        </tr>
                    </tbody>
                </table>";
    }
}


?>