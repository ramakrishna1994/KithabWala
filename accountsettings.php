<?php
error_reporting(E_ALL);
 ini_set('display_errors', '1');
 session_start();
if(!isset($_SESSION['kithabwalaemailid']))
{
	header('location:home.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account Settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://markusslima.github.io/bootstrap-filestyle/js/bootstrap-filestyle.min.js"> </script>
   <script type="text/javascript" src="customjs/accountsettings.js"> </script>
 <link rel="stylesheet" href="style.css">
	   <link id="switcher" href="css/theme-color/default.css" rel="stylesheet">
    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.css" rel="stylesheet">
	
  

<style>
	
	.navbar-nav > li > a
		{
			background-color:#c2c4c6;
			color:black;
		}

		.navbar-nav > li > a:hover
		{
			background-color:#c2c4c6;
			color:white;
		}
</style>


<!-- Start menu section -->
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#c2c4c6;height:60px" id="navigation">
  
 
	
  <div class="container-fluid" style="background-color:#c2c4c6">
    <div class="navbar-header" style="background-color:#c2c4c6">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rkNavbar">
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span> 
      </button>
      <a class="navbar-brand" href="home.php" ><img id="logoimage" src="images/newlogo.jpg" width="100" height="50" style="margin-top:-2%"></a>
    </div>
    <div class="collapse navbar-collapse" id="rkNavbar" style="margin-top:1%;background-color:#c2c4c6">
      <ul class="nav navbar-nav" style="padding-left:5%">
        <li ><a href="home.php">HOME</a></li>
            <li ><a href="aboutus.php" >ABOUT US</a></li> 
            <li ><a href="products.php">PRODUCTS</a></li>                    
            <li ><a href="advertise.php">ADVERTISE </a></li> 
            <li ><a href="halloffame.php">CREATIVE</a></li> 
			
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
				
							
				echo '<div class="dropdown">
					  <a class="dropdown-toggle"  style="cursor:pointer" data-toggle="dropdown"><font color="black" size="2px"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>
					  <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>
						<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>
					   <li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>
					   <li><a class="header-color" style="cursor:pointer" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>
					  </ul>
					</div>';
			}
						
			?>
      </ul>
    </div>
  </div>
</nav>
 <!-- End menu section -->


</head>
<body>
  
<div class="container">
  
  <div class="row" style="margin-top:10%;margin-bottom:10%">
    
	
			<div class="row">
				<div class="alert text-center" id="statusDivision">
					
				</div>
			</div>
		<div class="row" id="posts">
		<div class="col-sm-12">
			<div class="col-sm-5">
				
				<div class="row text-center" style="margin:1%">
					<div class="form-horizontal">
			
						<div class="form-group" >
    						<label class="control-label col-sm-5"></label>
    						<div class="col-sm-7" ><b><font color="blue">Password Management Section</font></b></div>
  						</div>
  				
  						
  						<div class="form-group" >
    						<label class="control-label col-sm-5" ></label>
    						<div class="col-sm-7"></div>
  						</div>
  				
						<div class="form-group" id="currentPasswordDivision">
							<div class="col-sm-5">
								<div class="collapse navbar-collapse" >
									<label class="control-label col-sm-offset-12" for="currentPassword"><span class = "glyphicon glyphicon-lock"></span></label>
								</div>
							</div>
							<div class="col-sm-7">
      							<input type="password" class="form-control" id="currentPassword" placeholder="Enter Current Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="" autofocus>
      							<span class="" id="currentPasswordErrorSpan"></span>
    						</div>
  						</div>
  						
						
						
  						<div class="form-group" id="newPasswordDivision">
							<div class="col-sm-5">
								<div class="collapse navbar-collapse" >
									<label class="control-label col-sm-offset-12" for="newPassword"><span class = "glyphicon glyphicon-lock"></span></label>
								</div>
							</div>
							<div class="col-sm-7">
      							<input type="password" class="form-control" id="newPassword" placeholder="Enter New Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="" autofocus>
      							<span class="" id="newPasswordErrorSpan"></span>
    						</div>
  						</div>
  						
						
  						<div class="form-group" id="confirmPasswordDivision">
							<div class="col-sm-5">
								<div class="collapse navbar-collapse" >
									<label class="control-label col-sm-offset-12" for="confirmPassword"><span class = "glyphicon glyphicon-lock"></span></label>
								</div>
							</div>
							<div class="col-sm-7">
      							<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="" autofocus>
      							<span class="" id="confirmPasswordErrorSpan"></span>
    						</div>
  						</div>
  						
  						<div class="form-group"> 
    						<div class="control-label col-sm-offset-5 col-sm-7">
      						<button type="submit" class="btn btn-success btn-block" onclick="changePassword()">Submit</button>
    					</div>
  					</div>
  						
  				</div>		
  				
  		
				</div>
			</div>
			
			
			<div class="col-sm-1 colBorder">
				
			</div>
			
			
			<div class="col-sm-4">
				<div class="form-horizontal">
			
						<div class="form-group" >
    						<label class="control-label col-sm-5"></label>
    						<div class="col-sm-7" style="text-align:center"><b><font color="blue">Profile Picture Section</font></b></div>
  						</div>
  						
  						
  						<div class="form-group" >
    						<label class="control-label col-sm-5"></label>
    						<div class="col-sm-7"></div>	
  						</div>
  						
  						<div class="form-group" >
    						
    						<div class="col-sm-7 col-sm-offset-5 text-center" id="profilePicture">
    							<!-- ---------image Division -->
							</div>
  						</div>
  						
  						<div class="form-group" >
    						
    						<div class="col-sm-7 col-sm-offset-5 text-center">
    							<input type="file" class="filestyle" id="image">
							</div>
  						</div>
  						
  						
  						<div class="form-group" >
    						
    						<div class="col-sm-5 col-sm-offset-6 text-center" >
    							<button type="submit" class="btn btn-danger btn-block" onclick="updateProfilePic()">Submit</button>
							</div>
  						</div>
  				</div>
			</div>
		
		</div>
		
			
			
			
		
	
	</div>
  </div>
  </div>
 














  
  
  
 
  
</body>
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
							<a href="home.php"><img src="images/logo.png" width="150" height="150" class="img-rounded"></a>
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
								<p><a href="http://www.kithabwala.com/aboutus.php#team-KW"><font color="#838282" size="2px">Team</font></a></p>
								<p><a href="careers.php"><font color="#838282" size="2px">Carrer at KithabWala</font></a></p>
								
						  </div>
					  
						  <div class="col-md-3" style="padding:10px 0">
								<h4><b><font color="#ffcc04">Advertise</font></b></h4>
								
								<p><a href="advertise.php"><font color="#838282" size="2px">Advertise with us</font></a></p>
								<p><a href="http://www.kithabwala.com/contactus.php#contactus"><font color="#838282" size="2px">Store Locations</font></a></p>		
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
 
</html>
