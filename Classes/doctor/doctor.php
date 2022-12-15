<?php 

    include "../user/User.php";

    class Doctor extends User{
        private $gender;
        private $city;
        private $profession;
        private $codeUser;

        public function __construct($firstName,$lastName,$email,$password,$icon,$role,$gender,$city,$profession){
            parent::__construct($firstName,$lastName,$email,$password,$icon,$role);
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
            $database = new Dbconnect;
            $db = $database->connect_pdo();

            $query = $this->createUser();
            if($query){
                $stmt = $db->query("SELECT LAST_INSERT_ID(id) from user order by LAST_INSERT_ID(id) desc limit 1;");
                $codeUser = $stmt->fetchColumn();
                $req = $bdd->prepare("INSERT INTO doctor (city, speciality, Gender, codeUser)
                VALUES ('$this->city', '$this->profession', '$this->gender', '$codeUser')")
                or die(print_r($db->errorInfo()));
                $docIns = $req->execute();
                return ($docIns);
            }else{
                return 0;
            }

        }
        public static function readData(){
            return "SELECT * FROM doctor";
        }
        public static function updateDoctor(){
            return "UPDATE doctor
            SET city=:city, speciality=:speciality, Gender=:gender
            WHERE id=:id";
        }
        
        public function toString() {
            return "gender: " . $this->gender . " city: " . $this->city . " profession : " . $this->profession . " codeUser: " . $this->codeUser;
        }

    }