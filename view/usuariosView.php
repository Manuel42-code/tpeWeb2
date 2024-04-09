<?php 

require_once './libs/smarty-4.3.1/libs/Smarty.class.php';

class usuariosView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function home(){
        header("location:".BASE_URL."home");
    }

    function login($error = ""){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/loginMenu.tpl');
    }

    function usersList($usuarios, $informe = null){
        $this->smarty->assign('titulo','listado de usuarios');
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->display('templates/listaUsuarios.tpl');

    }

    function registrarUsuario(){
        $this->smarty->display('templates/registrarse.tpl');
    }
}