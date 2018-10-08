<?php
namespace Model;

class Artist
{
     private $name;
     
     public function getName()
     {
         return $this->name;
     }

     public function setName($name)
     {
         $this->name= $name;
     }
}

?>