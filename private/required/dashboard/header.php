<?php 
function base_url(){
	echo "http://localhost/project/CROVELL-WEBSITE/public/";
    // echo "http://crovell.in";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url();?>/css/dashboard/dashboard-style.css">
</head>
<body>
    <div class="wrap__body">
        <div class="wrap__dashboard">
            <div class="dashboard__navigation">
                <div class="navigation__brand">
                    <a href="<?=base_url();?>">
                        <img src="" alt="">
                    </a>
                </div>
                <nav>
                    <ul>
                        <li><a class="active" href="<?=base_url();?>dashboard/index.php">Dashboard</a></li>
                        <li><a href="<?=base_url();?>dashboard/products/index.php">Products</a></li>
                        <li><a href="<?=base_url();?>dashboard/products/insert_new_product.php">Insert New Product</a></li>
                        <li><a href="<?=base_url();?>dashboard/log_out.php">Log out</a></li>
                    </ul>
                </nav>
            </div>