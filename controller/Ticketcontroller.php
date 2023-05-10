<?php
require_once "../module/reserved_ticket.php";
require_once "DBController.php";
class Ticket_controlloer
{
    protected $db;
    public function getReservedData()
    {
        $this->db = DataBase::getInstance();
        $query = "SELECT * FROM `reserved_tickets`";
        return $this->db->select($query);

    }
    public function reserve_ticket(Reserved_ticket $reserved_ticket)
    {
        $this->db = DataBase::getInstance();
        $query = "INSERT INTO reserved_tickets values ('','$reserved_ticket->User_id','$reserved_ticket->price',$reserved_ticket->Quantity,'$reserved_ticket->MS_Discount','$reserved_ticket->Date')";
        return $this->db->insert($query);
    }
    public function delete_ticket($id)
    {
        $this->db = DataBase::getInstance();
        $query = "delete from reserved_tickets where User_id = $id";
        return $this->db->delete($query);
    }
}

?>