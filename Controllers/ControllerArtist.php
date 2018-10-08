<?php
namespace Controllers;
   
use Model\Artist as Artist;
use Repository\ArtistRepository as ArtistRepository;

class ControllerArtist
{
    private $artistRepository;

    public function __construct()
    {
        $this->artistRepository= ArtistRepository::GetInstance();
    }

    public function Index()
    {
        require_once("Views/viewLoadArtist.php");
    }

    public function AddArtist($nameArtist)
    {
        if(!empty($nameArtist))
        {
            $artist= new Artist();
            $artist->setName($nameArtist);
            $this->artistRepository->Add($artist);
            require_once("Views/viewLoadArtist.php"); 
            //require_once("Views/viewListArtist.php");      
            
            /*
            if(isset($_SESSION["artistRepository"]))
            {
                $artistRepository= $_SESSION["artistRepository"];
                $artistRepository->Add($artist);
                $_SESSION["artistRepository"] = $artistRepository;
            }
            else
            {
                $artistRepository= new ArtistRepository();
                $artistRepository->Add($artist);
                $_SESSION["artistRepository"] = $artistRepository; 
            }
            */
    }
        
    }

    public function ListArtist()
    {
        
        require_once("Views/viewListArtist");
        /*
        if(isset($_SESSION["artistRepository"]))
        {
            $artistRepository= $_SESSION["artistRepository"];
            require_once("Views/viewListArtist");
            
        }
        else
        {
            echo "error sesion repositorio";
        }
        */
    }
}
    

?>
 