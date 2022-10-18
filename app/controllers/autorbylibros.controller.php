<?php 
require_once './app/models/autorbylibros.model.php';
require_once './app/views/autorbylibros.view.php';
require_once './app/helpers/auth.helper.php';


class AutorByLibrosController {
   
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new AutorByLibrosModel();
        $this->view = new AutorByLibrosView();

        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }

    public function showAutorByLibros() {
        $libro = $this->model->getAutorByLibros();
        $this->view->showAutorByLibros($libro);    
    }

    function addAutorByLibros() {
        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $autores = $_POST['id_libros'];
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $fecha = $_POST['fecha'];
        $precio = $_POST['precio'];

        $id_libros = $this->model->insertAutorByLibros($autores, $titulo, $categoria, $fecha, $precio);
        header("Location: " . BASE_URL); 
    }

    function deleteAutorByLibros($id_libros) {
        $this->model->deleteAutorByLibrosById($id_libros);
        header("Location: ". BASE_URL. 'autorbylibros');
    }

    function showform($id){
        $this->view->showform($id);
    }

    function editar($id){
        if((isset($_POST))&&(!empty($_POST))){
        $autores = $_POST['autores'];
        $nacionalidad = $_POST['nacionalidad'];

        $this->model->updateAutor($id, $autores, $nacionalidad);
        header("Location: " . BASE_URL . 'autorbylibros');
        }
    }
}

/*function showEditAutorByLibros($id_libros) {
        $this->view->showEditAutorByLibros($id_libros);
    }

    function editAutorByLibros($id) {
        $editarautores = $this->model->editAutorByLibros($id);
        $this->view->showEditAutorByLibros($editarautores);
    }*/





