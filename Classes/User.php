<?php
include ("../config/db.php");
class User {
    //les attributes d'une session
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $icon;
    protected $role;

    //constructeur:
    protected function __construct($firstName,$lastName,$email,$password,$icon,$role) {
        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->email=$email;
        $this->password= $password;
        $this->icon= $icon;
        $this->role= $role;
    }

    //les getters et setters:
    protected function getId() {
        return $this->id;
    }
    protected function setId($id) {
       $this->id=$id;
     }
    protected function getFirstName() {
        return $this->firstName;
    }
    protected function setFirstName($firstName) {
       $this->firstName=$firstName;
     }
    protected function getLastName() {
        return $this->lastName;
    }
    protected function setLastName($lastName) {
       $this->lastName=$lastName;
     }
    protected function getEmail() {
        return $this->email;
    }
    protected function setEmail($email) {
       $this->email=$email;

     }
    protected function gatPassword() {
        return $this->password;
    }
    protected function setPassword($password) {
       $this->password=$password;

     }
    protected function gatIcon() {
        return $this->icon;
    }
    protected function setIcon($icon) {
       $this->icon=$icon;

     }
    protected function getRole() {
        return $this->role;
    }
    protected function setRole($role) {
       $this->role=$role;

     }
   public function login($email,$password){

   }
   public function logOut(){

   }
   public function createUser($user){

   }
   public function updateUser($user){

   }
   public function deleteUser($id){

   }
   public function getById($id){

   }
   public function count($table){

   }
}