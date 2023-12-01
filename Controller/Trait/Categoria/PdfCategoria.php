<?php
namespace Controller\Trait\Categoria;
require 'vendor/autoload.php'; //Composer
use FPDF;
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('Assets/logo_intecap.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(70,10,utf8_decode('Categoria'),1,0,'C');
    // Line break
    $this->Ln(20);
    }

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

trait PdfCategoria{
    
    public function generate(){
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);

        //Llamar a un controlador y obtener datos de la BD
        // Usuarios -> Obtengo listado
       /*
        $estudiante = new InscripcionController();
        $inscripciones = $estudiante->mostrar();
        foreach($inscripciones as $inscripcion){
                $pdf->Cell(50,10,$inscripcion["idinscripcion"], 1, 0, 'C', 0);
                $pdf->cell(50,10, $inscripcion["nombres"], 1, 0, 'C', 0);
                $pdf->cell(50,10,$inscripcion["curso"],1, 1, 'C', 0);
        } 
*/
        ob_end_clean();
        $pdf->Output();
       
    }
}
?>