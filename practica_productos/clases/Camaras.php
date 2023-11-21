<?php

require './Producto.php';

class Camara extends Producto{
    protected $resolucion;
    private $tipo_lente;

    public function __construct($nombre, $precio, $marca, $resolucion)
    {
        parent::__construct($nombre, $precio, $marca);
        $this->resolucion = $resolucion;
    }

    public function setTipoLente($tipo){
        $this->tipo_lente = $tipo;
    }

    public function getTipoLente(){
        return $this->tipo_lente;
    }

    public function informacionProducto()
    {
        return "<table class='table'>
                    <thead>
                        <th>Camara</th>
                        <th>Marca</th>
                        <th>Resolucion</th>
                        <th>Tipo de lente</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$this->nombre</td>
                            <td>$this->marca</td>
                            <td>$this->resolucion</td> 
                            <td> " . $this->getTipoLente() . "</td>
                            <td>$$this->precio</td>
                        </tr>
                    </tbody>
                </table>";
    }
}

$camara = new Camara("CyberShot X100",400,"FotoTech","20 megapíxeles");
$camara->setTipoLente("Zoom óptico 5x");
echo $camara->informacionProducto();

?>