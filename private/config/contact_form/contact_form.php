<?php

echo "hi from contact form";

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