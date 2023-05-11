<?php

require_once "C:/xampp/htdocs/Abdullah-do.github.io/module/Session.php";
require_once "DBController.php";



class Sessioncontroller
{
    protected $db;
    
    public function GetSessiontype(){
        $this->db = DataBase::getInstance();
        $query ="SELECT * from session_type";
        return $this->db->select($query);
        
        

    }
    public function AddSession(Session $session){
        

           $name = $session->GetSessionName();
           $details = $session->GetSessionDetails();
           $cost = $session->GetSessionCost();
           $image = $session->GetSessionImage();
           $date = $session->GetSessionDate();
           $duration =$session->GetSessionDuration();
           $type_id = $session->GetSessionType_id();
            $query ="INSERT into sessions values('','$name','$details',$cost,'$image','$date','$duration',$type_id)";
            return $this->db->insert($query);
    }
    public function GetAllSession($id){
        
        $this->db = DataBase::getInstance();
    if ($this->db) {
        $query = "SELECT * FROM sessions WHERE type_id = $id";
        return $this->db->select($query);
    } else {
        echo "Error: Could not connect to the database";
        return false;
    } 
}
}


?>