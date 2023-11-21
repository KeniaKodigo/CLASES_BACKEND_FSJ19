<?php
#violando el principio
interface GestionDatos{
    public function agregar();
    public function actualizar();
    public function eliminar();
    public function calcularSalario();
    public function generarPlanilla();
}

class Empleado implements GestionDatos{
    public function agregar()
    {
        
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }

    public function calcularSalario()
    {
        throw new Exception("Solo la area administrativa puede realizar la accion");
    }

    public function generarPlanilla()
    {
        throw new Exception("Solo la area administrativa puede realizar la accion");
    }
}

#aplicando el principio de segregacion de interfaces
interface CRUDEmpleados{
    public function agregar();
    public function actualizar();
    public function eliminar();
}

interface GestionPlanilla{
    public function calcularSalario();
    public function generarPlanilla();
}

class Employee implements CRUDEmpleados{
    public function agregar()
    {
        
    }

    public function actualizar()
    {
        
    }

    public function eliminar()
    {
        
    }
}

class Administracion implements GestionPlanilla{
    public function calcularSalario()
    {
        //code..
    }

    public function generarPlanilla()
    {
        //code..
    }
}



?>