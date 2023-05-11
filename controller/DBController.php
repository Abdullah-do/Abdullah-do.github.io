<?php
class DataBase{
  private $DB_host   = 'localhost';
  private $db_user = 'root';
  private $db_pass = '';
  private $db_name  = 'museum';
  private static $instance = null;
  private $connection;

  private function __construct()
  {  
    $this->connection=new mysqli($this->DB_host,$this->db_user,$this->db_pass,$this->db_name);
      if ($this->connection->connect_error){
    die("Connection failed: ". $this->connection->connect_error);}
    else
        return true;
    //connection
  }
public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    public function connect()
    {
        return $this->connection;
    }
public function close() {
    if ($this->connection)
    $this->connection->close();
    else 
    echo"Connection is not opened";  
}

public function select($query) {
    
    $result = $this->connection->query($query);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
    
    return $result->fetch_all(MYSQLI_ASSOC);
            }
}

public function insert($data) {
    $db = $this->connection;
    $result = $this->connection->query($data);
    if (!$result){
       echo "error : " . mysqli_error($this->connection);
       return false;
           }
    else{
    return true;
           }
}

public function update($data) {

    $result = $this->connection->query($data);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
     return true;
            }
}

public function delete($query) {

    $result = $this->connection->query($query);
    if (!$result){
        echo "error : " . mysqli_error($this->connection);
        return false;
            }
            else{
     return true;
            }
    
}



}


?>
