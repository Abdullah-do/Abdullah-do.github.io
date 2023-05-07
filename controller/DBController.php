<?php
class DataBase{
  private $DB_host   = 'localhost';
  private $db_user = 'root';
  private $db_pass = '';
  private $db_name  = 'museum';
  private $connection;

  public function connect(){
$this->connection=new mysqli($this->DB_host,$this->db_user,$this->db_pass,$this->db_name);
if ($this->connection->connect_error){
    die("Connection failed: ". $this->connection->connect_error);}

    else
        return true;
}
}


?>