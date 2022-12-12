<?php
include '../../Classes/user/userScript.php';
$info = User::getById();
$countd = User::count("doc");
$countp = User::count("pat") ;
// $$countp = User::count("pat");

if($_SESSION['ROLE']!="admin"){
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
                    <img src="../../Assests/images/admin.jpg" alt="account img" id="userImage" style="border-radius: 50%;
  height:100px;
  width:100px;">
  <h5><?php
 echo $info['firstName']." ".$info['lastName'] ;
?></h5>
                    <h5 class="mt-1" id="userName"></h5>
                </div>
                <button type="button" id="btnDash"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </button>
                <a class="text-decoration-none" href="doctors.php" >
                <button type="button" id="btnBook"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-heart-pulse-fill me-2"></i>Doctors
                </button>
                </a>
                <a class="text-decoration-none" href="doctors.php" >
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-alarm-fill me-2"></i>Schedule
                </button>
                </a>
                <a class="text-decoration-none" href="doctors.php" >
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-telephone-inbound-fill me-2"></i>Appointment
                </button>
                </a>
                <a class="text-decoration-none" href="doctors.php" >
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-bandaid-fill me-2"></i>Patients
                </button>
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
                    <div class=" px-1 py-2 d-flex justify-content-center justify-content-md-start">
                        <strong class="fs-3">Status</strong>
                    </div>
                    <div class="row ps-3 gap-5 d-flex justify-content-center mb-3  ">
                        <button
                            class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
                            <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                                <i class="bi bi-heart-pulse-fill "> </i>
                            </div>
                            <div class="order-1">
                                <span><?php echo $countd['COUNT(role)'] ?> </span><br>
                                <span>Doctors</span>
                            </div>
                        </button>
                        <button
                            class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3  bg-white border-0 rounded">
                            <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                                <i class="bi bi-bandaid-fill "></i>
                            </div>
                            <div class="order-1">
                                <span><?php echo $countp['COUNT(role)'] ?> </span><br>
                                <span>Patient</span>
                            </div>
                        </button>
                        <button
                            class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
                            <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                                <i class="bi bi-bookmark-fill"></i>
                            </div>
                            <div class="order-1">
                                <span>0</span><br>
                                <span>NewBoking</span>
                            </div>
                        </button>
                        <button
                            class="d-flex align-items-center justify-content-between col-8 col-md-5 col-lg-2 shadow-sm p-3 bg-white border-0 rounded">
                            <div class="order-2 border-1 shadow-sm" style="background-color:#f5f5f5;">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <div class="order-1">
                                <span>0</span><br>
                                <span>Today Session</span>
                            </div>
                        </button>
                    </div>

                </div>
                <div id="bookContainer" class="d-none">
                </div>
                <div class="row d-flex justify-content-md-between justify-content-center container-fluid px-3 w-100">
                    <div class="col-11 col-md-6">
                        <div>
                            <strong>Upcoming appoinments unitel next tuesday</strong><br>
                            <p>Here's Quick access to Upcoming Appointments until 7 days More details available in
                                @Appointment section.</p>
                        </div>
                        <div class="position-relative">
                            <div class="table-responsive  shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-hover" style="cursor: pointer;">
                                    <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #000000;">
                                        <th>Appoinment number</th>
                                        <th>patient name</th>
                                        <th>Doctor</th>
                                        <th>Session</th>
                                    </tr>
                                    <!-- <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13</td>
                                </tr> -->
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-10 col-md-6 mt-5 pt-5  pt-md-0 mt-md-0">
                        <div>
                            <strong>Upcoming Session untel Next Tuesday</strong><br>
                            <p> Here's Quick access to Upcoming Sessions until 7 days
                                Add,Remove available in @Schedule section .</p>
                        </div>
                        <div class="position-relative">
                            <div class="table-responsive mt-2 shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-hover">
                                    <tr class="shadow-sm mb-5 bg-white rounded" style="border-color: #000000;">
                                        <th>Session Tiltle</th>
                                        <th>Doctor</th>
                                        <th>Scheduled Date & Time</th>
                                    </tr>
                                    <!-- <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr>
                                <tr>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>Nouhaila KHAOUTI</td>
                                    <td>13-14-2022</td>
                                </tr> -->
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="row overflow-auto">
            <div class="col">

            </div>


    </div>
    </div>
    </div>
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