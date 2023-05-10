<?php
require_once "DBController.php";
require_once "../module/client.php";
class ProfileController{
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

public function updateuser(Client $client,$id){
        
    $this->db = DataBase::getInstance();
    $name = $client->getName();
    $email = $client->getEmail();
    $phone = $client->getPhone();
    $password = $client->getPass();
    $nationality = $client->getNationality();
    $age =$client->GetSessionDuration();
     $query ="UPDATE users SET `User_Name`='$name', `phone_no`='$phone',
     `age`=$age, `Email`='$email', `password`='$password', 
     `nationality`='$nationality' WHERE `users`.`user_id` = $id";
     return $this->db->update($query);
}
public function updatevisa(Client $client,$id){
        
    $this->db = DataBase::getInstance();
    $visa_number = $client->getvisa_number();
    $visa_cvv = $client->getvisa_cvv();
    $card_holder_name = $client->getcard_holder_name();
    $card_date = $client->getcard_date();
     $query ="UPDATE visa SET `Card_Holder_Name`='$card_holder_name',
     `Visa_number`=$visa_number, `Cvv`=$visa_cvv, `Expired_Date`='$card_date'
     WHERE `User_id` = $id";
     return $this->db->update($query);
}

}

?>