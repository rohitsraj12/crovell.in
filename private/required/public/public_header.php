<?php 
	function base_url(){
		echo "http://localhost/project/CROVELL-WEBSITE/public/";
	//  echo "http://crovell.in/";
	}

	$responseArray = 0;
	if(isset($_POST['btn-cnt-submit']))
	{
		include "common-email.php";
		
		function cleanInput($text){
			$text = trim(strip_tags($text));
			// $text = preg_replace("/[^a-zA-Z0-9\.,s]/", "", $text);
			return $text;
		}
		
		$fname = cleanInput($_POST['fname']);
		
		/*$fname = preg_replace("/<script.*?\/script>/s", "", $fname) ? : $fname;*/
		$email = trim(strip_tags($_POST['email']));
		
		$mobile = cleanInput($_POST['mobile']);
		
	
		
		
		$message1 = cleanInput($_POST['message']);
		/*echo $email."<br/>".$fname."<br/>".$message1;die;*/
		$fromname = 'Crovell';
		$res = common_email($fname,$email,$mobile,$message1,$fromname);
	if($res == 1){
		//include "common-email-user.php";
		$fromname='Crovell';
		$res1 = common_email_user($email,$fromname);
		if($res1 == 1){
			$responseArray = 1;
			// echo "<script>window.location = '#contactus';</script>";
		}else{
		$responseArray = 2;
		// echo "<script>window.location = '#contactus';</script>";
		}
		} else {
			$responseArray = 2;
		// echo "<script>window.location = '#contactus';</script>";
		}		 

	}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <title>Crovell - High Quality Accessories</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <!--    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" /> -->

        <!-- Libraries CSS Files -->
	  <link href="<?=base_url();?>css/nivo-slider.css" rel="stylesheet">
	  <link href="<?=base_url();?>css/owl.carousel.css" rel="stylesheet">
	  <link href="<?=base_url();?>css/owl.transitions.css" rel="stylesheet">
	  <!-- Nivo Slider Theme -->
  	  <link href="<?=base_url();?>css/nivo-slider-theme.css" rel="stylesheet">
  	  <link href="<?=base_url();?>css/animate.min.css" rel="stylesheet">
        <!-- Custom stylesheet -->

        <link rel="stylesheet" href=" <?=base_url();?>css/crovell-style.css" />
        <link rel="stylesheet" href=" <?=base_url();?>css/responsive.css" />
        <link rel="stylesheet" href=" <?=base_url();?>css/custom_style.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->	
	</head>
	<body>
	 <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <div class="social-icon">
        	<ul>
        		<li><a href="http://amchilocal.com/freshlysimple_new/" target="blank"><img src="<?=base_url();?>images/facebook-icon.png" alt="" /></a></li>
        		<li><a href="https://www.instagram.com/crovellpage/" target="blank"><img src="<?=base_url();?>images/insta-icon.png" alt="" /></a></li>
        		<li><a href="https://twitter.com/Crovell1" target="blank"><img src="<?=base_url();?>images/twitter-icon.png" alt="" /></a></li>
        		<li><a href="https://www.youtube.com/channel/UCVSlan3y89NlrRKVZRMCB_w" target="blank"><img src="<?=base_url();?>images/youtube-icon.png" alt="" /></a></li>
        	</ul>
        </div>  
    <!--End Preloader -->
    <!-- fIx hEader -->
		<!-- Top hEader aRea-->
			<div class="header-section">
			      <div class="container">
			         <!-- sTart rOw -->
			        <div class="row">
			          <div class="col-xs-5 col-sm-6 col-md-6">
			            <div class="left-header">
			              <ul>
			                <li><a href="#download-app" title=""><span>Welcome to Crovell </span></a></li>
			                <li><a href="#" title=""><span> </span></a></li>
			              </ul>              
			            </div>      
			          </div>

			          <div class="col-xs-7 col-sm-6 col-md-6">
			            <div class="left-header pull-right">
			               <ul>
			                  <li><a href="#" title=""><span>Email - info@crovell.in | </span></a></li>
			                
			                  <li><a href="#" class="waves-effect modal-trigger" title=""><span>022-6188 6573</span></a></li>
			              </ul>   
			            </div> 
			          </div>
			        </div>
			         <!-- eNd rOw -->
			      </div>
			</div>	
		<!--eNd  Top hEader Area-->		

		<!-- nAvigation Area-->
			 <div class="navigation" id="myHeader">
			      <div class="container">
			        <!-- sTart rOw -->
			        <div class="row">
				        <div class="">
				            <div class="logo-section">
				              <a href="<?=base_url();?>">
				                <img src="<?=base_url();?>images/logo.png"  alt="logo" class="responsive-img " />
				              </a>
				            </div> 
				        </div>
			          	<div class="nav-body">				                  
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>					
				                
				          	<div class="menu-section">
						         <div class="collapse navbar-collapse navbar-right" id="nav" >
				                    <ul class="nav">
				                        <li ><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "index.php"){echo "class='active'";}else{ echo "class=''"; } ?> class="active" href="<?=base_url();?>index.php">Home</a></li>
				                        <li ><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "about.php"){echo "class='active'";}else{ echo "class=''"; } ?> href="<?=base_url();?>about.php">About</a></li>
				                        <li class="dropdwn"><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "mobile-accessories.php"){echo "class='active'";}else{ echo "class=''"; } ?> href="<?=base_url();?>mobile-accessories.php">Mobile Accessories</a>
				                        	<ul>
				                        		<!-- <li class="sub-menu"><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "mobile-accessories.php"){echo "class='active'";}else{ echo "class=''"; } ?> class="active" href="speakar.php">Speaker</a></li> -->
				                        		<!-- <li class="sub-menu"><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "mobile-accessories.php"){echo "class='active'";}else{ echo "class=''"; } ?> class="active" href="speakar.php">Speaker</a></li> -->
												<li><a href="<?=base_url();?>products/battery/index.php">Battery</a></li>
												<li><a href="<?=base_url();?>products/bluetooth_airpord/index.php">bluetooth airpord</a></li>
												<li><a href="<?=base_url();?>products/bluetooth_dongal/index.php">bluetooth dongal</a></li>
				                        		<li><a href="<?=base_url();?>products/bluetooth_earphone/index.php">bluetooth Earphone</a></li>
												<li><a href="<?=base_url();?>products/bluetooth_headphone/index.php">bluetooth headphone</a></li>
												<li><a href="<?=base_url();?>products/bluetooth_speaker/index.php">bluetooth speaker</a></li>
												<li><a href="<?=base_url();?>products/car_chager/index.php">car charger</a></li>
												<li><a href="<?=base_url();?>products/car_reader/index.php">car reader</a></li>
												<li><a href="<?=base_url();?>products/car_stand/index.php">car stand</a></li>
												<li><a href="<?=base_url();?>products/hands_free/index.php">hands free</a></li>
												<li><a href="<?=base_url();?>products/otg_connector/index.php">otg connector</a></li>
												<li><a href="<?=base_url();?>products/power_bank/index.php">power bank</a></li>
												<li><a href="<?=base_url();?>products/selfie_stick/index.php">selfie stick</a></li>
				                        		<li><a href="<?=base_url();?>products/usb_cable/index.php">Cable</a></li>
				                        		<li><a href="<?=base_url();?>products/usb_charger/index.php">Charger</a></li>
												<!-- <li><a href="<?=base_url();?>headset.php">Headphone</a></li> -->
				                        		<!-- <li><a href="<?=base_url();?>car-charger.php">Car Charger</a></li> -->
				                        		<!-- <li><a href="<?=base_url();?>wireless-earphone.php">Earphones</a></li> -->
				                        		
				                        		<!-- <li><a href="power-bank.php">Power Bank</a></li> -->
				                        		<!-- <li><a href="<?=base_url();?>other.php">Other</a></li> -->
				                        	</ul></li>
				                        <li ><a <?php if(basename($_SERVER['SCRIPT_NAME']) == "contact.php"){echo "class='active'";}else{ echo "class=''"; } ?> href="<?=base_url();?>contact.php">Contact us</a></li>
				                    </ul>
			                	</div>
			                </div>
			       		</div>
			        </div>
			        <!-- eNd rOw -->           
			      </div>
			    </div>
		<!--eNd nAvigation Area-->
	<!-- eNd fIx hEader -->