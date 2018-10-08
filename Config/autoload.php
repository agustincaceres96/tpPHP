<?php 
namespace Config;

//revisar no esta bien hecho, no esta dado por el profe
class autoload
{
    public static function start()
    {
        spl_autoload_register(function($className)
        {
            $fileName= ROOT . str_replace("\\", "/", $className) . ".php";
            echo "<br> autoload: " . $fileName;
            require_once($fileName);
        });
    }
    


}

?>
