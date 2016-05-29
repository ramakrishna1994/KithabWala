<?php
	if(isset($_GET['p']))
		$password = $_GET['p'];
	else
		header('location:home.html');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KithabWala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
   <style>
  
  section{
	  text-align: justify;
    text-justify: inter-word;
	margin-right:5%;
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


text-font { font-style: italic;
   
}

 
  .margin-all
  {
   
    margin-top:1%;
  }
  
  .colBorder
  {
   border-right:1px solid;
   border-color:black;
   height:350px;
  }
  
  .fixed
  {
   
   background-color: black;
   position:fixed;
  }
  
  .well {
    background: #000000;
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
     
    </div>
  </div>
</nav>


</head>
<body>
		
		
		
		<div class="container-fluid" style="margin-top:10%">
	
	
		
		
		
		
		<div class="row" >
				<div class = "alert text-center" id="statusDivision">
			<!-- -	<img src="images/redloader.gif">   -->	
				</div>
		</div>
		
		
		<div class="row" id="mainDivision">
		
		
		
		
		
			<div class="col-sm-offset-3 col-sm-5">
			
			
			
		<div class="form-horizontal" >
			
				<div class="form-group" >
    				<label class="control-label col-sm-5"></label>
    				<div class="col-sm-7"></div>
  				</div>
  				
  				<div class="form-group" >
    				<label class="control-label col-sm-5" ></label>
    				<div class="col-sm-7"></div>
  				</div>
  				
  				
  				
  				
  				
  				
				<div class="form-group" id="resetPasswordDivision">
					<div class="col-sm-4">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="resetPassword"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="resetPassword" placeholder="Password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="resetPasswordErrorSpan"></span>
    				</div>
    			</div>
    			
    			<input type="hidden" value="<?php echo $password?>" id="p">
    			
				
    			<div class="form-group" id="resetConfirmPasswordDivision">
					<div class="col-sm-4">
						<div class="collapse navbar-collapse" >
							<label class="control-label col-sm-offset-12" for="resetConfirmPassword"><span class = "glyphicon glyphicon-lock"></span></label>
						</div>
					</div>
    				<div class="col-sm-7"> 
      					<input type="password" class="form-control" id="resetConfirmPassword" placeholder="Confirm password" data-toggle="popover"  data-trigger="hover" data-placement="top" data-content="">
      					<span class="" id="resetConfirmPasswordErrorSpan"></span>
   				 	</div>
  				</div>
    
    
    
  				<div class="form-group"> 
    				<div class="control-label col-sm-offset-4 col-sm-7">
      					<button type="submit" class="btn btn-success btn-block" onclick="return checkPasswordParameters()">Submit</button>
    				</div>
  				</div>
  				
  				
    			
  			</div>
  			</div>
  			
  			
 			</div>
			</div>
		



<script src="customjs/resetpassword.js"></script>


</body>
</html>