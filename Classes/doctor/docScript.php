<?php 
    include "../../Config/db.php";
    
    include "./doctor.php";


    function addDoctor(){
        // should create user first before doctor 
        $database = new dbconnect();
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
        $database = new dbconnect();
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
                    <!-- <a href="?id=<?=$row['id']?>"> -->
                    <button class="mb-2 btn btn-success rounded-pill text-white fw-bold" data-bs-toggle="modal" data-bs-target="#modal-task">Modify</button>
                    <!-- </a> -->
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


    




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>