<?php
session_start();
require_once "../include/connection.php";
$userList = "";

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT * FROM final WHERE (company_category LIKE '%$search%')AND user_role = 0 AND is_deleted = 0  ORDER BY id";
} else {
    $query = "SELECT * FROM final WHERE  user_role= '0' AND is_deleted = '0'  ORDER BY id";
}
$result = mysqli_query($conn, $query);
if ($result) {
    while ($user = mysqli_fetch_assoc($result)) {
        $userList .= "<div class = 'list'> ";
        $userList .= "<img src=\"../uploads/{$user['logo']}\" alt=\"\">  ";
        $userList .= "<br>";
        $userList .= "<h3 class='company-name'>{$user['company_name']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<hr>";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Company Category :{$user['company_category']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Email :{$user['email']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Company Role :{$user['company_role']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Established Date :{$user['established_date']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Address :{$user['address']}  </h3>  ";
        $userList .= "<br>";
        $userList .= "<h3 class='username'>Contact Number :{$user['contact_number']}  </h3>  ";
        $userList .= "<br>";

        $userList .= "</div> ";
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


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding-top: 100px;
            font-family: arial, sans-serif;
            background-color: #00014c;


        }

        h1 {
            text-align: center;
            font-size: 30px;
            color: white;
            word-spacing: 10px;
            letter-spacing: 2px;
        }

        .find-box {
            width: 50%;
            margin: auto;

        }

        .find-box input {
            width: 75%;
            border: 2px solid white;
            border-right: opx;
            font-size: 14px;
            padding: 10px;
            background: transparent;
            color: white;

        }

        .find-box button {
            width: 15%;
            background: #0000ff;
            border: 2px solid #0000ff;
            color: white;
            float: right;
            border-left: 0px;
            cursor: pointer;
            flex-grow: 1;
            position: absolute;
            min-width: 90px;
            font-weight: 600;
            font-size: 14px;
            padding: 11px;


        }

        .find-box button:hover {
            opacity: .8;
        }

        .find-box input:hover {
            opacity: .9;
        }

        .drop-box {
            width: 30%;
            margin: auto;

        }



        .category {
            width: 70%;
            padding: 12px;
            font-size: 14px;
            border-radius: 5px;
        }

        .drop-box button {
            width: 15%;
            background: #0000ff;
            color: white;
            float: right;
            border-left: opx;
            cursor: pointer;
            border: 2px solid #0000ff;
            border-right: opx;
            font-size: 14px;
            padding: 10px;
            min-width: 90px;
            word-wrap: nowrap;
            position: absolute;
            font-weight: 600;



        }

        .drop-box button:hover {
            opacity: .8;
        }
       
       .refresh a {
            float: left;
            padding: 10px;
            background: red;
            color: white;
            font-size: 18px;
            width: 150px;
            text-align: center;
            text-decoration: none;
            position: relative;

        }

        .container {
            position: absolute;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 30px;


        }

        .list {
            width: 300px;
            background: white;
            border: 1px solid white;
            border-radius: 15px;
            padding: 20px;
            margin: 30px;
            transition: .5s;
        }

        .list:hover {
            transform: scale(1.1);
            box-shadow: 2px 2px 2px #000;
            z-index: 2;
            background: #d9d9d9;
        }

        .list img {
            width: 250px;
            height: 160px;
            object-fit: fill;
            border-radius: 10px;
            display: block;
            margin-right: auto;
            margin-left: auto;

        }

        .search {
            margin: 10px;
        }

        .username {
            color: black;
            font-size: 14px;
            font-weight: 100;

        }

        .company-name {
            text-align: center;
            font-size: 25px;
            color: #ff3300;
            font-weight: 555;
            font-family: helvetica, sans-serif;
        }

        hr {
            border: 1px dashed black;
        }
        
    </style>
    <link rel="stylesheet" href="../CSS/navbar.css" />
</head>

<body>
   
    <div class="navbar">
        <ul>
            <li><a href="../index.php" style="background:white;"><img src="../video/logo1.png" height="40px" alt=""></a></li>
            <li style="flex-grow: 1"></li>

            <li><a href="./default.php" style="flex-grow: 1">Default</a></li>
            <li><a href="./facilities.php" style="flex-grow: 1">Facilities</a></li>
            <li><a href="./contactus.php" style="flex-grow: 1">Contact Us</a></li>
            <li>
                <a href="../include/logout.php" style="flex-grow: 1">Logout</a>
            </li>
        </ul>
    </div>
    <h1>Type what you are looking for...</h1><br /><br />

    <div class="search">
        <form action="default.php" method="get">
            <div class="find-box">
                <input type="text " name="search" autofocus placeholder="Company Category...">
                <button type="submit" name="submit">SEARCH</button>
            </div><br />

        </form>
        <form action="default.php" method="get" style="margin-top:10px;">
            <div class="drop-box">
                <select name="search" class="category">
                    <option selected>...Select Category... </option>
                    <option value="Art,Photography & Creative Services">Art,Photography & Creative Services</option>
                    <option value="Construction & Home Improvement">Construction & Home Improvement</option>
                    <option value="Consulting & Professional Services">Consulting & Professional Services</option>
                    <option value="Financial Services & Insurance">Financial Services & Insurance</option>
                    <option value="Hair,Spa & Aesthetics"> Hair,Spa & Aesthetics</option>
                    <option value="Medical,Dental & Health">Medical,Dental & Health</option>
                    <option value="Web,Tech & Media">Web,Tech & Media</option>
                    <option value="Retailers,Resellers & Sales">Retailers,Resellers & Sales</option>
                </select>
                <button type="submit" name="submit">SEARCH</button><br /><br />
            </div>
            <div class="refresh">
                <a href="default.php">Refresh</a><br />
            </div>


        </form>
    </div>


    <div class="container">
        <?php echo $userList   ?>
        <?php include "footer.php" ?>
        
    </div>
   
   
</body>

</html>