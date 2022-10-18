<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class LibrosView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showLibros($libros) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($libros));
        $this->smarty->assign('libros', $libros);
        // mostrar el tpl
        $this->smarty->display('librosList.tpl');
    }

    function showAutorByLibros($AutorByLibros) {
        // asigno variables al tpl smarty
        $this->smarty->assign('AutorByLibros', $AutorByLibros);
        // mostrar el tpl
        $this->smarty->display('AutorByLibrosList.tpl');
    }
}