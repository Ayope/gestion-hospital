<?php
include 'User.php'; 

$user = new User;
$info = User::getById();
$countd = User::count("doc");
$countp = User::count("pat") ;

if(isset($_POST['login']))        logIn();
if(isset($_POST['signup']))        signUp();
if(isset($_POST['adddoc']))         addDoc();


function logIn(){

    $email = $_POST['email'];
    $password = $_POST['password'];
     User::login($email,$password);

    
}


function signUp(){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "pat";
    $NumeroTelephone = $_POST['number'];


   

    User::signUp($firstName,$lastName,$email,$password,$role,$NumeroTelephone );

}


function addDoc(){
    $fname = $_POST['docf'] ;
    $lname = $_POST['docl'];
    $email = $_POST['doce'];
    $password = $_POST['docp'];
    $role = "doc";
    $NumeroTelephone = $_POST['docc'];
    $icon = "not working";
    $gender = $_POST['docg'];
    $speciality = $_POST['docs'];
    $city = $_POST['doccity'];
    
    User::createUser($fname,$lname,$email,$password,$icon,$role,$NumeroTelephone,$city,$speciality,$gender,"");
}




?>