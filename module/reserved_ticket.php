<?php

class Reserved_ticket
{
    public $id;
    public $User_id;
    public $price;
    public $Quantity;
    public $MS_Discount;
    public $Date;
    public function set_User_id($User_id)
    {
        $this->User_id = $User_id;
    }
    public function get_User_id()
    {
        return $this->User_id;
    }
    public function set_price($price)
    {
        $this->price = $price;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function set_Quantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }
    public function get_Quantity()
    {
        return $this->Quantity;
    }
    public function set_MS_Discount($MS_Discount)
    {
        $this->MS_Discount = $MS_Discount;
    }
    public function get_MS_Discount()
    {
        return $this->MS_Discount;
    }
    public function set_Date($Date)
    {
        $this->Date = $Date;
    }
    public function get_Date()
    {
        return $this->Date;
    }
}

?>