<?php 
    include "../../Config/db.php";
    
    include "./doctor.php";


    function addDoctor(){
        // should create user first before doctor 
        $database = new Dbconnect;
        $db = $database->connect_pdo();//PDO Object


        $city = $_POST['city'];
        $prof = $_POST['prof'];
        $gender = $_POST['gender'];
        $codeUser = $_POST['codeUser'];
        
        $doctor = new Doctor($city, $prof, $gender, $codeUser);

        $sql = $doctor->createDoctor();
        $db->exec($sql);

        if($sql){
            echo "done inserting data";
            die();
        }else{
            echo "error inserting data";
            die();
        }
    }

    if(isset($_POST['submit'])){
        addDoctor();
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
        <input type="text" class="form-control" id="4" name = "codeUser">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
        // if(isset($_POST['saveChanges'])){
        //     $city = $_POST['city'];
        //     $specialty= $_POST['speciality'];
        //     $gender = $_POST['gender'];
        // }
    
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