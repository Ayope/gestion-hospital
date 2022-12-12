<?php
include '../../Classes/user/userScript.php';
$info = User::getById();

if($_SESSION['ROLE']!="doc"){
    header('location: ../../index.php');

    
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootsrap icons-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link href="../../Assests/css/main.css" rel="stylesheet">

</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="secondary-bg" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text-color fs-4 fw-bold text-uppercase border-bottom">
                Welcome Back</div>
            <div class="list-group list-group-flush my-3">
                <div class="d-block text-center  ">
                    <img src="../../Assests/images/doc.webp" alt="account img" id="userImage" style="border-radius: 50%;
  height:100px;
  width:100px;">
 <h5><?php
  echo $info['firstName']." ".$info['lastName'] ;
?></h5>
                    <h5 class="mt-1" id="userName"></h5>
                </div>
                <a class="text-decoration-none" href="dashboard.php" >
                <button type="button" id="btnDash"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </button>
                  </a>
                  <a class="text-decoration-none" href="doctors.php" >
                <button type="button" id="btnBook"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-telephone-inbound-fill me-2"></i>My Appointment
                </button></a>
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-alarm-fill me-2 "></i>My sessions
                </button>
                <a class="text-decoration-none" href="apoinment.php" >
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-bandaid-fill me-2"></i>My Patients
                </button></a>
                <a class="text-decoration-none" href="pattient.php" >
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-gear-fill"></i> settings
                </button></a>
                <a href="../logout.php"
                    class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4  d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="bi bi-list primary-text-color fs-2 me-3" id="menu-toggle"></i>
                    <h2 id="pageTitle" class="fs-2 m-0 primary-text-color">Dashboard</h2>
                </div>



                <div class="">
                    <i class="bi bi-calendar-date-fill"></i>
                    <span>Today's Date</span><br>
                    <span class="ms-4">2022-11-01</span>

                </div>
            </nav>

            <div class="container-fluid px-4" id="container">
                <div id="dashboardContainer">
                    <form>
                        <div class="d-flex">
                            <div class="form-outline form-group d-flex flex-fill">
                                <input type="search" class="form-control input-sm"
                                    placeholder="&#128270; Search Doctor name or Email">
                            </div>
                            <div class="px-2">
                                <button type="button" class="btn btn-dark border-0" style="
                                        padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;">
                                    search
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--  -->
      
    <!-- /#page-content-wrapper -->
    <!-- TASK MODAL -->

    <!-- END TASK MODAL-->
    <!--bootsrap js cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../Assests/js/main.js"></script>

</body>

</html>