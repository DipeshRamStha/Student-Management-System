<?php

/**
 * main model
 */

class Model extends Database
{

  function __construct()
  {
    // echo $this::class;
    if(!property_exists($this, 'table'))
    {
      $this->table = strtolower($this::class) . "s";
    }

  }

  public function where($column, $value)
  {
    $column = addslashes($column);
    $query = "SELECT * FROM $this->table WHERE $column = :value";
    return $this->query($query, [
      'value'=> $value
    ]);
  }

  public function findAll()
  {
    $query = "SELECT * FROM $this->table";
    return $this->query($query);

  }
}