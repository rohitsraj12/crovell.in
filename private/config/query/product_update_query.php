<?php

    if(isset($_POST['submit'])){
        $product_id = $_GET['id'];
        $product_name = $_POST['name'];
        $product_model = $_POST['model'];
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
            $destination_file = '../../img/products/'. $product_category . '/' . $file_name;
            $product_image_url = 'img/products/'. $product_category . '/' . $file_name;
            //moving from tem to destination
            move_uploaded_file($filetemp, $destination_file);

            $query = "UPDATE products set product_name = '$product_name', 
            product_model = '$product_model', 
            product_category = '$product_category', 
            product_image = '$product_image_url', 
            product_active = '$active' WHERE product_id=$product_id"; 
            $result = mysqli_query($conn, $query);

            
           header('location:'.$base_url.'index.php');
        }
    }
    ?>