<?php

require_once "../module/user.php";
require_once "DBController.php";
class UserController
{
    protected $db;

    //1. Open connection.
//2. Run query & logic.
//3. Close connection
    public function getuser()
    {
        $this->db = DataBase::getInstance();
        $query = "SELECT * FROM `users`";
        return $this->db->select($query);
    }

}

?>