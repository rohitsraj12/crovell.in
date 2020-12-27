<?php
    session_start();
    //back function false
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    

    include("../../../private/config/db_connection/db_connect.php");
    include('../../../private/required/dashboard/header.php');
    include('../../../private/config/query/product_update_query.php');
?>
            <div class="dashboard__content">
                <div class="dashboard__admin">
                    <div class="dashboard__admin-wrap">
                        <div class="page">
                          Update product
                        </div>
                    </div>
                </div>
                <div class="main__content">
                    <div class="main__content-wrap">
                        <div class="all__product">
                            <?php 
                                include("../../../private/required/dashboard/product_form.php");
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>