<?php

require_once './app/models/libros.model.php';
require_once './app/views/libros.view.php';
require_once './app/helpers/auth.helper.php';


class LibrosController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LibrosModel();
        $this->view = new librosView();

        // barrera de seguridad
        //$authHelper = new AuthHelper();
        //$authHelper->checkLoggedIn();

    }
    
    public function showLibros() {
        $libros = $this->model->getAllLibros();
        $this->view->showLibros($libros);
    }



    
}