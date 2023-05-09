<?php
 class User{
    protected $id;
    protected $password;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPass($password)
    {
        $this->password = $password;
    }
    public function getId ()
    {
        return $this->id;
    }
    public function getPass ()
    {
        return $this->password;
    }
} 

?>