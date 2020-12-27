
<?php 
	$product = 'otg_connector';
    
	include("../../../private/config/db_connection/db_connect.php");
	include("../../../private/required/public/public_header.php");
	include("../../../private/config/query/product_category_query.php");

?>
	<!-- fEatured pRoduct Area -->
		<div class="inner-page">
			<div class="container-fluid">
				<div class="row">	
					<div class="inner-banner">
						<img src="<?=base_url();?>images/inner-banner.jpg" class="img-responsive"/>
					</div>
					<div class="inner-page-content">
					
							<div class="col-md-12">
								<!-- cRovell pRoduct aRea-->
								<div class="accessories-section">
									<div class="container">
										<div class="row">
										<div class="col-md-12">	
											<h4><span></span>otg connector</h4>
										</div>
										<div class="sub-cateogy col-md-12">
										
											
										<?php 
											while($row = mysqli_fetch_assoc($result)){
												include("../../../private/required/public/product/product_list.php");		
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
        include("../../../private/required/public/public_footer.php"); 
?>