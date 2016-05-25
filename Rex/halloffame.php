<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-signin-client_id" content="860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Creative Corner</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
		<link  href="css/contactus.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
 <link href='creativecornerassets/modaltext.css' rel='stylesheet' type='text/css'>
    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
	
	


#contact {
	background-image: url("images/contact-bg.jpg");
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	display: inline;
	float: left;
	padding: 70px 0;
	width: 100%;
}
.contact-left {
	background-color: rgba(104, 102, 96, 0.5);
	display: inline;
	float: left;
	padding: 30px 40px 10px;
	width: 100%;
}
.contact-left h2 {
	color: #fafafa;
	font-size: 35px;
	margin-bottom: 35px;
}
.single-address {
	display: inline;
	float: left;
	margin-bottom: 15px;
	padding-right: 50px;
	width: 100%;
}
.single-address h4 {
	color: #fafafa;
	font-size: 22px;
	font-weight: bold;
	margin-bottom: 17px;
}
.single-address p {
	color: #fafafa;
	font-size: 14px;
	margin-bottom: 5px;
}
.contact-right{
	background-color: rgba(104, 102, 96, 0.5);
	display: inline;
	float: left;
	padding: 30px 40px;
	width: 100%;
}
.contact-right h2 {
	color: #fafafa;
	font-size: 35px;
	margin-bottom: 48px;
}
.contact-form .form-group input {
	background: transparent;
	color: #e1e1e1;
	font-size: 20px;
	border: 1px solid #fff;
	border-radius: 0;
	height: 45px;
	margin-bottom: 24px;
}
.contact-form .form-group textarea{
	color: #e1e1e1;
	background: transparent;
	border: 1px solid #fff;
	border-radius: 0;
	height: 190px;
}
.contact-form .form-control:focus {
    outline: 0;
    box-shadow: none;    
} 
.contact-form .form-control::-webkit-input-placeholder {
	color: #e2e2e2;
	font-size: 20px;
}

.contact-form .form-control:-moz-placeholder { /* Firefox 18- */
	color: #e2e2e2;
	font-size: 20px; 
}

.contact-form .form-control::-moz-placeholder {  /* Firefox 19+ */
	color: #e2e2e2;
	font-size: 20px;
}

.contact-form .form-control:-ms-input-placeholder {  
	color: #e2e2e2;
	font-size: 20px;
}
.contact-form button {
	float: right;
	margin-right: 0;
	border-radius: 0px;
}
.contact-form.button-default::after,
.contact-form .button-default > span {
	padding: 12px 40px;  
}
#google-map{
	display: inline;
	float: left;	
	width: 100%;
}


	
		.button123 {
    background-color: #ffcc04; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

	.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #ffcc04;
}
	
		
		
		.fixedp{
			font-size:30px;
		}
		
		
		
	.mine
	{
		font-size:30px;
		color:grey;
		transition:1s;
	}
	
	.mine:hover
	{
		color:green;
		font-size:35px;
		
	}
	
	

	
	body{
		font-family: 'brandon-grotesque', Helvetica, Arial, sans-serif;
		background-color:#d3d3d3;
	}

	.btn1{
		
		
		margin-top:-7%;
		
	}
		
	</style>
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#menu-area"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
  <!-- End header section -->

    <!-- Start menu section -->
  
	
	<nav class="navbar navbar-default navbar-fixed-top" style="padding:0.5%;background-color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     <a href="home.php"><img src="images/kithabwala.png" alt="logo" height="50" width="100"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li ><a href="home.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li> 
            <li><a href="products.php">PRODUCTS</a></li>                    
            <li ><a href="advertise.php">ADVERTISE </a></li> 
            <li class="active"><a href="halloffame.php">CREATIVE</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		
		<?php 
			if(!isset($_SESSION['kithabwalaemailid']))
			{
						echo '<li id="signup"><a href="#v" data-toggle="modal" data-target="#registrationModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
							<li id="login"><a href="#d" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
							';
			}
			else
			{
				$content =  '<li><a  style="cursor:pointer" data-toggle="dropdown"><font color="orange"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					
					
					$content .= '<li><a class="header-color" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							
							.'	</li>';
							echo $content;
			}
							
			?>
			
			
      </ul>
    </div>
  </div>
