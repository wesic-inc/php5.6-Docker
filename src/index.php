<?php

define("BDUSER", "root");
define("BDPWD", "mypass");

class BaseSql{

    protected $dbName = "ProjetBd";

    public function __construct(){
        echo "test";
    }

    public function save(){
        echo "insertion BDD ".$this->firstname;
    }
}

class User extends BaseSql{

    protected $firstname;
    protected $lastname;
    protected $email;
    protected $pwd;

    public function __construct($firstname, $lastname, $email, $pwd){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setEmail($email);
        $this->setPwd($pwd);
        
        parent::__construct();
    }

    public function setFirstname($firstname){
        $this->firstname = ucfirst(strtolower(trim($firstname)));
    }

    public function setLastname($lastname){
        $this->lastname = strtoupper(trim($lastname));
    }

    public function setEmail($email){
        $this->email = strtolower(trim($email));
    }

    public function setPwd($pwd){
        $salt = "FAAZDAZDO324";
        $this->pwd = self::hash($pwd);
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDbName(){
        return $this->DBName;
    }

    public static function hash($string){
        return password_hash($string, PASSWORD_DEFAULT);
    }
}

echo User::hash("test");
echo "<br>";


$user = new User("Sylvain", "Cabiati", "email", "pwd");

echo "<pre>";
print_r($user);
echo "</pre>";

$user->save();
/*
$page = new Page();
$page->setTitle("Mon titre");
$page->setDescription("Ma description ...");
*/




