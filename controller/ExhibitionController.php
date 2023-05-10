<?php
require_once "../module/exhibit.php";
require_once "DBController.php";
class Exhibition_controlloer
{
    protected $db;
    public function displayExhibtionsData()
    {
        $this->db = DataBase::getInstance();
        $query = "SELECT * FROM `exhibits`";
        return $this->db->select($query);
    }
    public function book_exhibition(Exhibit $exhibit)
    {
        $this->db = DataBase::getInstance();
        $query = "INSERT INTO exhibits values ('','$exhibit->Name',$exhibit->Description,'$exhibit->Start_Date','$exhibit->Price','$exhibit->Location')";
        return $this->db->insert($query);
    }
    public function delete_exhibition($id)
    {
        $this->db = DataBase::getInstance();
        $query = "delete from exhibits where Exhibits_id = $id";
        return $this->db->delete($query);
    }


}

?>