</nav>

    
  
  <!-- End menu section -->

  <div class="container" style="background-color:white;">
  <div class="row" style="margin-top:7%">
  <div class="col-md-8 col-md-offset-2">
  <ul class="nav nav-tabs">
    <li class="active"><a href="halloffame.php">Hall Of Fame</a></li>
    <li ><a href="submit.php">Submit</a></li>
    <li><a href="howitworks.php">How it Works</a></li>
   
  </ul>
</div>
</div>  
</div>
 
   <!-- 
  <div class="container">	
	<div class="row">
		<div class="col-md-12" style="margin-top:1%">
			<iframe src="cchalloffame.html" width="100%" height="1150px" frameBorder="0"></iframe>
		</div>
	</div>
  </div>
   -->

   <!-- Start subscription section -->
  <div class="container" style="background-color:white;padding-bottom:2%;">	
	<div class="row">
		<div class="col-md-12" style="margin-top:1%;text-align:center;background-image:url('images/cctop1.jpg');
    background-repeat: no-repeat;
    
    background-position: center;height:420px;">
			
			
			<div class="row" style="margin-top:28%">
				<div class="col-md-4 col-md-offset-2" >
					<button type="button" class="btn btn-warning btn-block btn-lg" onclick="window.open('submit.php')">SEE OPEN CHALLENGES</button>
				</div>
				<div class="col-md-4 " >
					<button type="button" class="btn btn-warning btn-block btn-lg" onclick="window.open('howitworks.php')">HOW IT WORKS</button>
				</div>
			</div>
			
		</div>
	</div>
  </div>
  <!---------------------->
  
  <!------------Designs start---------->
  <div class="container" style="background-color:white;margin-top:2%;padding-bottom:2%">	
	
	<div class="row" style="margin-top:1%">
		<div class="col-md-10 col-md-offset-1">
		<h3><b>DESIGN SUBMISSIONS</b></h3>
		</div>
	</div>
	
	<div class="row" style="margin-top:1%">
		
		<div class="col-md-5 col-md-offset-1">
			<h4><i>373 Submissions</i></h4>
		</div>
		<div class="col-md-3">
		
			<form class="form-inline" role="form">
				  <div class="form-group">
				  <label for="sel1" >Select list:</label>
				  <select class="form-control" id="sel1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				</div>
			</form>
			
		</div>
		<div class="col-md-3">
			<form class="form-inline" role="form">
				  <div class="form-group">
				  <label for="sel1" >Select list:</label>
				  <select class="form-control" id="sel1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row" style="margin-top:1%">
		<div class="col-md-10 col-md-offset-1">
		These recently submitted desings are open fro critique. Give youre feedback to help artists improve their submissions .Artists will be able to change their submission based on your feedback during the phase of the challenege.
		</div>
	</div>
	<div class="row" style="margin-top:1%">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
				<h5>&nbsp;</h5>
				<img src="images/cc.jpg" width="250" height="250" ><br>
				<h5><b>Rocking House Design</b></h5>By Saradhi.
				
			</div>
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
				<h5>&nbsp;</h5>
				<img src="images/cc.jpg" width="250" height="250"><br>
				<h5><b>Rocking House Design</b></h5>By Ravi Teja Surapaneni.
				
			</div>
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
				<h5>&nbsp;</h5>
				<img src="images/cc.jpg" width="250" height="250" ><br>
				<h5><b>Rocking House Design</b></h5>By Ravi Teja Gamini.
				
			</div>
		</div>
	</div>
	<div class="col-md-4 col-md-offset-4" style="padding:2%;text-align:center">
		Show More
	</div>
  </div>
  <div class="row">
  <div class="col-md-2 col-md-offset-5" style="padding:10px 10px;text-align:center;background-color:white;border-top:1px solid grey;cursor:pointer;border-radius:25%">
		Show More
	</div>
	</div>
   <!---------------------->

 
 
   <!------------Musings start---------->
  <div class="container" style="background-color:white;margin-top:2%;padding-bottom:2%">	
	
	<div class="row" style="margin-top:3%">
		<div class="col-md-10 col-md-offset-1">
		<h3><b>MUSING SUBMISSIONS</b></h3>
		</div>
	</div>
	
	<div class="row" style="margin-top:1%">
		
		<div class="col-md-5 col-md-offset-1">
			<h4><i>373 Submissions</i></h4>
		</div>
		<div class="col-md-3">
		
			<form class="form-inline" role="form">
				  <div class="form-group">
				  <label for="sel1" >Sorted By:</label>
				  <select class="form-control" id="sel1">
					<option>Randomize</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				</div>
			</form>
			
		</div>
		<div class="col-md-3">
			<form class="form-inline" role="form">
				  <div class="form-group">
				  <label for="sel1" >Browsing By:</label>
				  <select class="form-control" id="sel1">
					<option>All</option>
					<option>2</option>
					<option>3</option>
					<option>asddasda</option>
				  </select>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row" style="margin-top:1%">
		<div class="col-md-10 col-md-offset-1">
		These recently submitted desings are open fro critique. Give youre feedback to help artists improve their submissions .Artists will be able to change their submission based on your feedback during the phase of the challenege.
		</div>
	</div>
	<div class="row" style="margin-top:1%">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
					<h3>Super Stars of chennai</h3>
					May 20 2016.
					<img src="images/products.jpg" width="250" height="250" ><br>
					<div class="col-md-10 col-md-offset-1" style="margin-top:2%;text-align:justify">Most of us take the MTC buses to commute to our colleges , while most of us take bikes and cars.</div>
				
			</div>
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
					<h3>6 Types of students every school has seen</h3>
					May 20 2016.
					<img src="images/products.jpg" width="250" height="250" ><br>
					<div class="col-md-10 col-md-offset-1" style="margin-top:2%;text-align:justify">Most of us take the MTC buses to commute to our colleges , while most of us take bikes and cars.</div>
				
			</div>
			<div class="col-md-4 " style="padding:0.5%;text-align:center">
				
					<h3>Super Stars of chennai</h3>
					May 20 2016.
					<img src="images/products.jpg" width="250" height="250" ><br>
					<div class="col-md-10 col-md-offset-1" style="margin-top:2%;text-align:justify">Most of us take the MTC buses to commute to our colleges , while most of us take bikes and cars.</div>
				
			</div>
		</div>
	</div>
  </div>
   <div class="row">
  <div class="col-md-2 col-md-offset-5" style="padding:10px 10px;text-align:center;background-color:white;border-top:1px solid grey;cursor:pointer;border-radius:25%">
		Show More
	</div>
	</div>
   <!---------------------->
  
  
  
  
  
  

  

  
  
  
  
  <div id="contactus">
