<?php 
	include("../private/required/public/public_header.php");
 ?>
	
 


	<!-- fEatured pRoduct Area -->
		<div class="inner-page">
			<div class="container-fluid">
				<div class="row">	
					<div class="inner-banner">
						<img src="images/inner-banner.jpg" class="img-responsive"/>
					</div>
					<div class="inner-page-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
	                            <div class="form-group">
	                                <?php if($responseArray == 1){ ?>
	                                <div class=""  id="sucmailmsgdiv1"  style="height: 34px;padding: 4px 13px; color:#aace44" >Thank you for contacting us.  We will be in touch shortly.</div>
	                                <?php } else if($responseArray == 2){?>
	                                <div class="msg-alert alert-danger"  id="sucmailmsgdiv1"  style="height: 34px;padding: 4px 13px;" >Error while sending mail</div>
	                                
	                                <?php } ?>
	                              </div>
	                            </div>
							</div>	
							<div class="row">
								<div class="col-md-5 pd-rgt">
									<div class="contact-info wow fadeInLeft" data-wow-delay="0.8s">
										<h4>Address</h4>
										<h5>Crovell Impex</h5>
										<p>Orchid City Center,<br> Shop No. C2-573 & C2-574,  <br>2nd Floor, Opp. BEST Bus Depot,<br>
								Bellasis Road, Mumbai Central(E), <br>Mumbai – 400 008.</p>

										<h5>Contact Number</h5>	
										<ul>
											<li>Phone : +91 9867509840</li>
											<li>Phone : +91 9869935710</li>
											<li>Telephone : 022-6188 6573</li>
											
											<li><a href="mailto:info@example.com">info@crovell.in</a></li>
										</ul>
										<div class="clearfix"></div>
										<div class="contactsocialicon">
											<h5>Social Media</h5>
											<div class="socil-mdia-link">
												<a href="https://www.facebook.com/Crovell-Mobile-Accessories-1190409514467758/?modal=admin_todo_tour" title="" target="blank"><img src="images/facebook.png" class="social-ftr-icn" alt="facebook" /></a>
												<a href="https://www.instagram.com/crovellpage/" title="" target="blank"><img src="images/instagram.png" alt="instagram" /></a>
												<a href="https://twitter.com/Crovell1" title="" target="blank"><img src="images/twitter.png" alt="twitter" /></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-7 pd-lft">
									<div class="contact-form wow fadeInRight " data-wow-delay="0.8s">
										<h4>Contact With Us</h4>
										<form method="post" id="contactForm">
											<div class="row">
											<div class="col-md-4">
												<input type="text" name="fname"  placeholder="Your Name">
											</div>
											<div class="col-md-4">
												<input type="email"  name="email" placeholder="Your Email" >
											</div>
											<div class="col-md-4">
												<input type="text"  name="mobile" placeholder="Telephone No" r>
											</div>
											<div class="col-md-12">
												<textarea name="message"  placeholder="Message..." ></textarea>
											</div>
											<input type="submit" name="btn-cnt-submit" class="btn know_btn" value="Submit" >
										</div>
										</form>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>					
				</div>				
			</div>
		</div>
	<!--eNd fEatured pRoduct Area -->

<!-- gOogle mAp Area -->

<div class="google-map-section">

  <div class="container-fluid">

      <div class="row">

          <div class="map-section">

          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3773.176351012586!2d72.82158941437523!3d18.96781756029431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOrchid+City+Center%2C++Bellasis+Road%2C+Mumbai+Central(E)%2C++Mumbai+%E2%80%93+400+008!5e0!3m2!1sen!2sin!4v1545977364516" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				

          </div>					

      </div>				

  </div>

</div>

<!-- eNd gOogle mAp Area -->
	
	<?php include("../private/required/public/public_footer.php"); ?>