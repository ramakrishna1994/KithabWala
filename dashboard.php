<?php
require_once 'phpFiles/isSessionSet.php';

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
  <script type="text/javascript" src="customjs/dashboard.js"> </script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
	
  
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
  
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=493329037393007";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid" style="margin:1%">
  
  <div class="row" style="margin-top:5%;margin-bottom:5%">
    
		<div class="col-sm-2" style="text-align:center">
			 <img src="profilePics/<?php echo $_SESSION['profileimage'] ?>" class="img-rounded" alt="Cinque Terre" width="150" height="200" >
		<p><b><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></b></p>
		<button type="button" class="btn btn-success btn-block" onclick="getApprovedPosts(0)">Home</button>
		<?php
			if($_SESSION['isadmin'] == 0)
			{
					echo '<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Submit an Idea</button>';
			}
		?>
		
		<button type="button" class="btn btn-success btn-block" >Your Ideas</button>
		<?php
			if($_SESSION['isadmin'] == 1)
			{
					echo '<button type="button" class="btn btn-success btn-block" onclick="getPendingPosts(0)">Pending Ideas</button>';
			}
		?>


		
		
	</div>
	<div class="col-sm-10" >
		
		<div class="row" id="posts">
			<!----------------------will be filled dynamically---------->
		</div>
		<div class="row">
			<div class="panel panel-default" onclick="getPendingPosts(0)" id="loadmore" style="cursor:pointer">
				<div class="panel-heading" style="text-align:center">
					Load More
				</div>
			</div>'
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






<!-- IDEA Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Submit an Idea</h4>
      </div>
      <div class="modal-body">
        
			<div class="form-group" >
    				
    				<div  style="text-align:center" >
      					<p id="status"></p>
    				</div>
  				</div>
				
			<div class="form-group">
				<label for="comment">Enter the Description:</label>
				<textarea class="form-control" rows="5" id="description"></textarea>
				
			</div>
			
			<div class="form-group">
				<input type="file" class="filestyle" id="file">
			</div>
			
			<div class="form-group">
				<button type="button" class="btn btn-success btn-block" onclick="submitPost()">Submit</button>
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>












<!-- post approvalModal -->
<div id="postApprovalModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Updating the database</h4>
      </div>
      <div class="modal-body" style="text-align:center">
        <img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





  
  
  
  
  
</body
 
</html>
