<?php
namespace Controller\Trait\Categoria;
require 'vendor/autoload.php'; //Composer
use FPDF;
use Controller\PDF;// Heder u Footer

trait PdfCategorias{ 
    public function PdfCategorias(){
        $categoriasAllDB = $this->mostrar();
        $pdf = new PDF();
        $pdf->title="categoria";
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        foreach($categoriasAllDB as $categoria){
            $pdf->cell(0.10,$categoria["id"]." ",$categoria["categoria"],0,1);
        }
        /*
        for($i=1;$i<=40;$i++){
            $pdf->cell(0,10, 'Categorias ',$i,0,1);
        } */     
        ob_end_clean();
        $pdf->Output();
    
    }
}
?>