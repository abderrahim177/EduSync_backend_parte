<?php
if (isset($_POST["submit"])) {
   $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "DB.inc.php";
    require_once "functions.inc.php";

    
} else {
    header("Location:register.php");
    exit();
}