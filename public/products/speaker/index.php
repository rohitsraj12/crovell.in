<?php 
$base_url = "http://crovell.in";
include("../../private/db_connection/db_connect.php");
include("../../required/header.php"); 
    
    $web_url = "http://crovell.in/";
    
    $dbhost = "216.10.240.60";
    $dbuser = "crove1dl_sandbox";
    $dbpass = "abhroh.com";
    $dbname = "crove1dl_product";
    $conn   = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Test  if connection occurred
    if(mysqli_connect_errno()) {                            // if there is error number - errno = error number
        die("Database connection faileds: " .               // die with this message - die = exit or break
            mysqli_connect_error() .                        // display error  
                " (" . mysqli_connect_errno(). ")  "        // die with error number
        );
    }

    $query = "SELECT * FROM products WHERE product_category = 'bluetooth_speaker'";
    $result = mysqli_query($conn, $query);

?>
 
	
 


	<!-- fEatured pRoduct Area -->
    <div class="inner-page">
			<div class="container-fluid">
				<div class="row">	
					<div class="inner-banner">
						<img src="<?=$base_url;?>images/inner-banner.jpg" class="img-responsive"/>
					</div>
					<div class="inner-page-content">
					
						<div class="col-md-12">
							<!-- cRovell pRoduct aRea-->
							<div class="accessories-section">
								<div class="container">
									<div class="row">
									<div class="col-md-12">	
										<h4><span>Speakers</span></h4>
									</div>
									<div class="sub-cateogy col-md-12">
									
										
									<?php 
										while($row = mysqli_fetch_assoc($result)){
									?>
										<div class="col-sm-3 col-md-3">
											<div class="accessories-body">
												<div class="accessories-panel wow fadeInTop" data-wow-delay="0.2s" >
													<img src="<?php echo $base_url . $row['product_image'];?>" class="img-responsive" alt="<?php echo $row['product_name'];?>" />
												</div>
												<div class="accessories-footer">
													<h3><?php echo $row['product_name'];?></h3>
												</div>
											</div>
										</div>
									<?php 
										}
									?>
									</div>
								
									</div>				
								</div>
							</div>
						</div>
						
					</div>
								
				</div>				
			</div>
		</div>
	<!--eNd fEatured pRoduct Area -->

	
	<?php 
        include("../../required/footer.php"); 
?>