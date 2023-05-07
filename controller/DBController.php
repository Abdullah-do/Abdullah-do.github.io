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


public function close() {
    if ($this->connection)
    $this->connection->close();
    else 
    echo"Connection is not opened";  
}

public function select($query) {
    $this->connect();
    $result = $this->connection->query($query);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
     $this->close();
    return $result->fetch_all(MYSQLI_ASSOC);
            }
}

public function insert($data) {
    $this->connect();
    $result = $this->connection->query($data);
    if (!$result){
       echo "error : " . mysqli_error($this->connection);
       return false;
           }
           else{
    $this->close();
    return true;
           }
}

public function update($data) {
    $this->connect();
    $result = $this->connection->query($data);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
     $this->close();
     return true;
            }
}

public function delete($query) {
    $this->connect();
    $result = $this->connection->query($query);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
     $this->close();
     return true;
            }
    
}



}


?>