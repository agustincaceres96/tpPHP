<?php
namespace Repository;

use Model\Artist as Artist;

class ArtistRepository implements  IRepository
{
    private $repositoryList;
    private static $instance= null;
    
  public function __construct()
  {
      $this->SessionList();
  }

  public static function GetInstance()
  {
     if(!isset(self::$instance ))
     {
         self::$instance= new ArtistRepository();
     }
     
     return self::$instance; 
  }

  public function SessionList()
  {
      if((isset($_SESSION["repositoryList"])) && (!empty($_SESSION["repositoryList"])))
      {
          $this->repositoryList= $_SESSION["repositoryList"];
      }
      else
      {
          $_SESSION["repositoryList"]= array();
          $this->repositoryList= $_SESSION["repositoryList"];

      }

  }

    public function Add(Artist $artist)
    {
        $this->SessionList();
        array_push($this->repositoryList, $artist);
        $_SESSION["repositoryList"]= $this->repositoryList;
    }

    public function GetAll()
    {
        return $this->repositoryList;
    }

   
    
}
?>