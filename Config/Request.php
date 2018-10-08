<?php namespace Config;
class Request {

  private static $instance;
  public static function getInstance() // singleton pattern
  {
      if (is_null(self::$instance)) 
      {
          self::$instance = new self();
      }
      return self::$instance;
  }

  private $controller;
  private $method;
  private $parameters;

  private function __construct()
  {
    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
  
    echo "<br> request url :" .  $url; //aux
    $urlToArray = explode('/', $url);
    $UrlArray = array_filter($urlToArray);
    
    if(empty($UrlArray))
    {
      $this->controller = 'Artist'; //main
    }
    else
    {
      $this->controller = ucwords(array_shift($UrlArray));
      echo "<br> request controladora: " .  $this->controller; //aux
    }

    if(empty($UrlArray))
    {
      $this->method = 'Index';
    }
    else
    {
      $this->method = array_shift($UrlArray);
      echo "<br> request metodo: " . $this->method . "<br>"; //aux
    }

    /* GET o POST */
    $methodRequest = $this->getRequestMethod();

    if($methodRequest == 'GET')
    {
      if(!empty($UrlArray)) {
        $this->parameters = $UrlArray;
      }
    }
    else
    {
      $this->parameters = $_POST;
    }
  }

  /* Getters */
  public function getController() {
    return $this->controller;
  }

  public function getMethod() {
    return $this->method;
  }

  public function getParameters() {
    return $this->parameters;
  }

  public static function getRequestMethod() {
    return $_SERVER['REQUEST_METHOD'];
  }
} ?>
