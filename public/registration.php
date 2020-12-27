<?php
    session_start();
    header('location:login.php');

    include("../private/config/db_connection/db_connect.php");

    if($conn){
        echo "connection success";
    }else {
        echo "no connection";
    }


    $name = $_POST['user'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM signin WHRERE name = '$name' && password ='$pass'";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "account already exist";
    }else {
        $qy = "insert into signin(name, password) values('$name', '$pass')";
        mysqli_query($conn, $qy);
    }
?>