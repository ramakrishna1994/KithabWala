<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kithabwala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  
  <style>
.custom
{
	padding:4%;
}

.header-color
{
	color:white;
}

.sidebar-color
{
	color:black;
}
</style>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.subscribe.js"></script>
<script type="text/javascript" src="js/jquery.contact.js"></script>
<script type="text/javascript" src="js/custom.js"></script>




  
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
		<a style="align:left"><img align="left" src="images/logo.png" class="img-circle" alt="Cinque Terre" width="50" height="50" ></a>
		<a class="navbar-brand" href="#"> <font color="orange">&nbsp; KithabWala</font></a>
	  
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a class="header-color" href="aboutus.php">About Us</a></li> 
		  <li><a class="header-color" href="products.php">Products</a></li>
		  <li><a class="header-color" href="advertise.php">Advertise</a></li>
		  <li><a class="header-color" href="creativecorner.php">Creative Corner</a></li> 
		  <li><a class="header-color" href="contactus.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
			if(!isset($_SESSION['emailid']))
			{
						echo '<li><a class="header-color"  href="#" data-toggle="modal" data-target="#registrationModal"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>'
								.'<li><a class="header-color" href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>';
			}
			else
				echo '<li ><a  style="cursor:pointer" data-toggle="dropdown">Welcome '.$_SESSION['firstname'].' '.$_SESSION['lastname']
					.'		<span class="caret"></span></a>'
					.'		<ul class="dropdown-menu">'
					.'		  <li><a href="dashboard.php">Dashboard</a></li>'
					.'		  <li><a href="accountsettings.php">Account Settings</a></li>'
					.'		  <li><a href="phpFiles/logout.php">LogOut</a></li>'
					.'		</ul>'
					.'	  </div>'
					.'	</div></li>';
				
			?>
      </ul>
    </div>
  </div>
</nav>


</head>
<body>


  
  

	 
	<div id="wrapper">	
		<div id="book">		
			<div id="ribbon" class="contact">click me to reveal the contact form</div>		
			<div class="top-page">  </div>
			
			<div class="content-page">
				<div class="top-spiral"></div>
				<div class="bottom-spiral"></div>
				
				<div id="cform">
					<div class="row"></div>
					<h3>Get in touch with us:</h3>
					<div class="form-wrapper in-touch">
						<div id="message"></div>
						<form method="post" action="php/contact.php" name="contactform" id="contactform">
							<input type="text" name="name" placeholder="Name" id="name" />
							<input type="text" name="email" placeholder="Email" id="email" />
							<input type="text" name="phone" placeholder="Phone" id="phone" />
							<input type="text" name="subject" placeholder="Subject" id="subject" />
							<textarea placeholder="Message" name="comments" id="comments"></textarea>
							<div id="captcha">
								<span>3+1=</span>
								<input type="text" name="verify" id="verify" />
							</div><!--end verify-->

<!-- You can stylize the submit button by changing its color. To do this, replace the 'orange' from class="orange" with: yellow, red, purple, green, blue, darkblue, white and black.-->							
							<input type="submit" name="send" value="SEND" id="submit" class="orange" /> 
						</form>
					</div><!--end form-wrapper-->
				</div><!--end cform-->
			
				<div id="home">
					<div class="row"></div>
					<div class="row"></div>
					
					<h2>We're currently under construction!</h2>					
					<div class="row"></div>
					<div class="row"></div>
					
					<h3>We`re working hard and believe we`ll launch the website soon</h3>
	
					<div class="row"></div>
					<div class="form-wrapper email-list">
						<div id="mesaj"></div>
						<form id="subscribe" method="post" action="php/subscribe.php" name="subscribe">
							<input type="text" id="semail" name="YourEmail" placeholder="Subscribe to our email list" />

<!-- You can stylize the submit button by changing its color. To do this, replace the 'orange' from class="orange" with: yellow, red, purple, green, blue, darkblue, white and black.-->								
							<input type="submit" id="ssubmit" name="subscribe" value="SUBSCRIBE" class="orange" />
						</form>
					</div><!--end form-wrapper-->
				</div><!--end home-->
				
			</div><!--end content-page-->
			
			<div class="bottom-page">
				<ul class="social">
				<!-- Change the # with the link to your social page. -->
					<li><a class="facebook tooltip" href="#" title="Facebook"></a></li>
					<li><a class="twitter tooltip" href="#" title="Twitter"></a></li>
					<li><a class="youtube tooltip" href="#" title="YouTube"></a></li>
					<li><a class="skype tooltip" href="#" title="Skype"></a></li>
					
<!-- You can add to social list buttons for digg, delicious, vimeo and dropbox. Just delete the brackets from below -->
			<!--	<li><a class="digg tooltip" href="#" title="Digg"></a></li>
					<li><a class="delicious tooltip" href="#" title="Delicious"></a></li>
					<li><a class="vimeo tooltip" href="#" title="Vimeo"></a></li>
					<li><a class="dropbox tooltip" href="#" title="DropBox"></a></li>		
			-->
				</ul>
			</div><!--end bottom-page-->
		</div><!--end book-->
		
	</div><!--end wrapper-->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>	<!-- placeholder html5 tag support for IE and Old Browsers -->
  

  </div>	
  </div>
  <div class="row" style="background:black;color:white;text-align:center;padding:3%">
  <div class="col-sm-4">
		<h4><b>Company</b></h4>
		<p><a href="aboutUs.html">About Us</a></p> 
	    <p><a href="#">Team</a></p>
		<p><a href="#">Carrer at KithabWala</a></p>
  </div>
  
  <div class="col-sm-4">
	    <h4><b>Advertise</b></h4>
		<p><a href="#">Advertise with us</a></p>
		<p><a href="#">Store Locations</a></p>		
  </div>
  
  <div class="col-sm-4">
       <h4><b>Reach out</b></h4>
	   <p><a href="contactUs.html">Contact Us</a></p>
  </div>
</div>







<!-- Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center><font color="orange" size="5px">Login</font></center>
      </div>
      <div class="modal-body">
          <div class="col-md-12" >
		
			
			<div class="form-horizontal" role="form">
			
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
    				
      					<center><a  style="cursor:pointer" data-toggle="modal" onclick="toggle()"><font color="purple">Forgot Password ?</font></a></center>
    				
  				</div>
    			
				<div class="form-group">
					
					<center>
					<a  style="cursor:pointer" data-toggle="modal" onclick="toggleModals()"> New User? Click here to Register</a>
					</center>
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






<!-- registration Modal -->
<div id="registrationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	
      <div class="modal-header">
        <center><font color="orange" size="5px">Registration</font></center>
      </div>
      <div class="modal-body">
        <div class="col-md-12" >
		
			
			
			
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>












<!-- Verification Modal -->
<div id="verificationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <center><font color="orange" size="5px">Verification Code</font></center>
      </div>
      <div class="modal-body">
        
		
			
			<div class="row">
			<div class="col-sm-12">
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
		</div>
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
        
		
			
			<div class="row">
			<div class="col-md-12">
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
			</div>
		</div>
      
      
    </div>

  </div>
</div>









<script src="js/jquery.js"></script>

   
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	<script src="customjs/loginAndRegistration.js"></script>
	<script src="customjs/forgotPassword.js"></script>
	
	 <script>
	//$('#verificationModal').modal('toggle');
 </script>



</body>

</html>
