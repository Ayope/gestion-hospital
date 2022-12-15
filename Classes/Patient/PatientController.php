<?php
//INCLUDE DATABASE FILE
include ("../Config/db.php");
include ("./Patient.php");
//ROUTING
if (isset($_POST['save_Patient']))        savePatient();
if (isset($_POST['update_Patient']))      updatePatient();
if (isset($_GET['Patient_id']))      deletePatient();
// if (isset($_GET['bookId']))      getOneBook();


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ********************************************Session**********************************************


function savePatient()
{
    //CODE HERE
    
    //SQL INSERT   
    if (isset($_POST["NumeroTelephone"]) && isset($_POST["cin"]) && isset($_POST["birthDay"]) && isset($_POST["gender"]) && isset($_POST["firstName"])&& isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["password"]) ) {
        $NumeroTelephone = test_input($_POST["NumeroTelephone"]);
        $cin =test_input( $_POST["cin"]);
        $birthDay = test_input($_POST["birthDay"]);
        $city = test_input($_POST["city"]);
        $gender =test_input( $_POST["gender"]);
        $firstName =test_input( $_POST["firstName"]);
        $lastName =test_input( $_POST["lastName"]);
        $email =test_input( $_POST["email"]);
        $password = password_hash(test_input($_POST["password"]), PASSWORD_BCRYPT);
        if (isset($_FILES['icon']['name'])) {
            $image_name = $_FILES['icon']['name'];
            $tmp_name = $_FILES['icon']['tmp_name'];
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("Patient", true) . '.' . $img_ex_lc;
                $img_upload_path = 'Patients/' . $new_img_name;
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
            $img_upload_path = 'Patients/default.jpg';
        }
        print_r($_POST);
        $patient=new Patient($firstName,$lastName,$email,$password,$NumeroTelephone,$img_upload_path,"pat",$birthDay,$gender,$city,$cin);
       
        $req=$patient->create();

        if ($req) {
            echo "great";
            die();
        } else {
            echo "error accured";
            die();
        }
    }
}


function deletePatient()
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


function updatePatient()
{
    //CODE HERE
    //SQL INSERT   
    $id = $_POST['patient_id'];
    if (isset($_POST["numeroTelephone"]) && isset($_POST["cin"]) && isset($_POST["birthDay"]) && isset($_POST["gender"]) && isset($_POST["firstName"])&& isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["password"]) ) {
        $NumeroTelephone = test_input($_POST["NumeroTelephone"]);
        $cin =test_input( $_POST["cin"]);
        $birthDay = test_input($_POST["birthDay"]);
        $city = test_input($_POST["city"]);
        $gender =test_input( $_POST["gender"]);
        $firstName =test_input( $_POST["firstName"]);
        $lastName =test_input( $_POST["lastName"]);
        $email =test_input( $_POST["email"]);
        $password = password_hash(test_input($_POST["password"]), PASSWORD_BCRYPT);
        $img = $_POST["img"];
        if (isset($_FILES['icon']['name'])) {
            $image_name = $_FILES['icon']['name'];
            if ($image_name != "") {
                $tmp_name = $_FILES['icon']['tmp_name'];
                $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("book", true) . '.' . $img_ex_lc;
                    $img_upload_path = 'books/' . $new_img_name;
                    $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                    if ($upload == FALSE) {
                        $_SESSION["error"] = "Sorry ,";
                        echo "Sorry , image";
                        die();
                    }
                } else {
                    $_SESSION["error"] = "Sorry , you can't upload this type of files";
                    echo "Sorry , you can't upload this type of files";
                    die();
                }
            } else {
                $img_upload_path = $img;
            }
        } else {
            $img_upload_path = $img;
        }
        print_r($_POST);
        $patient=new Patient($firstName,$lastName,$email,$password,$NumeroTelephone,$img_upload_path,"pat",$birthDay,$gender,$city,$cin);
        $req=$patient->update($id);
        if ($req) {
            echo "great";
            die();
        } else {
            echo "error accured";
            die();
        }
    }
}
