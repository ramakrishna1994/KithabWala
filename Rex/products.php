<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-signin-client_id" content="860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
		<link  href="css/contactus.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	setTimeout(function(){
	showheader();
}, 3000);
</script>
	<style>
	
	


#contact {
	background-image: url("images/contact-bg.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	display: inline;
	float: left;
	padding: 70px 0;
	width: 100%;
}
.contact-left {
	background-color: rgba(104, 102, 96, 0.5);
	display: inline;
	float: left;
	padding: 30px 40px 10px;
	width: 100%;
}
.contact-left h2 {
	color: #fafafa;
	font-size: 35px;
	margin-bottom: 35px;
}
.single-address {
	display: inline;
	float: left;
	margin-bottom: 15px;
	padding-right: 50px;
	width: 100%;
}
.single-address h4 {
	color: #fafafa;
	font-size: 22px;
	font-weight: bold;
	margin-bottom: 17px;
}
.single-address p {
	color: #fafafa;
	font-size: 14px;
	margin-bottom: 5px;
}
.contact-right{
	background-color: rgba(104, 102, 96, 0.5);
	display: inline;
	float: left;
	padding: 30px 40px;
	width: 100%;
}
.contact-right h2 {
	color: #fafafa;
	font-size: 35px;
	margin-bottom: 48px;
}
.contact-form .form-group input {
	background: transparent;
	color: #e1e1e1;
	font-size: 20px;
	border: 1px solid #fff;
	border-radius: 0;
	height: 45px;
	margin-bottom: 24px;
}
.contact-form .form-group textarea{
	color: #e1e1e1;
	background: transparent;
	border: 1px solid #fff;
	border-radius: 0;
	height: 190px;
}
.contact-form .form-control:focus {
    outline: 0;
    box-shadow: none;    
} 
.contact-form .form-control::-webkit-input-placeholder {
	color: #e2e2e2;
	font-size: 20px;
}

.contact-form .form-control:-moz-placeholder { /* Firefox 18- */
	color: #e2e2e2;
	font-size: 20px; 
}

.contact-form .form-control::-moz-placeholder {  /* Firefox 19+ */
	color: #e2e2e2;
	font-size: 20px;
}

.contact-form .form-control:-ms-input-placeholder {  
	color: #e2e2e2;
	font-size: 20px;
}
.contact-form button {
	float: right;
	margin-right: 0;
	border-radius: 0px;
}
.contact-form.button-default::after,
.contact-form .button-default > span {
	padding: 12px 40px;  
}
#google-map{
	display: inline;
	float: left;	
	width: 100%;
}


	
		.button123 {
    background-color: #ffcc04; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

	.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #ffcc04;
}
	
		
		
		.fixedp{
			font-size:30px;
		}
		
		
		
	.mine
	{
		font-size:30px;
		color:grey;
		transition:1s;
	}
	
	.mine:hover
	{
		color:green;
		font-size:35px;
		
	}
	
	

	
	

		
	</style>
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#menu-area"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
	
    <nav class="navbar navbar-default main-navbar" role="navigation">  
		
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"><img src="images/logo.png" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
			<li class="active"><a href="home.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li> 
            <li><a href="products.php">PRODUCTS</a></li>                    
            <li><a href="#a">ADVERTISE </a></li> 
            <li><a href="creative.php">CREATIVE</a></li> 
			
			
			
			
			<?php 
			if(!isset($_SESSION['emailid']))
			{
						echo '<li id="signup"><a href="#v" data-toggle="modal" data-target="#registrationModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
							<li id="login"><a href="#d" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
							';
			}
			else
			{
				$content =  '<li><a  style="cursor:pointer" data-toggle="dropdown"><font color="orange"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					
					
					$content .= '<li><a class="header-color" href="phpFiles\logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							
							.'	</li>';
							echo $content;
			}
							
			?>
          </ul>      
			
        </div><!--/.nav-collapse -->
            
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  
   <!-- Start subscription section -->
  <div class="container-fluid" style="margin-top:5%">	
	<div class="row">
		<div class="col-md-12 ">
			<iframe src="p.html" width="100%" frameborder="0" scrolling="no" onload="resizeIframe(this)" ></iframe>
		</div>
	</div>
  </div>
  <!-- End subscription section -->

  
  
  
  
  
  
  
  
  

  

  
  
  
  
  <div id="contactus">
