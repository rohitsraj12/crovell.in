<?php
 
 $query = "SELECT * FROM products WHERE product_category = '$product'";
 $result = mysqli_query($conn, $query);
 
?>