<?php

class Students extends Controller
{
  /* 
  To remove the error even if we do not pass any parameter to the index method, we write
  $id = ''
  */
  function index($id = null)
  {
    echo "This is the students controller". $id;
  }
}