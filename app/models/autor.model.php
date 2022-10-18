<?php

class AutorModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=libro;charset=utf8', 'root', '');
    }

    public function getAllLibro() {
     
        $query = $this->db->prepare("SELECT * FROM autor");
        $query->execute();

        $libro = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $libro;
    }

    public function GetLibro($id) {
     
        $query = $this->db->prepare("SELECT * FROM autores WHERE id=?");
        $query->execute([$id]);

        $libro = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $libro;
    }

     function insertAutor($autores, $nacionalidad) {
        $query = $this->db->prepare("INSERT INTO autor (autores, nacionalidad) VALUES (?, ?)");
        $query->execute([$autores, $nacionalidad]);

        return $this->db->lastInsertId();
    }

    function deleteAutorById($id) {
        $query = $this->db->prepare("DELETE FROM autor WHERE id = ?");
        $query->execute([$id]);
        
    }

    function getAutor($id){
        $query = $this->db->prepare("SELECT * FROM autor WHERE id=?");
        $query->execute([$id]);
        $autor = $query->fetch(PDO::FETCH_OBJ);
        return $autor;
    }

    function updateAutor($id, $autores, $nacionalidad) {
        $query = $this->db->prepare("UPDATE autor SET autores=?, nacionalidad=? WHERE id=?");
        $query->execute([$id, $autores, $nacionalidad]);
        //var_dump($query->errorInfo()); // y eliminar la redireccion
    }

  









    /*function ediAutor($id){
        $autor = $this->modelAutor->getAutor($id);
        $this->view->editAutor($id, $autor);
    }

    function updateAutor($id, $autores, $nacionalidad){

        $query = $this->db->prepare("UPDATE autor SET autores=?, nacionalidad=? WHERE id=?");
        $autor = $query->execute(array($id,$autores,$nacionalidad));
        return $autor;
    }


    function editar($id,$autores,$nacionalidad){
        $query = $this->db->prepare("UPDATE autor SET autores=?, nacionalidad=? WHERE id=?");
        $query->execute(array($id,$autores,$nacionalidad));
    }*/

    /*function traerautor($id){
        $query = $this->db->prepare("SELECT * FROM autor WHERE id=?");
        $query->execute(array($id));
        $autor = $query->fetchAll(PDO::FETCH_OBJ);
        return $autor;
    }*/
}
