<?php
require_once '../controller/DBController.php';

class VisaController{
 private $DB;

public function set_visa($name,$number,$date,$cvv,$id){
    $this->DB=DataBase::getInstance();
    $query="INSERT INTO `visa` (`Visa_id`, `User_id`, `Card_Holder_Name`, `Visa_number`, `Cvv`, `Expired_Date`) VALUES (NULL, '$id', '$name', '$number', '$cvv', '$date')";
    $value=$this->DB->insert($query);
    if(!$value){
        return false;
    } else {
        return true;
}


}
}
?>