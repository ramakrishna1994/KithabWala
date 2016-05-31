<?php
error_reporting(E_ALL);
 ini_set('display_errors', '1');
 session_start();
if(!isset($_SESSION['kithabwalaemailid']))
{
	header('location:home.php');
}

?>




<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  
  
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
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
  <link href="css/font-awesome.css" rel="stylesheet">
  <style>




body { 

background-image: url("images/bg.jpg");
    background-color: #cccccc; 
	}

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



</head>
<body>
  
  
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
				
							
				$content = '<div class="dropdown" style="margin-top:5%;">
					  <a class="dropdown-toggle"  style="cursor:pointer" data-toggle="dropdown"><font color="black" size="2px"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>
					  <span class="caret"></span></a>
					  <ul class="dropdown-menu" style="background-color:white;padding:2%">
							<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>
							<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					if($_SESSION['isadmin'] == 0)
					{
						$content .= '<li><a  style="cursor:pointer" data-toggle="modal" data-target="#myModal" class="header-color" ><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;Submit An Idea</a></li><li><a  style="cursor:pointer" class="header-color" onclick="getUserPosts(0)"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;Your Ideas</a></li>';
					}
					if($_SESSION['isadmin'] == 1)
					{
						$content .= '<li><a  style="cursor:pointer" class="header-color" onclick="getPendingPosts(0)"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;Pending Ideas</a></li>
						<li><a  style="cursor:pointer" class="header-color" onclick="getHallOfFamePendingComments()"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;Pending Hall Of Fame Post Comments</a></li>
						<li><a  style="cursor:pointer" class="header-color" onclick="getHallOfFamePendingComments()"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;Subscribed Emails List</a></li>';
					}
					
					
					$content .= '<li style="cursor:pointer"><a class="header-color" onclick="logout()" ><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>
					  </ul>
					</div>';
					
					echo $content;
			}
						
			?>
      </ul>
    </div>
  </div>
</nav>
 <!-- End menu section -->




	  
<div class="container" >
  
  <div class="row" style="margin-top:2%;margin-bottom:1%">
    
		<div class="col-md-2" style="margin-top:5%">
		<div  style="text-align:center">
			 <img src="<?php echo $_SESSION['profileimage'] ?>" class="img-rounded" alt="Cinque Terre" width="100" height="100" >
		<p style="color:purple;margin-top:10%"><b><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></b></p>
		<button type="button" class="btn btn-primary btn-block" onclick="getApprovedPosts(0)">Home</button>
		<?php
			if($_SESSION['isadmin'] == 0)
			{
					echo '<a  href="designsubmit.php" class="btn btn-primary btn-block" >Submit a Design</a>'
						.'<a  href="musingsubmit.php" class="btn btn-primary btn-block" >Submit a Musing</a>'
						.'<button type="button" class="btn btn-primary btn-block" onclick="getUserPosts(0)">Your Ideas</button>';
			}
		?>
		
		
		<?php
			if($_SESSION['isadmin'] == 1)
			{
					echo '<button type="button" class="btn btn-primary btn-block" onclick="getPendingPosts(0)">Pending Ideas</button>
						<button type="button" class="btn btn-primary btn-block" onclick="getHallOfFamePendingComments()">Hall Of Fame <br> Pending Comments</button>
						<button type="button" class="btn btn-primary btn-block" onclick="getSubmittedResumes()">Submitted Resumes</button>
						<button type="button" class="btn btn-primary btn-block" onclick="getSubscribedEmails()">Subscribed Emails</button>';
			}
		?>
		<button type="button" class="btn btn-primary btn-block" >LeaderBoard</button>
		<button type="button" class="btn btn-primary btn-block" >Notifications</button>
		<button type="button" class="btn btn-primary btn-block" >FAQ's</button>

	</div>	
		
	</div>
	<div class="col-md-10" style="margin-top:5%">
		
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
								
								<a class="twitter" href="https://twitter.com/kithabwala" style="float:left"><span class="fa fa-twitter"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">TWEET / FOLLOW US <br> ON TWITTER</font></p>
						</div>
						<div class="col-md-3 " style="text-align:center;color:#ffd00d">
								
								<a class="google-plus" style="float:left"><span class="fa fa-envelope"></span></a><p style="margin-top:1%;text-align:left"><font size="1px">QUESTIONS ? <br> SEND US AN EMAIL</font></p>
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


<script src="customjs/loginAndRegistration.js"></script>


  <script src="customjs/social.js"></script>
  
  
</body
 
</html>
