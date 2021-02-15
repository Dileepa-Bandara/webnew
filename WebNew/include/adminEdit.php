<?php session_start(); ?>
<?php require_once('./connection.php'); ?>


<?php











if (isset($_GET['current_user_id'])) {


    $userid = mysqli_real_escape_string($conn, $_GET['current_user_id']);
    $query = "SELECT * FROM final WHERE id = '$userid' LIMIT 1";


    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $resultUser = mysqli_fetch_assoc($result);
            $oldCompanyName = $resultUser['company_name'];
            // $oldCompanyCategory = $resultUser['company_category'];
            // $oldCompanyRole = $resultUser['company_role'];
            $oldEmail = $resultUser['email'];
            $oldPassword = $resultUser['password'];


            $oldAddress = $resultUser['address'];
            $oldContact = $resultUser['contact_number'];
            $oldDate = $resultUser['established_date'];
            $oldEmployees = $resultUser['numberof_employees'];
            $oldPerson = $resultUser['person_name'];
            $oldPosition = $resultUser['position'];


            $_SESSION["current_id"] = $resultUser['id'];
            $_SESSION["current_password"] = $resultUser['password'];
        } else {
            header("Location:../pages/admin.php?error_user_notfound");
        }
    } else {
        header("Location:../pages/admin.php?error_user_notfound");
    }
}

//update company name
if (isset($_POST['submit'])) {
    $currentid  = $_SESSION["current_id"];
    $currentpassword  = $_SESSION["current_password"];



    $newCompanyName = $_POST['company-name'];
    $newCompanyCategory = $_POST["category"];
    $newCompanyRole = $_POST["company-role"];
    $newEmail = $_POST["email"];
    $newPassword = $_POST["password"];


    $newAddress = $_POST["address"];
    $newContact = $_POST["contact-number"];
    $newDate = $_POST["established-date"];
    $newEmployees = $_POST["employees"];
    $newPerson = $_POST["person-name"];
    $newPosition = $_POST["position"];


    if (!empty($newCompanyName)) {
        $query  = "UPDATE final SET company_name=' $newCompanyName' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newCompanyCategory)) {
        $query  = "UPDATE final SET company_category=' $newCompanyCategory' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newCompanyRole)) {
        $query  = "UPDATE final SET company_role=' $newCompanyRole' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newAddress)) {
        $query  = "UPDATE final SET address=' $newAddress' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newContact)) {
        $query  = "UPDATE final SET contact_number='$newContact' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newDate)) {
        $query  = "UPDATE final SET established_date='$newDate' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:../pages/admin.php?error_query_Success");
        }
    }

    if (!empty($newEmployees)) {
        $query  = "UPDATE final SET numberof_employees='$newEmployees' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newPerson)) {
        $query  = "UPDATE final SET person_name='$newPerson' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newPosition)) {
        $query  = "UPDATE final SET position='$newPosition' WHERE id='$currentid' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
            header("Location:./admin.php?error_query_failed");
        }
    }

    if (!empty($newEmail)) {
        $query1  = "UPDATE final SET email='$newEmail' WHERE password='$currentpassword' ";
        $result1 = mysqli_query($conn, $query1);
        if ($result1) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
        }
    }

    if (!empty($newPassword)) {
        $query1  = "UPDATE final SET password='$newPassword' WHERE password='$currentpassword' ";
        $result1 = mysqli_query($conn, $query1);
        if ($result1) {
            echo "update success";
            header("Location:../pages/admin.php?error_query_Success");
        } else {
            echo "failed.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/edit.css" />
</head>

<body>
    <div id="open" class="register-container">
        <div class="register-form">
            <form action="./adminEdit.php" method="post">
                <?php echo $_SESSION["current_id"]; ?>
                <h1>Edit</h1>
                <p>Please fill in this form to update your account</p>
                <div class="registerinput">
                    <label for="" style="margin-top: 75px">Compnay name</label>
                    <input type="text" name="company-name" id="" placeholder="<?php echo $oldCompanyName ?>" />
                    <label for="">Email/Username</label>
                    <input type="text" name="email" id="" placeholder="<?php echo          $oldEmail ?>" />
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="<?php echo $oldPassword ?>" />

                    <div>
                        <label for="" style="
                  font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                    'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                  font-size: medium;
                  font-weight: 800;
                  margin-top: 25px;
                ">Category</label>
                        <br />
                        <select name="category" id="cars" style="margin-top: 5px; padding: 10px">
                            <option value="Art,Photography & Creative Services" selected>
                                Art,Photography & Creative Services
                            </option>
                            <option value="Construction & Home Improvement">
                                Construction & Home Improvement
                            </option>
                            <option value="Consulting & Professional Services">
                                Consulting & Professional Services
                            </option>
                            <option value="Financial Services & Insurance">
                                Financial Services & Insurance
                            </option>
                            <option value="Hair,Spa & Aesthetics">
                                Hair,Spa & Aesthetics
                            </option>
                            <option value="Medical,Dental & Health">
                                Medical,Dental & Health
                            </option>
                            <option value="Web,Tech & Media">
                                Web,Tech & Media
                            </option>
                            <option value="Retailers,Resellers & Sales">
                                Retailers,Resellers & Sales
                            </option>
                        </select>
                    </div>
                    <div>
                        <h2 style="margin-top: 10px">Select Company role</h2>
                        <select name="company-role" id="cars" style="margin-top: 5px; padding: 10px">
                            <option value="Manufacturer" selected>Manufacturer</option>
                            <option value="Suplire">Supplier</option>
                            <option value="None">None</option>
                        </select>
                    </div>

                    <label for="">Address</label>
                    <input type="text" name="address" id="" placeholder="<?php echo $oldAddress ?>" />
                    <label for="">Contact Number</label>
                    <input type="tel" name="contact-number" id="" placeholder="<?php echo $oldContact ?>" />
                    <label for="">Company Established Date</label>
                    <input type="date" name="established-date" id="" placeholder="<?php echo $oldDate ?>" />
                    <!-- <input type="text" name="established-date" id=""  /> -->
                    <label for="">Number of Employees</label>
                    <input type="text" name="employees" id="" placeholder="<?php echo $oldEmployees ?>" />
                    <label for="">Name of the person who entered details</label>
                    <input type="text" name="person-name" id="" placeholder="<?php echo $oldPerson ?>" />
                    <label for="">Your Position in the Compnay</label>
                    <input type="text" name="position" id="" placeholder="<?php echo $oldPosition ?>" />
                    <!-- upload facility -->

                    <button type=" submit" style="margin-top: 35px" name="submit">
                        Save
                    </button>
                    <button><a href="./../pages/admin.php" style="color:white;text-decoration:none;">Back</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>