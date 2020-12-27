<?php
    session_start();

    include("../../private/config/db_connection/db_connect.php");

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM signin WHERE name = '$name' and password ='$pass'";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:' . $base_url . 'index.php');
        // echo "pass";
    }else {
        // echo "failed";
        header('location:login.php');
    }
?>