<?php
class Student
{
    private $name;
    private $password;
    private $email;
    private $confirmpassword;
    private $phone;

    public function setName($name){
        $this.$name=$name;
        
    }

    public function setPassword($password){
        $this.$password=$password;
    }

    public function setEmail($email)
    {
        $this.$email=$email;
    }

    public function setConfirmpassword($confirmpassword)
    {
        $this.$confirmpassword=$confirmpassword;
    }
    public function setphone($phone)
    {
        $this.$phone=$phone;
    }



    public function getName(){
        return $name;
       
    }

    public function getPassword(){
        return $password;
    }

    public function getEmail()
    {
        return $email;
    }

    public function getConfirmpassword()
    {
        return $confirmpassword;
    }
    public function getphone()
    {
        return $phone;
    }

   
}

?>
