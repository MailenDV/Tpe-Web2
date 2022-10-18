<?php
/* var_dump($query->errorInfo());*/ 
class LibrosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=libro;charset=utf8', 'root', '');
    }
    
    /**
     * Devuelve la lista de categorias completa.
     */

    function addLibro() {

        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $fecha = $_POST['fecha'];
        $precio = $_POST['precio'];


        $this->model->insertAutor($titulo, $categoria, $fecha, $precio);
        header("Location: " . BASE_URL); 
    }



    public function getAllLibros() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
     
        $query = $this->db->prepare("SELECT * FROM libros");
        $query->execute();
        // 3. obtengo los resultados
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
       
        return $libros;
    }

}