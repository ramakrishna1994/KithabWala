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
  @media (max-width: 767px) /* @grid-float-breakpoint -1 */
{
    .navbar-fixed-top
    {
    position: relative;
    top: auto;
    }
	
	.section-mobile{
		display:none;
	}
}


  section{
	  text-align: justify;
    text-justify: inter-word;
	
	font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	font-size:17px;
	
  }
.custom
{
	padding-top:6%;
}

.header-color
{
	color:white;
}

.sidebar-color
{
	color:grey;
}
    .strike {
        display: block;
        text-align: center;
        overflow: hidden;
        white-space: nowrap;
    
    
    }

    .strike > span {
        position: relative;
        display: inline-block;
		font-size: 20px;
    }
	
    .strike > span:before,
    .strike > span:after {
        content: "";
        position: absolute;
        top: 58%;
        width: 9999px;
        /* Here is the modification */
        border-top: 1px solid black;
		
    }

    .strike > span:before {
        right: 100%;
        margin-right: 15px;
    }

    .strike > span:after {
        left: 100%;
        margin-left: 15px;
    }


</style>



	<nav class="navbar navbar-default navbar-fixed-top"  id="rk" style="background-color:grey">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="height:70px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-top:6%">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <div class="col-sm-12">
		<a style="align:left"><img align="left" src="images/logo.png" class="img-circle" alt="Cinque Terre" width="70" height="70" ></a>
		<a href="#" style="align:left" > <img style="margin-top:12%" align="left" src="images/KithabwalaHeader.png" width="100" height="30"></a>
		</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="margin-top:1%">
      <ul class="nav navbar-nav" >
		  <li><a class="header-color"  href="#"><font size="3px" color="#ffcc04">About Us</font></a></li> 
		  <li><a class="header-color"  href="#"><font size="3px" color="#ffcc04">Products</font></a></li>
		  <li><a class="header-color"  href="#"><font size="3px" color="#ffcc04">Advertise</font></a></li>
		  <li><a class="header-color"  href="#"><font size="3px" color="#ffcc04">Creative Corner</font></a></li> 
		  <li><a class="header-color"  href="#"><font size="3px" color="#ffcc04">Contact Us</font></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right" >
        <?php 
			if(!isset($_SESSION['emailid']))
			{
						echo '<li><a class="header-color"  href="#" data-toggle="modal" data-target="#registrationModal"><font size="2px" color="#ffcc04"><span class="glyphicon glyphicon-user" ></span>&nbsp;&nbsp;Sign Up</font></a></li>'
								.'<li><a class="header-color" href="#" data-toggle="modal" data-target="#loginModal"><font size="2px" color="#ffcc04"><span class="glyphicon glyphicon-log-in" ></span>&nbsp;&nbsp;Login</font></a></li>';
			}
			else
			{
				$content =  '<li><a  style="cursor:pointer" data-toggle="dropdown"><font color="orange"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					
					
					$content .= '<li><a class="header-color" href="phpFiles/logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							.'	  </div>'
							.'	</div></li>';
							echo $content;
			}
							
			?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</head>
<body >

