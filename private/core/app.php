<?php

/**
 * main app file
 */

 class App
 {
  protected $controller = "home";
  protected $method = "index";
  protected $params = array();

  public function __construct()
  {

    $URL = $this->getURL();
    if(file_exists("../private/controllers/".$URL[0].".php")){

      /*
       The ucfirst() function converts the first character of a string to uppercase.
       
Parameter	Description
string	Required. Specifies the string to convert
Technical Details
Return Value:	Returns the converted string
       */

      $this->controller = ucfirst(($URL[0]));
      unset($URL[0]);
    }

    require "../private/controllers/".$this->controller.".php";
    $this->controller = new $this->controller();
    if(isset($URL[1]))
    {
    if(method_exists($this->controller, $URL[1]))
    {
      $this->method =ucfirst(($URL[1]));
      unset($URL[1]);
    }
  }

  /* 
  Definition and Usage
The array_values() function returns an array containing all the values of an array.

Tip: The returned array will have numeric keys, starting at 0 and increase by 1.
Parameter Values
Parameter	Description
array	Required. Specifying an array
Technical Details
Return Value:	Returns an array containing all the values of an array

In this case: https://localhost/school/public/1/2
  will result:
  Array
  (
    [0] => 1
    [1] => 2
  )
  */

  $URL = array_values($URL);
  $this->params = $URL;
  

  call_user_func_array([$this->controller, $this->method], $this->params);

  }

  private function getURL()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : "home";
    return explode("/", filter_var(trim('url',"/")), FILTER_SANITIZE_URL);
  }

 }