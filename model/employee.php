<?php

class Employee {
    private $table = "employees";
    private $Connection;

    private $id;
    private $Name;
    private $Surname;
    private $Username;
    private $email;
    private $phone;
    private $password;
    public function __construct($Connection) {
		$this->Connection = $Connection;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getName() {
        return $this->Name;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function getSurname() {
        return $this->Surname;
    }

    public function setSurname($Surname) {
        $this->Surname = $Surname;
    }
   
    public function getUsername() {
        return $this->Username;
    }
    public function setUsername($Username) {
        $this->Username = $Username;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getphone() {
        return $this->phone;
    }
   
    public function setphone($phone) {
        $this->phone = $phone;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        
    }
    public function save(){

        $sqlquery = $this->Connection->prepare("INSERT INTO " . $this->table . " (Name,Surname,Username,email,phone,password)
                                        VALUES (:Name,:Surname,:Username,:email,:phone,:password)");
        $result = $sqlquery->execute(array(
            "Name" => $this->Name,
            "Surname" => $this->Surname,
            "Username" => $this->Username,
            "email" => $this->email,
            "phone" => $this->phone,
            "password" =>$this->password
        ));
        $this->Connection = null;
         
        return $result;
    }
    public function getlogin($Username,$password)
    {
       
            $sqlquery =  $this->Connection->prepare("SELECT * from ". $this->table . " where Username=:Username LIMIT 1");
            $sqlquery->execute(array(
                "Username" => $Username,
            ));
            $sqlquery->execute();
            $userRow=$sqlquery->fetch(PDO::FETCH_ASSOC);
            if($sqlquery->rowCount() > 0)
            {
               if(password_verify($password, $userRow['password']))
               {
                  $_SESSION['id'] = $userRow['id'];
                  return true;
               }
               else
               {
                  return false;
               }
            }
    }
    public function update(){

        $sqlquery = $this->Connection->prepare("
            UPDATE " . $this->table . " 
            SET 
                Name = :Name,
                Surname = :Surname, 
                Username = :Username,
                email = :email,
                phone = :phone
            WHERE id = :id 
        ");

        $result = $sqlquery->execute(array(
            "id" => $this->id,
            "Name" => $this->Name,
            "Surname" => $this->Surname,
            "Username"=>$this->Username,
            "email" => $this->email,
            "phone" => $this->phone
        ));
        $this->Connection = null;
        return $result;
    }
        
    
    public function getAll(){

        $sqlquery = $this->Connection->prepare("SELECT id,Name,Surname,email,phone FROM " . $this->table);
        $sqlquery->execute();
        /* Fetch all of the remaining rows in the result set */
        $result = $sqlquery->fetchAll();
        $this->Connection = null; 
        return $result;

    }
    
    
    public function getById($id){
        $sqlquery = $this->Connection->prepare("SELECT id,Name,Surname,Username,email,phone 
                                                FROM " . $this->table . "  WHERE id = :id");
        $sqlquery->execute(array(
            "id" => $id
        ));
        /*Fetch all of the remaining rows in the result set*/
        $result = $sqlquery->fetchObject();
        $this->Connection = null; //connection closure
        return $result;
    }
    
    public function getByColumn($column,$value){
        $sqlquery = $this->Connection->prepare("SELECT id,Name,Surname,email,phone 
                                                FROM " . $this->table . " WHERE :column = :value");
        $sqlquery->execute(array(
            "column" => $column,
            "value" => $value
        ));
        $result = $sqlquery->fetchAll();
        $this->Connection = null; //connection closure
        return $result;
    }
    
    public function deleteById($id){
        try {
            $sqlquery = $this->Connection->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
            $sqlquery->execute(array(
                "id" => $id
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }
    
   
    
}
?>