<!-- TRADE ENQUIRIES SECTION -->
    <a class="fixed_queries_section phone_icon"><i class="fa fa-phone" ></i></a>

    <div class="fixed_queries_section_overlay" style="display: none;"></div>

    <div class="fixed_queries_content inner">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" >
            <li role="presentation" class="first"><a aria-controls="home" role="tab" data-toggle="tab">Order Queries</a></li>
            <li role="presentation" class="last"><a aria-controls="profile" role="tab" data-toggle="tab">Trade Queries</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="col-xs-12 extra_pad query_form_main_section">
                    <div class="message_query_section">Message us your Query</div>
                    <form id="enquiry_form_on_trade">
                        <input type="text" name="query_name" id="query_name" class="form-control required-entry" placeholder="Enter Order ID">
                        <input type="email" name="query_email" id="query_email" class="form-control required-entry" placeholder="Your Email Addresss">
                        <textarea name="query_comment" id="query_comment" class="form-control required-entry" placeholder="Enter Your Query"></textarea>
                        <button class="btn btn-default" type="submit">SUBMIT</button>
                    </form>
                </div>
                <div class="col-xs-12 extra_pad success_message_on_query_submission">
                    <div class="success_bubble">
                        <img src="./Buy funny &amp; unique gifts from India&#39;s coolest company - Happily Unmarried_files/ic-QuerySent.svg">
                    </div>
                    <div class="thanks_message">Thanks for your query</div>
                    <div class="getting_back_info">We will get back to you within 24 - 48 hours. Do check your Email.</div>
                </div>
                <div class="col-xs-12 tab_footer">
                    <div class="row">
                        <div class="col-xs-3 phone_icon_on_footer"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="col-xs-9 footer_info">
                            <div class="callus_text">or call us at</div>
                            <div class="tollnumber"><a href="tel:180030007347">1800 3000 7347</a></div>
                            <div class="tollnumber"><a href="tel:180030005887">1800 3000 5887</a></div>
                            <div class="week">[Mon-Fri - 10AM - 6PM]</div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="col-xs-12 trade_enquiry_tab">
                    <div class="message_query_section">For Trade related queries call us at:</div>
                    <div class="col-xs-12">
                        <div class="col-xs-3 phone_icon_on_footer">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 pad_left_10">
                            <div class="tollnumber"><a href="tel:+918800402266">+91-8800402266</a></div>
                            <div class="tollnumber"><a href="tel:+917042388244">+91-7042388244</a></div>
                            <div class="col-xs-12 footer_note week">
                                <sup>*</sup>Mon - Fri - 10 AM - 6 PM
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a  class="fixed_queries_section close_icon"><i class="fa fa-close" ></i></a>
    </div>
  </div>
  <!-- END OF ENQUIRIES SECTION -->
  
  
  
  
    <div class="row" id="skyline">
	<img src="images/skyline.svg" width="100%" style="margin-top:5%">
  </div>
  
  
  
  	
  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <p style="color:#ffcc04;font-size:30px;margin-top:5%">KITHABWALA</p>    
				<p style="color:#838282;font-size:16px;margin-top:2%">We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</p>    				
              <div class="footer-social">
					<div class="row">
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="facebook" href="#" style="float:left"><span class="fa fa-facebook"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">SAY HELLO ON <br> OUR FACEBOOK PAGE</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="twitter" href="#" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="google-plus" href="#" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="linkedin" href="#" style="float:left"><span class="fa fa-mobile-phone"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">CALL 022-42661060 <br> MON - FRI: 11 A.M - 6 P.M</font></p>
						</div>
					</div>
				   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="footer-bottom">
			 <div class="row" style="text-align:center">
				   <div class="col-md-2" >
						<h4><b><font color="#ffcc04">Company</font></b></h4>
						
						<p><a href="#"><font color="#838282" size="3px">About Us</font></a></p> 
						<p><a href="#"><font color="#838282" size="3px">Team</font></a></p>
						<p><a href="#"><font color="#838282" size="3px">Carrer at KithabWala</font></a></p>
						
				  </div>
			  
				  <div class="col-md-2">
						<h4><b><font color="#ffcc04">Advertise</font></b></h4>
						
						<p><a href="#"><font color="#838282" size="3px">Advertise with us</font></a></p>
						<p><a href="#"><font color="#838282" size="3px">Store Locations</font></a></p>		
				  </div>
  
				  <div class="col-md-2">
					   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
						
					   <p><a href="#"><font color="#838282" size="3px">Contact Us</font></a></p>
				  </div>
				  
				  <div class="col-md-3 col-md-offset-3">
						<div class="row">
							fb page
						</div>
					   <h4><b><font color="#ffcc04">Head Quarters</font></b></h4>
						
					   <p><font color="#838282" size="3px">Kithabwala Pvt Ltd.<br>401 Sarathi Studios <br>Mythrivanam,Hyderabad<br>Telangana 500081</font></p>
				  </div>
        </div>
    </div>
    <div class="footer-bottom">
      <p><font color="#838282" size="3px">&copy; 2016 All Rights reserved to Kithabwala.com</font></p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="js/waypoints.js"></script>
  <script type="text/javascript" src="js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="js/wow.js"></script> 
