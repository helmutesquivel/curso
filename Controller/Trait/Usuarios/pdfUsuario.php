<?php 

namespace Controller\Trait\Usuarios;
require 'vendor/autoload.php'; //Composer

use Controller\PDF;// Heder u Footer

trait pdfUsuario{
    public function PdfUsuarios(){
        $usuarioAllDB = $this->listarUsuarios();
        $pdf = new PDF();
        $pdf->title="Usuarios";
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        foreach($usuarioAllDB as $usuario){
            $pdf->cell(0,10,$usuario["id"]." ".$usuario["nombres"],0,1);
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