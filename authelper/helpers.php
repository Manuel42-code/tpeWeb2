<?php 

class helpers{


    function __construct(){
        
    }

    function checkUserId(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION['id'])){
            return $_SESSION['id'];
        }
    }

    function checkLogin(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION["usuario"])){
            return true;
        }else{
            return false;
        }
    }

    function checkRol(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION["rol"])){
            return $_SESSION["rol"];
        }
    }

    function logout(){
        if(session_status() === PHP_SESSION_NONE){    
         session_start();
        }
        session_destroy();
    }
}