<?php 

require_once "model/comentariosModel.php";
require_once "view/apiView.php";

class ApiComentsController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new comentariosModel();
        $this->view = new apiView();
    }

    function obtenerComentarios($params = []){
        $id_piloto = $params[":ID"];
        if(isset($_GET['sortBy']) && isset($_GET['orden']) && !empty($_GET['sortBy']) && !empty($_GET['orden'])){
            $comentariosOrdenados = $this->model->obtenerComentariosOrdenados($_GET['sortBy'],$_GET['orden'],$id_piloto);
                return $this->view->respuesta($comentariosOrdenados,200); 
            
        }else if (isset($_GET['filterByPuntaje']) && !empty($_GET['filterByPuntaje'])){
            $comentariosFiltrados = $this->model->obtenerComentariosFiltrados($id_piloto,$_GET['filterByPuntaje']);
                return $this->view->respuesta($comentariosFiltrados,200); 
        }
        else{
        $comentarios = $this->model->getComents($id_piloto);
        return $this->view->respuesta($comentarios,200);
        }
    }

/*function obtenerComentarios($params = null){
    $id = $params[":ID"];

    $comentarios = $this->model->getComents($id);
    return $this->view->respuesta($comentarios,200);
}*/

    function agregarComentario(){
        $body = $this->getBody();
        // $comentario = $body->comentario;
        // $puntaje = $body->puntaje;
        // $usuario = $body->userId;
        // $piloto = $body->id_Piloto;
         var_dump($body->comentario,$body->puntaje,$body->id_usuario,$body->id_piloto);
        if(!empty($body->comentario) && !empty($body->puntaje) && !empty($body->id_usuario) && !empty($body->id_piloto)){
            $id = $this->model->insertComent($body->comentario, $body->puntaje, $body->id_usuario, $body->id_piloto);
            if($id!=0){
                return $this->view->respuesta("El comentario se inserto con el id $id",200);
            }else{
                return $this->view->respuesta("No se pudo insertar comentario",500);
            }
        }else{
            return $this->view->respuesta("Formato incorrecto",400);
        }
    }

    function borrarComentario($params = []){
        $id = $params[":ID"];
        $comentario = $this->model->getComent($id);
        if($comentario){
            $this->model->deleteComent($id);
            return $this->view->respuesta("Comentario con el id ".$id." eliminado",200);
        }else{
            return $this->view->respuesta("No existe ese comentario",404);
        }
    }

    private function getBody(){
        $string = file_get_contents("php://input");
        return json_decode($string);
    }
}