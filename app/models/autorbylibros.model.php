<?php

class AutorByLibrosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=libro;charset=utf8', 'root', '');
    }

    public function getAllAutorByLibros() {
     
        $query = $this->db->prepare("SELECT * FROM libros");
        $query->execute();

        $libro = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $libro;
    }

    /*** Devuelve la lista de productos por categoria.*/
    function getAutorByLibros() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)

        $query = $this->db->prepare("SELECT libros.*, libros.autores, libros.titulo, libros.categoria, libros.fecha, libros.precio FROM autor JOIN libros ON autor.id=libros.id_autor");
        $query->execute();

            // 3. obtengo los resultados
        $AutoresByLibros = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $AutoresByLibros;

       // var_dump($query->errorInfo());

            // barrera de seguridad
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
    }

    public function insertAutorByLibros($autores, $titulo, $categoria, $fecha, $precio) {
        $query = $this->db->prepare("INSERT INTO libros (autores, titulo, categoria, fecha, precio) VALUES (?,?,?,?,?)");
        $query->execute([$autores, $titulo, $categoria, $fecha, $precio]);

        return $this->db->lastInsertId();
    }

    /*** Se elimina una tarea dado su id. */
    function deleteAutorByLibrosById($id_libros) {
        $query = $this->db->prepare("DELETE FROM libros WHERE id_libros = ?");
        $query->execute([$id_libros]);
        //var_dump($query->errorInfo());
    }

    function updateAutor($id_libros) {
        $query = $this->db->prepare("UPDATE libros SET autores=?, titulo=?, categoria=?, fecha=?, precio=? WHERE id_libros=?");
        $query->execute([$id_libros]);
        //var_dump($query->errorInfo()); // y eliminar la redireccion
    }

    
    /*public function getAllAutorByLibros() {
     
        $query = $this->db->prepare("SELECT * FROM libros");
        $query->execute();

        $AutoresByLibros = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $AutoresByLibros;
    }*/
}

?>