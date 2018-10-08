<?php
namespace Model;

class Plaza_Evento{
    private $cantidad;


    public function getCantidad(){
        return $this->cantidad;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
}



?>