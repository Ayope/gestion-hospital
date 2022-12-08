<?php
include 'User.php'; 

$user = new User;

if(isset($_POST['login']))        logIn();
if(isset($_POST['signup']))        signUp();

function logIn(){

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo User::login($email,$password);

    
}


function signUp(){
   


}






?>