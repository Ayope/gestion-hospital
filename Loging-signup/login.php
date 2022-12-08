<?php
include '../Classes/user/userScript.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <!-- Bootstrap classes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../Assests/css/main.css" rel="stylesheet"/> 
    <link href="../Assests/css/parsley.css" rel="stylesheet"/>
    <!-- Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>
<body style="height: 100vh; background-image: url('../Assests/images/bg01.jpg'); background-size: cover;">
    
    <div class="d-flex justify-content-center align-items-center h-100" >    
        <form id="form" action="" method="POST" data-parsley-validate class="border bg-white rounded px-5 py-3">
            
        <div class="text-center mb-4">
            <h3 id="title">Welcome Back!</h3>
            <p class="text-muted fw-light">You can log in here !</p>
        </div>
        
        <div class="pb-3">
            <label for="email_inpt1" id="emaiLabel">Email</label>
            <input type="email" id="email_inpt1" class="form-control"  
            data-parsley-type="email" name="email" required>
        </div>

        <div>
            <label for="pass_inpt1" id="passLabel">Password</label>
            <input type="password" id="pass_inpt1" 
            data-parsley-minlength="8"
            data-parsley-errors-container=".errorspannewpassinput"
            data-parsley-required-message="Please enter your password."
            data-parsley-uppercase="1"
            data-parsley-lowercase="1"
            data-parsley-number="1"
            data-parsley-special="1"
            data-parsley-required 
            class="form-control " size="25" name="password" required>
        </div>

        <div class="mt-2 text-center">
            <button id="login" type="submit" class="mt-2 w-100 rounded p-2 text-white fw-bold" style="border:none; background: #0a76d8;" name="login">Login</button>
        </div>
        
        <div class="text-center mt-3">
            <p class="mb-0 text-secondary">Don't have an account?</p>
            <a href="signup.php" style="text-decoration: none; color: black">Sign up here</a>
        </div>
        </form>

    </div>

    <script src="../../Assests/js/jquery.js"></script>
    <script src="../../Assests/js/parsley.js"></script>

    <script>
        $('#form').parsley();
    </script>

</body>
</html>