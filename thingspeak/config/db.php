<?php
class db{
    //Propriété
    private $dbhost = 'localhost';
    private $dbuser = 'nicolas';
    private $dbpass = 'nicolas';
    private $dbname = 'thingspeak';


    //Connection
    public function connect(){
      $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
      $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
      $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbConnection;
    }
  }

 ?>
