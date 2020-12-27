<?php

// include("../private/")

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>dashboard login | </title>
        <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/dashboard/dashboard-style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrap__body">
            <div class="body__header bg-dark">
                <header class="container">
                    <div class="header__brand">
                        <a href="">
                            <!-- <img src="" alt=""> -->
                        </a>
                    </div>
                    <nav>
                        <ul class="nav">
                            <!-- <li><a href="">Log in</a></li> -->
                            <!-- <li><a href="">contact</a></li> -->
                            <!-- <li><a href=""></a></li> -->
                        </ul>
                    </nav>
                </header>
            </div>
            <div class="body__container">
                <div class="log__in">
                <div class="section__header">
                    <header>
                        dashboard login
                    </header>
                </div>
                    <form action="dashboard/validation.php" method="post">
                        <div class="row">
                            <label for="userName">user name</label>
                            <input type="text" id="userName" name="user">
                        </div>
                        <div class="row">
                            <label for="password">password</label>
                            <input type="password" id="password" name="password">
                        </div>
                        
                        <div class="row">
                            <button type="submit" name="submit">log in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="body__footer"></div>
        </div>

        <!-- <div class="sign__in">
            <form action="registration.php" method="post">
                <div class="row">
                    <label for="userName"></label>
                    <input type="text" id="userName" name="user">
                </div>
                <div class="row">
                    <label for="password"></label>
                    <input type="password" id="password" name="password">
                </div>
                
                <div class="row">
                    <button type="submit">sign in</button>
                </div>
            </form>
        </div> -->
        <script src="" async defer></script>
    </body>
</html>