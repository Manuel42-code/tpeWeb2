<?php 

class comentariosModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8', 'root', '');
    }

    function getComent($id){
        $sentencia = $this->db->prepare("select * from comentarios where id = ?");
        $sentencia->execute(array($id));
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }

    function deleteComent($id){
        $sentencia = $this->db->prepare("delete from comentarios where id = ?");
        $sentencia->execute(array($id));
    }

    function getComents($id_piloto){
        $sentencia = $this->db->prepare("select comentarios.*, usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id_usuario where id_piloto = ?");
        $sentencia->execute(array($id_piloto));
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    function insertComent($texto,$puntaje,$id_usuario,$id_piloto){
        date_default_timezone_set('America/Buenos_Aires');
        $fecha = date('Y-m-d H:i:s');
        $sentencia = $this->db->prepare("insert into comentarios (texto,puntaje,fecha,id_usuario,id_piloto) values(?,?,?,?,?)");
        $sentencia->execute(array($texto,$puntaje,$fecha,$id_usuario,$id_piloto));
        return $this->db->lastInsertId();
    }

    function obtenerComentariosOrdenados($criterio,$orden,$id){
        $query = $this->db->prepare("select comentarios.*, usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id_usuario where id_piloto = ?
        order by $criterio"." $orden ");
        $query->execute(array($id));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function obtenerComentariosFiltrados($id,$puntaje){
        $query = $this->db->prepare("select comentarios.*, usuarios.nombre as nombre from comentarios join usuarios on comentarios.id_usuario = usuarios.id_usuario where id_piloto = ?
         and puntaje = ? ");
         $query->execute(array($id,$puntaje));
         $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
         return $comentarios;
    }
}