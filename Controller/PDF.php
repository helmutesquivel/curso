<?php
namespace Controller;
require 'vendor/autoload.php'; //Composer
use FPDF;

class PDF extends FPDF
{
        public $title="";
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
        $this->Cell(70,10,$this->title,1,0,'C');
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

?>