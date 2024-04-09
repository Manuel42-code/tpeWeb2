<?php 

class usuariosModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8', 'root', '');
    }

    function getUsuario($nombre){
        $sentencia = $this->db->prepare('select * from usuarios where nombre = ?');
        $sentencia->execute(array($nombre));
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }

    function getUserId($nombre){
        $sentencia = $this->db->prepare('select id_usuario from usuarios where nombre = ?');
        $sentencia->execute(array($nombre));
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }



    function getUsers(){
        $sentencia = $this->db->prepare('select * from usuarios');
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    function actualizarUsuario($id){
        $sentencia = $this->db->prepare('update usuarios set rol = "admin" where id_usuario = ?');
        $sentencia->execute(array($id));
    }

    function insertUser($user,$pass,$rol){
        $sentencia = $this->db->prepare("insert into usuarios (nombre, password, rol) values (?,?,?)");
        $sentencia = $sentencia->execute(array($user,$pass,$rol));
    }

    function deleteUser($id){
        $sentencia = $this->db->prepare('delete from usuarios where id_usuario = ?');
        $sentencia->execute(array($id));
    }
}