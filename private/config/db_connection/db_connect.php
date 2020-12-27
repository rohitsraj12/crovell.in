<?php
    // $web_url = "http://crovell.in/";

    // $dbhost = "216.10.240.60";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "product";
    $conn   = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Test  if connection occurred
    if(mysqli_connect_errno()) {                            // if there is error number - errno = error number
        die("Database connection faileds: " .               // die with this message - die = exit or break
            mysqli_connect_error() .                        // display error  
                " (" . mysqli_connect_errno(). ")  "        // die with error number
        );
    }