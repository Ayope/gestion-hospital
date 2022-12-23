<?php
include '../../Classes/user/userScript.php';
$info = User::getById();
$countd = User::count("doc");
$show = User::getAllByRole("doc");

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
                <a class="text-decoration-none" href="dashboard.php" > 
                <button type="button" id="btnDash"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </button></a>
                <button type="button" id="btnBook"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                    <i class="bi bi-heart-pulse-fill me-2"></i>Doctors
                </button>
                <a class="text-decoration-none" href="schedule.php" > 
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-alarm-fill me-2"></i>Schedule
                </button></a>
                <a class="text-decoration-none" href="apoinment.php" > 
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-telephone-inbound-fill me-2"></i>Appointment
                </button></a>
                <a class="text-decoration-none" href="pattient.php" > 
                <button type="button" id="btnprfl"
                    class=" list-group-item list-group-item-action bg-transparent second-text-color ">
                    <i class="bi bi-bandaid-fill me-2"></i>Patients
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
                    <div class="d-flex justify-content-between">
                    <div class=" px-4 py-4 ">
                        <strong class="fs-3">Add New Doctor :</strong>
                    </div>
                        <div class="px-4 py-4">
                        <button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modal-task">Add doctor</button>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>All Doctors (<?php echo $countd['COUNT(role)'] ?>)</h4>
                    </div> 

                    <div class="container-fluid  mt-5 shadow-sm table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-hover table-responsive ">
  <thead  class="bg-light"style="border-color:#0A76D8;">
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Events</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($show as $row) {
        $fname = $row['firstName'];
        $lname = $row['lastName'];
        $email = $row['email'];
        $numero = $row['NumeroTelephone'];
                        

        echo 
        "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>
            <div class='btn-group' >
                <button class='btn btn-dark  btn-md m-1 rounded '><i class='bi bi-pencil'> Edit</i></button>   
                <button class='btn btn-dark  btn-md m-1 rounded'><i class='bi bi-eye'> View</i></button>
                <button class='btn btn-dark  btn-md m-1 rounded'><i class='bi bi-trash'> Remove</i></button>    
            </div>
            </td>
        </tr>";
    } ?>
    <!-- <tr>
      <td>Nouhaila KHAOUTI</td>
      <td>Nouhaila@youcode.ma</td>
      <td>Dentise</td>
      <td>
      <div class="btn-group" >

    <button class="btn btn-primary btn-bg btn-md m-1 rounded "><i class="bi bi-pencil"> Edit</i></button>   
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-eye"> View</i></button>
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-trash"> Remove</i></button>    
</div>


    </td>
    </tr>
    <tr>
      <td>Mohammed MOUSSIFA</td>
      <td>Mohammed@youcode.ma</td>
      <td>Cardiologie</td>
      <td>
      <div class="btn-group" >
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-pencil"> Edit</i></button>    
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-eye"> View</i></button>    
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-trash"> Remove</i></button>    


    </td>
    </tr>
    <tr>
      <td>Ayoub AYOUK</td>
      <td>Ayoub@youcode.ma</td>
      <td>Accident and emergent</td>
      <td>
      <div class="btn-group" >
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-pencil"> Edit</i></button>    
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-eye"> View</i></button>    
    <button class="btn btn-primary btn-bg btn-md btn-md m-1 rounded "><i class="bi bi-trash"> Remove</i></button>    
</div>

    </td>
    </tr>
    <tr>
      <td>Ghita BAHAJ</td>
      <td>Ghita@youcode.ma</td>
      <td>Endocrinologie</td>
      <td>
      <div class="btn-group" >
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-pencil"> Edit</i></button>    
    <button class="btn btn-primary btn-bg btn-md m-1 rounded "><i class="bi bi-eye"> View</i></button>    
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-trash"> Remove</i></button>    
</div>

    </td>
    </tr>
    <tr>
      <td>Abdellah EL GHOULAM</td>
      <td>Abdellah@youcode.ma</td>
      <td>Médecine interne</td>
      <td>
      <div class="btn-group" >
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-pencil"> Edit</i></button>    
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-eye"> View</i></button>    
    <button class="btn btn-primary btn-bg btn-md m-1 rounded"><i class="bi bi-trash"> Remove</i></button>    

</div> -->
   
   
    <!-- <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div> 
    <!-- /#page-content-wrapper -->
    <!-- TASK MODAL -->
    <div class="modal fade" id="modal-task" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
		<form name="modalForm" action= "../../Classes/doctor/docScript.php" method="POST" enctype="multipart/form-data">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header heaader" >
						<h1 class="modal-title" id="modalTask" name="bigTitle">Add Doctor</h1>
						<button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body boody">
                        <div class="mb-2">
                            <label for="img_input">Image</label>
                            <input type="file" class="form-control" name="img" id="img_inpt">
                        </div>                        
                        <div class="mb-3">
                            <label for="firstName_Inpt" class="fw-bold">First Name :</label>
                            <input name="firstName" type="text" id="firstName_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="LastName_Inpt" class="fw-bold">Last Name : </label>
                            <input name="lastName" type="text" id="LastName_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="gender_Inpt" class="fw-bold">Gender : </label>
                            <input name="gender" type="text" id="gender_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="prof_Inpt" class="fw-bold">Speciality : </label>
                            <input name="prof" type="text" id="prof_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="city_Inpt" class="fw-bold">city : </label>
                            <input name="city" type="text" id="city_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="email_Inpt" class="fw-bold">Email :</label>
                            <input name="email" type="text" id="email_Inpt" class="form-control" value="" required>
						</div>
                        <div class="mb-3">
                            <label for="pass_Inpt" class="fw-bold">Password :</label>
                            <input name="password" type="text" id="pass_Inpt" class="form-control" value="" required>
						</div>
					</div>

					<div class="modal-footer foooter" id = "modalFooter">
						<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-dark" id="save" name="saveDoc">Save changes!</button>
					</div>
				</div>
			</div>	
		</form>	
	</div>
    <!-- END TASK MODAL-->
    
    <!--bootsrap js cdn link-->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../Assests/js/main.js"></script>

</body>

</html>