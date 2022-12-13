<?php

include "appointment.php";

if(isset($_POST['save_Appointment'])) saveAppointment();
if(isset($_POST['delete_appointment']))  deleteAppointment();
if(isset($_POST['update_Appointment'])) updateAppointment();

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
        <div class="d-flex justify-content-center">
            <div class="px-5">
                <button type="button" class="btn btn-warning text-white" value="" id="<?=$row['id'];?>"
                    onclick="remplir_form(id);" description="<?=$row['description']; ?>" date="<?=$row['dateA']; ?>"
                    codePatient="<?=$row['codePatient']; ?>" codeSession="<?=$row['codeSession']; ?>">update</button>
            </div>
            <div>
                <form method="post">
                    <input type="hidden" name="idHideAppointment" id="idHideAppointment" value="<?=$row['id'];?>">
                    <button type="submit" class="btn btn-danger" value="" name="delete_appointment">delete</button>
                </form>
            </div>
        </div>
    </td>
</tr>
<?php }  
}

function updateAppointment(){
    $appointment= new Appointment();
    $appointment->setDescription($_POST['description']);
    $appointment->setDate($_POST['date']);
    $appointment->setCodeSession($_POST['cs']);
    $appointment->setCodePatient($_POST['cp']);
    $appointment->SetId($_POST['idHide']);
    $appointment->update();
}
function deleteAppointment(){
  $appointment= new Appointment();
  $appointment->SetId($_POST['idHideAppointment']);
  $appointment->delete();
}
?>