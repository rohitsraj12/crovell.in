<?php
    include("../../private/config/db_connection/db_connect.php");
    
    $query = "SELECT * FROM products";
        
            //$query = "SELECT * ";
            //$query .= "FROM users ";
            // $query .= "WHERE id = 1 ";
            //$query .= "ORDER BY author ASC";
        

     // sending to mysql for query
    $result = mysqli_query($conn, $query); 

    // test if there was a query error
    if(!$result) {
        die("Database query failed");
    }
    
     while($row = mysqli_fetch_assoc($result)) {
                var_dump($row);
                // echo $row["id"]. " <br/>";
                 ?>
                
                
                
                
                
                <li><?php echo $row["product_name"]?> ( <?php echo $row["product_id"]  ?> ) </li>    
                <li><?php echo $row["product_category"];?></li>
                <li><img src="<?=$web_url;?>images/cable/<?php echo $row["product_image"];?>"></li>
                
        <?php
     }
?>