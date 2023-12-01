<?php

namespace Controller;
use Model\CategoriaModel;
use Controller\PDF;
//use Trait\Categoria\PdfCategoria;


class CategoriaController{
   // use PdfCategoria;

    public function mostrar(){
        $inscripcion = CategoriaModel::mostrarCategoria();
        return $inscripcion;//se van a la vista
    }

    public function mostrarCursos(){
        if(!empty($_POST['idcategoria'])){
            //Filtro para esos valores
            $cursos = CategoriaModel::mostrarCursoCategoria($_POST['idcategoria']);
            return $cursos;
        }
    }
    public function PdfCategorias(){
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        for($i=1;$i<=40;$i++){
            $pdf->cell(0,10, 'Categorias ',$i,0,1);
        }      
        ob_end_clean();
        $pdf->Output();
      
    }
}


?>