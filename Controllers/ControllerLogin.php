<?php
namespace Controllers;

use Model\User as User;

class ControllerLogin
{
    public function Index()
    {
        require_once("Vistas/vistaLogin.php");
    }

    public function Login($email, $password)
    {
        echo "estas dentro de controladora Main: metodo login";
       echo $email;
        echo $password;
        
        

    session_start();

    $usuario= new Usuario();

    if($_POST)
    {
        $email= (isset($_POST["email"])) ? $_POST["email"] : "error en email";
        $password= (isset($_POST["password"])) ? $_POST["password"] : "error en password";

        $defaulEmail= "cosme@fulanito.com";
        $defaultPassword= "123";

        if(($email == $defaulEmail) && ($password == $defaultPassword))
        {
            $usuario->getEmail($email);
            $usuario->getPassword($password);
        
            $_SESSION["usuarioLogged"]= $usuario;

            header("location: gestionArtista.php ");
            
            
        }

    }
        */
    }
}

?>