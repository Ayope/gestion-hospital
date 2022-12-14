<?php
session_start();


if(isset($_SESSION['ROLE'])){

if($_SESSION['ROLE']=="pat"){
    header('location: Pages/Dashboard-patient/dashboard.php');   
}elseif($_SESSION['ROLE']=="admin"){
    header('location: Pages/dashboard-admin/pageAdmin/dashboard.php');   
}elseif($_SESSION['ROLE']=="doc"){
    header('location: Pages/Dashboard-doctor/dashboard.php');   
}else{

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAMA Hopital</title>

    <!-- Bootstrap classes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Assests\css\main.css" rel="stylesheet"/> 
    <!-- Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="./Assests/images/icont.png" type="image/png">


</head>
<body style="height: 100vh; background-image: url('Assests/images/bg01.jpg'); background-size: cover;"> 
    
    <header> 
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-3 text-white" href="#">NAMA hopital</a>

                <div class="d-flex ms-3">
                    <a class="pe-5 text-decoration-none text-white" href="Loging-signup/login.php">Log in</a>
                    <a class="pe-3 text-decoration-none text-white" href="Loging-signup/signup.php">Register</a>
                </div>
            </div>
        </nav>
    </header>  

    <main class="d-flex justify-content-center align-items-center bg-bordbl" style="height:85vh " >
        <div class="text-center ">
            <h1 class="text-white">Éviter les problèmes et les retards.</h1>
            <p class="text-white">Comment est la santé aujourd'hui, on dirait qu'elle n'est pas bonne !</p>
            <p class="text-white">Ne vous inquiétez pas. Trouvez votre médecin en ligne Réservez comme vous le souhaitez avec N.A.M.A .</p>
            <p class="text-white">Nous vous offrons un service gratuit de canalisation de médecin, prenez votre rendez-vous maintenant.</p>
           <a href="Loging-signup/signup.php"> <button class="rounded text-white p-2" style="border:none; background: #0a76d8;">Make Appointment</button></a>
        </div>
        <a class="position-absolute bottom-0 text-decoration-none text-white fw-light mb-3" href="#">NAMA Hopital</a>
    </main>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>