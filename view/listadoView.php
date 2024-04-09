<?php

require_once './libs/smarty-4.3.1/libs/Smarty.class.php';

class listadoView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function home(){
        header("location: ".BASE_URL."home");
    }

    function showList($corredores,$logueado,$rol){
        $this->smarty->assign('titulo','Esta es la lista de los corredores de la temporada 1987 de la nascar');
        $this->smarty->assign('corredores', $corredores);
        $this->smarty->assign('logueado',$logueado);
        $this->smarty->assign('rol',$rol);
        $this->smarty->display('templates/lista.tpl');
    }

    function showBrandsList($marcas){
        $this->smarty->assign('titulo','Esta es la lista de las marcas de la temporada 1987 de la nascar');
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('templates/listaMarcas.tpl');
    }

    function showRacer($corredor,$logueado,$rol,$id_usuario){
        $this->smarty->assign('titulo','Estadisticas de la temporada 1987 de ');
        $this->smarty->assign('corredor',$corredor);
        $this->smarty->assign('logueado',$logueado);
        $this->smarty->assign('rol',$rol);
        $this->smarty->assign('id_usuario',$id_usuario);
        $this->smarty->display('templates/corredor.tpl');
    }

    function showBrand($marca,$corredores){
        $this->smarty->assign('titulo','Estadisticas de la temporada 1987 de ');
        $this->smarty->assign('subtitulo','corredores con la marca');
        $this->smarty->assign('marca',$marca);
        $this->smarty->assign('corredores',$corredores);
        $this->smarty->display('templates/marca.tpl');
    }

    function modificadorCorredor($corredor){
        $this->smarty->assign('corredor',$corredor);
        $this->smarty->display('templates/modificadorMarca.tpl');
    }

}