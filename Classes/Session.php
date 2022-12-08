<?php
include ("../config/db.php");
class Session {
	//les attributes d'une session
	private $id;
	private $dateDebut;
	private $dateFin;
	private $maxNumber;
	private $title;
	private $codeDoctor;

    //constructeur:
	public function __construct($dateDebut,$dateFin,$maxNumber,$title,$codeDoctor) {
		$this->dateDebut= $dateDebut;
		$this->dateFin= $dateFin;
		$this->maxNumber=$maxNumber;
		$this->title= $title;
		$this->codeDoctor= $codeDoctor;
	}

//les getters et setters:
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
       $this->id=$id;
     }
	public function getDateDebut() {
		return $this->dateDebut;
	}
	public function setDateDebut($dateDebut) {
       $this->dateDebut=$dateDebut;
     }
	public function getDateFin() {
		return $this->dateFin;
	}
	public function setDateFin($dateFin) {
       $this->dateFin=$dateFin;

     }
	 public function gatMaxNumber() {
		return $this->maxNumber;
	}
	public function setMaxNumber($maxNumber) {
       $this->maxNumber=$maxNumber;

     }

	public function getCodeDoctor() {
		return $this->codeDoctor;
	}
	public function setCodeDoctor($codeDoctor) {
       $this->codeDoctor=$codeDoctor;
     }

	 public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
       $this->title=$title;
     }

	//Insertion d'une session
	public static function create($session) {
		global $bdd;
		$req = $bdd->prepare("INSERT INTO session(dateDebut,dateFin,title,maxNumber,codeDoctor)VALUES(:dateDebut,:dateFin,:title,:maxNumber,:codeDoctor)")or die(print_r($bdd-> errorInfo()));
		$sessionI=$req->execute(array(':dateDebut'=> $session->dateDebut,':dateFin'=> $session->dateFin,':title'=> $session->title,':maxNumber'=> $session->maxNumber,':codeDoctor'=> $session->codeDoctor));
		return ($sessionI);
    }

	  //Modifier session
	  public static function update($id,$dateDebut,$dateFin,$maxNumber,$title,$codeDoctor) {
		global $bdd;

		$req = $bdd->prepare("UPDATE session SET dateDebut =:dateDebut, dateFin = :dateFin ,title = :title, maxNumber = :maxNumber, codeDoctor = :codeDoctor  WHERE id =:ID")or die(print_r($bdd-> errorInfo()));

		$sessionU=$req->execute(array(':dateDebut'=> $dateDebut,':dateFin'=> $dateFin,':title'=> $title,':maxNumber'=> $maxNumber,':codeDoctor'=> $codeDoctor,':ID'=>$id));

      	return ($sessionU);
      }

	 //Suppression d'une session
	  public static function delete($ID) {
		global $bdd;
		$req = $bdd->prepare('Delete FROM session WHERE id = ?')or die(print_r($bdd-> errorInfo()));
		$sessionD = $req->execute(array($ID));

      	return ($sessionD);
    }
     //Rechecrher une session
	public static function fetchById($ID) {
		global $bdd;
		$sql='SELECT * FROM session WHERE id= ' . $ID;
		$session = $bdd->query($sql);
		return ($session);
      }
	//la liste  des sessions de l'application:
	public static function getAll() {
		global $bdd;
		$sql="SELECT * FROM session";
		$all= $bdd->query($sql);
		return ($all);
    }
	//recuperer une session par son title
	public static function LoadSession($title){
		global $bdd;
		$sql="SELECT * FROM session WHERE title = '".$title."'";
		$pass = $bdd->query($sql);
		return ($pass);
	}
    //recuperer le prenombre des sessions
	public static function nbreSession(){
		global $bdd;
		$sql="SELECT count(id) as nbre FROM session";
		$pass = $bdd->query($sql);
		return ($pass);
	}

}
?>