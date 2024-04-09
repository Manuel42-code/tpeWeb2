<?php 

require_once "libs/Route.php";
require_once "Controller/ApiComentsController.php";
require_once "Controller/ApiUsersController.php";
 
$router = new Router();

$router->addRoute('corredores/:ID/comentarios','GET','ApiComentsController','obtenerComentarios');
$router->addRoute('corredores/:ID/comentarios','DELETE','ApiComentsController','borrarComentario');
$router->addRoute('corredores/comentarios','POST','ApiComentsController','agregarComentario');
//$router->addRoute('tareas/:ID','PUT','ApiTaskController','actualizarTarea');

$router->addRoute('users/token','GET','ApiUserController','obtenerToken');
$router->addRoute('users/:ID','GET','ApiUserController','obtenerUsuario');


$router->route($_GET["resource"],$_SERVER['REQUEST_METHOD']);