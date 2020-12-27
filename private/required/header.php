<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert product details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="wrap__body">
        <div class="body__header bg-primary mb-5">
            <header>
                <ul class="nav justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="<?php echo $web_url;?>dashboard/fetch_data.php">view product details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $web_url;?>insert_product_data.php">create new product</a>
                    </li>
                </ul>
            </header>
        </div>