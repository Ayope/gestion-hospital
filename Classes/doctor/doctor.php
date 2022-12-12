<?php 

    include "../user/User.php";

    class Doctor extends User{
        private $gender;
        private $city;
        private $profession;
        private $codeUser;

        public function __construct($gender, $city, $profession, $codeUser){
            // parent::__construct($firstName,$lastName,$email,$password,$icon,$role);
            $this->gender = $gender;
            $this->city = $city;
            $this->profession = $profession;
            $this->codeUser = $codeUser;
        }

        // getters and setters
        public function getGender(){
            return $this->gender;
        }
        public function setGender($gender){
            $this->gender = $gender;
        }

        public function getCity(){
            return $this->city;
        }
        public function setCity($city){
            $this->city = $city;
        }

        public function getProfession(){
            return $this->profession;
        }
        public function setProfession($profession){
            $this->profession = $profession;
        }

        public function getCodeUser(){
            return $this->codeUser;
        }
        public function setCodeUser($codeUser){
            $this->codeUser = $codeUser;
        }

        //Doctor Crud
        public function createDoctor(){
            return  "INSERT INTO doctor (city, speciality, Gender, codeUser)
            VALUES ('$this->city', '$this->profession', '$this->gender', $this->codeUser)";
        }
        public static function readData(){
            return "SELECT * FROM doctor";
        }
        public function updateDoctor($doctor){
            // return "UPDATE doctor
            // SET city='?', specialty='?', Gender='?'
            // WHERE id='?'"; //<- Documentation 
        }
        public function deleteDoctor($id){

        }
        
        public function toString() {
            return "gender: " . $this->gender . " city: " . $this->city . " profession : " . $this->profession . " codeUser: " . $this->codeUser;
        }

    }