<?php
namespace Repository;

 use Model\Artist as Artist;

interface IRepository
{
    function Add(Artist $artist);
    public function GetAll();
}

?>