<?php
    session_start();
    //back function false
    if(!isset($_SESSION['username'])){
        header('location:../login.php');
    }
    

    include("../../private/config/base_url.php")
    include("../../private/config/db_connection/db_connect.php");
    // include('../../private/config/db_connection/query/query_view.php');
    include('../../private/required/header.php');

    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);


?>

    <div class="body__container">
        <header class="text-center mb-4">
            <h1>
                view products <?php echo $_SESSION['username'];?>
            </h1>
            <a href="log_out.php">logout</a>
        </header>
        <div class="container">
        <php>
            <table class="table table-striped table-primary">
                <thead>
                    <tr>
                        <th>product id</th>
                        <th>product name</th>
                        <th>product model</th>
                        <th>product category</th>
                        <th>product image</th>
                        <th>active / de-active</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <tr>
                        <td><?php echo $row['product_id'];?></td>
                        <td><?php echo $row['product_name'];?></td>
                        <td><?php echo $row['product_model'];?></td>
                        <td><?php echo $row['product_category'];?></td>
                        <td><img src="<?php echo base_url() . $row['product_image'];?>" alt="<?php echo $row['product_name'] . $row['product_category'];?>"></a></td>
                        <td><?php echo $row['product_active'];?></td>
                        <!-- <td><a href="delete_student.php?id=<?php echo $row['student_id'];?>">delete</a></td> -->
                        <td><a href="<?php echo base_url();?>update_products.php?id=<?php echo $row['product_id'];?>">edit</a></td>
                    </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table> 
        </div>
    </div>
    <div class="body__footer"></div>
    </div>

</body>
</html>