
<?php
include '../Classes/user/userScript.php';


if(isset($_SESSION['ROLE'])){

    if($_SESSION['ROLE']=="admin"){
        header('location: ../Pages/dashboard-admin/Dashboard.php');
      }elseif($_SESSION['ROLE']=="doc"){
        header('location: ../Pages/Dashboard-doctor/dashboard.php');
      }elseif($_SESSION['ROLE']=="pat"){
        header('location: ../Pages/Dashboard-patient/dashboard.php');
      }
else{

}
}

?>
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
    <link href="../Assests/css/main.css" rel="stylesheet"/>
    <link href="../Assests/css/parsley.css" rel="stylesheet"/>
    <link rel="icon" href="../Assests/images/icont.png" type="image/png">
</head>
<body style="background-image: url('../Assests/images/bg01.jpg'); background-size: cover;">

    <div class="d-flex justify-content-center align-items-center my-4" style="height: 100vh;">    
        <form action="../Classes/Patient/PatientController.php" method="POST" id="form" data-parsley-validate class="border bg-white rounded px-5 py-4 ">
        <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>Ooups !</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?> 
            <div class="text-center">
                <h1 id="title">SIGN UP</h1>
            </div>
            
            <p class="mb-0">First name</p>
            <div class="pb-3">
                <input type="text" id="firstName" data-parsley-type="alphanum" class="form-control me-1" name="firstName" placeholder="firstName" required>
                </div>
                <p class="mb-0">Last name</p>

                <div class="pb-3">

                <input type="text" id="lastName" data-parsley-type="alphanum"	class="form-control mt-3" name="lastName" placeholder="lastName" required>
            
                </div>
            <div class="pd-3"><label for="exampleInputEmail1" class="form-label">icon</label>
            <input type="text" class="form-control" id="icon" name="icon"></div>
                
            <div class="pb-3">
                <label for="cin_inpt" id="cinLabel">Numero Télephone</label>
                <input type="Number" id="NumeroTelephone" data-parsley-type="alphanum" 
                class="form-control" size="30" name="NumeroTelephone" placeholder = "Number" required>
            </div>
            <div class="pb-3">
                <label for="cin_inpt" id="cinLabel">City</label>
                <input type="text" id="city" data-parsley-type="alphanum" 
                class="form-control" size="30" name="city" placeholder = "city" required>
            </div>
            <div class="pb-3">
                <label for="cin_inpt" id="cinLabel">cin</label>
                <input type="text" id="cin" data-parsley-type="alphanum" 
                class="form-control" size="30" name="cin" placeholder = "cin" required>
            </div>
            <div class="pb-3">
                <label for="cin_inpt" id="cinLabel">Gender</label>
                <select class="form-select form-select-sm ms-5 cart shadow-sm" name="gender" id="gender" require>
        <option value="female">female</option>
        <option value="male">male</option>
      </select>
            </div>
            <div class="pb-3">
      <label for="exampleInputEmail1" class="form-label">birthDay</label>
      <input type="date" class="form-control" id="birthDay" name="birthDay" required>
    </div>
            <div class="pb-3">
                <label for="email_inpt" id="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" name="email" data-parsley-type="email"	required>
            </div>

            <div class="">
                <label for="pass_inpt" id="passLabel">Password</label>
                <input type="password" id="password" class="form-control"
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
                <button id = "signup" type="submit" name="save_Patient" class="mt-2 w-100 rounded p-2 text-white fw-bold" style="border:none; background: #0a76d8;" >Sign up</button>
            </div>

            <div class="text-center mt-3">
                <p class="mb-0 text-muted">Already have an account?</p>
                <a href="login.php" style="text-decoration: none; color: black">Login here!</a>
            </div>
            
        </form>

    </div>

    <script src="../Assests/js/jquery.js"></script>
    <script src="../Assests/js/parsley.js"></script>

    <script>
        $('#form').parsley();
    </script>
</body>
</html>