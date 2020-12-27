<?php
    session_start();
    //back function false
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }

    include("../../../private/config/db_connection/db_connect.php");
    include('../../../private/required/dashboard/header.php');
    include('../../../private/config/query/query_view.php');

?>
            <div class="dashboard__content">
                <div class="dashboard__admin">
                    <div class="dashboard__admin-wrap">
                        <div class="page">
                            Products
                        </div>
                    </div>
                </div>
                <div class="main__content">
                    <div class="main__content-wrap">
                        <div class="all__product">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>model no</th>
                                <th>category</th>
                                <th>image</th>
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
                                <!-- <td><a href="<?php echo base_url();?>dashboard/products/delete_product.php?id=<?php echo $row['student_id'];?>">delete</a></td> -->
                                <td><a href="<?php echo base_url();?>dashboard/products/update_product.php?id=<?php echo $row['product_id'];?>">edit</a></td>
                            </tr>
                                <?php
                                    }
                                ?>
                        </tbody>
                    </table> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>