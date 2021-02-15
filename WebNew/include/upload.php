<?php
session_start();
require_once "./connection.php";

if (isset($_POST["submit"])) {
    if (isset($_FILES['upload_image'])) {


        $name = $_FILES['upload_image']['name'];
        $size = $_FILES['upload_image']['size'];
        $tmp_name = $_FILES['upload_image']['tmp_name'];
        $error = $_FILES['upload_image']['error'];

        if ($error === 0) {
            if ($size > 125000) {
                $error_message =  'more than 1mb';
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
                    $query = "INSERT INTO final(logo) VALUES ('$new_name')";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        echo "query success";
                        header('Location:./../index.php');
                        // $error_message = "Everything OK";
                        // $_SESSION['error'] = $error_message;

                    } else {
                        echo "query failed";
                    }
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
} else {
    echo "error";
}
