<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AutorView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showLibro($libro) {
        
        $this->smarty->assign('count', count($libro)); 
        $this->smarty->assign('libro', $libro);

        $this->smarty->display('autorList.tpl');
    }
  
    function showAutor(){
        header("Location: ".BASE_URL."autor");
        
    }

    function showform($id) {
        // asigno variables al tpl smarty
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('id', $id);
        $this->smarty->display('editList.tpl');
       
    }








    /*function editAutor($id, $autor){
        $smarty = new Smarty();
        $smarty->assign($id, $autor);

        $smarty->display('templates/editList.tpl');
    }*/

    /*function showEdit($id) {
        // asigno variables al tpl smarty
       // $this->smarty->assign('count', count($productos)); 
      
       $this->smarty->assign('id', $id);

        // mostrar el tpl
        $this->smarty->display('editList.tpl');
    }

    function printEdit($editarautores){
        $this->smarty->assign('editarautores', $editarautores);
    }*/
}
