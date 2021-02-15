<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: white;
            color: white;
        }

        input[type=text],input[type=email],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #044275;
            color: white;
            padding: 12px 20px;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #015c12;
            font-weight: bold;
        }

        .container {
            border-radius: 15px;
            background-color: #fff;
            padding: 20px;
            color: black;
        }
        .text{
            color: black;
            margin:30px;
        }
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

     
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
       <link rel="stylesheet" href="../CSS/navbar.css" />
</head>

<body>
<div class="navbar">
            <ul>
            <li><a href="../index.php" style="background:white;"><img src="../video/logo1.png" height="30px" alt="" ></a></li>
                <li style="flex-grow: 1"></li>
                
                <li><a href="./default.php" style="flex-grow: 1">Default</a></li>
                <li><a href="./facilities.php" style="flex-grow: 1">Facilities</a></li>
                <li><a href="./contactus.php" style="flex-grow: 1">Contact Us</a></li>
                <li>
                    <a href="../include/logout.php" style="flex-grow: 1">Logout</a>
                </li>
            </ul>
        </div>
    </br></br></br></br></br></br>
    <div class="text">
    <h2>Contact Us</h2>
    <p>Feel free to contact us in any case of need. We are open to our service 24X7</p>

    </div>
    <div class="container">
        <form action="../include/contactus.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="f_name">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="fname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="abc@abc.com">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="msg">Your Message</label>
                </div>
                <div class="col-75">
                    <textarea id="msg" name="msg" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Submit" >
            </div>
        </form>
    </div>
    <?php require_once "../pages/footer.php" ?>
</body>

</html>