<script src="https://apis.google.com/js/platform.js" async defer></script>
  <!-- Custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

    <script>

		
		
		
		
		 //////////
    // Trade Enquiry related js
    /////
		
		jQuery(document).ready(function($) {
    $(document.body).on('click', '.edit_sms_number', function() {
        console.log('jnnn');
        if ($('#'+this.id).is(':checked')) {
            $('#'+this.id).val('1');
        } else {
            $('#'+this.id).val('0');
        }
    });

   
    window.originalHeightOfBlock = $(".fixed_queries_content").outerHeight();
    window.originalWidthOfBlock = $(".fixed_queries_content").outerWidth();

    window.longAnimationDuration = 500;
    window.shortAnimationDuration = 300;

    $(".fixed_queries_section_overlay").hide();

    window.expandFixedTabs = function() {
        $(".fixed_queries_content").animate({
            width: '400px'
        }, longAnimationDuration, function() {
            $('body').css('overflow-y', 'hidden');
            $(".fixed_queries_section.phone_icon").fadeOut();
            $(".fixed_queries_section_overlay").fadeIn();
            $(".fixed_queries_content").css('overflow', 'initial');

            var curHeight = $('.fixed_queries_content').height();
            $('.fixed_queries_content').css('height', 'auto');
            var autoHeight = $('.fixed_queries_content').height();

            $(".fixed_queries_content").height(curHeight).animate({
                height: autoHeight
            }, longAnimationDuration, function() {
                $( ".fixed_queries_content .first" ).addClass( "active" );
                $(".fixed_queries_content .tab-content").show().animate({
                    opacity: 1,
                    top: 0
                }, shortAnimationDuration, function() {
                    $(".fixed_queries_section.close_icon").fadeIn();
                });
            });
        });
    };

    $(".fixed_queries_section.phone_icon").click(function() {
        expandFixedTabs();
    });

    window.collapseFixedTabs = function() {
        $('body').css('overflow-y', 'auto');
        $(".fixed_queries_section.close_icon").hide();
        $(".fixed_queries_section_overlay").fadeOut();
        $( ".fixed_queries_content .first" ).removeClass( "active" );
        $(".fixed_queries_content").animate({
            height: originalHeightOfBlock
        }, longAnimationDuration, function() {
                $(".fixed_queries_section.phone_icon").fadeIn();
                $(".fixed_queries_content").css('overflow', 'hidden');
            $(".fixed_queries_content").animate({
                width: originalWidthOfBlock
            }, longAnimationDuration, function() {
                $(".fixed_queries_content .tab-content").css({
                    opacity: 0,
                    top: 30
                });
                $( ".fixed_queries_content .nav-tabs .first a" ).trigger( "click" );
                $(".query_form_main_section").show();
                $(".success_message_on_query_submission").hide();
                $(".query_form_main_section input").val('');
                $(".query_form_main_section textarea").val('');
                $( ".fixed_queries_content .first" ).removeClass( "active" );

            });
        });
    };

    $(".fixed_queries_section.close_icon").click(function() {
        collapseFixedTabs();
    });

    $(".fixed_queries_section_overlay").click(function() {
        collapseFixedTabs();
    });
});
		
		
		
		
		function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
		
		
			
	 
	

	
	
	
	var fixmeTop = $('.fixedp').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll <= 100) {
        $('.fixedp').css({
            position: 'fixed',
			display:'block'
            
        });
    } else {
        $('.fixedp').css({
            position: 'static',
			display:'none'
        });
    }
});




		
		
	</script>
	
	
	
	
	
	<!--Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"> <center><font color="orange" size="5px">Log in</font></center></h4>
      </div>
      <div class="modal-body">
        
		
		
		
						
			<div class="form-horizontal" >
			
			
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center><div class="g-signin2" data-width="195" data-height="35" data-longtitle="true" data-onsuccess="onSignIn"></div></center>
						</div>
  				</div>
				
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center><a href="#" onclick="fb_login();"><img src="images/fb_login_awesome.jpg" border="0" alt=""></a>
</center>
						</div>
  				</div>
				
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center>--or--</center>
						</div>
  				</div>
				
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="loginstatus"></p>
    				</div>
  				</div>
				
				<div class="form-group" id="loginEmailDivision">
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="loginemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
						</div>
					</div>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="loginemailid" placeholder="Email address" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="" autofocus>
      					<span class="" id="loginEmailErrorSpan"></span>
    				</div>
  				</div>
  				
  				
  				<div class="form-group" id="loginPasswordDivision">
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="loginpassword"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="loginpassword" placeholder="Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="loginPasswordErrorSpan"></span>
    				</div>
    			</div>
    
    
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7"> 
      					<button type="submit" class="btn btn-success btn-block" onclick="return checkLoginParameters()"> Login </button>
    				</div>
    			</div>
				
				

  				
  				
  				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center><a  style="cursor:pointer" data-toggle="modal" onclick="toggle()">Help ,I forgot my login details.</a></center>
						</div>
      					
    				
  				</div>
    			
				<div class="form-group">
					
					<center>
					<a  style="cursor:pointer" data-toggle="modal" onclick="toggleModals()">Sign Up</a>
					</center>
				</div>
   
   
  
			</div>
			
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

	
</div>

  </div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



