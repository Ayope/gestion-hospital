<?php

session_start();

// unset sessions
session_destroy();
session_unset();
unset($_SESSION['USER_ID']);
unset($_SESSION['ROLE']);

// get back to index
header('location: ../index.php');


?>