<?php 

namespace Controller\Trait\Usuarios;

use Model\UsuarioModel;

 trait listPdfUsuario{
    public function listarUsuarios(){
        $listado = UsuarioModel::mostrarUsuariosPdf();
        return $listado;
    }
 }



?>