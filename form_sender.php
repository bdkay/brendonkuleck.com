<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "hello@yourmail.com";
     
    $email_subject = "SUBMISSION FOR HALFCREATIVE TEMPLATE BY SUPVIEW";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- HTML SECTION IS LIKE THE INDEX.HTML SECTION :: JUST CHANGE WHAT YOU NEED TO CHANGE ! -->


<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <!-- Title and meta tag /-->
    <title>HALFCREATIVE - Premium One Page HTML/CSS Template</title>
    <meta name="description" content="YOUR DESCRIPTION">
    <meta name="author" content="YOURNAME">
    <meta name="keywords" content="YOUR KEYWORDS" />
    
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>

    <!-- Google+ Metadata /-->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Stylesheet /-->
    <link rel="stylesheet" href="css/gumby.css">
    <link rel="stylesheet" href="css/media.css"> 
    <link rel="stylesheet" href="css/style.css"> 

    <script type="text/javascript" src="js/modernizr.custom.js"></script> 
    
</head>

<body>

<!-- HEADER HOME ############################################### -->
<section id="home">

  	<div class="row">
	    <div class="twelve columns">
	    
	    	  <h1 class="fade-it"><img alt="YOURLOGO" src="img/logo_header.png"></h1>
  
	    	  <div class="fade-it ">
		    	  <div class="roles">
        
			    	  <div>
				    	  Thanks, we'll be probably soon in touch.
				      </div>

    
	          	  </div>
	          	  
	          </div>
	          
	    </div>
	    
	    <!-- LITTLE LOGO SEE WHAT WE DO -->

	    	<div id="down_button_contact" class="fade-it"><a href="index.html#contact">Go Back</a></div>

	    <!-- END LITTLE LOGO SEE WHAT WE DO  -->
	    
    </div>

</section>

  
<!-- END FOOTER ############################################### -->

 
<!-- JAVASCRIPTS ############################################### -->  

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

<!-- END JAVASCRIPTS ############################################### -->  

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>




<?php
}
die();
?>