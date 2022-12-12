<?php
include "../Classes/User.php";

class Patient extends User {
	//les attributes d'une session
	private $birthDay;
	private $gender;
	private $city;
	private $cin;
	private $codeUser;

    //constructeur:
	public function __construct($birthDay,$gender,$city,$cin) {
		$this->birthDay= $birthDay;
		$this->gender= $gender;
		$this->city=$city;
		$this->cin= $cin;
	}
//les getters et setters:
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
       $this->id=$id;
     }
	public function getBirthDay() {
		return $this->birthDay;
	}
	public function setBirthDay($birthDay) {
       $this->birthDay=$birthDay;
     }
	public function getGender() {
		return $this->gender;
	}
	public function setGender($gender) {
       $this->gender=$gender;

     }
	 public function gatCity() {
		return $this->city;
	}
	public function setCity($city) {
       $this->city=$city;

     }

	public function getCin() {
		return $this->cin;
	}
	public function setCin($cin) {
       $this->cin=$cin;
     }

	 public function getcodeUser() {
		return $this->codeUser;
	}
	public function setCodeUser($codeUser) {
       $this->codeUser=$codeUser;
     }

	//Insertion d'une session
	public static function create($patient) {
		global $bdd;
        parent::createUser($patient);
        $codeUser=$bdd->lastInsertId();
		$req = $bdd->prepare("INSERT INTO patient(Gender,cin,birthDay,city,codeUser)VALUES(:gender,:cin,:birthDay,:city,:codeUser)")or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':gender', $patient->gender);
		$req->bindParam(':cin',$patient->cin);
		$req->bindParam(':birthDay',$patient->birthDay);
		$req->bindParam(':city',$patient->city);
		$req->bindParam(':codeUser',$codeUser);
		$patientI=$req->execute();
		return ($patientI);
      }

	  //Modifier session
	  public static function update($patient) {
		global $bdd;
		
        $query=parent::updateUser($patient);
        if($query){
		$req = $bdd->prepare("UPDATE patient  SET Gender=:gender,cin=:cin,birthDay=:birthDay,city=:city WHERE codeUser=:ID")or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':gender', $patient->gender);
		$req->bindParam(':cin',$patient->cin);
		$req->bindParam(':birthDay',$patient->birthDay);
		$req->bindParam(':city',$patient->city);
        $req->bindParam(':ID',$patient->id);
		$patientI=$req->execute();
		return ($patientI);
        }else{
            return 0;
        }
      }

	 //Suppression d'une session
	public static function delete($ID) {
		global $bdd;
        $query=parent::deleteUser($ID);
        if($query){
		$req = $bdd->prepare('Delete FROM patient WHERE id = :id')or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':id',$ID);
		$patientD = $req->execute();
      	return ($patientD);
        }
    }

}
