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
  
  <script>
	alert(screen.availWidth );
  </script>
  <style>
  @media (max-width: 767px) /* @grid-float-breakpoint -1 */
{
    .navbar-fixed-top
    {
    position: relative;
    top: auto;
    }
}
  section{
	  text-align: justify;
    text-justify: inter-word;
	
	font-style: italic;
	font-size:17px;
	
  }
.custom
{
	padding-top:4%;
}

.header-color
{
	color:white;
}

.sidebar-color
{
	color:black;
}
body {
    background-image: url("images/bg.jpg");
    background-color: #cccccc;
}

text-font { font-style: italic;
   
}
</style>



	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a style="align:left"><img align="left" src="images/logo.png" class="img-circle" alt="Cinque Terre" width="50" height="50" ></a>
		<a class="navbar-brand" href="#"> <font color="orange">&nbsp; KithabWala</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		  <li><a class="header-color" href="aboutus.php">About Us</a></li> 
		  <li><a class="header-color" href="products.php">Products</a></li>
		  <li><a class="header-color" href="advertise.php">Advertise</a></li>
		  <li><a class="header-color" href="creativecorner.php">Creative Corner</a></li> 
		  <li><a class="header-color" href="contactus.php">Contact Us</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right" style="background-color:black">
        <?php 
			if(!isset($_SESSION['emailid']))
			{
						echo '<li><a class="header-color"  href="#" data-toggle="modal" data-target="#registrationModal"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>'
								.'<li><a class="header-color" href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>';
			}
			else
			{
				$content =  '<li ><a  style="cursor:pointer" data-toggle="dropdown"><font color="orange"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					
					
					$content .= '<li><a href="phpFiles/logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							.'	  </div>'
							.'	</div></li>';
			}
							echo $content;
			?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</head>
<body background-image: url("bg.jpg")>

<div class="container-fluid">
  
  <div class="row" >
    
	<div class="collapse navbar-collapse" >
	<div class="col-sm-1.5" style="position:fixed;margin-top:5%">
		<ul class="nav nav-pills nav-stacked">
			<li><a class="page-scroll sidebar-color" href="#about">About Us</a></li>
			<li><a class="page-scroll sidebar-color" href="#mission">Mission/Vision</a></li>
			<li><a class="page-scroll sidebar-color" href="#team">Team</a></li>
			<li><a class="page-scroll sidebar-color" href="#storeLoc">Store Location</a></li>
			<li><a class="page-scroll sidebar-color" href="#careers">Careers</a></li>
		</ul>
	</div>
	</div>
	<div class="col-sm-10 " style="margin-left:12%;margin-right:3%">
	
		<section  class=" row custom text-font" id="about">
			<h3><b><font color="purple">About Us</font></b></h3>
			<br>
			Kithabwala, from the house of Samast Enterprises India Pvt Ltd, offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.<br><br>
            Kithabwala gives a transformational makeover to the rustic notebook, making it MORE than just a place to write! <br><br>
            Everybody wants MORE! MORE out of everything! Kithabwala doesn't sell books, we sell something more. 
		</section>
		
		
	
		
		
		<section class="row custom" id="mission">
		<h3><b><font color="purple">Mission/Vision</font></b></h3>
		<br>
			<b>VISION</b>
			<br>
            At Kithabwala, our vision is to create a better experience around a notebook while ensuring accessibiility to all. 
			<br>
			<br>
            <b>MISSION</b>
			<br>
            A notebook must not just be a scribbling pad. It is an essential part of a student's life. Kithabwala shall work closely to bring a notebook close to the user.
			<br>
		</section>

		<section class="row" id="team">
		<h3><b>Team KithabWala</b></h3>
		<br>
		<h3>Abhilash Gali - Founder </h3>
		<div class="row" style="border:1px">
		<div class="col-sm-4">
			<img src="images/abhilash.png" alt="Abhilash Gali" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-6">  
			<br>
			<p>Found his stepping stone at CBIT by launching customized college merchandise, envisioned a market demand for quality products to found a corporate gifting, custom merchandise company, Merakii. In one such project, customized notebooks created a buzz and sold out before the clock hands touched other. This inspired him to launch a notebook brand with a revolutionized book.  After multiple projects, achieved entrepreneurial wisdom and earned.</p>
		</div>
	    </div>
		<br>
		<br>
		<h3>Sahil Kaul</h3>
		<div class="row" style="border:none">
		<div class="col-sm-6">  
			<br>
			<p>Sahil is from a Deloitte analytics background, dabbled in start-ups, passionate writer, avid trekker and is someone who loves to improve efficiency in every process.
            Loves to ideate and improve an idea. Good conversationalist who would one day want Shawarma to be the currency of this world.</p>
		</div>
		<div class="col-sm-4">
			<img src="images/sahilkaul.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
	    </div>
		<br>
		<br>
		<h3>Himanshu Joshi </h3>
		<div class="row" style="border:1px">
		<div class="col-sm-4">
			<img src="images/himanshu.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-6">  
			<br>
			<p>Himanshu is an incisive professional with a passion towards working in a fast growing environment. An engineer by education and a consultant by heart, Himanshu is currently working towards developing the business and formulating the strategies at Kithabwala. Himanshu carries an experience of working for some of the top Fortune 100 Companies and is working at a Big 4 Professional Services Firm in parallel.</p>
		</div>
	    </div>
		<br>
		<br>
		<h3>Thanmay Krishna </h3>
		<div class="row" style="border:none">
		<div class="col-sm-6">  
			<br>
			<p>Critically negative in his approach, Thanmay Krishna works backwards and always thinks as to why an idea won't work. A mechanical engineering graduate, he handles the administration of the company and takes care of the back end support. A foodie by passion, he is a one stop shop for food and beverages.</p>
		</div>
		<div class="col-sm-4">
			<img src="images/thanmay.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
	    </div>
		<br>
		<br>
		<h3> Ravi Teja</h3>
		<div class="row" style="border:1px">
		
		<div class="col-sm-4">
			<img src="images/raviteja.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-6">  
			<br>
			<p>A passionate hard worker, Ravi loves to follow a process and stick to the plan. Spent his childhood studying in different parts of the country, he brings a different perspective to the table. A people's person who likes to handle multiple responsibilities, Ravi can be a party pooper owing to his teetotalism habits.</p>
		</div>
	    </div>
		<br>
		</section>
		
		<section class="row" id="storeLoc">
		<h3><b><font color="purple">Store Location</font></b></h3>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</section>
		
		<section class="row" id="careers">
		<h3><b><font color="purple">Careers at KithabWala</font></b></h3>
			At Kithabwala you will have the opportunity to work with a group of highly talented individuals and learn the specifics in a product based start-up. We offer Competitive Compensation and a Performance linked Bonus. The icing on the cake is however a chance to be a part of the core team for long term benefits. If you want to be a part of our journey, reach out to us!
			<br>
			<br>
            <b>Email Id: contact@kithabwala.com</b>
			<br>
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
 
 
 
</body
 
</html>
