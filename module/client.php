<?php
require_once "user.php";
 class Client extends User{
    private $name;
    private $email;
    private $phone;
    private $nationality;
    private $age;
    private $visa_number;
    private $visa_cvv;
    private $card_holder_name;
    private $card_date;



    public function setvisa_number($visa_number)
    {
        $this->visa_number = $visa_number;
    }
    public function setvisa_cvv($visa_cvv)
    {
        $this->visa_cvv = $visa_cvv;
    }
    public function setcard_holder_name($card_holder_name)
    {
        $this->card_holder_name = $card_holder_name;
    }
    public function setcard_date($card_date)
    {
        $this->card_date = $card_date;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getName()  {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getNationality()
    {
        return $this->nationality;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getvisa_number()
    {
        return $this->visa_number;
    }
    public function getvisa_cvv()
    {
        return $this->visa_cvv;
    }
    public function getcard_holder_name()
    {
        return $this->card_holder_name;
    }
    public function getcard_date()
    {
        return $this->card_date;
    }
} 

?>
