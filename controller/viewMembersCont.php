<?php
require_once '../controller/DBController.php';


public function GetAlluserinfo($id){
        
    $this->db = DataBase::getInstance();
if ($this->db) {
    $query = "SELECT User_Name,phone_no,age,Email,users.password,nationality,visa_id,Card_Holder_Name,Visa_number,Cvv,Expired_Date 
    FROM users,visa WHERE users.user_id = $id ";
    return $this->db->select($query);
} else {
    echo "Error: Could not connect to the database";
    return false;
} 
}



?>