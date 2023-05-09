<?php
require_once '../controller/DBController.php';
class danateController{
protected $DB;
public function set_donation($id,$email,$price,$comment){
    $this->DB=DataBase::getInstance();
    $query="INSERT INTO `donations` (`D_id`, `User_id`, `Amount`, `comment`) VALUES (NULL, $id, $price, $comment)";
    $value=$this->DB->select($query);
    if(!$value){
        return false;
    } else {
        return true;
}


}
}
?>