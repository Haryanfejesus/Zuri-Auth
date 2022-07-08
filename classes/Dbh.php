<?php


class Dbh{
   public $host = "127.0.0.1";
   public $user = "root";
   public $db_name = "zuriphp";
   public $password = "";

   protected function connect(){
    $connect = mysqli_connect($this-> host, $this -> user, $this -> password, $this -> db_name);
    return $connect;
   }
  

}

