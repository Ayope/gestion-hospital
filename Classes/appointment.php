<?php


class Appointment{
    //les atributs d'appointment
    private $id;
    private $description;
    private $codeSession; 
    private $codePatient; 
    private $date; //date appointment
    
    public function __construct($des,$date){
        $this->description=$des;
        $this->codeSession=$cs;
        $this->codePatient=$cp;
        $this->date=$date;
    }
    //les geters et seters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id=$id;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        return $this->id=$description;
    }
    public function getCodeSession(){
        return $this->codeSession;
    }
    public function setCodeSession($codesession){
        return $this->codeSession=$codesession;
    }
    public function getCodePatient(){
        return $this->codePatient;
    }
    public function setcodePatient($codepatient){
        return $this->codePatient=$codepatient;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        return $this->date=$date;
    }

//create Appointment
/**
 * @param array  for insert data appointment in database
 * @return bool 
  */
    public static function create($appointment){
        global $bdd;
        $sql=$bdd->prepare("INSET INTO appointement(description,dateA) VALUE (:description,:dateA)") or die(print_r($bdd->errorInfo()));
        $app=$req->execute(array(':description'=>$appointment->description,':dateA'=>$appointment->date));
        return $app;
    } 
  // fetch data from database  
    public static function fetchById($Id){
        global $bdd;
        $sql=$bdd->prepare("SELECT * FROM appointment(description,dateA,codePatient,codeSession) WHERE id.appointment=".$Id);
        $app=$req->execute(array(':description'=>$appointment->description,':dateA'=>$appointment->date,':codePatient'=>$appointment->codePatient,':codeSession'=>$appointment->codeSession));
        return $app;
    } 
}






?>