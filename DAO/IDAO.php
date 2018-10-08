<?php
namespace DAO;

use Model\Artista as Artista;

interface IDAOArtistas 
{
    function Add(Artista $artista);

    function retrieveAll();

} 

?>