<?php
$server = "localhost";
$username = "root";
$dbpassword = "";
$dbname  = "web";

$conn = mysqli_connect($server, $username, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    die("Conncetion failed" . mysqli_connect_error());
}
