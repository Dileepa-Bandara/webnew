 <?php

    session_start();

    //empty session array

    $_SESSION = array();

    //empty,destroy session cookies

    if (isset($_COOKIE[session_name()])) {
        //set cookie has four parameters
        //cookie name,value,current_time-time expire,effected file
        setcookie(session_name(), '', time() - 86400, '/');
    }

    //destroy session
    session_destroy();
    header("Location:../index.php");




    ?>