<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <!-- Bootstrap classes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="assets/css/main.css" rel="stylesheet"/>
    <link href="assets/css/parsley.css" rel="stylesheet"/>
    
</head>
<body style="background-image: url('assets/images/bg01.jpg'); background-size: cover;">

    <div class="d-flex justify-content-center align-items-center my-4" style="height: 100vh;">    
        <form action="" method="POST" id="form" data-parsley-validate class="border bg-white rounded px-5 py-4">
            
            <div class="text-center">
                <h1 id="title">Sign Up</h1>
                <p class="text-muted fw-light">You can sign up here!</p>
            </div>
            
            <p class="mb-0">Name</p>
            <div class="pb-3">
                <input type="text" id="firstnameId" data-parsley-type="alphanum" class="form-control me-1" name="firstname" placeholder="firstname" required>
                <input type="text" id="lastnameId" data-parsley-type="alphanum"	class="form-control mt-3" name="lastname" placeholder="lastname" required>
            </div>

            <div class="pb-3">
                <label for="cin_inpt" id="cinLabel">CIN</label>
                <input type="text" id="cin_inpt" data-parsley-type="alphanum" 
                class="form-control" size="30" name="cin" placeholder = "Code CIN" required>
                <label class="mb-0 text-dark fw-light">Format: AA99999A</label>
            </div>

            <div class="pb-3">
                <label for="email_inpt" id="emaiLabel">Email</label>
                <input type="email" id="email_inpt" class="form-control" placeholder="Email" name="email" data-parsley-type="email"	required>
            </div>

            <div class="">
                <label for="pass_inpt" id="passLabel">Password</label>
                <input type="password" id="pass_inpt" class="form-control"
                data-parsley-minlength="8"
                data-parsley-errors-container=".errorspannewpassinput"
                data-parsley-required-message="Please enter your new password."
                data-parsley-uppercase="1"
                data-parsley-lowercase="1"
                data-parsley-number="1"
                data-parsley-special="1"
                data-parsley-required 
                placeholder="Password" size="30" name="password" required>
            </div>

            <div class="mt-2 text-center">
                <button id = "signup" type="submit" class="mt-2 w-100 rounded p-2 text-white fw-bold" style="border:none; background: #0a76d8;" name="signup">Sign up</button>
            </div>

            <div class="text-center mt-3">
                <p class="mb-0 text-muted">Already have an account?</p>
                <a href="login.php" style="text-decoration: none; color: black">Login here!</a>
            </div>
            
        </form>

    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/parsley.js"></script>

    <script>
        $('#form').parsley();
    </script>
</body>
</html>