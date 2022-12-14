<?php
    // include 'Classes\dbcon1.php';
    // include "./Controllers/script.php";

    // $database = new disconnect();
    // $db = $database->connect_pdo();                                            
?>

<?php include "scriptappointment.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karla:ital,wght@0,300;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
    <title>Document</title>
</head>

<body>
    <form class="container-fluid" method="post" action="" name="appointmentForm">
        <input type="hidden" id="idHide" name="idHide">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">code patient</label>
            <input type="number" class="form-control" id="cp" name="cp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">code session</label>
            <input type="number" class="form-control" name="cs" id="cs">
        </div>
        <div class="d-flex align-itmes-center justify-content-center">
            <button type="submit" class="btn btn-primary" name="save_Appointment" id="save_Appointment">SAVE</button>
            <button type="submit" class="btn btn-warning" name="update_Appointment"
                id="update_Appointment">EDIT</button>
        </div>
    </form>
    <form method="post">
        <div class="px-2 py-5 d-flex justify-content-center d-grid gap-2">
            <input type="search" class="form-control input-sm" placeholder="&#128270; Search by name" name="search"
                id="search-input">
            <button type="submit" class="btn btn-dark border-0"
                style="padding: 5px 5px;width: 100px;text-align: center;cursor: pointer;" name="btn_search">
                search</button>
        </div>
    </form>
    <div class="py-5 my-4">
        <table class=" table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>description</th>
                    <th>dateA</th>
                    <th>code Patient</th>
                    <th>code session</th>
                    <th class="text-center">event</th>
                </tr>

            </thead>
            <tbody>
                <?php getAppointment(); ?>
            </tbody>
        </table>
    </div>



    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- BS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="appointment.js"></script>
</body>

</html>