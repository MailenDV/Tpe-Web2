<?php
require_once './app/controllers/autor.controller.php';
require_once './app/controllers/libros.controller.php';
require_once './app/controllers/autorbylibros.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'list':
        $autorController = new AutorController();
        $autorController->showLibro();
    break;
    case 'autorbylibros':
        $autorbylibrosController = new AutorByLibrosController();
        $autorbylibrosController->showAutorByLibros();
    break;
    case 'Listlibros':
        $librosController = new LibrosController();
        $librosController->showLibros();
    break;
    case 'add':
        $autorController = new AutorController();
        $autorController->addAutor();
        break;
    case 'delete':
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->deleteAutor($id);
        break;
    case 'editar':
        $autorController = new AutorController();
        $autorController->editar($params[1]);
    break;
    case 'addAutorByLibros':
        $autorbylibrosController = new AutorByLibrosController();
        $autorbylibrosController->addAutorByLibros();
        break;
    case 'deleteAutorByLibros':
        $autorbylibrosController = new AutorByLibrosController();
        $id = $params[1];
        $autorbylibrosController->deleteAutorByLibros($id);
        break;
    case 'form':
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->showform($id);
    break;
    case 'showEditAutorByLibros':
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->showform($id);
    break;
    case 'editAutor': 
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->showform($id);
    break;
    /*case "editar":
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->editar($id);
        break;*/
    /*case "mostrar":
        $autorController = new AutorController();
        $id = $params[1];
        $autorController->editAutor($id,$autor,$nacionalidad);
    break;*/
    default:
        echo('404 Page not found');
        break;


}