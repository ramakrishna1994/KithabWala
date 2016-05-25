
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kithabwala</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
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
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

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
	<script src="js/respond.min.js"></script>
	<style>
		.point
		{
			cursor:pointer;
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
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 <!-- Start menu section -->
  <section id="menu-area">
	
    <nav class="navbar navbar-default main-navbar navbar-fixed-top " role="navigation">  
		
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
			<li ><a onclick="window.open('../home.php','_self')" class="point">HOME</a></li>
            <li><a onclick="window.open('../aboutus.php','_self')" class="point">ABOUT US</a></li> 
            <li><a onclick="window.open('../products.php','_self')" class="point">PRODUCTS</a></li>                    
            <li ><a onclick="window.open('../advertise.php','_self')" class="point">ADVERTISE </a></li> 
            <li ><a onclick="window.open('../halloffame.php','_self')" class="point">CREATIVE</a></li> 
			
			
			
			
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
					
					
					
					$content .= '<li><a class="header-color" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
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

   

  

  

    <div id="all">

        <div id="content">
            <div class="container">

               


                <div class="col-md-12">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage" style="padding:20px 20px;background-color: white">
                                <img src="images/detailbig1.JPG" alt="" class="img-responsive">
                            </div>
<br>
                         <div class="row" id="thumbs">
                                <div class="col-xs-3">
                                    <a href="img/detailbig1.JPG" class="thumb">
                                        <img src="images/detailsquare.JPG" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="img/detailbig2.JPG" class="thumb">
                                        <img src="images/detailsquare2.JPG" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="img/detailbig3.JPG" class="thumb">
                                        <img src="images/detailsquare3.JPG" alt="" class="img-responsive">
                                    </a>
                                </div>
								<div class="col-xs-3">
                                    <a href="img/detailbig3.JPG" class="thumb">
                                        <img src="images/detailsquare3.JPG" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="box"><br>
                                <h3 style="color:#ffcc04"><br>Kithabwala college theme notebook<br></h3>
								<table class="table">
                                <tbody>
                                  <tr>
									<td>Ruling</td>
									<td>Ruled</td>
									
								  </tr>
								  <tr>
									<td>Mode id</td>
									<td>TDJID001</td>
								  </tr>
								  <tr>
									<td>GSM</td>
									<td>95</td>
									
								  </tr>
								  <tr>
									<td>Type</td>
									<td>Notebook</td>
									
								  </tr>
								  <tr>
									<td>No. of pages</td>
									<td>160 Pages(80 leaves)</td>
									
								  </tr>
								  <tr>
									<td>Cover Type</td>
									<td>300 GSM Designer Front & Back Covers</td>
									
								  </tr>
								  <tr>
									<td>Binding</td>
									<td>Spiral Bound</td>
									
								  </tr>
								  <tr>
									<td>Size</td>
									<td>A5</td>
									
								  </tr>
								  <tr>
									<td>Color</td>
									<td>Multicolor</td>
									
								  </tr>
								</tbody>
							  </table>
                              <br><br>
							  <table class="table">
								<thead>
								  <tr>
									<th>Dimensions</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>Length</td>
									<td>8.9 inch</td>
									
								  </tr>
								  <tr>
									<td>Width</td>
									<td>5.75 inch</td>
								  
								  </tr>
								  
								</tbody>
							  </table>
															



                                

                               

                            </div>

                           
                        </div>

                    </div>


                   

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


      


  



    </div>
    
  
   
  
    <div class="row" id="skyline">
	<img src="images/hydfooter.png" width="100%" style="margin-top:10%">
  </div>
  
  
  	
  <!-- Start Footer -->    
  <footer id="footer" style="background-color:#242424">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <p style="color:#ffd00d;font-size:25px;margin-top:5%">KITHABWALA</p>    
				<p style="color:#838282;font-size:15px;margin-top:1%">We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</p>    				
              <div class="footer-social">
					<div class="row">
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="facebook" href="https://www.facebook.com/Kithabwala-156605224697747/?fref=ts" style="float:left"><span class="fa fa-facebook"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">SAY HELLO ON <br> OUR FACEBOOK PAGE</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="twitter" href="#" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="google-plus" href="#" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="linkedin" style="float:left"><span class="fa fa-mobile-phone"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">CALL 022-42661060 <br> MON - FRI: 11 A.M - 6 P.M</font></p>
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
								
								<p><a href="aboutus.php"><font color="#838282" size="2px">About Us</font></a></p> 
								<p><a href="aboutus.php/#team"><font color="#838282" size="2px">Team</font></a></p>
								<p><a href="careers.php"><font color="#838282" size="2px">Carrer at KithabWala</font></a></p>
								
						  </div>
					  
						  <div class="col-md-3" style="padding:10px 0">
								<h4><b><font color="#ffcc04">Advertise</font></b></h4>
								
								<p><a href="advertise.php"><font color="#838282" size="2px">Advertise with us</font></a></p>
								<p><a href="#"><font color="#838282" size="2px">Store Locations</font></a></p>		
						  </div>
		  
						  <div class="col-md-3" style="padding:10px 0">
							   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
								
							   <p><a href="contactus.php"><font color="#838282" size="2px">Contact Us</font></a></p>
						  </div>
						  
						  
						  
				</div>
				   
				  
				   
				  
				 
        </div>
    </div>
    <div class="footer-bottom" style="padding:10px 0">
      <p><font color="#838282" size="2px">Copyright &copy; 2016 - Kithabwala - All rights reserved.</font></p>
    </div>
  </footer>
  <!-- End Footer -->
  
  


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
	
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