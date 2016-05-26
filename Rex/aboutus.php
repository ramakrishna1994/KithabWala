<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '/home/vijaymerakii007/public_html/Rex/phpFiles/connection.php';
require_once '/home/vijaymerakii007/public_html/Rex/googlerk/libraries/Google/autoload.php';

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com'; 
$client_secret = 'J0fdkvOoKB5fO2Sp-lZ9q6vN';
$redirect_uri = 'http://kithabwala.com/';



//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kithabwala</title>
    <!-- Favicon -->
	<style>
		body{
			color:#838282;
		}
		
		.shakeimage{
position:relative
}

.locimage{
   
    -webkit-transition:.4s all;
}
.transition {
    -webkit-transform: scale(2); 
    -moz-transform: scale(2);
    -o-transform: scale(2);
    transform: scale(1.5);
}
	</style>
	
	<link  href="css/contactus.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
	
	

  </head>
  <body>


  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- Start menu section -->
  
	
	<nav class="navbar navbar-default navbar-fixed-top" style="padding:0.5%;background-color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     <a href="home.php"><img src="images/kithabwala.png" alt="logo" height="50" width="100"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li ><a href="home.php">HOME</a></li>
            <li class="active"><a href="aboutus.php">ABOUT US</a></li> 
            <li><a href="products.php">PRODUCTS</a></li>                    
            <li ><a href="advertise.php">ADVERTISE </a></li> 
            <li ><a href="halloffame.php">CREATIVE</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		
		<?php 
			if(!isset($_SESSION['kithabwalaemailid']))
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
					
					
					
					
$content .= '<li style="cursor:pointer"><a class="header-color" onclick="logout()"><span class="glyphicon glyphicon-log-out" ></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							
							.'	</li>';
							echo $content;
			}
							
			?>
			
			
      </ul>
    </div>
  </div>
