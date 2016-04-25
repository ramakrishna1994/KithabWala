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



  <nav class="navbar  navbar-fixed-top" style="background:black">
  <div class="container-fluid">

    <div class="navbar-header">
		<img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="50" height="50" style="padding-top:1%">
      
    </div>
     <ul class="nav navbar-nav">
	<a class="navbar-brand" href="#"> <font color="orange">&nbsp; KithabWala</font></a>
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
					.'		  <li><a href="#">Account Settings</a></li>'
					.'		  <li><a href="phpFiles/logout.php">LogOut</a></li>'
					.'		</ul>'
					.'	  </div>'
					.'	</div></li>';
				
			?>
      
    </ul>
	
  </div>
</nav>


</head>
<body>

<div class="container-fluid">
  
  <div class="row" style="margin-top:5%">
    
	<div class="col-sm-1.5" style="position:fixed">
		<ul class="nav nav-pills nav-stacked">
			<li><a class="page-scroll sidebar-color" href="#products">Products</a></li>
			<li><a class="page-scroll sidebar-color" href="#productReach">Product Reach</a></li>
			<li><a class="page-scroll sidebar-color" href="#testimonials">Testimonials</a></li>
			
		</ul>
	</div>
	<div class="col-sm-10.5" style="margin-left:14%">
	
		<section class=" row custom" id="products">
			<h3><b>Products</b></h3>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</section>
		
		
	
		
		
		<section class="row custom" id="productReach">
		<h3><b>Product Reach</b></h3>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</section>
		
		
		
		
		
		<section class="row custom" id="testimonials">
		<h3><b>Testimonials</b></h3>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</section>
		
		
		
		
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
        
		<div class="row">
			
			<div class="form-horizontal" role="form">
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="loginstatus"></p>
    				</div>
  				</div>
				
				<div class="form-group" id="loginEmailDivision">
    				<label class="control-label col-sm-3" for="loginemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="loginemailid" placeholder="Email address" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="" autofocus>
      					<span class="" id="loginEmailErrorSpan"></span>
    				</div>
  				</div>
  				
  				
  				<div class="form-group" id="loginPasswordDivision">
    				<label class="control-label col-sm-3" for="loginpassword"><span class = "glyphicon glyphicon-lock"></span></label>
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
        
		<div class="row">
			
			
			
			<div class="form-horizontal" role="form">
			
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="registrationstatus"></p>
    				</div>
  				</div>
				
				<div class="form-group" id="registrationFirstNameDivision">
    				<label class="control-label col-sm-3" for="registrationfirstname"><span class = "glyphicon glyphicon-user"></span></label>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationfirstname" placeholder="Firstname" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationFirstNameErrorSpan"></span>
    				</div>
  				</div>
				
				<div class="form-group" id="registrationLastNameDivision">
    				<label class="control-label col-sm-3" for="registrationlastname"><span class = "glyphicon glyphicon-user"></span></label>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationlastname" placeholder="Enter Lastname" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationLastNameErrorSpan"></span>
    				</div>
  				</div>
  				  				
  				
  				<div class="form-group" id="registrationEmailDivision">
    				<label class="control-label col-sm-3" for="registrationemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
    				<div class="col-sm-7">
      					<input type="text" class="form-control" id="registrationemailid" placeholder="Email address" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationEmailErrorSpan"></span>
    				</div>
  				</div>
  				
  				
  				<div class="form-group" id="registrationPasswordDivision">
    				<label class="control-label col-sm-3" for="registrationpassword"><span class = "glyphicon glyphicon-lock"></span></label>
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="registrationpassword" placeholder="Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="registrationPasswordErrorSpan"></span>
    				</div>
    			</div>
    			
    			
    			<div class="form-group" id="registrationConfirmPasswordDivision">
    				<label class="control-label col-sm-3" for="registrationconfirmpassword"><span class = "glyphicon glyphicon-lock"></span></label>
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
			
			
			
			<div class="form-horizontal" role="form">
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="verificationstatus">We have sent you a verification code to your Email Address</p>
    				</div>
  				</div>
				
			
				<div class="form-group" id="verificationCodeDivision">
    				<label class="control-label col-sm-3" for="verificationcode"><span class = "glyphicon glyphicon-lock"></span></label>
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
			
			
			
			<div class="form-horizontal" role="form">
			
				<div class="form-group" >
    				<label class="control-label col-sm-3" ></label>
    				<div class="col-sm-7" style="text-align:center" >
      					<p id="resetpasswordstatus"></p>
    				</div>
  				</div>
				
			
				<div class="form-group" id="resetEmailDivision">
    				<label class="control-label col-sm-3" for="resetemailid"><span class = "glyphicon glyphicon-envelope"></span></label>
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









<script src="js/jquery.js"></script>

   
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	<script src="customjs/loginAndRegistration.js"></script>
	<script src="customjs/forgotPassword.js"></script>
	
	
	
</body
 
</html>
