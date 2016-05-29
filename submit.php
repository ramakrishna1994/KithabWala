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
    <title>Submit</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
		<link  href="css/contactus.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
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

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	 <link href='creativecornerassets/modaltext.css' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
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
	
	
.non-floater { overflow:hidden; }
	iframe { width:100%; padding:0; border:0; height: 2540px;   }
	

		
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

   
  <!-- End header section -->

 <div class="container col-md-8 col-md-offset-2" style="margin-top:7%">
  
  <ul class="nav nav-tabs">
   <li ><a href="halloffame.php">Hall Of Fame</a></li>
    <li class="active"><a href="submit.php">Submit</a></li>
    <li><a href="howitworks.php">How it Works</a></li>
   
  </ul>
  
</div>

  
 
  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Recent portfolio</h2>
              <span class="tittle-line"></span>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <li class="filter" data-filter="all">All</li>
                   <li class="filter" data-filter=".musing">Musings</li>
                   <li class="filter" data-filter=".design">Design</li>
                   
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
                
                 <div class="single-portfolio mix design" >
                   
                     <div class="single-item" style="background:url('images/portfolio-img-small1.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('musingsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                   
                 </div>
                 <div class="single-portfolio mix musing">
                  
                     <div class="single-item" style="background:url('images/portfolio-img-big1.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('musingsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                   
                 </div>
                 <div class="single-portfolio mix musing">
                    <div class="single-item" style="background:url('images/portfolio-img-big2.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('musingsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                 </div>
                 <div class="single-portfolio mix design">
                    <div class="single-item" style="background:url('images/portfolio-img-big3.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('designsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                 </div>
                 <div class="single-portfolio mix design">
                   <div class="single-item" style="background:url('images/portfolio-img-big4.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('designsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                 </div>
                 <div class="single-portfolio mix design">
                    <div class="single-item" style="background:url('images/portfolio-img-big5.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('designsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                 </div>
                 <div class="single-portfolio mix design">
                    <div class="single-item" style="background:url('images/portfolio-img-big6.jpg') no-repeat;">
							<div class="row" style="padding:2%">
								
									<div class="col-md-12">
										<center><h3><font color="#ffd00d">Generic</font></h3></center>
									</div>
									<div class="col-md-10 col-md-offset-1" style="background-color:white;margin-top:42%">
										<center><font color="#ffd00d">Contest Ends on May 28</font></center>
									</div>
									<div class="col-md-8 col-md-offset-2"  onclick="showcontentmodal(1)" style="background-color:white;margin-top:5%;cursor:pointer">
										<center><i class="fa fa-eye"></i><font color="#ffd00d">&nbsp;View Challenge</font></center>
									</div>
								
								<div class="col-md-6 col-md-offset-3" style="margin-top:10px">
										<button type="submit" class="btn btn-warning btn-block" onclick="window.open('designsubmit.php','_self')">SUBMIT</button>
									</div>
									
								
							</div>
					</div>
                 </div>
               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->
  
  
  
  
  
  <!-- Start subscription section 
  <div class="container-fluid" >	
	<div class="row">
		<div class="col-md-12 non-floater" style="margin-top:1%">
			<iframe src="ccsubmit.html"   frameBorder="0"></iframe>
		</div>
	</div>
  </div>
  <!-- End subscription section -->
  
  

<div class="container-fluid">
    <div class="row">
      
        <div class="col-md-10 col-md-offset-1">
          
            <center><img src="images/challenges_home_banner2.jpg" alt="test" class="img-responsive"></center>
          
            <div class="carousel-caption">
              <h1>how it works.</h1>
			  <p>You’re free to create the
        designs you want: you are your own client. We won’t adulterate your
        designs, or curtail your artistic expression. Our role is to enable
        you and ensure your design integrity is preserved from beginning to end.</p>
            </div>
          
         </div>
             
      
      
 </div>
 <div class="row" >
		<div class="col-md-10 col-md-offset-1" style="background-color:white">
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Cloud-Download.png"><br>
				<h3>1. download the kit</h3><br>
				<p>The Challenge Kit has everything you need to know before you submit a design to Minted.</p>
				</center>
			</div>
			
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Upload.png"><br>
				<h3>2. submit your design</h3><br>
				<p>Register on Minted, complete your profile and upload your design.</p>
				</center>
			</div>
			
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Binoculars.png"><br>
				<h3>3. develop as an artist</h3><br>
				<p>Critique submissions and enjoy advice and feedback from our uniquely supportive creative community.</p>
				</center>
			</div>
		</div>
	</div>
	
	<div class="row" >
		<div class="col-md-8 col-md-offset-2" style="background-color:white">
			<div class="col-md-4 col-md-offset-1" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Comments.png"><br>
				<h3>4. have your say</h3><br>
				<p>By rating designs and artwork on a scale of 1-5, you      become a curator of the Minted marketplace.</p>
				</center>
			</div>
			
			<div class="col-md-4 col-md-offset-1" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Trophy.png"><br>
				<h3>5. reap the rewards</h3><br>
				<p>Winners receive a cash prize, as well as a platform      for their work and an ongoing commission from all sales. </p>
				</center>
			</div>
			
			
		</div>
	</div>
	
	
  
  
