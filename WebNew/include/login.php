<?php
session_start();
require_once "./connection.php";

// check for form submission
if (isset($_POST['submit'])) {

    $errors = array();
    $_SESSION['error'] = $errors;

    // check if the username and password has been entered
    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        $errors[] = 'Username is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {



        $errors[] = 'Password is Missing / Invalid';
    }

    // check if there are any errors in the form
    if (empty($errors)) {
        // save username and password into variables
        $email     = mysqli_real_escape_string($conn, $_POST['email']);
        $password   = mysqli_real_escape_string($conn, $_POST['password']);
        // $hashed_password = sha1($password);

        // prepare database query
        $query = "SELECT * FROM final
						WHERE email = '$email' 
						AND password = '$password' 
						LIMIT 1";

        $result_set = mysqli_query($conn, $query);

        if ($result_set) {

            if (mysqli_num_rows($result_set) > 0) {
                while ($row = mysqli_fetch_assoc($result_set)) {
                    if ($row["user_role"] == "1") {
                        $_SESSION['user'] = $row['person_name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['usertype'] = $row['user_role'];

                        header('Location:../pages/admin.php');
                    } else {
                        $_SESSION['user'] = $row['person_name'];
                        $_SESSION['company'] = $row['company'];
                        $_SESSION['usertype'] = $row['user_role'];
                        $_SESSION['password'] = $row['password'];


                        header('Location:../pages/user.php');
                    }
                }
            } else {

                $errors[] = "Username is invalid";
                header('Location:../pages/login.php');
                echo "query failed";
            }
        } else {


            $errors[] = "Username is invalid";
            echo "not found";
            header('Location:../pages/login.php');
        }
    }
}