<!-- TRADE ENQUIRIES SECTION -->
    <a class="fixed_queries_section phone_icon"><i class="fa fa-phone" ></i></a>

    <div class="fixed_queries_section_overlay" style="display: none;"></div>

    <div class="fixed_queries_content inner">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" >
            <li role="presentation" class="first"><a aria-controls="home" role="tab" data-toggle="tab">Order Queries</a></li>
            <li role="presentation" class="last"><a aria-controls="profile" role="tab" data-toggle="tab">Trade Queries</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="col-xs-12 extra_pad query_form_main_section">
                    <div class="message_query_section">Message us your Query</div>
                    <form id="enquiry_form_on_trade">
                        <input type="text" name="query_name" id="query_name" class="form-control required-entry" placeholder="Enter Order ID">
                        <input type="email" name="query_email" id="query_email" class="form-control required-entry" placeholder="Your Email Addresss">
                        <textarea name="query_comment" id="query_comment" class="form-control required-entry" placeholder="Enter Your Query"></textarea>
                        <button class="btn btn-default" type="submit">SUBMIT</button>
                    </form>
                </div>
                <div class="col-xs-12 extra_pad success_message_on_query_submission">
                    <div class="success_bubble">
                        <img src="./Buy funny &amp; unique gifts from India&#39;s coolest company - Happily Unmarried_files/ic-QuerySent.svg">
                    </div>
                    <div class="thanks_message">Thanks for your query</div>
                    <div class="getting_back_info">We will get back to you within 24 - 48 hours. Do check your Email.</div>
                </div>
                <div class="col-xs-12 tab_footer">
                    <div class="row">
                        <div class="col-xs-3 phone_icon_on_footer"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="col-xs-9 footer_info">
                            <div class="callus_text">or call us at</div>
                            <div class="tollnumber"><a href="tel:180030007347">1800 3000 7347</a></div>
                            <div class="tollnumber"><a href="tel:180030005887">1800 3000 5887</a></div>
                            <div class="week">[Mon-Fri - 10AM - 6PM]</div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="col-xs-12 trade_enquiry_tab">
                    <div class="message_query_section">For Trade related queries call us at:</div>
                    <div class="col-xs-12">
                        <div class="col-xs-3 phone_icon_on_footer">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-9 pad_left_10">
                            <div class="tollnumber"><a href="tel:+918800402266">+91-8800402266</a></div>
                            <div class="tollnumber"><a href="tel:+917042388244">+91-7042388244</a></div>
                            <div class="col-xs-12 footer_note week">
                                <sup>*</sup>Mon - Fri - 10 AM - 6 PM
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a  class="fixed_queries_section close_icon"><i class="fa fa-close" ></i></a>
    </div>
  </div>
  <!-- END OF ENQUIRIES SECTION -->
  
  
  
  
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
							<img src="images/logo.png" width="150" height="150" class="img-rounded">
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
								<p><a href="aboutus.php/#team"><font color="#838282" size="2px">Team</font></a></p>
								<p><a href="careers.php"><font color="#838282" size="2px">Carrer at KithabWala</font></a></p>
								
						  </div>
					  
						  <div class="col-md-3" style="padding:10px 0">
								<h4><b><font color="#ffcc04">Advertise</font></b></h4>
								
								<p><a href="advertise.php"><font color="#838282" size="2px">Advertise with us</font></a></p>
								<p><a href="#"><font color="#838282" size="2px">Store Locations</font></a></p>		
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

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="js/waypoints.js"></script>
  <script type="text/javascript" src="js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="js/wow.js"></script> 
