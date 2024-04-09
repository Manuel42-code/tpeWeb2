<?php 

class listadoModel{

     private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8', 'root', '');
    }

    function getRacersList(){
        $sentencia = $this->db->prepare('select * from pilotosnascar87');
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    function getBrandsList(){
        $sentencia = $this->db->prepare('select * from marcasnascar87');
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    function getRacer($id){
        $sentencia = $this->db->prepare('select * from pilotosnascar87 where id_Piloto = ?');
        $sentencia->execute(array($id));
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }

    function getRacersByBrand($id){
        $sentencia = $this->db->prepare('select * from pilotosnascar87 where id_marca = ?');
        $sentencia->execute(array($id));
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    function getBrand($id){
        $sentencia = $this->db->prepare('select * from marcasnascar87 where id_marca = ?');
        $sentencia->execute(array($id));
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }

    function borrarCorredor($id){
        $sentencia = $this->db->prepare('delete from pilotosnascar87 where id_Piloto = ?');
        $sentencia->execute(array($id));
    }

    function agregarCorredor($nombre,$apellido,$marca,$img,$id_marca,$numero,$poles,$ganadas,$cantCarreras){
        $sentencia = $this->db->prepare("insert into pilotosnascar87(nombre,apellido,marca,img,id_marca,numero, poles,ganadas,cantCarreras) values(?,?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$marca,$img,$id_marca,$numero,$poles,$ganadas,$cantCarreras));
    }

    function modifyRacer($nombre,$apellido,$marca,$img,$id_marca,$numero,$poles,$ganadas,$cantCarreras,$id){ 
            $sentencia = $this->db->prepare('update pilotosnascar87 set nombre = ?, apellido = ?, marca = ?,
              img = ?, id_marca = ?, numero = ?, poles = ?, ganadas = ?, cantCarreras = ?  where id_Piloto = ?');
            $sentencia->execute(array($nombre,$apellido,$marca,$img,$id_marca,$numero,$poles,$ganadas,$cantCarreras,$id));
        
    }
}