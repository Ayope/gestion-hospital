<?php 
    include "../../Config/db.php";
    
    include "./doctor.php";

    function addDoctor(){
        // should create user first before doctor 
        $database = new dbconnect();
        $db = $database->connect_pdo(); //PDO Object

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

?>

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
</body>
</html>