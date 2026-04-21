<?php

$serverName = "localhost";
$DBuserName = "root";
$DBpassword = "";
$DBname = "phpproject";

$connextion = mysqli_connect($serverName,$DBuserName,$DBpassword,$DBname);
if (!$connextion){
    die("connection faild : ". mysqli_connect_error());
}