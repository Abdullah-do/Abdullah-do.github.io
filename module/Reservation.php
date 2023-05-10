<?php

class Reservation{
    private $user_id;
    private $date; 
    private $time;
    private $no_people;
    private $msg;
    
    public function SetReservationDate($date) {
        $this->date = $date;
      }
    
      public function GetReservationDate() {
        return $this->date;
      }
      public function SetReservationTime($time) {
        $this->time = $time;
      }
    
      public function GetReservationTime() {
        return $this->time;
      }
      public function SetReservationNo_people($no_people) {
        $this->no_people = $no_people;
      }
    
      public function GetReservationNo_people() {
        return $this->no_people;
      }
      public function SetReservationMsg($msg) {
        $this->msg = $msg;
      }
    
      public function GetReservationMsg() {
        return $this->msg;
      }
      
      public function SetReservationUser_id($user_id) {
        $this->user_id = $user_id;
      }
    
      public function GetReservationUser_id() {
        return $this->user_id;
      }

    }




?>