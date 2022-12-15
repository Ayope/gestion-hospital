<?php
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
	public function create() {
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$req = $bdd->prepare("INSERT INTO session(dateDebut,dateFin,title,maxNumber,codeDoctor)VALUES(:dateDebut,:dateFin,:title,:maxNumber,:codeDoctor)")or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':dateDebut', $this->dateDebut);
		$req->bindParam(':dateFin',$this->debutFin);
		$req->bindParam(':title',$this->title);
		$req->bindParam(':maxNumber',$this->maxNumber);
		$req->bindParam(':codeDoctor',$this->codeDoctor);
		$sessionI=$req->execute();
		return ($sessionI);
    }

	  //Modifier session
	  public function update($id) {
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$req = $bdd->prepare("UPDATE session SET dateDebut =:dateDebut, dateFin = :dateFin ,title = :title, maxNumber = :maxNumber, codeDoctor = :codeDoctor  WHERE id =:ID")or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':dateDebut', $this->dateDebut);
		$req->bindParam(':dateFin',$this->debutFin);
		$req->bindParam(':title',$this->title);
		$req->bindParam(':maxNumber',$this->maxNumber);
		$req->bindParam(':codeDoctor',$this->codeDoctor);
		$req->bindParam(':ID',$id);
		$sessionU=$req->execute();
      	return ($sessionU);
      }

	 //Suppression d'une session
	  public static function delete($ID) {
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$req = $bdd->prepare('Delete FROM session WHERE id = :id')or die(print_r($bdd-> errorInfo()));
		$req->bindParam(':id',$ID);
		$sessionD = $req->execute();
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
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
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
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$sql="SELECT count(id) as nbre FROM session";
		$pass = $bdd->query($sql);
		return ($pass);
	}


	public static function nbreSessionToday(){
		$database = new Dbconnect();
		$bdd = $database->connect_pdo();
		$sql="SELECT count(id) as nbre FROM session";
		$pass = $bdd->query($sql);
		return ($pass);
	}

}
?>