<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
     
  
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js"></script>

 
  
   <style type="text/css">
    #slickbox {
	position:fixed;
    border: 1px solid #black;
    display: none; 
}

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
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height:400px;
  }
  
  body{
	 font-family: "PT Sans", sans-serif;
	 background-color:grey;
  }
  
  .abc{
	  color:#ffcc04;
	  font-size:110%;
  }

	.abc:hover
	{
		color:yellow;
		
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
  
  <script>
	
	$(window).load(function(){
// hides the slickbox as soon as the DOM is ready (a little sooner that page load)
$('#slickbox').hide();
$('#togglebutton').click(function() {
    $('#slickbox').toggle('slide', 400);
    return false;
});
});//]]> 
  </script>
</head>
<body>


<div style="width:15%;border:1px solid black;position:fixed" >
<button onclick="slidesidebar(0)" id="togglebutton">BCC</button>
	<div id="slickbox">
	<ul class="list-group" >
		<a class="page-scroll sidebar-color list-group-item" href="#about">About Us</a>
		<a class="page-scroll sidebar-color list-group-item" href="#mission">Mission/Vision</a>
		<a class="page-scroll sidebar-color list-group-item" href="#team">Team</a>
		<a class="page-scroll sidebar-color list-group-item" href="#storeLoc">Corporate Office Location</a>
		<a class="page-scroll sidebar-color list-group-item" href="#careers">Careers</a>
	</ul>
	</div>
</div>



<nav class="navbar navbar-inverse navbar-fixed-top" >

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a  href="index.php"><img style="margin:3%" src="images/logo.png" class="img-circle" alt="Cinque Terre" width="50" height="50" ></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
			<li><a href="#"> </a></li>
			<li><a href="#"> </a></li>
			<li><a href="aboutus.php"><p class="abc">ABOUT US</p></a></li> 
			<li><a href="products.php"><p class="abc">PRODUCTS</p></a></li>
			<li><a href="advertise.php"><p class="abc">ADVERTISE</p></a></li>
			<li><a href="creativecorner.php"><p class="abc">CREATIVE CORNER</p></a></li> 
			<li><a href="contactus.php"><p class="abc">CONTACT US</p></a></li>	
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         <?php 
			if(!isset($_SESSION['emailid']))
			{
						echo '<li><a href="#" data-toggle="modal" data-target="#registrationModal"><p class="abc"><span class="glyphicon glyphicon-user" ></span>&nbsp;&nbsp;Sign Up</p></a></li>'
								.'<li><a href="#" data-toggle="modal" data-target="#loginModal"><p class="abc"><span class="glyphicon glyphicon-log-in" ></span>&nbsp;&nbsp;Login</p></a></li>'
								.'<li>&nbsp;&nbsp;</li>'
								.'<li>&nbsp;&nbsp;</li>';
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
  <!-- /.container-fluid -->
</nav>
</div>




<div class="container" style="margin-top:5%;text-align:justify;background-color:white" id="about">
			<div class="row">
			<div class="col-lg-10 col-lg-offset-1 strike" style="padding:1%;text-align:center">
					<span><h3><b><font color="grey">ABOUT US urf HAMARI PEHCHAN...</font></b></h3></span>
			</div>
			</div>
			<div class="col-lg-10 col-lg-offset-1">
			<i>Kithabwala</i>, from the house of <i>Samast Enterprises India Pvt. Ltd.</i>, offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.<br><br>
            We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!
			</div>
</div>

<div class="container" style="background-color:white" id="mission">
	
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1 strike" style="padding:1%;text-align:center">
				<span><h3><b><font color="grey">SOME DEEP THOUGHTS!</font></b></h3></span>
		</div>
		</div>
		<div class="row" style="padding:1%;text-align:center">
		<div class="col-lg-10 col-lg-offset-1" >
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
		</div>
               
		
</div>

<div class="container" style="background-color:white">
	<div class="row">
		<div class="strike col-lg-10 col-lg-offset-1">
				<span><h3><b><font color="grey">'KITHABWALE' ya TEAM KITHABWALA</font></b></h3></span>
			</div>
			</div>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		<div class="col-lg-4 " style="padding:1%;text-align:center">
			<img class="img-circle" src="images/abhilash.png" width="200" height="200">
			<h3><i><b>Abhilash Gali - Founder</b> </i></h3>
			<p style="margin-top:5%;text-align:justify">Abhilash started his career by envisioning a market demand for customized merchandise and founded Merakii Enterprises 
			to meet this demand. While handling a project which dealt in customized notebooks, the buzz around it and the pace with 
			which the products sold out transitioned Abhilash into an assessing mode where he evaluated the market potential for the same. 
			The project eventually inspired Abhilash to launch a brand and re-think the way a Notebook should be! After multiple prototypes and 
			numerous brainstorming sessions Abhilash was able to transfer his imagination of the notebook into reality!</p>
		</div>
		<div class="col-lg-4" style="padding:1%;text-align:center">
			<img class="img-circle" src="images/sahilkaul.png" width="200" height="200">
			<h3><i><b>Sahil Kaul</b></i></h3>
			<p style="margin-top:5%;text-align:justify">Sahil is an ex Deloitte consultant, dabbled in start-ups, passionate writer, avid trekker and is someone who loves to improve efficiency in every process. Sahil loves to ideate and improve an idea. He is a good conversationalist who would one day want Shawarma to be the currency of this world.</p>
		</div>
		<div class="col-lg-4" style="padding:1%;text-align:center">
			<img class="img-circle" src="images/himanshu.png" width="200" height="200">
			<h3><i><b>Himanshu Joshi</b></i> </h3>
			<p style="margin-top:5%;text-align:justify">Himanshu is an incisive professional with a passion for working in a fast growing environment. An engineer by education and a consultant by heart, Himanshu is currently working towards developing the business and formulating the strategies at Kithabwala. Himanshu carries an experience of working for some of the top Fortune 100 Companies and is working at a Big 4 Professional Services Firm in parallel.</p>
		</div>
		</div>
		
	</div>
	
	<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="col-lg-4 " style="padding:1%;text-align:center">
			<img class="img-circle" src="images/thanmay.png" width="200" height="200">
			<h3><i><b>Thanmay Krishna</b></i> </h3>
			<p style="margin-top:5%;text-align:justify">Critically negative in his approach, Thanmay Krishna works backwards and always thinks as to why an idea won't work. A mechanical engineering graduate, he handles the administration of the company and takes care of the back end support. A foodie by passion, he is a one stop shop for food and beverages.</p>
		</div>
		<div class="col-lg-4" style="padding:1%;text-align:center">
			<img class="img-circle" src="images/raviteja.png" width="200" height="200">
			<h3><i><b>Ravi Teja</b></i></h3>
			<p style="margin-top:5%;text-align:justify">A passionate hard worker, Ravi loves to follow a process and stick to the plan. Spent his childhood studying in different parts of the country, he brings a different perspective to the table. A people's person who likes to handle multiple responsibilities, Ravi can be a party pooper owing to his teetotalism habits.</p>
		</div>
	</div>
	</div>
</div>



<div class="container" style="background-color:white">
	
	<div class="row">
		<div class="strike col-lg-10 col-lg-offset-1">
				<span><h3><b><font color="grey">CORPORATE OFFICE LOCATION</font></b></h3></span>
			</div>
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
               
		
</div>



<div class="container" style="background-color:white;padding-bottom:2%;margin-bottom:1%">
			<div class="row">
		<div class="strike col-lg-10 col-lg-offset-1">
			<span><h3><b><font color="grey">WORK WITH US</font></b></h3></span>
			</div>
			</div>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			At Kithabwala you will have the opportunity to work with a group of highly talented individuals and learn the specifics in a product based start-up. We offer Competitive Compensation and a Performance linked Bonus. The icing on the cake however is a chance to be a part of the core team for long term benefits. If you want to be a part of our journey, reach out to us!
			<br>
			<br>
            <b>Email Id: contact@kithabwala.com</b>
			<br>
			</div>
			</div>
</div>



<div class="container-fluid" >

		<div class="row" style="background-color:black;text-align:center;padding:3%;z-index:10">
		 <div class="row">
		  <div class="col-sm-4">
				<h4><b><font color="#ffcc04">Company</font></b></h4>
				<div class="row" style="border-top:1px solid black;margin:3%"></div>
				<p><a href="#"><font color="white">About Us</font></a></p> 
				<p><a href="#"><font color="white">Team</font></a></p>
				<p><a href="#"><font color="white">Carrer at KithabWala</font></a></p>
				
		  </div>
		  
		  <div class="col-sm-4">
				<h4><b><font color="#ffcc04">Advertise</font></b></h4>
				<div class="row" style="border-top:1px solid black;margin:3%"></div>
				<p><a href="#"><font color="white">Advertise with us</font></a></p>
				<p><a href="#"><font color="white">Store Locations</font></a></p>		
		  </div>
		  
		  <div class="col-sm-4">
			   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
				<div class="row" style="border-top:1px solid black;margin:3%"></div>
			   <p><a href="#"><font color="white">Contact Us</font></a></p>
		  </div>
		  
		</div>
		<div class="row ">
		<div class="col-sm-4 col-sm-offset-4">
			
			<div class="col-sm-2 col-sm-offset-3">
				<a href="https://www.facebook.com/Kithabwala-156605224697747/?fref=ts"><img src="images/facebook.png" width=40 height=35></a>
			</div>
			<div class="col-sm-2">
				<a href="https://twitter.com"><img src="images/twitter.png" width=40 height=43></a>
			</div>
				<div class="col-sm-2">
				<a href="https://www.linkedin.com/company/kithabwala?trk=ppro_cprof"><img src="images/linkedin.png" width=47 height=50></a>
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











   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	<script src="customjs/loginAndRegistration.js"></script>
	<script src="customjs/forgotPassword.js"></script>
	
	 <script>
		
		
		
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
$('#sidebar').hide();
function slidesidebar(val)
{
	$("div").animate({ 
	
	top:'500px'});    
        });
}




	</script>
	
	
	
	
	
</body>
</html>