<!-- registration Modal -->
<div id="registrationModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"><center><font color="orange" size="5px">New to Kithabwala? Sign up!</font></center></h4>
      </div>
      <div class="modal-body">
					
					
						
			<div class="form-horizontal" role="form">
			
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="registrationstatus"></p>
    				</div>
  				</div>
				
				<div class="form-group" id="registrationFirstNameDivision">
					
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label  col-sm-offset-12 " for="registrationfirstname"><span class = "glyphicon glyphicon-user"></span></label>
						</div>
					</div>
					<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationfirstname" placeholder="Enter Your Firstname" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationFirstNameErrorSpan"></span>
    				</div>
  				</div>
				
				<div class="form-group" id="registrationLastNameDivision">
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="registrationlastname"><span class = "glyphicon glyphicon-user"></span></label>
						</div>
					</div>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationlastname" placeholder="Enter Your Lastname" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationLastNameErrorSpan"></span>
    				</div>
  				</div>
  				  				
  				
  				<div class="form-group" id="registrationEmailDivision">
				<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="registrationemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
						</div>
					</div>
    				
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationemailid" placeholder="Enter Your Email Address" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationEmailErrorSpan"></span>
    				</div>
  				</div>
  				
  				
  				<div class="form-group" id="registrationPasswordDivision">
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="registrationpassword"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="registrationpassword" placeholder="Enter Your Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationPasswordErrorSpan"></span>
    				</div>
    			</div>
    			
    			
    			<div class="form-group" id="registrationConfirmPasswordDivision">
				<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="registrationconfirmpassword"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="registrationconfirmpassword" placeholder="Confirm password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationConfirmPasswordErrorSpan"></span>
   				 	</div>
  				</div>
 
  
    
				 <div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7"> 
      					<button type="submit" class="btn btn-primary btn-block" onclick="return checkRegistrationParameters()">Register</button>
    				</div>
    			</div>
    
  				
   
   
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>










<!-- Verification Modal -->
<div id="verificationModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"><center><font color="orange" size="5px">Verification Code</font></center></h4>
      </div>
      <div class="modal-body">
				<div class="form-horizontal" role="form">
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="verificationstatus">We have sent you a verification code to your Email Address</p>
    				</div>
  				</div>
				
			
				<div class="form-group" id="verificationCodeDivision">
					
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="verificationcode"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="verificationcode" placeholder="Enter Verification Code" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationFirstNameErrorSpan"></span>
    				</div>
  				</div>
				
				
				
				
  				  
				 <div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7"> 
      					<button type="submit" class="btn btn-primary btn-block" onclick="return verifyVerificationNumber()">Submit</button>
    				</div>
    			</div>
				
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7"> 
      					<button type="submit" class="btn btn-danger btn-block" onclick="return resendCode()">Resend Code</button>
    				</div>
    			</div>
    
  				
   
   
  
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







<!-- Reset password Modal -->
<div id="resetPasswordModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <center><font color="orange" size="5px">Reset Password</font></center>
      </div>
      <div class="modal-body">
					<div class="form-horizontal" role="form">
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="resetpasswordstatus"></p>
    				</div>
  				</div>
				
			
				<div class="form-group" id="resetEmailDivision">
					<div class="col-sm-3">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="resetemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
						</div>
					</div>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="resetemailid" placeholder="Enter Email Address " data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="resetEmailErrorSpan"></span>
    				</div>
  				</div>
				
				
				
				
  				  
				 <div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7"> 
      					<button type="submit" class="btn btn-primary btn-block" onclick="return forgotPassword()">Submit</button>
    				</div>
    			</div>
				
				
    
  				
   
   
  
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<script src="customjs/loginAndRegistration.js"></script>
	<script src="customjs/forgotPassword.js"></script>
	<script src="customjs/social.js"></script>

	



  </body>
</html>