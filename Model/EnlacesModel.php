<?php

namespace Model;

class EnlacesModel{

    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio" => "View/pages/inicio.php",
            "contacto" => "View/pages/contacto.php",
            "nosotros" => "View/pages/nosotros.php",
            "inscripcion" => "View/inscripcion/inscripcion.php",
            "verinscripcion" => "View/inscripcion/mostrarinscripcion.php",
            "editarInscripcion" => "View/inscripcion/editarInscripcion.php",
            "eliminarInscripcion" => "View/inscripcion/eliminarInscripcion.php",
            "login" => "View/users/login.php",
            "logout" => "View/users/logout.php",
            "inscripcioncategoria" => "View/inscripcion/categoria.php",
            "crearUsuarioEstudiante" => "View/users/nuevoUsuario.php",
            "grafica" => "View/extras/grafica.php",
            "pdf" => "View/extras/pdf.php",
            "mostrarTablas" => "View/extras/mostrarTablas.php",
            "pdfCategoria" => "View/Categorias/PdfCategorias.php",
            "pdfUsuario" => "View/users/pdfUsuarios.php",
            "recibirCursoAjax" => "View/cursos/recibirCursoAjax.php",
            "enviarCursoAjax" => "View/cursos/enviarCursoAjax.php",
            default => "View/pages/error.php"
        };
        return $modulo;
    }

}

?>