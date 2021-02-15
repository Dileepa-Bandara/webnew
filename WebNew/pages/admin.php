<?php
session_start();
require_once "../include/connection.php";

if (isset($_SESSION['usertype'])) {
    if ($_SESSION['usertype'] != "1") {
        header("Location:../index.php");
    }
} else {
    header("Location:../index.php");
}



$userList = "";

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT * FROM final WHERE (company_category LIKE '%$search%' OR company_name LIKE '%$search%' OR company_role LIKE '%$search%'  ) ORDER BY id";
} else {
    $query = "SELECT * FROM final ORDER BY id";
}
$result = mysqli_query($conn, $query);
if ($result) {
    while ($user = mysqli_fetch_assoc($result)) {



        $userList .= "   <tr>
                    <td>{$user['id']}</td>
                    <td>{$user['company_name']}</td>
                    <td>{$user['company_category']}</td>
                    <td>{$user['company_role']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['password']}</td>
                    <td>{$user['contact_number']}</td>
                    <td>{$user['user_role']}</td>
                    <td>{$user['is_deleted']}</td>
                    <td><a href=\"../include/adminEdit.php?current_user_id={$user['id']} \">Edit</a></td>
                    <td> <a href=\"../include/adminDeleteCompany.php?current_user_id={$user['id']} \">Delete</a></td>
                    <td> <a href=\"../include/adminDeleteAccount.php?current_user_password={$user['password']}&current_user_email={$user['email']} \">Delete</a></td>
                </tr>";
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
    <link rel="stylesheet" href="../CSS/admin.css" />
    <link rel="stylesheet" href="../CSS/footer.css" />
    <link rel="stylesheet" href="../CSS/header.css" />
    <link rel="stylesheet" href="../CSS/navbar.css" />
</head>

<body>
    <div class="container">
        <div class="navbar">
            <ul>
                <li><a href="../index.php" style="background:white;"><img src="../video/logo1.png" alt="" style="width:150px;height:35px;object-fit: fill;"></a></li>
                <li style="flex-grow: 1"></li>
                <li class="first" style="flex-grow: 1; background: dodgerblue; padding: 8px">
                    <?php echo $_SESSION["email"];  ?>
                </li>
                <li><a href="./default.php" style="flex-grow: 1">Default</a></li>
                <li><a href="" style="flex-grow: 1">Facilities</a></li>
                <li><a href="./contactus.php" style="flex-grow: 1">Contact Us</a></li>
                <li>
                    <a href="../include/logout.php" style="flex-grow: 1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h1 style="text-align: center">
                <span> Hi....Admin</span>
                <span style="color: mintcream; margin-bottom: 10px"><?php echo $_SESSION["email"]; ?></span>
            </h1>

            <form action="admin.php" method="get" style="margin-top: 10px">
                <div class="search">
                    <input type="text " name="search" autofocus placeholder="Search...Company Category,Company Role,Company Name" />
                    <button type="submit" name="submit">Search</button>
                </div>
            </form>
            <form action="admin.php" method="get" style="margin-top: 10px">
                <div class="selection">
                    <select name="search" id="">
                        <option selected>...Select Category...</option>
                        <option value="Art,Photography & Creative Services">
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
                    <button type="submit" name="submit">Search</button>
                </div>
            </form>
            <div>
                <p>
                    <a href="./admin.php" style="
                background: red;
                padding: 15px;
                color: white;
                text-decoration: none;
                margin-left: 30px;
                margin-top: 1000px;
                position: relative;
              ">Refresh Page
                    </a>
                </p>
            </div>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Company Name</th>
                    <th>Company Category</th>
                    <th>Company Role</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Contact Number</th>
                    <th>Admin/Company</th>
                    <th>Is Deleted</th>
                    <th>Edit</th>
                    <th>Delete Company</th>
                    <th>Delete Account</th>
                </tr>
                <?php echo $userList; ?>
            </table>
        </div>
        <?php require_once "../pages/footer.php" ?>
    </div>
</body>

</html>