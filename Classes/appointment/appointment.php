<?php

// include "../../config/db.php";

class Appointment{
    private $id;
    private $description;
    private $date;
    private $codePatient;
    private $codeSession;
   

    public function getId(){
        return $this->id;
    }
    public function SetId($id){
        return $this->id=$id;
    }

    public function getDescription(){
        return $this->description;
    }
    public function SetDescription($description){
        return $this->description=$description;
    }
    public function getDate(){
        return $this->date;
    }
    public function SetDate($date){
        return $this->date=$date;
    }
    public function getCodePatient(){
        return $this->codePatient;
    }
    public function setCodePatient($codePatient){
        return $this->codePatient=$codePatient;
    }
    public function getCodeSession(){
        return $this->codeSession;
    }
    public function setCodeSession($codeSession){
        return $this->codeSession=$codeSession;
    }

    /**
     * @param  function for insert data of appointment
     * @return bool
     */
    public function create(){
        try{
            $conn= new dbconnect();
            $db=$conn->connect_pdo();
            $req=$db->prepare("INSERT INTO `appointement`(`description`, `dateA`, `codePatient`, `codeSession`) VALUES (?,?,?,?);");
            $resultat=$req->execute(array($this->description,$this->date,$this->codePatient,$this->codeSession));
            return $resultat;
        }catch(Execption $exp){
            return $exp->getMessage();
        }
    }

    public function read(){
        try{
            $conn=  new dbconnect();
            $db=$conn->connect_pdo();
            $req="SELECT * from `appointement`";
            $result=$db->query($req);
            return $result;
        }catch(Execption $exp){
            return $exp->getMessage();
        }
    }

    public function update(){
        try{
            $conn= new dbconnect();
            $db=$conn->connect_pdo();
            $req=$db->prepare("Update `appointement` SET `description`=?,`dateA`=?,`codePatient`= ?,`codeSession`=? WHERE appointement.id=?");
            $result=$req->execute(array($this->description,$this->date,$this->codePatient,$this->codeSession,$this->id));
            return $result;
        }catch(Execption $exp){
                return $exp->getMessage();
            }  
    }

    public function delete(){
        try{
            $conn= new dbconnect();
            $db=$conn->connect_pdo();
            $req=$db->prepare("DELETE FROM `appointement` WHERE id=?");
            $result=$req->execute(array($this->id));
            return $result;
        }catch(Execption $exp){
            return $exp->getMessage();
        }
        
    }

    	public function countBooking(){
            try{
                $database = new Dbconnect();
                $bdd = $database->connect_pdo();
                $sql =$bdd->prepare("SELECT COUNT(*) AS nbre FROM appointement WHERE date=?");
                $result=$sql->execute(array($this->date));
		        return $result;
            }catch(Execption $exp){
                return $exp->getMessage();
            }
	}
}

?>