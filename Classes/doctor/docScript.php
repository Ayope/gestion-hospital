<?php 
    include "../../Config/db.php";
    
    include "./doctor.php";

    
    if(isset($_POST['saveDoc'])) addDoctor();
    
    function addDoctor(){
        $firstName = $_POST['firstName'];
        $LastName = $_POST['LastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];  
        $role = 'doc';
        $city = $_POST['city'];
        $prof = $_POST['prof'];
        $gender = $_POST['gender'];

        if (isset($_FILES['icon']['name'])) {
            $image_name = $_FILES['icon']['name'];
            $tmp_name = $_FILES['icon']['tmp_name'];
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("doctor", true) . '.' . $img_ex_lc;
                $img_upload_path = '../../image/doctor' . $new_img_name;
                $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                if ($upload == FALSE) {
                    $_SESSION["error"] = "Sorry ,";
                     echo "error image";
                    die();
                }
            } else {
                $_SESSION["error"] = "Sorry , you can't upload this type of files";
                echo "Sorry , you can't upload this type of files";
                die();
            }
        } else {
            $img_upload_path = '../../image/doctor/default.jpg';
        }
        
        $doctor = new Doctor($firstName,$lastName,$email,$password,$img_upload_path,$role,$gender,$city,$prof);
        $sql = $doctor->createDoctor();

        if($sql){
            echo "done inserting data";
            die();
        }else{
            echo "error inserting data";
            die();
        }
    }



    function showDoc(){
        $database = new Dbconnect;
        $db = $database->connect_pdo();

        $sql = Doctor::readData();        
        $sth = $db->prepare($sql);
        $sth->execute();
        
?> 
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">City</th>
                <th scope="col">Speciality</th>
                <th scope="col">Gender</th>
                <th scope="col">Events</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $sth->fetch()): ?>
                <tr>
                <td><?=$row['city']?></td>
                <td><?=$row['speciality']?></td>
                <td><?=$row['Gender']?></td> 
                <td>
                    <button class="mb-2 btn btn-success rounded-pill text-white fw-bold" data-bs-toggle="modal" data-bs-target="#modal-task" onclick="func(<?=$row['id']?>,`<?=$row['city']?>`,`<?=$row['speciality']?>`,`<?=$row['Gender']?>`)">Modify</button>
                </td>
                </tr>
            <?php endwhile;}?>
        </tbody>
        </table>
    </div>

    <?php showDoc();?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form action="" method="POST">
    <div class="form-group">
        <label for="1">City</label>
        <input type="text" class="form-control" id="1" name = "city">
    </div>

    <div class="form-group">
        <label for="2">Profession</label>
        <input type="text" class="form-control" id="2" name = "prof">
    </div>

    <div class="form-group">
        <label for="3">Gender</label>
        <input type="text" class="form-control" id="3" name = "gender">
    </div>

    <div class="form-group">
        <label for="4">Code User</label>
        <input type="number" class="form-control" id="4" name = "codeUser">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
        if(isset($_POST['saveChanges'])){
            $database = new Dbconnect;
            $db = $database->connect_pdo();

            $id = $_POST['id'];
            $city = $_POST['city'];
            $speciality= $_POST['speciality'];
            $gender = $_POST['gender'];

            $sql = Doctor::updateDoctor();
            $sth = $db->prepare($sql);
            $sth->execute(['city' => $city, 'speciality' => $speciality, 'gender'=> $gender, 'id' => $id]);
            
        }

    ?>

    <div class="modal fade" id="modal-task" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
		<form name="modalForm" action= "" method="POST">
            <input type="hidden" name="id" value="">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header heaader" >
						<h1 class="modal-title" id="modalTask" name="bigTitle">Add Task</h1>
						<button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body boody">
	
                        <div class="mb-3">
                            <label for="city_Inpt" class="fw-bold">City: </label>
                            <input name="city" type="text" id="city_Inpt" class="form-control" value="" required>
						</div>

                        <div class="mb-3">
                            <label for="special_Inpt" class="fw-bold">Speciality: </label>
                            <input name="speciality" type="text" id="special_Inpt" class="form-control" value="" required>
						</div>

                        <div class="mb-3">
                            <label for="gender_Inpt" class="fw-bold">Gender: </label>
                            <input name="gender" type="text" id="gender_Inpt" class="form-control" value="" required>
						</div>
					</div>

					<div class="modal-footer foooter" id = "modalFooter">
						<button type="button" class="btn btn2" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn bg-white" id="save" name="saveChanges">Save changes!</button>
					</div>
				</div>
			</div>	
		</form>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./doc.js"></script>
</body>
</html>