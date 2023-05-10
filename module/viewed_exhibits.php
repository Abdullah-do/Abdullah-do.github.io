<?php

class viewed_exhibit
{
    public $Id;
    public $Exhibits_id;
    public $User_id;
    public function set_Id($Id)
    {
        $this->Id = $Id;
    }
    public function get_Id()
    {
        return $this->Exhibits_id;
    }
    public function set_User_id($User_id)
    {
        $this->User_id = $User_id;
    }
    public function get_User_id()
    {
        return $this->User_id;
    }
}

?>