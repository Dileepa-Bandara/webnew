<?php
require_once "./connection.php";
$new_name = "";

if (isset($_POST['submit'])) {

    if ( 
        empty(trim($_POST['fname'])) || empty($_POST['lname']) || empty(trim($_POST['email']))
        || empty(trim($_POST['msg'])) 
    ) {
        echo "failed empty condition";
        header("Location:../pages/contactus.php?db_query_failed");
        echo '<script>alert("Submission Failed")</script>'; 
    } 
	else {

        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $email = $_POST['email'];
        $msg  = $_POST['msg'];
        
        $query = "INSERT INTO contactus (fName,lName,email,msg) VALUES ('$fName','$lName','$email','$msg')";
        //$query = "SELECT * FROM contactus";

        $result = mysqli_query($conn,$query);
        if ($result) {
            header("Location:../pages/contactus.php");
            echo '<script>alert("Submission Failed")</script>'; 
        } else {
            //echo "db query failed";
            header("Location:../pages/contactus.php?db_query_failed");
        }
       
    }
} else 
{
    echo "failed submit";
}
