<?php

/**
 * main Controller Class
 */
class Controller 
{
  function view($view)
  {
    if(file_exists("../private/views/" . $view . ".view.php"))
    {
      require("../private/views/" . $view . ".view.php");
    }else{
      require("../private/views/404.view.php");
    }
  }
}