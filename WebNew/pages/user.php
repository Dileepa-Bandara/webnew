<?php
session_start();
require_once "../include/connection.php";

$userList = "";
$cPassword = $_SESSION['password'];


$query = "SELECT * FROM final WHERE password ='$cPassword' AND user_role= '0' AND is_deleted = '0'  ORDER BY id";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($user = mysqli_fetch_assoc($result)) {



        $userList .= "<div class = \"list\">   ";
        $userList .= "<h2 class = \"topic1\" style =\"text-align:center;color:white\">{$user['company_name']} </h2>    ";
        $userList .= "<br>";
        $userList .= "<img src=\"../uploads/{$user['logo']}\" alt=\"\" >  ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Category :</h2><span class \"span1\">{$user['company_category']}  </span>     ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Company Role : </h2>  <span class \"span1\">{$user['company_role']}  </span>  ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Email :</h2><span class \"span1\">{$user['email']}  </span>     ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Address :</h2> <span class \"span1\">{$user['address']}  </span>    ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Username :</h2><span class \"span1\">{$user['person_name']}  </span>     ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Position : </h2> <span class \"span1\">{$user['position']}  </span>   ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Contact Number :</h2><span class \"span1\">{$user['contact_number']}  </span>     ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Established Date :</h2> <span class \"span1\">{$user['established_date']}  </span>    ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Description : </h2><span class \"span1\">{$user['discription']}  </span>    ";
        $userList .= "<br>";
        $userList .= "<h2 class = \"topic\">Number of Eployees :</h2> <span class \"span1\">{$user['numberof_employees']}  </span>    ";
        $userList .= "<br>";
        $userList .= " <p><a href=\"../include/userEdit.php?current_user_id={$user['id']} \" >Edit</a></p>  ";
        $userList .= "<br>";
        $userList .= "<div>   ";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .details {
            width: 100%;
            height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-items: center;
        }

        .list {
            /* background: linear-gradient(45deg, lightblue, dodgerblue); */
            padding: 20px;
            margin: 3%;
            border: 1px solid blue;
            border-radius: 50px;
        }

        .topic {
            margin: 10px;
        }

        span {
            color: midnightblue;
            font-size: larger;
            margin-left: 5%;
        }

        .list p {
            text-align: center;
        }

        .list a {
            text-decoration: none;
            font-size: larger;
            padding: 10px;
            display: block;
            background: midnightblue;
            color: white;
            margin-top: 3%;
        }

        .list a:hover {
            background: dodgerblue;

        }

        .topic1 {
            background: linear-gradient(45deg, purple, midnightblue);
            border-radius: 50px;
            padding: 15px;

        }

        .list img {
            width: 400px;
            height: 200px;
            object-fit: fill;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="navbar">
            <ul>
                <li><a href="../index.php" style="background:white;"><img src="../video/logo1.png" alt="" style="width:150px;height:40px;object-fit: fill;"></a></li>
                <li style="flex-grow: 1"></li>
                <li class="first" style="flex-grow: 1; background: dodgerblue; padding: 8px">
                    <?php echo $_SESSION["user"];  ?>
                </li>
                <li><a href="./default.php" style="flex-grow: 1">Default</a></li>
                <li><a href="./facilities.php" style="flex-grow: 1">Facilities</a></li>
                <li><a href="./contactus.php" style="flex-grow: 1">Contact Us</a></li>
                <li>
                    <a href="../include/logout.php" style="flex-grow: 1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h1 style="text-align: center">
                <span> Hi...</span><span style="color: mintcream; margin-bottom: 10px"><?php echo $_SESSION["user"]; ?></span>

            </h1>
        </div>
        <div class="detailes">
            <?php echo $userList  ?>
        </div>

    </div>
    <?php require_once "../pages/footer.php" ?>

</body>

</html>