<?php
namespace Controllers;


class ControllerMain
{
    public function Index()
    {
        if(!isset($_SESSION["userLogged"]))
        {
            require_once("Views/viewLogin.php");
        }
    }
}

?>