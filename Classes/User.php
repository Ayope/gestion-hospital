<?php
class User {
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
	protected function __construct($firstName,$lastName,$email,$password,$NumeroTelephone,$icon,$role) {
		$this->firstName= $firstName;
		$this->lastName= $lastName;
		$this->email=$email;
		$this->password= $password;
        $this->NumeroTelephone= $NumeroTelephone;
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
    global $bdd;
      $sql="SELECT email ,password  from user where email = $email";
      $result = $bdd->query($sql);
      $numRows = $result->num_rows;
      if ($numRows > 0){
        $row = $result->fetch_assoc();
          // settign the values of the attributes
          if(password_verify($password, $row->password)){
          $_SESSION['USER_ID'];
          $_SESSION['ROLE'];
          }
          
          
      
      }else{
        // alert email invalide
      }


   }
   public function logOut(){
    // unset sessions
    unset($_SESSION['USER_ID']);
    unset($_SESSION['ROLE']);
    // get back to index
    header('location: index.php');

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
    $req = $bdd->prepare("UPDATE user SET firstName=:firstName,lastName=:lastName,email=:email,password=:password,NumeroTelephone=:NumeroTelephone,icon=:icon,role=:role")or die(print_r($bdd-> errorInfo()));
    $req->bindParam(':firstName', $user->firstName);
    $req->bindParam(':lastName',$user->lastName);
    $req->bindParam(':email',$user->email);
    $req->bindParam(':password',$user->password);
    $req->bindParam(':NumeroTelephone',$user->NumeroTelephone);
    $req->bindParam(':icon',$user->icon);
    $req->bindParam(':role',$user->role);
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
   public function getById($id){

   }
   public function count($table){

   }
}