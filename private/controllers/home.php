<?php

/**
 * Home Controller
 */
class Home extends Controller
{
  function index()
  {
    $db = new Database();
    $data = $db->query("Select * from users");
    $this->view('home', ['rows'=> $data]);
  }

}