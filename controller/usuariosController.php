<?php 

require_once "model/usuariosModel.php";
require_once "view/usuariosView.php";
require_once "authelper/helpers.php";  

class usuariosController{

    private $model;
    private $view;
    private $helper;
    private $rol;

    function __construct(){
        $this->model = new usuariosModel();
        $this->view = new usuariosView();
        $this->helper = new helpers();
        $this->rol = $this->helper->checkRol();
    }



    function login(){
        $this->view->login();
    }

    function listarUsuarios(){
        $logueado = $this->helper->checkLogin();

        if($logueado == true){
            if($this->rol == "admin"){
                $users = $this->model->getUsers();
                $this->view->usersList($users);
            }
        }
    }

    function hacerAdmin($id){
        $logueado = $this->helper->checkLogin();

        if($logueado == true){
            if($this->rol == "admin"){
                $this->model->actualizarUsuario($id);
                $this->listarUsuarios();
            }
        }
    }

    function borrarUsuario($id){
        $logueado = $this->helper->checkLogin();

        if($logueado == true){
            if($this->rol == "admin"){
                $this->model->deleteUser($id);
                $this->listarUsuarios();
            }
        }
    }

    function ingreso($usuario = null, $contraseña = null){
            if(!empty($_POST['usuario']) && !empty($_POST['contrasenia'])){
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contrasenia'];

            $user = $this->model->getUsuario($usuario);
            if($user && password_verify($contraseña, $user->password)){
                session_start();
                $_SESSION['id'] = $user->id_usuario;
                $_SESSION['usuario'] = $usuario;
                $_SESSION['rol'] = $user->rol;

                $this->view->home();
            }else{
                $this->view->login('contraseña incorrecta');
            }
        }else{
            $this->view->login('debe ingresar bien sus datos');
        }
    }

    function registrarUsuario(){
        $this->view->registrarUsuario();
    }

    function registrarse(){
        if(isset($_POST["usuario"]) && isset($_POST["contrasenia"])){
            $user =  $_POST["usuario"];
            $pass = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);
            $rol = "no-admin";

            $this->model->insertUser($user,$pass,$rol);

            $this->ingreso($user,$pass);
        }
    }

    function logout(){
        $this->helper->logout();
        $this->view->home();
    } 
}