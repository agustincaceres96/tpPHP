<?php
namespace Model;

class Calendario{
    private $fecha;

    function getFecha(){
        return $this->fecha;
    }
    
    function setFechas($fecha){
        $this->fecha=$fecha;
    }
}


?>