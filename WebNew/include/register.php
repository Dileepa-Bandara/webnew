<?php
require_once "./connection.php";
$new_name = "";
if (isset($_POST['submit'])) {
    if (isset($_FILES['upload_image'])) {

        $name = $_FILES['upload_image']['name'];
        $size = $_FILES['upload_image']['size'];
        $tmp_name = $_FILES['upload_image']['tmp_name'];
        $error = $_FILES['upload_image']['error'];

        if ($error === 0) {
            if ($size > 2000000) {
                $error_message =  'more than 2mb';
                $_SESSION['error'] = $error_message;
                header("Location:./../index.php?error = $error_message");
            } else {
                $img_ex = pathinfo($name, PATHINFO_EXTENSION);
                $allowed_ex =  array("jpg", "png", "jpeg");
                if (in_array($img_ex, $allowed_ex)) {
                    $new_name = uniqid("IMG-", true) . '.' . $img_ex;
                    $upload_path = '../uploads/' . $new_name;
                    move_uploaded_file($tmp_name, $upload_path);

                    // insert in to database.

                } else {
                    $error_message = "Only png,jpeg,jpg";
                    $_SESSION['error'] = $error_message;
                    header("Location : ../index.php?error = $error_message");
                }
            }
        } else {
            $error_message = "unknown error";
            $_SESSION['error'] = $error_message;
            header("Location : ../index.php?error = $error_message");
        }
    }

    if (
        empty(trim($_POST['company-name'])) || empty($_POST['email']) || empty(trim($_POST['password']))
        || empty(trim($_POST['category']))  || empty(trim($_POST['company-role']))  || empty(trim($_POST['address']))
        || empty(trim($_POST['contact-number']))  || empty(trim($_POST['established-date']))  || empty(trim($_POST['employees']))
        || empty(trim($_POST['person-name']))  || empty(trim($_POST['position']))
    ) {
        echo "failed empty condition";
    } else {

        $companyName = $_POST['company-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $category  = $_POST['category'];
        $companyRole = $_POST['company-role'];
        $address = $_POST['address'];
        $contactNumber = $_POST['contact-number'];
        $establishedDate = $_POST['established-date'];
        $employees = $_POST['employees'];
        $personName = $_POST['person-name'];
        $position = $_POST['position'];
        $discription = $_POST['discription'];





        $query = "INSERT INTO  final(company_name,email,password,
                company_category,company_role,address,contact_number,established_date,
                numberof_employees,person_name,position,logo,discription,
                is_deleted,user_role) VALUES ('$companyName','$email','$password','$category',
                '  $companyRole','$address','$contactNumber','$establishedDate','$employees',' $personName',
                '$position','$new_name','$discription','0','0')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location:../index.php");
        } else {
            echo "db query failed";
        }
    }
} else {
    echo "failed submit";
}
