<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AutorByLibrosView {

    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    
    }
        
    function showAutorByLibros($AutoresByLibros) {
        // asigno variables al tpl smarty

        $this->smarty->assign('count', count($AutoresByLibros));
        $this->smarty->assign('AutoresByLibros', $AutoresByLibros); 

        // mostrar el tpl
        $this->smarty->display('AutorByLibros.tpl');  
    }

    function showLibro(){
        header("Location: ".BASE_URL."libros");
    }

    function showAutorByLibro($AutorByLibros) {
        // asigno variables al tpl smarty
        $this->smarty->assign('AutorByLibros', $AutorByLibros);
        // mostrar el tpl
        $this->smarty->display('AutorByLibrosList.tpl');
    }

    function showEditAutorByLibros($id_libros) {
        // asigno variables al tpl smarty
       // $this->smarty->assign('count', count($productos)); 
      
       $this->smarty->assign('id_libros', $id_libros);

        // mostrar el tpl
        $this->smarty->display('AutorByLibrosList.tpl');
    }

    function showform($id_libros) {
        // asigno variables al tpl smarty
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('id_libros', $id_libros);
        $this->smarty->display('editAutorByLibrosList.tpl');
       
    }
}
    
