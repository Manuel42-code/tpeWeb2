<?php 

require_once "model/listadomodel.php";
require_once "view/listadoView.php";
require_once "authelper/helpers.php";

class listadoController{

    private $model;
    private $view;
    private $helper;
    private $rol;
    function __construct(){
        $this->model = new listadoModel();
        $this->view = new listadoView();
        $this->helper = new helpers();
        $this->rol = $this->helper->checkRol();
    }

    function home(){
        $logueado = $this->helper->checklogin();

        
            $corredores = $this->model->getRacersList();
            $this->view->showList($corredores,$logueado,$this->rol);
        

    }

    function Brandslist(){
        $marcas = $this->model->getBrandsList();
        $this->view->showBrandsList($marcas);
    }

    function homeRacer($id){
        $logueado = $this->helper->checklogin();

        $userId = $this->helper->checkUserId();

        $corredor = $this->model->getRacer($id);
        $this->view->showRacer($corredor,$logueado,$this->rol,$userId);
        
    }

    function homeBrand($id){
        $marca = $this->model->getBrand($id);
        $CorredoresXMarca = $this->model->getRacersByBrand($id);
        $this->view->showBrand($marca,$CorredoresXMarca);
    }

    function borrarCorredor($id){
        $logueado = $this->helper->checklogin();

        if($logueado == true){
            $this->model->borrarCorredor($id);
            $this->view->home();
        }
    }

    function agregarCorredor(){
        $logueado = $this->helper->checklogin();

        if($logueado == true){
            if(isset($_POST['marca'])){
                $marca = $_POST['marca'];

                switch($marca){
                    case 'Buick':
                        $id_marca = 0;
                        $nombre_marca = "Buick";
                    break;
                    case 'Chevrolet':
                        $id_marca = 1;
                        $nombre_marca = "Chevrolet";
                        break;
                    case 'Ford':
                        $id_marca = 2;
                        $nombre_marca = "Ford";
                        break;
                    case 'Pontiac':
                        $id_marca = 3;
                        $nombre_marca = "Pontiac";
                        break;
                    case 'Oldsmobile':
                        $id_marca = 4;
                        $nombre_marca = "Oldsmobile";
                        break;
                }

                $this->model->agregarCorredor($_POST["nombre"],$_POST["apellido"],$nombre_marca,$_POST["img"],$id_marca,$_POST["numero"],$_POST["poles"],$_POST["ganadas"],$_POST["cantCarreras"]);
            }
        }
        $this->view->home();
    }

    function modificarCorredor($id){
        $logueado = $this->helper->checkLogin();

        if($logueado==true){
            $corredor = $this->model->getRacer($id);
            $this->view->modificadorCorredor($corredor);
        }
    }

    function modifyRacer($id){
        $logueado = $this->helper->checkLogin();

        if($logueado == true){
            if(isset($_POST['marca'])){
                $marca = $_POST['marca'];

                switch($marca){
                    case 'Buick':
                        $id_marca = 0;
                        $nombre_marca = "Buick";
                    break;
                    case 'Chevrolet':
                        $id_marca = 1;
                        $nombre_marca = "Chevrolet";
                        break;
                    case 'Ford':
                        $id_marca = 2;
                        $nombre_marca = "Ford";
                        break;
                    case 'Pontiac':
                        $id_marca = 3;
                        $nombre_marca = "Pontiac";
                        break;
                    case 'Oldsmobile':
                        $id_marca = 4;
                        $nombre_marca = "Oldsmobile";
                        break;
                }

                $this->model->modifyRacer($_POST["nombre"],$_POST["apellido"],$nombre_marca,$_POST["img"],$id_marca,$_POST["numero"],$_POST["poles"],$_POST["ganadas"],$_POST["cantCarreras"],$id);
            }
        }
        $this->view->home();
    }
}