<?php
include '../../Classes/user/userScript.php';
$info = User::getById();
$countd = User::count("doc");
$show = User::getAllByRole("doc");
include '../../Classes/appointment/scriptappointment.php';
$info = User::getById();
if($_SESSION['ROLE']!="admin"){
    header('location: ../../index.php'); 
}else{
    require 'header/header.php';
    require 'sidebar/sidebar.php';
?>

<div id="page-content-wrapper">

    <?php require 'navbar/navbar.php'; ?>
    <div class="container-fluid px-4" id="container">
        <div id="dashboardContainer">
            <?php 
            if(isset($_POST['Dashboard'])) include 'pageAdmin/Dashboard.php';
            else if(isset($_POST['Doctors'])) include 'pageAdmin/doctors.php';
            else if(isset($_POST['Schedule'])) include 'pageAdmin/Dashboard.php';
            else if(isset($_POST['Appointment'])) include 'pageAdmin/Dashboard.php';
            else if(isset($_POST['Patients'])) include 'pageAdmin/Dashboard.php';
            else include 'pageAdmin/Dashboard.php'; ?>
        </div>
    </div>
</div>
<main class="row overflow-auto">
    <div class="col">

    </div>

    </div>


    <?php require 'footer/footer.php';} ?>