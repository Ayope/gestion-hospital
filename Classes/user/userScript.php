<?php
include 'User.php'; 


$user = new User;

if(isset($_POST['login']))        logIn();
if(isset($_POST['signup']))        signUp();
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







?>