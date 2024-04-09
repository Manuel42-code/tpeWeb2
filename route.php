<?php 

require_once "controller/listadoController.php";
require_once "controller/usuariosController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action = 'home';
}

$listadoController = new listadoController();
$usuariosController = new usuariosController();

$params = explode('/',$action);

switch($params[0]){
    case 'home':
        $listadoController->home();
    break;
    case ' ':
        $listadoController->home();
    break;
    case 'ingresar':
        $usuariosController->login();
    break;
    case 'logout':
        $usuariosController->logout();
        break;
    case 'ingreso':
        $usuariosController->ingreso();
    break;
    case 'usersList':
        $usuariosController->listarUsuarios();
    break;
    case 'hacerAdmin':
        $usuariosController->hacerAdmin($params[1]);
    break;
    case 'borrarUsuario':
        $usuariosController->borrarUsuario($params[1]);
    break;
    case 'registrarUsuario':
        $usuariosController->registrarUsuario();
        break;
    case 'registrarse':
        $usuariosController->registrarse();
    break;
    case 'listaMarcas':
        $listadoController->Brandslist();
        break;
    case 'verCorredor':
        $listadoController->homeRacer($params[1]);
    break;
    case 'verMarca':
        $listadoController->homeBrand($params[1]);
    break;
    case 'borrarCorredor':
        $listadoController->borrarCorredor($params[1]);
    break;
    case 'agregarCorredor':
        $listadoController->agregarCorredor();
        break;
    case 'modificarCorredor':
        $listadoController->modificarCorredor($params[1]);
        break;
    case 'modificarDatos':
        $listadoController->modifyRacer($params[1]);
        break;
}

