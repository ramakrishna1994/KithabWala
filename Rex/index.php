<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rex : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>
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
            <li><a href="#creative.php">CREATIVE</a></li> 
			
			
			
			
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
							.'	  </div>'
							.'	</div></li>';
							echo $content;
			}
							
			?>
          </ul>      
			
        </div><!--/.nav-collapse -->
            
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

   <!-- Start about section -->
  <section id="about" >
    <div class="container-fluid">
      <div class="row">
      
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><span>About Us</span></h2>
              <span class="tittle-line"></span>
              <p style="text-align:justify"><font color="#838282">Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.

We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</font></p>
            </div>
            
          </div>
          <!-- End welcome area -->
      
      </div>
      
    </div>
  </section> 
  <!-- End about section -->

  
  
  
   <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="images/testimonial-bg.jpg" alt="img" height="400px" width="100%">
    <div class="counter-overlay" style="height:400px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">

              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div style="color:white;margin-top:11%;text-align:center">
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
		<p>We do this by <br>
		<h5><font color="#838282" size="3px">Giving you captivating & energetic designs.</font></h5><br>
		<p style="text-align:justify">Considerable amount of our resources are spent in ideating, envisioning and designing books with the elements you love to see in it. A specific focus is laid by us to incorporate the design elements & content given to us by our <a href="creativecorner.html">EnThU customers</a> . </p> <br>
		<h5><font color="#838282" size="3px">Giving more for less!</font></h5>
		<b></b>
		<br>
		<p style="text-align:justify">We offer best in class quality at rationally reasonable rates along with value added fun elements such as the Magic Slate (Yes you read it right! Our books take you down the memory lane), sweet deals & discounts to make you feel rewarded anddd…….Hey! Why don’t you go down the lane to the nearest store and checkout our product, we have some more surprises in it for you.</p>
		<br>
		<b><h5><font color="#838282" size="3px">Ensuring that we do all the lively experimenting while maintaining the aesthetics of a classic notebook and creating an enriching experience for you to write</b></font></h5>
			</p>
		</div>
	  </div>
	  </div>
  
  
  
   
  <!--  -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
			<div class="welcome-area row">
             
               
            </div>
		 </div>
      </div>
      
    </div>
  </section> 
  
  

  

  <!-- Start Google Map -->
  <section id="google-map">
  <div class="container-fluid">
      
       
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><span>Our Location</span></h2>
              <span class="tittle-line"></span>
			  <div class="row">
				<div class>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1903.2356352918341!2d78.44114891681208!3d17.4371436767228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1462074634019" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
        
          <!-- End welcome area -->
        </div>
      </div>
      
    </div>
  
</div>
  </section>
  <!-- End Google Map -->

  
    <!--  -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
			<div class="welcome-area row">
             
               
            </div>
		 </div>
      </div>
      
    </div>
  </section> 
  
  
  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="images/careers.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
         
          <a href="#" class="button button-default" data-text="JOIN US IN OUR JOURNEY"><span>JOIN US IN OUR JOURNEY</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->
  
  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <a class="footer-logo" href="#"><img src="images/logo.jpg" alt="Logo"></a>              
              <div class="footer-social">
                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
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

  <!-- Custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
    
  </body>
</html>