<?php
require_once '../controller/DBController.php';

class donateController{
 private $DB;

public function set_donation($price,$comment){
    $this->DB=DataBase::getInstance();
    session_start();
    $id=$_SESSION["user_id"];
    $query="INSERT INTO `donations` (`D_id`, `User_id`, `Amount`, `comment`) VALUES ('NULL', '$id', '$price', '$comment')";
    $value=$this->DB->insert($query);
    if(!$value){
        return false;
    } else {
        return true;
}


}
}
?>