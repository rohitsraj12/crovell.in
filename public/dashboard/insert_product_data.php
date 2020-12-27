<?php
    include("../../private/config/db_connection/db_connect.php");
    // include('../private/config/query/query_insert.php');
    $base_url = "http://localhost/project/CROVELL-WEBSITE/public/";
    // include('../private/required/header.php');
    if(isset($_POST['submit'])){
        $product_name = $_POST['name'];
        $product_category = $_POST['category'];
        $active =  $_POST['active'];
        //uploading imgage
        $files = $_FILES['file'];
           
        //testing 
        //    echo  $product_name;
        //    echo "</br>";
        //    print_r($files);

        //  accesing file details
           $file_name = $files['name'];
           $file_error = $files['error'];
           $filetemp = $files['tmp_name'];

        // breakdown file name and extention
            // after . will store in var
            $file_ext = explode('.', $file_name);
            // make it lowercase
            $file_check = strtolower(end($file_ext));
        
            //file ext store in array which are png, jpeg n jpg
            $file_ext_store = array('png', 'jpeg', 'jpg');

        if(in_array($file_check,$file_ext_store)){
            //destination folder
            $destination_file = '../img/products/'. $product_category . '/' . $file_name;
            // to get the access of image path
            $db_url = 'img/products/'. $product_category . '/' . $file_name;
            //moving from tem to destination
            move_uploaded_file($filetemp, $destination_file);


            $query = "INSERT INTO `products`(`product_name`, `product_category`, `product_image`, `product_active`) 
            VALUES ('$product_name','$product_category', '$db_url','$active')";
    
            $result = mysqli_query($conn, $query);

            
           header('location:'.$base_url.'dashboard/products/index.php');
        }
    }
?>

<!-- 
        <div class="body__container">
        <header class="text-center mb-4">
                <h1>
                    insert product
                </h1>
        </header>
            <div class="container">
                 -->
                <form action="" method="POST" enctype="multipart/form-data">
                                
                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <label for="name">Product name</label>
                            <input type="text" class="form-control" id="name" placeholder="product name" name="name" required>
                        </div>

                        <div class="col-md-12 mb-3 bg-light pt-3 pb-1 pl-3 pr-3 border-alert">
                            <div class="row">
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="usb_cable" id="usb_cable" name="category" required>
                                    <label class="custom-control-label" for="usb_cable">usb cable</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="usb_charger" id="usb_charger" name="category" required>
                                    <label class="custom-control-label" for="usb_charger">usb charger</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="battery" id="battery" name="category" required>
                                    <label class="custom-control-label" for="battery">battery</label>
                                </div>
                            </div>
                            
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="bluetooth_earphone" id="bluetooth_earphone" name="category" required>
                                    <label class="custom-control-label" for="bluetooth_earphone">bluetooth earphone</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="bluetooth_dongal" id="bluetooth_dongal" name="category" required>
                                    <label class="custom-control-label" for="bluetooth_dongal">bluetooth dongal</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="bluetooth_airpord" id="bluetooth_airpord" name="category" required>
                                    <label class="custom-control-label" for="bluetooth_airpord">bluetooth airpord</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="bluetooth_headphone" id="bluetooth_headphone" name="category" required>
                                    <label class="custom-control-label" for="bluetooth_headphone">bluetooth headphone</label>
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="bluetooth_speaker" id="bluetooth_speaker" name="category" required>
                                    <label class="custom-control-label" for="bluetooth_speaker">bluetooth speaker</label>
                                </div>
                            </div>
                            <!-- <div class="col-2 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                    <label class="custom-control-label" for="active student">currently active</label>
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                    <label class="custom-control-label" for="active student">currently active</label>
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                    <label class="custom-control-label" for="active student">currently active</label>
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                    <label class="custom-control-label" for="active student">currently active</label>
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                    <label class="custom-control-label" for="active student">currently active</label>
                                </div>
                            </div> -->
                        </div>
                        </div>

                        
                        <div class="custom-file mb-3">
                            <label class="" for="img"></label>
                            <input type="file" name="file" class="" id="img" required>
                        </div>

                        
                        <div class="col-md-6 mb-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                                <label class="custom-control-label" for="active student">currently active</label>
                            </div>
                        </div>
                            
                        <div class="col-md-6 mb-3">
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" value="0" id="not active student" name="active" required>
                                <label class="custom-control-label" for="not active student">currently not active</label>
                            </div>
                        </div>

                        
                        <input class="btn btn-primary btn-lg" type="submit" name="submit">

                    </div>
                    
                </form>
            <!-- </div>
        </div>
        <div class="body__footer"></div>
    </div>

</body>
</html>

<?php
    // include("../private/config/db_connection/db_close.php");

?> -->
