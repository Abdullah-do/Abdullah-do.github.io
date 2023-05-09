<?php
 class Client extends User{
    private $name;
    private $email;
    private $phone;
    private $nationality;
    private $age;

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
} 

?>