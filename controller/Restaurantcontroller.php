<?php

require_once "C:/xampp/htdocs/Abdullah-do.github.io-index/module/Reservation.php";
require_once "DBController.php";

class Reasturantcontroller{

    protected $db;
    public function AddReservation(Reservation $reserv ){
        $this->db = DataBase::getInstance();
        $user_id = $reserv->GetReservationUser_id();
        $date = $reserv->GetReservationdate();
        $time = $reserv->GetReservationTime();
        $no_people = $reserv->GetReservationNo_people();
        $msg = $reserv->GetReservationMsg();
         $query ="INSERT into restaurant_reservations values('','$time',$no_people,$user_id,'$date','$msg')";
         return $this->db->insert($query);
 }
    public function GetAllReservation(){
        
        $this->db = DataBase::getInstance();
    if ($this->db) {
        $query = "SELECT Email, First_Name, phone_no, restaurant_reservations.date, booking_time, Num_of_people, msg
        FROM restaurant_reservations, users
        WHERE restaurant_reservations.user_id = users.user_id";
        return $this->db->select($query);
    } else {
        echo "Error: Could not connect to the database";
        return false;
    } 
}
}
?>