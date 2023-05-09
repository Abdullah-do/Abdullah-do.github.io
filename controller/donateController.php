<?php
require_once '../controller/DBController.php';

class donateController{
 private $DB;

public function set_donation($id,$price,$comment){
    $this->DB=DataBase::getInstance();
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