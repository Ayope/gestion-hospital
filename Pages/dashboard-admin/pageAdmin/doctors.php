 <form>
     <div class="d-flex">
         <div class="form-outline form-group d-flex flex-fill">
             <input type="search" class="form-control input-sm" placeholder="&#128270; Search Doctor name or Email">
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
         <thead class="bg-light" style="border-color:#0A76D8;">
             <tr>
                 <th scope="col">Doctor Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">Spealities</th>
                 <th scope="col">Events</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($show as $row) {
                         $fname = $row['firstName'];
                         $lname = $row['lastName'];
                         $email = $row['email'];
                   
                                         

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
         </tbody>
     </table>
 </div>
 <!-- /#page-content-wrapper -->
 <!-- TASK MODAL -->
 <div class="modal fade" id="modal-task" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <form name="modalForm" action="" method="POST">
         <input type="hidden" name="id" value="">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header heaader">
                     <h1 class="modal-title" id="modalTask" name="bigTitle">Add Doctor</h1>
                     <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                         aria-label="Close"></button>
                 </div>

                 <div class="modal-body boody">



                     <div class="mb-3">
                         <label for="special_Inpt" class="fw-bold">First Name :</label>
                         <input name="speciality" type="text" id="special_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="gender_Inpt" class="fw-bold">Last Name : </label>
                         <input name="gender" type="text" id="gender_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="gender_Inpt" class="fw-bold">Gender : </label>
                         <input name="gender" type="text" id="gender_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="gender_Inpt" class="fw-bold">Speciality : </label>
                         <input name="gender" type="text" id="gender_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="city_Inpt" class="fw-bold">Numero telephone : </label>
                         <input name="city" type="text" id="city_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="special_Inpt" class="fw-bold">Email :</label>
                         <input name="speciality" type="text" id="special_Inpt" class="form-control" value="" required>
                     </div>
                     <div class="mb-3">
                         <label for="special_Inpt" class="fw-bold">Password :</label>
                         <input name="speciality" type="text" id="special_Inpt" class="form-control" value="" required>
                     </div>



                 </div>

                 <div class="modal-footer foooter" id="modalFooter">
                     <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-dark" id="save" name="saveChanges">Save changes!</button>
                 </div>
             </div>
         </div>
     </form>
 </div>
 <!-- END TASK MODAL-->