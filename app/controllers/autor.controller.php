<?php
require_once './app/models/autor.model.php';
require_once './app/views/autor.view.php';
require_once './app/helpers/auth.helper.php';

class AutorController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new AutorModel();
        $this->view = new AutorView();

        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }

    public function showLibro() {
        $libro = $this->model->getAllLibro();
        $this->view->showLibro($libro);
        
    }

    function addAutor() {

        $autores = $_POST['autor'];
        $nacionalidad = $_POST['nacionalidad'];

        $this->model->insertAutor($autores, $nacionalidad);
        header("Location: " . BASE_URL); 
    }

    function deleteAutor($id) {
        $this->model->deleteAutorById($id);
        header("Location: " . BASE_URL);

    }

    public function showAutor() {
        $libro = $this->model->getAllLibro();
        $this->view->showAutor($libro);
        
    }

    function showform($id){
        $this->view->showform($id);
    }

    function editar($id){
        if((isset($_POST))&&(!empty($_POST))){
        $autores = $_POST['autores'];
        $nacionalidad = $_POST['nacionalidad'];

        $this->model->updateAutor($id, $autores, $nacionalidad);
        header("Location: " . BASE_URL . 'list');
        }
    }




    

    /**/

    /*function showEdit($id) {
        $this->view->showEdit($id);
    }*/

    /*function editAutor($id) {
        $autor = $this->model->getAutor($id);
        $this->view->showAutor($autor);
    }

    function updateAutor(){

        $id = $_POST['id'];
        $autores = $_POST['autor'];
        $nacionalidad = $_POST['nacionalidad'];

        $this->modelAutor->updateAutor($id, $autores, $nacionalidad);
        header("Location: " . BASE_URL);
    }*/
}