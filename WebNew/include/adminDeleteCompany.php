<?php session_start(); ?>
<?php require_once('./connection.php'); ?>


<?php
if (isset($_GET['current_user_id'])) {

    $userid = mysqli_real_escape_string($conn, $_GET['current_user_id']);
    $query  = "UPDATE final SET is_deleted='1' WHERE id='$userid' LIMIT 1 ";


    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location:../pages/admin.php?delete_success");
    } else {
        header("Location:../pages/admin.php?error_query_failed");
    }
}
?>