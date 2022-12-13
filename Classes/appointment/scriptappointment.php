<?php

include "appointment.php";

if(isset($_POST['save_Appointment'])) saveAppointment();
if(isset($_POST['delete']))  deleteAppointment();

function saveAppointment(){
    $appointment= new Appointment();
    $appointment->setDescription($_POST['description']);
    $appointment->setDate($_POST['date']);
    $appointment->setCodeSession($_POST['cs']);
    $appointment->setCodePatient($_POST['cp']);
    $appointment->create();
}

function getAppointment(){
    $appointment= new Appointment();
    $valeur=$appointment->read();
    foreach ($valeur as $key => $row){
        ?>
<tr>
    <td><?=$row['id']; ?></td>
    <td><?=$row['description']; ?></td>
    <td><?=$row['dateA']; ?></td>
    <td><?=$row['codePatient']; ?></td>
    <td><?=$row['codeSession']; ?></td>
    <td class="">
        <form action="Post">
            <div class="d-flex justify-content-center">
                <div class="px-5">
                    <input type="submit" class="btn btn-warning text-white" value="update" name="update" id="update">
                </div>
                <div>
                    <input type="submit" class="btn btn-danger" value="delete" name="delete" id="delete">
                </div>
            </div>
        </form>
    </td>
</tr>
<?php }  
}

function readById($id){
    $appointment= new Appointment();
    $valeur=$appointment->read();
}

// function updateAppointment(){
//     $id=$_POST[''];
//     $appointment= new Appointment;
//     $appointment->setId($id);
//     $appointment->update()
// }
// function deleteAppointment(){
//   $id=$_POST[''];
//   $appointment= new Appointment();
//   $appointment->setId($id);
//   $appointment->delete();
//   header("Location: test.php");
// }
?>