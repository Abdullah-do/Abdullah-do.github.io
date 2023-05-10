<?php

class Exhibit
{
    private $Exhibits_id;
    private $Name;
    private $Description;
    private $Start_Date;
    private $Price;
    private $Location;
    public function set_Name($Name)
    {
        $this->Name = $Name;
    }
    public function get_Name()
    {
        return $this->Name;
    }
    public function set_Description($Description)
    {
        $this->Description = $Description;
    }
    public function get_Description()
    {
        return $this->Description;
    }
    public function set_Start_Date($Start_Date)
    {
        $this->Start_Date = $Start_Date;
    }
    public function get_Start_Date()
    {
        return $this->Start_Date;
    }
    public function set_Price($Price)
    {
        $this->Price = $Price;
    }
    public function get_Price()
    {
        return $this->Price;
    }
    public function set_Location($Location)
    {
        $this->Location = $Location;
    }
    public function get_Location()
    {
        return $this->Location;
    }
}

?>