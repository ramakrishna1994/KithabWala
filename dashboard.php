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

	
  
  <style>
 @media (max-width: 767px) /* @grid-float-breakpoint -1 */
{
    .navbar-fixed-top
    {
    position: relative;
    
	
    }
	
}



body { 

background-image: url("images/bg.jpg");
    background-color: #cccccc; 
	}



</style>



</head>
<body>
  
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:black;">
      <ul class="nav navbar-nav" style="background-color:black;">
        <li><a class="header-color" href="aboutus.php">About Us</a></li> 
		  <li><a class="header-color" href="products.php">Products</a></li>
		  <li><a class="header-color" href="advertise.php">Advertise</a></li>
		  <li><a class="header-color" href="creativecorner.php">Creative Corner</a></li> 
		  <li><a class="header-color" href="contactus.php">Contact Us</a></li>
        
       </ul>
      
      <ul class="nav navbar-nav navbar-right" style="background-color:black;">
      
							
							
		
			
			 <?php 
		
			if(!isset($_SESSION['emailid']))
			{
			echo '<li><a  href="#" data-toggle="modal" data-target="#registrationModal"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>'
				.'<li><a  href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>';
			}
			else
			{
			     $content =  '<li><a  style="cursor:pointer" data-toggle="dropdown"><font color="orange"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					if($_SESSION['isadmin'] == 0)
					{
						$content .= '<li><a  style="cursor:pointer" data-toggle="modal" data-target="#myModal" class="header-color" ><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;Submit An Idea</a></li>'
								.'<li><a  style="cursor:pointer" class="header-color" onclick="getUserPosts(0)"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;Your Ideas</a></li>';
					}
					if($_SESSION['isadmin'] == 1)
					{
						$content .= '<li><a  style="cursor:pointer" class="header-color" onclick="getPendingPosts(0)"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;Pending Ideas</a></li>';
					}
					
					
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




	  
<div class="container" >
  
  <div class="row" style="margin-top:2%;margin-bottom:5%">
    
		<div class="collapse navbar-collapse col-sm-2" style="margin-top:5%">
		<div  style="text-align:center">
			 <img src="profilePics/<?php echo $_SESSION['profileimage'] ?>" class="img-rounded" alt="Cinque Terre" width="100" height="100" >
		<p style="color:purple;margin-top:10%"><b><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></b></p>
		<button type="button" class="btn btn-primary btn-block" onclick="getApprovedPosts(0)">Home</button>
		<?php
			if($_SESSION['isadmin'] == 0)
			{
					echo '<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Submit an Idea</button>'
						.'<button type="button" class="btn btn-primary btn-block" onclick="getUserPosts(0)">Your Ideas</button>';
			}
		?>
		
		
		<?php
			if($_SESSION['isadmin'] == 1)
			{
					echo '<button type="button" class="btn btn-primary btn-block" onclick="getPendingPosts(0)">Pending Ideas</button>';
			}
		?>


	</div>	
		
	</div>
	<div class="col-sm-10" style="padding:5%">
		
		<div class="row" id="posts">
			<!----------------------will be filled dynamically---------->
		</div>
		<div class="row">
			<div class="panel panel-primary" onclick="getPendingPosts(0)" id="loadmore" style="cursor:pointer">
				<div class="panel-heading" style="text-align:center" id="loadmorecontent">
					Load More
				</div>
			</div>
		</div>	
			
			
			
		
	</div>
	
  </div>
  </div>
  
 <footer class="footer" style="background:black;color:white;text-align:center;padding:3%">
 <div class="container">
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
</footer>






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
