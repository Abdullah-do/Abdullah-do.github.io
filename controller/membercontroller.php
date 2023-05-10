<?php
session_start();
require_once '../controller/DBController.php';
require_once '../module/membership.php';

class memberController
{
  private $db;

  public function set_member(Membership $membership)
  {

    $this->db = DataBase::getInstance();
    $name = $membership->getname();
    $userid = $_SESSION["user_id"];
    $country = $membership->getcountry();
    $address = $membership->getaddress();
    $email = $membership->getemail();
    $phone = $membership->getphonenumber();
    $mtype = $membership->getmtype();

    // $idd = $user->getId();
    // $passs = $user->getPass();
    $query = "insert into member values ('',$userid,'$name',1,'$phone','$address','$country','$email')";
    $result = $this->db->insert($query);
    // // $this->DB = DataBase::getInstance();
    // $query = "INSERT INTO `donations` (`D_id`, `User_id`, `Amount`, `comment`) VALUES ('NULL', '$id', '$price', '$comment')";
    // $value = $this->DB->insert($query);
    if (!$result) {
      return false;
    } else {
      return true;
    }


  }
}
?>