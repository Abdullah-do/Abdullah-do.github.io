<?php
require_once '../module/client.php';
require_once '../module/user.php';
require_once '../controller/DBController.php';
class AuthController
{
    protected $db;
    public function login(User $user)
    {
        $this->db = DataBase::getInstance();
        $idd = $user->getId();
        $passs = $user->getPass();
        $query = "select * from users where user_id='$idd' and password ='$passs'";
        $result = $this->db->select($query);
        if ($result === false) {
            echo "Error in Query";
            return false;
        } else {
            if (count($result) == 0) {
                session_start();
                $_SESSION["errMsg"] = "You have entered wrong email or password";
                $this->db->close();
                return false;
            } else {
                session_start();
                $_SESSION["user_id"] = $result[0]["user_id"];
                $_SESSION["userName"] = $result[0]["First_Name"] + $result[0]["Last_Name"];
                if ($result[0]["Admin_check"] == 1) {
                    $_SESSION["userRole"] = "Admin";
                } else {
                    $_SESSION["userRole"] = "Client";
                }
                $this->db->close();
                return true;
            }
        }
    }
    public function register(Client $client)
    {
        $this->db = DataBase::getInstance();
        $id = $client->getId();
        $pass = $client->getPass();
        $name = $client->getName();
        $email = $client->getEmail();
        $phone = $client->getPhone();
        $age = $client->getAge();
        $nationality = $client->getNationality();

        $query = "insert into users values ('$id','$name','$phone','$age','$email','$pass','$nationality',0)";
        $result = $this->db->insert($query);
        if ($result != false) {
            session_start();
            $_SESSION["user_id"] = $id;
            $_SESSION["user_name"] = $name;
            $_SESSION["phone_no"] = $phone;
            $_SESSION["age"] = $age;
            $_SESSION["email"] = $email;
            $_SESSION["userRole"] = "Client";
            $_SESSION["nation"] = $nationality;
            $_SESSION["password"] = $pass;
            $this->db->close();
            return true;
        } else {
            $_SESSION["errMsg"] = "Somthing went wrong... try again later";
            $this->db->close();
            return false;
        }
    }

}

?>