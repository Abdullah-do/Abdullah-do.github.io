<?php

class Session{
    private $name; 
    private $cost;
    private $duration;
    private $details;
    private $image;
    private $type_id;
    private $date;
    
    public function SetSessionName($name) {
        $this->name = $name;
      }
    
      public function GetSessionName() {
        return $this->name;
      }
      public function SetSessionCost($cost) {
        $this->cost = $cost;
      }
    
      public function GetSessionCost() {
        return $this->cost;
      }
      public function SetSessionDuration($duration) {
        $this->duration = $duration;
      }
    
      public function GetSessionDuration() {
        return $this->duration;
      }
      public function SetSessionDetails($details) {
        $this->details = $details;
      }
    
      public function GetSessionDetails() {
        return $this->details;
      }
      public function SetSessionImage($image) {
        $this->image = $image;
      }
    
      public function GetSessionImage() {
        return $this->image;
      }
      public function SetSessionType_id($type_id) {
        $this->type_id = $type_id;
      }
    
      public function GetSessionType_id() {
        return $this->type_id;
      }
      public function SetSessionDate($date) {
        $this->date = $date;
      }
    
      public function GetSessionDate() {
        return $this->date;
      }
      
}



?>