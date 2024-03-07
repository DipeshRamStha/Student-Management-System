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

    print_r($this->getURL());

  }

  private function getURL()
  {
    echo "<pre>";
    print_r($_GET);
  }

 }