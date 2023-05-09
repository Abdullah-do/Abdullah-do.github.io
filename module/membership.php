<?php
class Membership
{


  private $name;
  private $country;
  private $address;
  private $email;
  private $phonenumber;
  private $mtype;
  public function getname()
  {
    return $this->name;

  }
  public function getcountry()
  {
    return $this->country;

  }
  public function getaddress()
  {
    return $this->address;

  }
  public function getemail()
  {
    return $this->email;

  }
  public function getphonenumber()
  {
    return $this->phonenumber;

  }
  public function getmtype()
  {
    return $this->mtype;

  }



  public function setname($n)
  {
    $this->name = $n;


  }
  public function setcountry($c)
  {
    $this->country = $c;


  }

  public function setaddress($a)
  {
    $this->address = $a;


  }

  public function setemail($e)
  {
    $this->email = $e;


  }

  public function setphonenumber($p)
  {
    $this->phonenumber = $p;


  }

  public function setmtype($m)
  {
    $this->mtype = $m;


  }




} ?>