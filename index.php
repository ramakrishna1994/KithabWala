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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height:400px;
  }
  
  body{
	 font-family: "PT Sans", sans-serif;
  }
  
  .abc{
	  color:#ffcc04;
	  font-size:110%;
  }

	.abc:hover
	{
		color:yellow;
		
	}
  </style>
</head>
<body>





  <div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" >

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



<div class="container-fluid" style="margin-top:5%">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:400px;">
  
  
  
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/1.jpg" alt="Chania" >
        
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Chania" >
        
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="Flower" >
        
      </div>

      <div class="item">
        <img src="images/4.jpg" alt="Flower" >
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container" style="margin-top:2%;text-align:justify">
	<h4><i>Kithabwala</i>, from the house of <i>Samast Enterprises India Pvt. Ltd.</i>, offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.<br><br>
            We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</h4>
</div>
<div class="container" style="margin-top:2%">
	<div class="row">
		<div class="col-lg-4 " style="padding:1%;text-align:center">
			<img class="img-circle" src="images/5.jpg" width="300" height="300">
			<p style="margin-top:5%;text-align:justify">Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are 
			specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, 
			entertainment and premium quality at budget-friendly prices.</p>
		</div>
		<div class="col-lg-4" style="padding:1%;text-align:center">
			<img class="img-circle" src="images/6.jpg" width="300" height="300">
			<p style="margin-top:5%;text-align:justify">Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are 
			specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, 
			entertainment and premium quality at budget-friendly prices.</p>
		</div>
		<div class="col-lg-4" style="padding:1%;text-align:center">
			<img class="img-circle" src="images/7.jpg" width="300" height="300">
			<p style="margin-top:5%;text-align:justify">Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are 
			specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, 
			entertainment and premium quality at budget-friendly prices.</p>
		</div>
	</div>
</div>


<div class="container-fluid" style="margin-top:2%">

		<div class="row" style="background-color:grey;color:orange;text-align:center;padding:3%;z-index:10">
		 <div class="row">
		  <div class="col-sm-4">
				<h4><b><font color="#ffcc04">Company</font></b></h4>
				<div class="row" style="border-top:1px solid black;margin:3%"></div>
				<p><a href="#"><font color="black">About Us</font></a></p> 
				<p><a href="#"><font color="black">Team</font></a></p>
				<p><a href="#"><font color="black">Carrer at KithabWala</font></a></p>
				
		  </div>
		  
		  <div class="col-sm-4">
				<h4><b><font color="#ffcc04">Advertise</font></b></h4>
				<div class="row" style="border-top:1px solid black;margin:3%"></div>
				<p><a href="#"><font color="black">Advertise with us</font></a></p>
				<p><a href="#"><font color="black">Store Locations</font></a></p>		
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
</body>
</html>