<div class="container">
  
  <div class="row" >
    
	<div class="collapse navbar-collapse" >
	<div class="col-sm-1.5" style="position:fixed;margin-top:7%;" id="sidebar">
		<ul class="nav nav-pills nav-stacked">
			<li><a class="page-scroll sidebar-color" href="#about">About Us</a></li>
			<li><a class="page-scroll sidebar-color" href="#mission">Mission/Vision</a></li>
			<li><a class="page-scroll sidebar-color" href="#team">Team</a></li>
			<li><a class="page-scroll sidebar-color" href="#storeLoc">Corporate Office Location</a></li>
			<li><a class="page-scroll sidebar-color" href="#careers">Careers</a></li>
		</ul>
	</div>
	</div>
	<div class="col-sm-10" style="margin-left:16%">
	
		<section  class=" row custom text-font" id="about">
			<div class="strike row">
				<span><h3><b><font color="grey">ABOUT US urf HAMARI PEHCHAN...</font></b></h3></span>
			</div>
			<div class="row">
			<i>Kithabwala</i>, from the house of <i>Samast Enterprises India Pvt. Ltd.</i>, offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.<br><br>
            We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!
			</div>
            <!---Kithabwala gives a transformational makeover to the rustic notebook, making it MORE than just a place to write! <br><br>--->
            <!---Everybody wants MORE! MORE out of everything! Kithabwala doesn't sell books, we sell something more.---> 
		</section>
		
		
	<!----------------------------- For Web Version--------------------------->
		
		<div class="row" style="background color:black"></div>
		
		<section class="row custom " id="mission">
		<div class="strike">
				<span><h3><b><font color="grey">SOME DEEP THOUGHTS!</font></b></h3></span>
			<br>
                        <img src="images/vision.png" width="50" height="50">
                        <br>
			<b>VISION</b>
			<br>
			<i>At Kithabwala, our vision is to create a better experience around a notebook while ensuring accessibility to all. </i>
			<br>
			<img src="images/mission.png" width="50" height="50">
			<br>
            <b>MISSION</b>
			<br>
            <i>A notebook must not just be a scribbling pad. It is an essential part of a student's life. Kithabwala shall work closely to bring a notebook close to the user.</i>
			<br>
		</div>
		
		</section>

		
		<div class="row" style="background color:black"></div>
			
		<section class="row custom" id="team">
		<div class="strike">
				<span><h3><b><font color="grey">'KITHABWALE' ya TEAM KITHABWALA</font></b></h3></span>
			</div>
		<br>
		<div class="row">
		<div class="col-sm-4">
			<img src="images/abhilash.png" alt="Abhilash Gali" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-8">  
			<h3><i><b>Abhilash Gali - Founder</b> </i></h3>
			<p>Abhilash started his career by envisioning a market demand for customized merchandise and founded Merakii Enterprises to meet this demand. While handling a project which dealt in customized notebooks, the buzz around it and the pace with which the products sold out transitioned Abhilash into an assessing mode where he evaluated the market potential for the same. The project eventually inspired Abhilash to launch a brand and re-think the way a Notebook should be! After multiple prototypes and numerous brainstorming sessions Abhilash was able to transfer his imagination of the notebook into reality!</p>
		</div>
	    </div>
		<br>
		<br>
		<div class="row " style="border:none">
		<div class="col-sm-8">  
			<h3><i><b>Sahil Kaul</b></i></h3>
			<p>Sahil is an ex Deloitte consultant, dabbled in start-ups, passionate writer, avid trekker and is someone who loves to improve efficiency in every process. Sahil loves to ideate and improve an idea. He is a good conversationalist who would one day want Shawarma to be the currency of this world.</p>
		</div>
		<div class="col-sm-4" style="padding-left:10%">
			<img src="images/sahilkaul.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
	    </div>
		<br>
		<br>
		<div class="row " style="border:1px">
		<div class="col-sm-4">
			<img src="images/himanshu.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-8">  
			<h3><i><b>Himanshu Joshi</b></i> </h3>
			<p>Himanshu is an incisive professional with a passion for working in a fast growing environment. An engineer by education and a consultant by heart, Himanshu is currently working towards developing the business and formulating the strategies at Kithabwala. Himanshu carries an experience of working for some of the top Fortune 100 Companies and is working at a Big 4 Professional Services Firm in parallel.</p>
		</div>
	    </div>
		<br>
		<br>
		<div class="row" style="border:none">
		<div class="col-sm-8">  
			<h3><i><b>Thanmay Krishna</b></i> </h3>
			<p>Critically negative in his approach, Thanmay Krishna works backwards and always thinks as to why an idea won't work. A mechanical engineering graduate, he handles the administration of the company and takes care of the back end support. A foodie by passion, he is a one stop shop for food and beverages.</p>
		</div>
		<div class="col-sm-4" style="padding-left:10%">
			<img  src="images/thanmay.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
	    </div>
		<br>
		<br>
		<div class="row " style="border:1px">
		<div class="col-sm-4">
			<img src="images/raviteja.png" alt="Cinque Terre" height=250px width=250px style="padding-top:1%">
		</div>
		<div class="col-sm-8">  
			<h3><i><b>Ravi Teja</b></i></h3>
			<p>A passionate hard worker, Ravi loves to follow a process and stick to the plan. Spent his childhood studying in different parts of the country, he brings a different perspective to the table. A people's person who likes to handle multiple responsibilities, Ravi can be a party pooper owing to his teetotalism habits.</p>
		</div>
	    </div>
		<br>
		
		</section>
		
		
		
		
		
		<!---------------------------------------------------------------------------->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="row" style="background color:black"></div>
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
		<section class="row custom" id="storeLoc" >
		<div class="strike">
				<span><h3><b><font color="grey">CORPORATE OFFICE LOCATION</font></b></h3></span>
			</div>
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
			</script>
			<div class="col-sm-10 col-sm-offset-1" style="margin-top:3%">
				<div id='gmap_canvas' style='height:250px;width:100%;'>
				</div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div>
			<script type='text/javascript'>
				function init_map()
					{
						var myOptions = 
							{
								zoom:10,
								center:new google.maps.LatLng(17.436693740943927,78.44132646871091),
								mapTypeId: google.maps.MapTypeId.ROADMAP
							};
						map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
						marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.436693740943927,78.44132646871091)});
						infowindow = new google.maps.InfoWindow
							({
								content:'<strong>KITHABWALA CORPORAT OFFICE LOCATION</strong><br>India<br>'
							});
						google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
						infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
		</section>
		
		<div class="row" style="background color:black"></div>
		
		<section class="row custom" id="careers" style=";margin-bottom:2%">
			<div class="strike">
				<span><h3><b><font color="grey">WORK WITH US</font></b></h3></span>
			</div>
			At Kithabwala you will have the opportunity to work with a group of highly talented individuals and learn the specifics in a product based start-up. We offer Competitive Compensation and a Performance linked Bonus. The icing on the cake however is a chance to be a part of the core team for long term benefits. If you want to be a part of our journey, reach out to us!
			<br>
			<br>
            <b>Email Id: contact@kithabwala.com</b>
			<br>
		</section>
		
		
	</div>
	
  </div>
  
 <div class="row" style="background-color:grey;color:orange;text-align:center;padding:3%;z-index:10">
 <div class="row">
  <div class="col-sm-4">
		<h4><b><font color="#ffcc04">Company</font></b></h4>
		<div class="row" style="border-top:1px solid black;margin:3%"></div>
		<p><a href="#"><font color="black" size="2px">About Us</font></a></p> 
		<p><a href="#"><font color="black">Team</font></a></p>
		<p><a href="#"><font color="black">Carrer at KithabWala</font></a></p>
		
  </div>
  
  <div class="col-sm-4">
	    <h4><b><font color="#ffcc04">Advertise</font></b></h4>
		<div class="row" style="border-top:1px solid black;margin:3%"></div>
		<p><a href="#">Advertise with us</a></p>
		<p><a href="#">Store Locations</a></p>		
  </div>
  
  <div class="col-sm-4">
       <h4><b><font color="#ffcc04">Reach out</font></b></h4>
	   	<div class="row" style="border-top:1px solid black;margin:3%"></div>
	   <p><a href="#"><font color="black">Contact Us</font></a></p>
  </div>
  
