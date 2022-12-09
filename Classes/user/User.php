<?php
include "../Config/db.php";
session_start();

class User{
	//les attributes d'une session
	protected $id;
	protected $firstName;
	protected $lastName;
	protected $email;
	protected $password;
  protected $NumeroTelephone;
	protected $icon;
  protected $role;

    //constructeur:
	// protected function __construct($firstName,$lastName,$email,$password,$NumeroTelephone,$icon,$role) {
	// 	$this->firstName= $firstName;
	// 	$this->lastName= $lastName;
	// 	$this->email=$email;
	// 	$this->password= $password;
  //       $this->NumeroTelephone= $NumeroTelephone;
	// 	$this->icon= $icon;
  //   $this->role= $role;
	// }

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

  public static  function login($email,$password){
    $database = new dbconnect();
    $db = $database->connect_pdo();
    $stmt= $db->prepare("SELECT * from user where email = '$email'");
    $stmt->execute();
    $row = $stmt->fetch();
    if(!$row){

      $_SESSION['message'] = "Email Is not valid !";



    }
    else{
      if($row['password']==$password){
        $_SESSION['ID']= $row['id'];
        $_SESSION['ROLE']= $row['role'];

        if($_SESSION['ROLE']=="admin"){
          header('location: ../Pages/dashboard-admin/Dashboard.php');
        }elseif($_SESSION['ROLE']=="doc"){
          header('location: ../Pages/Dashboard-doctor/dashboard.php');
        }elseif($_SESSION['ROLE']=="pat"){
          header('location: ../Pages/Dashboard-patient/dashboard.php');
        }

  
  
       }else{
        $_SESSION['message']="Password Wrong !";
       } 
    }
   

   }


   public static function signUp($firstName,$lastName,$email,$password,$role,$NumeroTelephone){
    $database = new dbconnect();
    $db = $database->connect_pdo(); 
    $stmt= $db->prepare("SELECT * from user where email = '$email'");
    $stmt->execute();
    $row = $stmt->fetch();
    if(!$row){
      $stmt = $db->prepare("INSERT INTO user (`firstName`, `lastName`, `email`, `password`, `role`, `NumeroTelephone`) VALUES ('$firstName','$lastName','$email','$password','$role','$NumeroTelephone')");
      $stmt->execute();
    



    }else{
      echo "email alredy exist!";
    }

   }
   public function logOut(){
    
   

   }
   public function createUser($user){
    global $bdd;
    $req = $bdd->prepare("INSERT INTO user(firstName,lastName,email,password,NumeroTelephone,icon,role)VALUES(:firstName,:lastName,:email,:password,:NumeroTelephone,:icon,:role)")or die(print_r($bdd-> errorInfo()));
    $req->bindParam(':firstName', $user->firstName);
    $req->bindParam(':lastName',$user->lastName);
    $req->bindParam(':email',$user->email);
    $req->bindParam(':password',$user->password);
    $req->bindParam(':NumeroTelephone',$user->NumeroTelephone);
    $req->bindParam(':icon',$user->icon);
    $req->bindParam(':role',$user->role);
    $userI=$req->execute();
    return ($userI);
   }
   public function updateUser($user){
    global $bdd;
    $req = $bdd->prepare("UPDATE user SET firstName=:firstName,lastName=:lastName,email=:email,password=:password,NumeroTelephone=:NumeroTelephone,icon=:icon,role=:role WHERE id=:ID")or die(print_r($bdd-> errorInfo()));
    $req->bindParam(':firstName', $user->firstName);
    $req->bindParam(':lastName',$user->lastName);
    $req->bindParam(':email',$user->email);
    $req->bindParam(':password',$user->password);
    $req->bindParam(':NumeroTelephone',$user->NumeroTelephone);
    $req->bindParam(':icon',$user->icon);
    $req->bindParam(':role',$user->role);
    $req->bindParam(':ID',$user->id);
    $userU=$req->execute();
    return ($userU);
   }
   public function deleteUser($id){
     
   }
   public function getUserByEmail($email){
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM user WHERE email = :email')or die(print_r($bdd-> errorInfo()));
    $req->bindParam(':email',$email);
    $user = $req->execute();
      return ($user);
   }
   public static function getById(){
   


   }
   public function count($table){

   }
}