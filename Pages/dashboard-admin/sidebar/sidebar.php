 <!-- Sidebar -->
 <div class="secondary-bg" id="sidebar-wrapper">
     <div class="sidebar-heading text-center py-4 primary-text-color fs-4 fw-bold text-uppercase border-bottom">
         Welcome Back</div>
     <div class="list-group list-group-flush my-3">
         <div class="d-block text-center  ">
             <img src="../../Assests/images/admin.jpg" alt="account img" id="userImage" style="border-radius: 50%;
                height:100px;
                width:100px;">
             <h5><?php echo $info['firstName']." ".$info['lastName']; ?></h5>
             <h5 class="mt-1" id="userName"></h5>
         </div>
         <form method="post">
             <button type="submit" id="Dashboard" name="Dashboard"
                 class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                 <i class="fas fa-tachometer-alt me-2"></i>Dashboard
             </button>
             <button type="submit" id="Doctors" name="Doctors"
                 class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                 <i class="bi bi-heart-pulse-fill me-2"></i>Doctors
             </button>
             <button type="submit" id="Schedule" name="Schedule"
                 class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                 <i class="bi bi-alarm-fill me-2"></i>Schedule
             </button>
             <button type="submit" id="Appointment" name="Appointment"
                 class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                 <i class="bi bi-telephone-inbound-fill me-2"></i>Appointment
             </button>
             <button type="submit" id="Patients" name="Patients"
                 class=" list-group-item list-group-item-action bg-transparent second-text-color active">
                 <i class="bi bi-bandaid-fill me-2"></i>Patients
             </button>
             <button type="submit"  id="logout" name="logout"
             class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
             <i class="fas fa-power-off me-2"></i>Logout
             </button>
         </a>
         </form>
     </div>
 </div>
 <!-- /#sidebar-wrapper -->