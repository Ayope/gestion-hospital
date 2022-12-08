<?php
//INCLUDE DATABASE FILE
include ("../Config/db.php");
include ("./Session.php");
//ROUTING

if (isset($_POST['save_session']))        saveSession();
if (isset($_POST['update_session']))      updateSession();
if (isset($_GET['session_id']))      deleteSession();
// if (isset($_GET['bookId']))      getOneBook();


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ********************************************Session**********************************************
function getSession(){
    $req=Session::getAll();
    foreach ($req as $row) {
        $title = $row["title"];
        $dateDebut =$row["dateDebut"];
        $dateFin = $row["dateFin"];
        $maxNumber = $row["maxNumber"];
        $codeDoctor =$row["codeDoctor"];
        $id =$row["id"];
        ?>

        <div class="d-flex justify-content-around">
        <button class="btn button" type="submit" onclick="editSession(<?= $id ?>,`<?= $title ?>`,`<?= $dateDebut ?>`,`<?= $dateFin ?>`,`<?= $maxNumber ?>`,`<?= $codeDoctor ?>`)">update</button>
        <i class="bi bi-bookmark-check-fill" onclick="deleteSession(<?= $id ?>)"></i>
    </div>
    <?php
    }
}



function saveSession()
{
    //CODE HERE
    
    //SQL INSERT   
    if (isset($_POST["title"]) && isset($_POST["dateDebut"]) && isset($_POST["dateFin"]) && isset($_POST["maxNumber"]) && isset($_POST["codeDoctor"]) ) {
        $title = test_input($_POST["title"]);
        $dateDebut =test_input( $_POST["dateDebut"]);
        $dateFin = test_input($_POST["dateFin"]);
        $maxNumber = test_input($_POST["maxNumber"]);
        $codeDoctor =test_input( $_POST["codeDoctor"]);

        print_r($_POST);
        $session=new Session($dateDebut,$dateFin,$maxNumber,$title,$codeDoctor);
       
        $req=Session::create($session);

        if ($req) {
            echo "great";
            die();
        } else {
            echo "error accured";
            die();
        }
    }
}


function deleteSession()
{
    //CODE HERE
    $id = $_GET['session_id'];

    $req=Session::delete($id);

    if (!$req) {
        echo "error";
    } else {
        echo "you successfuly deleted this book";
        die();
    }
}


function updateSession()
{
    //CODE HERE
    //SQL INSERT   
    $id = $_POST['session_id'];
    if (isset($_POST["title"]) && isset($_POST["dateDebut"]) && isset($_POST["dateFin"]) && isset($_POST["maxNumber"]) && isset($_POST["codeDoctor"]) ) {
        $title = test_input($_POST["title"]);
        $dateDebut =test_input( $_POST["dateDebut"]);
        $dateFin = test_input($_POST["dateFin"]);
        $maxNumber = test_input($_POST["maxNumber"]);
        $codeDoctor =test_input( $_POST["codeDoctor"]);
        
        $req=Session::update($id,$dateDebut,$dateFin,$maxNumber,$title,$codeDoctor);
        print_r($req);
        if ($req) {
            echo "great";
            die();
        } else {
            echo "error accured";
            die();
        }
    }
}
