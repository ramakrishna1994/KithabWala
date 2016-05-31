
<?php
session_start();
error_reporting(E_ALL);
 ini_set('display_errors', '1');
 $_SESSION['previousurl'] = 'products/'.basename($_SERVER['REQUEST_URI']);
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
		}.login_modal_footer{margin-top:5px;}
.login_modal_header .modal-title {text-align: center;font-family:'Philosopher',sans-serif; }
.form-group{position: relative;}
.form-group .login-field-icon {
    font-size: 20px;
    position: absolute;
    right: 15px;
    top: 3px;
    transition: all 0.25s ease 0s;
    padding-top: 2%;
}
.login-modal{
    width:100%;
    padding-bottom:20px;
}
.login_modal_header, .login_modal_footer {background: #00BB64 !important;color:#fff;}
.modal-register-btn{margin: 4% 33% 2% 33% ;width:100%;}
.login-modal input{height:40px; box-shadow: none; border:1px solid #ddd;}
.modal-body-left{float:left; width:50%; padding-right:4%; border-right:4px solid #ddd;}
.modal-body-right{float:right; width:47%;}
.login-link{padding:0 15%;}
.modal-social-icons{padding:0 10%;}
.facebook1, .twitter, .google, .linkedin {width:100%;height:40; padding-top:2%; margin-top:2%;}
.modal-icons{margin-left: -10px; margin-right: 20px;}
.google, .google:hover{background-color:#dd4b39;border:2px solid #dd4b39;color:#fff;}
.facebook1, .facebook1:hover{background-color: #3b5999; border:2px solid #3b5999;color:#fff;}
#social-icons-conatainer{position: relative;}
#center-line{position: absolute;  right: 47.5%;top: 80px;background:#ddd;  border: 4px solid #DDDDDD;border-radius: 20px;}
.modal-login-btn{width:100%;height:40px; margin-bottom:10px;}
#modal-launcher{margin: 30% 0 0 30%; }
		
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
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#c2c4c6;height:60px" id="navigation">
  
 
	
  <div class="container-fluid" style="background-color:#c2c4c6">
    <div class="navbar-header" style="background-color:#c2c4c6">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rkNavbar">
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span> 
      </button>
      <a class="navbar-brand" href="home.php" ><img id="logoimage" src="http://kithabwala.com/images/newlogo.jpg" width="100" height="50" style="margin-top:-2%"></a>
    </div>
    <div class="collapse navbar-collapse" id="rkNavbar" style="margin-top:1%;background-color:#c2c4c6">
      <ul class="nav navbar-nav" style="padding-left:5%">
        <li ><a href="../home.php">HOME</a></li>
            <li ><a href="../aboutus.php" >ABOUT US</a></li> 
            <li ><a href="../products.php">PRODUCTS</a></li>                    
            <li ><a href="../advertise.php">ADVERTISE </a></li> 
            <li ><a href="../halloffame.php">CREATIVE</a></li> 
			
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding-left:5%">
        
			
			<?php 
			
			if(!isset($_SESSION['kithabwalaemailid']))
			{
						echo '<li id="login"><a href="#d" data-toggle="modal" data-target="#loginModal"><font size="2px"><span class="glyphicon glyphicon-log-in"></span> Sign In</font></a></li> 
							';
			}
			else
			{
				
							
				echo '<li class="dropdown" style="margin-top:5%;">
					  <a class="dropdown-toggle"  style="cursor:pointer" data-toggle="dropdown"><font color="black" size="2px"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>
					  <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>
						<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>
					   <li><a class="header-color" style="cursor:pointer" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>
					  </ul>
					</li>';
			}
						
			?>
      </ul>
    </div>
  </div>
</nav>
 <!-- End menu section -->


  

  

    <div id="all">

        <div id="content">
            <div class="container">

               


                <div class="col-md-12" style="margin-top:10%">

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
                                <h3 style="color:#ffcc04">Kithabwala college theme notebook<br></h3>
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
								  <br>
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
    
  
   
  
      <div class="row" style="padding-top:1%" id="skyline">
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
								
								<a class="twitter" href="https://twitter.com/kithabwala" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="google-plus" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
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
								
								<p><a href="http://www.kithabwala.com/Rex/aboutus.php"><font color="#838282" size="2px">About Us</font></a></p> 
								<p><a href="http://www.kithabwala.com/Rex/aboutus.php#team-KW"><font color="#838282" size="2px">Team</font></a></p>
								<p><a href="http://www.kithabwala.com/Rex/careers.php"><font color="#838282" size="2px">Carrer at KithabWala</font></a></p>
								
						  </div>
					  
						  <div class="col-md-3" style="padding:10px 0">
								<h4><b><font color="#ffcc04">Advertise</font></b></h4>
								
								<p><a href="http://www.kithabwala.com/Rex/advertise.php"><font color="#838282" size="2px">Advertise with us</font></a></p>
								<p><a href="http://www.kithabwala.com/Rex/contactus.php#contactus"><font color="#838282" size="2px">Store Locations</font></a></p>		
						  </div>
		  
						  <div class="col-md-3" style="padding:10px 0">
							   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
								
							   <p><a href="http://www.kithabwala.com/Rex/contactus.php"><font color="#838282" size="2px">Contact Us</font></a></p>
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
  


	<!--Login Modal -------->
	
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Login to Kithabwala</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<div class="col-md-12">
					<center><p id="loginstatus">123</p></center>
				</div>
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
	        			<div class="form-group">
		              		<input type="text" id="loginemailid" placeholder="Enter your name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="loginpassword" placeholder="Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		
		            	<a class="btn btn-success modal-login-btn" onclick="return checkLoginParameters()">Login</a>
		            	<a  class="login-link text-center" onclick="toggle()" style="cursor:pointer">Lost your password?</a>
	        		</div>
	        	
	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
						<br><br>
	        				<!--<a onclick="fb_login();" class="btn btn-default facebook1" style="font-size:80%"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>-->
	        				<br>
	        				<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Fwww.kithabwala.com%2Fgoogle-login-api&client_id=839189393184-cuo5b1427lo95gkri8mjdst7i62r1cih.apps.googleusercontent.com&scope=email+profile&access_type=online&approval_prompt=auto" class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
	        			
	        			</div> 
	        		</div>	
	        		<div id='center-line'> OR </div>
	        	</div>																												
        		<div class="clearfix"></div>
        		
        		<div class="form-group modal-register-btn">
        			<button class="btn btn-default" onclick="toggleModals()"> New User Please Register</button>
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>	
	
<!------------------->
	
	<!---------registration modal---------->
	
	<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">New to Kithabwala? Sign up!</h2>
      		</div>
      		<div class="modal-body login-modal">
      			
				
				<div class="col-md-12">
					<center><p id="registrationstatus">123</p></center>
				</div>
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body col-sm-10 col-sm-offset-1'>
	        			<div class="form-group ">
		              		<input type="text" id="registrationfirstname" placeholder="Enter your first name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		              		<input type="text" id="registrationlastname" placeholder="Enter your last name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		              		<input type="text" id="registrationemailid" placeholder="Enter Your Email Address" value="" class="form-control login-field">
		              		<i class="fa fa-envelope login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="registrationpassword" placeholder="Enter Your Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		            	  	<input type="password" id="registrationconfirmpassword" placeholder="Confirm Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		
		            	<a  class="btn btn-success modal-login-btn" onclick="return checkRegistrationParameters()">Register</a>
		          
	        		</div>
	        	
	        		
	        	</div>																												
        		<div class="clearfix"></div>
        	
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>	
	
	<!------------------->
	
	






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




</body>


</html>