</div>
  
 <div class="container-fluid">
  <div class="row">
      
        <div class="col-md-10 col-md-offset-1">
          
             <center><img src="images/challenges_home_banner3.jpg" alt="test" class="img-responsive"></center>
          
            <div class="carousel-caption">
              <h1>why participate?</h1>
			  
            </div>
          
         </div>
             
      
      
 </div>
 
 <div class="row" >
		<div class="col-md-10 col-md-offset-1" style="background-color:white">
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Express.png"><br>
				<h3>express yourself</h3><br>
				<p>Our challenges are the place to let your creativity       shine - you're free to push boundaries and create work that's uniquely you.       Submit artwork and use Minted as a testing ground for new ideas.</p>
				</center>
			</div>
			
			<div class="col-md-4 " style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Scholar.png"><br>
				<h3>a place to learn</h3><br>
				<p>We like to think of Minted as a new type of design school -      a place where everyone from fledgling to established artists receives       constructive critique and support from Minted and from talented peers.</p>
				</center>
			</div>
			
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Medal.png"><br>
				<h3>earn from creation with no administration</h3><br>
				<p>Spend your time 100% on creation.       We'll handle manufacturing and shipping your work to customers,       all customer service inquiries, and driving traffic to your products.</p>
				</center>
			</div>
		</div>
	</div>
	
	
	
 <div class="row" >
		<div class="col-md-10 col-md-offset-1" style="background-color:white">
			<div class="col-md-4 " style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Megaphone.png"><br>
				<h3>build your brand</h3><br>
				<p>Minted builds all of our marketing around you, the artist.       In this way, we promote you and build your personal brand and fan base       through our global marketing: our catalogs, magazine ads, PR and more.</p>
				</center>
			</div>
			
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Fun.png"><br>
				<h3>have fun</h3><br>
				<p>Entering and winning Minted's challenges give you the       opportunity to experiment, have fun, connect with other artists, and       realize the 'thrill of the win' when your vision is validated by       thousands of voters.</p>
				</center>
			</div>
			
			<div class="col-md-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_Door.png"><br>
				<h3>your own Minted Store</h3><br>
				<p>Winners of Minted competitions also win their own       Minted Store - giving them a platform to share and sell their work with       no need to manufacture, ship, or provide customer service.</p>
				</center>
			</div>
		</div>
	</div>
	
		
 <div class="row" >
		<div class="col-md-10 col-md-offset-1" style="background-color:white">
			<div class="col-md-4 col-md-offset-4" style="padding:2%">
				<center>
				<img src="creativecornerassets/community_illustration_People.png"><br>
				<h3>a supportive creative community</h3><br>
				<p>Our community is the heart and soul of Minted.       Offering support, feedback, advice, and a "pay it forward" culture to       all, it's a welcoming space for talent to flourish and thrive.</p>
				</center>
			</div>
			
			
		</div>
	</div>
 
</div>
  
  
  
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


  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
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

		
		function showcontentmodal(id)
	{
		
		$('#contentModal').modal('show');
	}
		
		
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
	
	
	
	
	
	<!--Login Modal -------->
	
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Login to Kithabwala</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<div class="col-md-12">
					<center><p id="loginstatus">123</p></center>
				</div>
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
	        			<div class="form-group">
		              		<input type="text" id="loginemailid" placeholder="Enter your name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="loginpassword" placeholder="Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		
		            	<a class="btn btn-success modal-login-btn" onclick="return checkLoginParameters()">Login</a>
		            	<a  class="login-link text-center" onclick="toggle()" style="cursor:pointer">Lost your password?</a>
	        		</div>
	        	
	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
						<br><br>
	        				<a onclick="fb_login();" class="btn btn-default facebook1" style="font-size:80%"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
	        				<br>
	        				<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Fwww.kithabwala.com%2Fgoogle-login-api&client_id=860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com&scope=email+profile&access_type=online&approval_prompt=auto" class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
	        			
	        			</div> 
	        		</div>	
	        		<div id='center-line'> OR </div>
	        	</div>																												
        		<div class="clearfix"></div>
        		
        		<div class="form-group modal-register-btn">
        			<button class="btn btn-default" onclick="toggleModals()"> New User Please Register</button>
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>	
	
<!------------------->
	
	<!---------registration modal---------->
	
	<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">New to Kithabwala? Sign up!</h2>
      		</div>
      		<div class="modal-body login-modal">
      			
				
				<div class="col-md-12">
					<center><p id="registrationstatus">123</p></center>
				</div>
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body col-sm-10 col-sm-offset-1'>
	        			<div class="form-group ">
		              		<input type="text" id="registrationfirstname" placeholder="Enter your first name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		              		<input type="text" id="registrationlastname" placeholder="Enter your last name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		              		<input type="text" id="registrationemailid" placeholder="Enter Your Email Address" value="" class="form-control login-field">
		              		<i class="fa fa-envelope login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="registrationpassword" placeholder="Enter Your Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
						
						<div class="form-group">
		            	  	<input type="password" id="registrationconfirmpassword" placeholder="Confirm Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		
		            	<a  class="btn btn-success modal-login-btn" onclick="return checkRegistrationParameters()">Register</a>
		          
	        		</div>
	        	
	        		
	        	</div>																												
        		<div class="clearfix"></div>
        	
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>	
	
	<!------------------->
	









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






<!-- Content Modal -->
<div id="contentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p style="font-family: 'brandon-grotesque', Helvetica, Arial, sans-serif;font-size:30px">download the kit</p>
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