<script src="https://apis.google.com/js/platform.js" async defer></script>
  <!-- Custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

    <script>

		
		
		
		
		 //////////
    // Trade Enquiry related js
    /////
		
		jQuery(document).ready(function($) {
    $(document.body).on('click', '.edit_sms_number', function() {
        console.log('jnnn');
        if ($('#'+this.id).is(':checked')) {
            $('#'+this.id).val('1');
        } else {
            $('#'+this.id).val('0');
        }
    });

   
    window.originalHeightOfBlock = $(".fixed_queries_content").outerHeight();
    window.originalWidthOfBlock = $(".fixed_queries_content").outerWidth();

    window.longAnimationDuration = 500;
    window.shortAnimationDuration = 300;

    $(".fixed_queries_section_overlay").hide();

    window.expandFixedTabs = function() {
        $(".fixed_queries_content").animate({
            width: '400px'
        }, longAnimationDuration, function() {
            $('body').css('overflow-y', 'hidden');
            $(".fixed_queries_section.phone_icon").fadeOut();
            $(".fixed_queries_section_overlay").fadeIn();
            $(".fixed_queries_content").css('overflow', 'initial');

            var curHeight = $('.fixed_queries_content').height();
            $('.fixed_queries_content').css('height', 'auto');
            var autoHeight = $('.fixed_queries_content').height();

            $(".fixed_queries_content").height(curHeight).animate({
                height: autoHeight
            }, longAnimationDuration, function() {
                $( ".fixed_queries_content .first" ).addClass( "active" );
                $(".fixed_queries_content .tab-content").show().animate({
                    opacity: 1,
                    top: 0
                }, shortAnimationDuration, function() {
                    $(".fixed_queries_section.close_icon").fadeIn();
                });
            });
        });
    };

    $(".fixed_queries_section.phone_icon").click(function() {
        expandFixedTabs();
    });

    window.collapseFixedTabs = function() {
        $('body').css('overflow-y', 'auto');
        $(".fixed_queries_section.close_icon").hide();
        $(".fixed_queries_section_overlay").fadeOut();
        $( ".fixed_queries_content .first" ).removeClass( "active" );
        $(".fixed_queries_content").animate({
            height: originalHeightOfBlock
        }, longAnimationDuration, function() {
                $(".fixed_queries_section.phone_icon").fadeIn();
                $(".fixed_queries_content").css('overflow', 'hidden');
            $(".fixed_queries_content").animate({
                width: originalWidthOfBlock
            }, longAnimationDuration, function() {
                $(".fixed_queries_content .tab-content").css({
                    opacity: 0,
                    top: 30
                });
                $( ".fixed_queries_content .nav-tabs .first a" ).trigger( "click" );
                $(".query_form_main_section").show();
                $(".success_message_on_query_submission").hide();
                $(".query_form_main_section input").val('');
                $(".query_form_main_section textarea").val('');
                $( ".fixed_queries_content .first" ).removeClass( "active" );

            });
        });
    };

    $(".fixed_queries_section.close_icon").click(function() {
        collapseFixedTabs();
    });

    $(".fixed_queries_section_overlay").click(function() {
        collapseFixedTabs();
    });
});
		
		
		
		
		function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
		
		
			
	 
	

	




		
		
	</script>
	
	
	
	
	
	<!--Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"> <center><font color="orange" size="5px">Log in</font></center></h4>
      </div>
      <div class="modal-body">
        
		
		
		
						
			<div class="form-horizontal" >
			
			
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center><div class="g-signin2" data-width="195" data-height="35" data-longtitle="true" ></div></center>
						</div>
  				</div>
				
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center><a href="#" onclick="fb_login();"><img src="images/fb_login_awesome.jpg" border="0" alt=""></a>
</center>
						</div>
  				</div>
				
				<div class="form-group"> 
						
						<div class="col-sm-12"> 
							<center>--or--</center>
						</div>
  				</div>
				
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
						
						<div class="col-sm-12"> 
							<center><a  style="cursor:pointer" data-toggle="modal" onclick="toggle()">Help ,I forgot my login details.</a></center>
						</div>
      					
    				
  				</div>
    			
				<div class="form-group">
					
					<center>
					<a  style="cursor:pointer" data-toggle="modal" onclick="toggleModals()">Sign Up</a>
					</center>
				</div>
   
   
  
			</div>
			
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

	
</div>

  </div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



<!-- registration Modal -->
<div id="registrationModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"><center><font color="orange" size="5px">New to Kithabwala? Sign up!</font></center></h4>
      </div>
      <div class="modal-body">
					
					
						
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>










<!-- Verification Modal -->
<div id="verificationModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"><center><font color="orange" size="5px">Verification Code</font></center></h4>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<script src="customjs/loginAndRegistration.js"></script>
	<script src="customjs/forgotPassword.js"></script>
	<script src="customjs/social.js"></script>

	



  </body>
</html>