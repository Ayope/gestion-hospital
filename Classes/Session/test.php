<?php
    // include 'Classes\dbcon1.php';
    // include "./Controllers/script.php";

    // $database = new disconnect();
    // $db = $database->connect_pdo();                                            
?>

<?php include "./SessionController.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karla:ital,wght@0,300;1,200;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
  <title>Document</title>
</head>

<body>
  <form class="container-fluid" method="post" action="./SessionController.php">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">dateDebut</label>
      <input type="date" class="form-control" id="dateDebut" name="dateDebut">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">dateFin</label>
      <input type="date" class="form-control" id="dateFin" name="dateFin">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">max number</label>
      <input type="number" class="form-control" id="maxNumber" name="maxNumber">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">doctor</label>
      <select class="form-select form-select-sm ms-5 cart shadow-sm" name="codeDoctor" id="codeDoctor">
        <option value="1">doctor 1</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="save_session">Submit</button>
  </form>
  <?php getSession() ?>
  <?php include "SessionModal.php" ?>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- BS JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="./Session.js"></script>
</body>

</html>
