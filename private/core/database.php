<?php

/**\
 *  Database Connection
 */

class Database
{
  private function connect()
  {
    $string = "mysql:host=localhost;dbname=school_db";
    if(!$con = new PDO($string, 'root', '')){
      die("Could not connect to database");
    }
    return $con;
  }

  private function run($query, $data = array(), $data_type="object")
  {
    $con = $this->connect();
    $stm = $con->prepare($query);

    if($stm) {
      $check = $stm->execute($data);
      if($check){
        if($data_type == "object"){
          $data = $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
          $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        if(is_array($data) && count($data) >0){
          return $data;
        }
      }
    }

    return false;
  }

  public function query()
  {

  }
}