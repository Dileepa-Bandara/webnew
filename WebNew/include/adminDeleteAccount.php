<?php session_start(); ?>
<?php require_once('./connection.php'); ?>


<?php
if (isset($_GET['current_user_password']) && isset($_GET['current_user_email'])) {

    $userpassword = mysqli_real_escape_string($conn, $_GET['current_user_password']);
    $useremail = mysqli_real_escape_string($conn, $_GET['current_user_email']);
    $query  = "DELETE FROM final WHERE password='$userpassword' AND email = '$useremail'";


    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location:../pages/admin.php?delete_success");
    } else {
        header("Location:../pages/admin.php?error_query_failed");
    }
}
?>