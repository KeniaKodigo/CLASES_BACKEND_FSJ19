<?php

#clase bajo nivel
class ReporteFPDF{
    public function exportar(){
        return "Exportando el documento en FPDF";
    }
}

#alto nivel
class Inventario{
    public function procesarProductos(){
        //instancia (creando un objeto)
        $doc = new ReporteFPDF();
        $doc->exportar();
    }
}


#deben de depender de abstracciones

interface tipoPDF{
    public function generarDocumento();
}

class FPDF implements tipoPDF{
    public function generarDocumento()
    {
        return "estas trabajando con la libreria fpdf";
    }
}

class DOMPDF implements tipoPDF{
    public function generarDocumento()
    {
        return "estas trabajando con la libreria dompdf";
    }
}

class MPDF implements tipoPDF{
    public function generarDocumento()
    {
        return "estas trabajando con la libreria mpdf";
    }
}

class GestionInventario{

    //clase fpdf o dompdf o mpdf
    public function procesarProductos(tipoPDF $pdf){
        return $pdf->generarDocumento();
    }
}

$inventario = new GestionInventario();
$inventario->procesarProductos(new FPDF); //estas trabajando con la libreria fpdf

$inventario2 = new GestionInventario();
$inventario2->procesarProductos(new DOMPDF); //estas trabajando con la libreria dompdf

?>