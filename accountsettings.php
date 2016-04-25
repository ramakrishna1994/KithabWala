<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://markusslima.github.io/bootstrap-filestyle/js/bootstrap-filestyle.min.js"> </script>
   <script type="text/javascript" src="customjs/accountsettings.js"> </script>
 
	
  
  <style>


.header-color
{
	color:white;
}



</style>



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
    						<div class="control-label col-sm-offset-1 col-sm-8">
      						<button type="submit" class="btn btn-success" onclick="changePassword()">Submit</button>
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
    						
    						<div class="col-sm-7 col-sm-offset-4 text-center" id="profilePicture">
    							<!-- ---------image Division -->
							</div>
  						</div>
  						
  						<div class="form-group" >
    						<label class="control-label col-sm-5"></label>
    						<div class="col-sm-1 text-center">
    							<input type="file" id="image">
							</div>
  						</div>
  						
  						
  						<div class="form-group" >
    						<label class="control-label col-sm-6"></label>
    						<div class="col-sm-4 text-center" >
    							<button type="submit" class="btn btn-danger" onclick="updateProfilePic()">Submit</button>
							</div>
  						</div>
  				</div>
			</div>
		
		</div>
		
			
			
			
		
	
	</div>
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



















  
  
  
 
  
</body
 
</html>
