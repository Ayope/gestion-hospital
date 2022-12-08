<?php
include 'User.php'; 

$user = new User;

if(isset($_POST['login']))        signup();

function signup(){

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo User::login($email,$password);

    
}






?>