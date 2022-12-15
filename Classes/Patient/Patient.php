<?php
include "../user/User.php";

class Patient extends User
{
	//les attributes d'une session
	private $birthDay;
	private $gender;
	private $city;
	private $cin;
	private $codeUser;

	//constructeur:
	public function __construct($firstName, $lastName, $email, $password, $NumeroTelephone, $icon, $role, $birthDay, $gender, $city, $cin)
	{
		parent::__construct($firstName, $lastName, $email, $password, $NumeroTelephone, $icon, $role);
		$this->birthDay = $birthDay;
		$this->gender = $gender;
		$this->city = $city;
		$this->cin = $cin;
	}
	//les getters et setters:
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getBirthDay()
	{
		return $this->birthDay;
	}
	public function setBirthDay($birthDay)
	{
		$this->birthDay = $birthDay;
	}
	public function getGender()
	{
		return $this->gender;
	}
	public function setGender($gender)
	{
		$this->gender = $gender;
	}
	public function gatCity()
	{
		return $this->city;
	}
	public function setCity($city)
	{
		$this->city = $city;
	}

	public function getCin()
	{
		return $this->cin;
	}
	public function setCin($cin)
	{
		$this->cin = $cin;
	}

	public function getcodeUser()
	{
		return $this->codeUser;
	}
	public function setCodeUser($codeUser)
	{
		$this->codeUser = $codeUser;
	}

	//Insertion d'une session
	public function create()
	{
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$query = $this->createUser();
		if ($query) {
			$stmt = $bdd->query("SELECT LAST_INSERT_ID(id) from user order by LAST_INSERT_ID(id) desc limit 1;");
			$codeUser = $stmt->fetchColumn();
			// $codeUser=$bdd->lastInsertId();
			echo $codeUser;
			$req = $bdd->prepare("INSERT INTO patient(Gender,cin,birthDay,city,codeUser)VALUES(:gender,:cin,:birthDay,:city,:codeUser)") or die(print_r($bdd->errorInfo()));
			$req->bindParam(':gender', $this->gender);
			$req->bindParam(':cin', $this->cin);
			$req->bindParam(':birthDay', $this->birthDay);
			$req->bindParam(':city', $this->city);
			$req->bindParam(':codeUser', $codeUser);
			$patientI = $req->execute();
			return ($patientI);
		} else {
			return 0;
		}
	}

	//Modifier session
	public function update($id)
	{
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();

		$query = $this->updateUser($id);
		if ($query) {
			$req = $bdd->prepare("UPDATE patient  SET Gender=:gender,cin=:cin,birthDay=:birthDay,city=:city WHERE codeUser=:ID") or die(print_r($bdd->errorInfo()));
			$req->bindParam(':gender', $this->gender);
			$req->bindParam(':cin', $this->cin);
			$req->bindParam(':birthDay', $this->birthDay);
			$req->bindParam(':city', $this->city);
			$req->bindParam(':ID', $this->id);
			$patientI = $req->execute();
			return ($patientI);
		} else {
			return 0;
		}
	}

	//Suppression d'une session
	public static function delete($ID)
	{
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$query = parent::deleteUser($ID);
		if ($query) {
			$req = $bdd->prepare('Delete FROM patient WHERE id = :id') or die(print_r($bdd->errorInfo()));
			$req->bindParam(':id', $ID);
			$patientD = $req->execute();
			return ($patientD);
		}
	}
}
