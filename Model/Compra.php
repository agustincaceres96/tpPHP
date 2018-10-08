<?php
namespace Model;

class Compra{
    private $detalle;


    function getDetalle(){
        return $this->detalle;
    }

    function setDetalle($detalle){
        $this->detalle=$detalle;
    }
}


?>