</div>
<div class="row " style="margin-top:2%">
<div class="col-sm-4 col-sm-offset-4">
	
	<div class="col-sm-2 col-sm-offset-3">
		<a href="https://www.facebook.com/Kithabwala-156605224697747/?fref=ts"><img src="images/facebook.png"></a>
	</div>
	<div class="col-sm-2">
		<a href="https://twitter.com"><img src="images/twitter_alt.png"></a>
	</div>
		<div class="col-sm-2">
		<a href="https://www.linkedin.com/company/kithabwala?trk=ppro_cprof"><img src="images/linkedin.png"></a>
	</div>
	
</div>
</div>


<div class="row " style="margin-top:3%">
<div class="col-sm-4 col-sm-offset-4" style="text-align:center">
	<font color="#ffcc04">&copy; 2016 All Rights reserved to Kithabwala.com</font>
</div>
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
		
		if(screen.width < 767)
			document.getElementById('rk').className = 'navbar navbar-inverse navbar-static-top';
		else
			document.getElementById('rk').className = 'navbar navbar-inverse navbar-fixed-top';
		
		
		$.fn.followTo = function ( pos ) {
    var $this = this,
        $window = $(window);
    
    $window.scroll(function(e){
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 0
            });
        }
    });
};

$('#sidebar').followTo(2400);
	</script>
 
 
 
</body
 
</html>
