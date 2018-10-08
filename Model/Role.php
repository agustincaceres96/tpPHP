<?php
namespace Model;

class Role{
    private $id;
    private $descripcion;


    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

}











?>