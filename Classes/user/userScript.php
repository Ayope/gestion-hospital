<?php
include 'User.php'; 

$info = User::getById();
$countd = User::count("doc");
$countp = User::count("pat") ;

if(isset($_POST['login']))        logIn();
function logIn(){

    $email = $_POST['email'];
    $password = $_POST['password'];
     User::login($email,$password);

    
}


// function signUp(){
//     $firstName = $_POST['firstname'];
//     $lastName = $_POST['lastname'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role = "pat";
//     $NumeroTelephone = $_POST['number'];


   

//     User::;

// }







?>