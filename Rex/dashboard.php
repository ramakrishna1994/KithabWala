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
 <link rel="stylesheet" href="style.css">
	   <link id="switcher" href="css/theme-color/default.css" rel="stylesheet">
    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  
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
  
  
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white">
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
		
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" >
	  <li><a class="header-color" href="aboutus.php">&nbsp;</a></li> 
	  <li><a class="header-color" href="aboutus.php">&nbsp;</a></li> 
        <li><a class="header-color" href="aboutus.php">Home</a></li> 
		  <li><a class="header-color" href="products.php">About Us</a></li>
		  <li><a class="header-color" href="advertise.php">Advertise</a></li>
		  <li><a class="header-color" href="creative.php">Creative Corner</a></li> 
		  
        
       </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
							
							
		
			
			 <?php 
		
			if(!isset($_SESSION['kithabwalaemailid']))
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
					
					
					$content .= '<li><a class="header-color" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
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
  
  <div class="row" style="margin-top:2%;margin-bottom:1%">
    
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
		<button type="button" class="btn btn-primary btn-block" >LeaderBoard</button>
		<button type="button" class="btn btn-primary btn-block" >Notifications</button>
		<button type="button" class="btn btn-primary btn-block" >FAQ's</button>

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
 
    <div class="row" id="skyline">
	<img src="images/skyline.svg" width="100%" style="margin-top:1%">
  </div>
  
  
  
  	
  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <p style="color:#ffcc04;font-size:30px;margin-top:5%">KITHABWALA</p>    
				<p style="color:#838282;font-size:16px;margin-top:2%">We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</p>    				
              <div class="footer-social">
					<div class="row">
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="facebook" href="#" style="float:left"><span class="fa fa-facebook"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">SAY HELLO ON <br> OUR FACEBOOK PAGE</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="twitter" href="#" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="google-plus" href="#" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffcc04">
								
								<a class="linkedin" href="#" style="float:left"><span class="fa fa-mobile-phone"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">CALL 022-42661060 <br> MON - FRI: 11 A.M - 6 P.M</font></p>
						</div>
					</div>
				   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="footer-bottom">
			 <div class="row" style="text-align:center">
				   <div class="col-md-2" >
						<h4><b><font color="#ffcc04">Company</font></b></h4>
						
						<p><a href="#"><font color="#838282" size="3px">About Us</font></a></p> 
						<p><a href="#"><font color="#838282" size="3px">Team</font></a></p>
						<p><a href="#"><font color="#838282" size="3px">Carrer at KithabWala</font></a></p>
						
				  </div>
			  
				  <div class="col-md-2">
						<h4><b><font color="#ffcc04">Advertise</font></b></h4>
						
						<p><a href="#"><font color="#838282" size="3px">Advertise with us</font></a></p>
						<p><a href="#"><font color="#838282" size="3px">Store Locations</font></a></p>		
				  </div>
  
				  <div class="col-md-2">
					   <h4><b><font color="#ffcc04">Reach out</font></b></h4>
						
					   <p><a href="#"><font color="#838282" size="3px">Contact Us</font></a></p>
				  </div>
				  
				   <div class="col-md-2">
					   <div class="row" >
							<div class="fb-page" data-href="https://www.facebook.com/Kithabwala-156605224697747/" data-small-header="false" data-width="300" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div>
						</div>
				  </div>
				  
				  <div class="col-md-4">
						
					   <h4><b><font color="#ffcc04">Head Quarters</font></b></h4>
						
					   <p><font color="#838282" size="3px">Kithabwala Pvt Ltd.<br>401 Sarathi Studios <br>Mythrivanam,Hyderabad<br>Telangana 500081</font></p>
				  </div>
        </div>
    </div>
    <div class="footer-bottom">
      <p><font color="#838282" size="3px">&copy; 2016 All Rights reserved to Kithabwala.com</font></p>
    </div>
  </footer>
  <!-- End Footer -->




<!-- IDEA Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><center><font color="orange" size="5px">Submit an IDEA</font></center></h4>
      </div>
      <div class="modal-body">
        
			<div class="form-group" >
    				
    				<div  style="text-align:center" >
      					<p id="status"></p>
    				</div>
  				</div>
				
				<div class="form-group" >
    				
    				
					  <select class="form-control" id="theme">
						<option>Select Theme</option>
						<option>Books</option>
						<option>Careers</option>
						<option>Showcase</option>
						<option>Innovative</option>
					  </select>
  				</div>
				
				<div class="form-group">
					
					<input type="text" class="form-control" id="title" placeholder="Enter the Title for the Design">
				</div>
				
			<div class="form-group">
				
				<textarea class="form-control" rows="5" id="description" placeholder="Enter the Description"></textarea>
				
			</div>
			
			<div class="form-group">
				<input type="file" class="filestyle" id="file">
			</div>
			
				<div class="form-group">
					<label class="checkbox-inline"><input type="checkbox" value="" id="termscheckbox">I accept Terms and Conditions</label>
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





  <script src="customjs/social.js"></script>
  
  
</body
 
</html>