</nav>

    
  
  <!-- End menu section -->
	
	
 
  
  <!--  start mission/vision section
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
			<div class="welcome-area row">
             
                  <div class="single-wc-content wow fadeInUp col-md-3 col-md-offset-3">
                    <span class="fa icon-mission wc-icon"></span>
                    <h4 class="wc-tittle">Mission</h4>
                    <p style="text-align:justify">A notebook must not just be a scribbling pad. It is an essential part of a student's life. Kithabwala shall work closely to bring a notebook close</p>
                  </div>
                
                  <div class="single-wc-content wow fadeInUp col-md-3">
                    <span class="fa glyphicon glyphicon-eye-open wc-icon"></span>
                    <h4 class="wc-tittle">Vision</h4>
                    <p style="text-align:justify">At Kithabwala, our vision is to create a better experience around a notebook while ensuring accessibility to all. </p>
                  </div>
               
            </div>
		 </div>
      </div>
      
    </div>
  </section> --------->


  
  <!-- Start Testimonial section -->
  <section id="testimonial" style="margin-top:5%">
    <img src="images/aboutus.jpg" alt="img" height="300px" width="100%">
    <div class="counter-overlay" style="height:300px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">

              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div style="color:white;text-align:center;margin-top:5%">
                    <font size="6px">You can make anything by writing – C.S Lewis. </font><br><br>
					<font size="4px">Our mission is to inspire you to write! </font>
                    
                  </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
	
    </div> 
  </section>
  <!-- End Testimonial section -->

  <div class="container" >
    <div class="row" >
		<div class="col-md-10 col-md-offset-1" style="text-align:center;margin-top:3%;color:#838282">
		<p><font size="5px" color="black"><b>We do this by</b></font> <br>
		<h5><font color="black" size="3px"><b>Giving you captivating & energetic designs.</b></font></h5><br>
		<p style="text-align:justify">Considerable amount of our resources are spent in ideating, envisioning and designing books with the elements you love to see in it. A specific focus is laid by us to incorporate the design elements & content given to us by our <a href="creativecorner.html" style="color:red">EnThU customers</a> . </p> <br>
		<h5><font color="black" size="3px"><b>Giving more for less!</b></font></h5>
		<b></b>
		<br>
		<p style="text-align:justify">We offer best in class quality at rationally reasonable rates along with value added fun elements such as the Magic Slate (Yes you read it right! Our books take you down the memory lane), sweet deals & discounts to make you feel rewarded anddd…….Hey! Why don’t you go down the lane to the nearest store and checkout our product, we have some more surprises in it for you.</p>
		<br>
		<b><h5><font color="black" size="3px"><b>Ensuring that we do all the lively experimenting while maintaining the aesthetics of a classic notebook and creating an enriching experience for you to write</b></font></h5>
			</p>
		</div>
	  </div>
	  </div>
  
  
   <!------------------------------------------------
  <div class="container-fluid">	
	<div class="row">
		<div class="col-md-12 ">
			<iframe src="carricages.html" width="100%" height="1000px" frameborder="0"  onload="resizeIframe(this)"></iframe>
		</div>
	</div>
  </div>
  -------------------------------------->
  
   <!-- Start call to action 
  <section id="call-to-action">
    <img src="images/map.png" alt="img" width="1300" height="500">
    
  </section>  -->

  
  
  
 <a id="team-KW">  

  <!-- Start Team action -->
  <section id="team">
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle"><font color="#ffd00d">Kithabwale उर्फ़ Team Kithabwala</font> </h2>
              <span class="tittle-line"></span>
              <p style="text-align:justify"><font color="black" size="3px">We are a bunch of misfits with a love for the retro age and the synergistic partnership among us completes the Jigsaw puzzle which we proudly refer to as Kithabwala! We strongly believe that ‘Team Work’ leads to ‘Dream Work’.</font></p>
			  <p><font color="black">If anyone of you wants to get in touch with anyone of us, we would be more than happy to do so, after all we trust in the power of networking </font></p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-facebook"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-twitter"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-pinterest"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Abhilash Gali</p>
                    <span>CEO &amp; Founder</span>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-facebook"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-twitter"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-pinterest"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Sahil Kaul</p>
                    <span>Co-founder</span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-facebook"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-twitter"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-pinterest"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Himanshu Joshi</p>
                    <span>Developer</span>
                  </div>
                </li>
				</ul>
				<br><br><br>
				<ul class="team-grid">
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-facebook"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-twitter"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-pinterest"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Thanmay Krishna</p>
                    <span>Senior designer</span>
                  </div>
                </li>
				
				<li>
                  <div class="team-item team-img-4 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-facebook"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-twitter"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-pinterest"></span></a>
                      <a href="http://markups.io/items/rex/#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Ravi Teja Gamini</p>
                    <span>Senior designer</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </a>
  </section>
  </a>
  <!-- Start Team action -->




 
    <div class="container-fluid">
      
       
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><span>Our Location</span></h2>
              <span class="tittle-line"></span>
			  <div class="row">
				<div class>
					<a href="https://www.google.co.in/maps/place/Sarathi+Studios+Bus+Stop/@17.4370234,78.4407573,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcb90c55f8fef47:0x8925c47abc4116d6!8m2!3d17.4370183!4d78.442946" target="_blank"><img src="images/pmap.jpg" class="img-circle locimage" width="300" height="300"></a>
             
            </div>
            
        
          <!-- End welcome area -->
        </div>
      </div>
      
    </div>
  
</div>
 

 
 
  <div class="welcome-area" style="margin-top:5%">
            <div class="title-area">
              <h2 class="tittle"><span>Be a part of our story</span></h2>
              <span class="tittle-line"></span>
			  <p><font color="black" size="3px">We're always looking for great folks to join us on our mission. If you want to be a part of our story, we'd love to chat. Explore our careers section to see if there's a role that excites you. If there isn't one and we like each other, we'll create one for you.</font></p>
			  <p>
		</div>
      
    </div>
 
   <!-- Start call to action -->
  <section id="call-to-action" style="margin-top:3%">
	
	
    <img src="images/joinus.jpg" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow" style="margin-top:10%" >
         
          <a href="careers.php" class="button button-default button-lg" data-text="JOIN US IN OUR JOURNEY"><span>JOIN US IN OUR JOURNEY</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->
  
  
  
 
  
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
  
  
  
  
    <div class="row" style="padding-top:1%" id="skyline">
	<img src="images/hydfooter.png" width="100%" style="margin-top:10%">
  </div>
  
  
  	
  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <p style="color:#ffd00d;font-size:25px;margin-top:5%">KITHABWALA</p>    
				<p style="color:#838282;font-size:15px;margin-top:1%">We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</p>    				
              <div class="footer-social">
					<div class="row">
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="facebook" href="#" style="float:left"><span class="fa fa-facebook"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">SAY HELLO ON <br> OUR FACEBOOK PAGE</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="twitter" href="#" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="google-plus" href="#" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
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
	
	
			 <div class="row" >
				<div class="col-md-6" style="text-align:center;border-right:1px solid #505050">
				
						<div class="col-md-7" style="padding:10px 0">
							<img src="images/logo.png" width="150" height="150" class="img-rounded">
						</div>
						<div class="col-md-5" style="text-align:left;padding:10px 0">
							
						   <h4><b><font color="#ffcc04">Head Quarters</font></b></h4>
							
						   <p><font color="#838282" size="2px">Kithabwala Pvt Ltd.<br>401 Sarathi Studios <br>Mythrivanam,Hyderabad<br>Telangana 500081</font></p>
					  </div>
				  
				</div>
				<div class="col-md-6" style="text-align:left">
					
						<div class="col-md-3 col-md-offset-1" style="padding:10px 0" >
								<h4><b><font color="#ffcc04">Company</font></b></h4>
								
								<p><a href="#"><font color="#838282" size="2px">About Us</font></a></p> 
								<p><a href="http://www.kithabwala.com/Rex/aboutus.php#team"><font color="#838282" size="2px">Team</font></a></p>
								<p><a href="#"><font color="#838282" size="2px">Carrer at KithabWala</font></a></p>
								
						  </div>
					  
						  <div class="col-md-3" style="padding:10px 0">
								<h4><b><font color="#ffcc04">Advertise</font></b></h4>
								
								<p><a href="#"><font color="#838282" size="2px">Advertise with us</font></a></p>
								<p><a href="#"><font color="#838282" size="2px">Store Locations</font></a></p>		
						  </div>
		  
						  <div class="col-md-3" style="padding:10px 0">
							   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
								
							   <p><a href="#"><font color="#838282" size="2px">Contact Us</font></a></p>
						  </div>
						  
						  
						  
				</div>
				   
				  
				   
				  
				 
        </div>
    </div>
    <div class="footer-bottom" style="padding:10px 0">
      <p><font color="#838282" size="2px">Copyright &copy; 2016 - Kithabwala - All rights reserved.</font></p>
    </div>
  </footer>
  <!-- End Footer -->
  
  

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
				<div class="form-group"> 
						
						<div class="col-sm-12"><center> 
							<div id="gConnect">
								<div  style="cursor:pointer"><a href="
								<?php 
								if (isset($authUrl)){
								echo $authUrl ;
								}
								
								else {
	
									$user = $service->userinfo->get(); //get user info 
									
									
									
									//check if user exist in database using COUNT
									/*$result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
									$user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist*/
									
									//show user picture
									echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
									/*
									if($user_count) //if user already exist change greeting text to "Welcome Back"
									{
										echo 'Welcome back '.$user->name.'! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
									}
									else //else greeting text "Thanks for registering"
									{ 
										echo 'Hi '.$user->name.', Thanks for Registering! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
										$statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
										$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
										$statement->execute();
										echo $mysqli->error;
									}
									*/
									//print user details
									
									print_r($user);
									
								}
								
								?>
								
								"><img src="images/google.png" width="210" height="80"></div>
							  </div></center>
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
	<script src="https://apis.google.com/js/client:platform.js"></script>

	

  </body>
</html>