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
    <title>Home</title>
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
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	setTimeout(function(){
	showheader();
}, 3000);
</script>
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
	
		/* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
		
		
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
	
	

	
	
	
	
/*--------------------*/
/* MENU */
/*--------------------*/

#menu-area{
	float: left;
	display: inline;
	width: 100%;
}
.main-navbar {
	background: #fff none repeat scroll 0 0;
	border-radius: 0;
	border-bottom: 1px solid #e7e7e7;  
	border-right: medium none;
	height: 80px;
	margin-bottom: 0;
	-webkit-box-shadow: 0px 2px 4px 0px #f3f3f3;
	-moz-box-shadow: 0px 2px 4px 0px #f3f3f3;
	box-shadow: 0px 2px 4px 0px #f3f3f3;
}
.navbar-fixed-top{
	height: 80px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
}
.logo {
	height: 80px;  
	width: 70px;
	margin-right: 45px;
	margin-top: -25%;
	padding: 0;
}
.logo-compressed {
	height: 80px;  
	width: 70px;
}
.logo img {
	height: 100%;
	width: 100%;
}
#navbar {
	float: left;
	width: 83%;
}
.main-nav {
	display: inline-block;
	text-align: right;
	width: 100%;
}
.main-nav li {
	display: inline-block;
	float: none;
}
.main-nav li a {
	color: #636363;
	font-size: 15px;
	padding: 17px 20px;
	text-transform: uppercase;
}
.less-padding{
	padding: 17px 20px !important;
}

.navbar-default .navbar-nav > li > a {
  color: #636363;
  -webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  background-color: transparent;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    background-color: transparent;
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

  <!-- Start header section -->  
  <header id="header">

    <div class="header-inner">
      <!-- Header image -->
      <img src="images/header.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
       
		<div class="collapse navbar-collapse" >
	   
			<div class="row" style="text-align:center;" id="abc" >
				<div class="col-md-4" style="cursor:pointer">
					<p class="fixedp" style="position:fixed;color:grey;text-align:center;margin-top:13%;margin-left:7%">CREATIVE<br>CORNER</p>
					<div id="cchoverdiv" style="height:350px;">
					<div class="col-md-10 col-md-offset-1" style="border:1px solid orange;height:370px;width:80%;background:url('images/buttonbg.jpg') no-repeat" id="ccdiv">
							<img src="images/msp.png"  class="img-circle" width="200" height="175"><br>
							<p class="mine" onclick="window.open('creative.php','_self')">CREATIVE<br>CORNER</p><br><br>
							<a href="creative.php" class="action-button shadow animate red">EXPLORE YOUR CREATIVITY</a>
							
							
					</div>
					</div>
				</div>
				<div class="col-md-4"   style="cursor:pointer">
					<p class="fixedp" style="position:fixed;color:grey;text-align:center;margin-top:13%;margin-left:6%">PRODUCTS</p>
					<div id="phoverdiv" style="height:350px;">
					<div class="col-md-10 col-md-offset-1" style="border:1px solid orange;height:370px;width:80%;background:url('images/buttonbg.jpg') no-repeat" id="pdiv">
							<img src="images/msp.png"  class="img-circle" width="200" height="175"><br>
							<p class="mine" onclick="window.open('products.php','_self')">PRODUCTS<br>&nbsp;</p><br><br>
							<a href="products.php" class="action-button shadow animate blue">VIEW OUR PRODUCTS</a>
							
							
					</div>
					</div>	
				</div>
				<div class="col-md-4"   id="ad" style="cursor:pointer">
					<p class="fixedp" style="position:fixed;color:grey;text-align:center;margin-top:13%;margin-left:6%">ADVERTISE</p>
					<div id="adhoverdiv" style="height:350px;">
					<div class="col-md-10 col-md-offset-1" style="border:1px solid orange;height:370px;width:80%;background:url('images/buttonbg.jpg') no-repeat" id="addiv">
							<img src="images/msad.png" class="img-circle" width="200" height="175"><br>
							<p class="mine" onclick="window.open('advertise.php','_self')">ADVERTISE<br>&nbsp;</p><br><br>
							<a href="advertise.php" class="action-button shadow animate green">BRAND WITH US</a>
						
							
					</div>
					</div>
				</div>
			</div>
			</div>
			
			
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn menu-scroll" onclick="hideheader()" ><i class="fa fa-chevron-down"></i></a>
        </div>
      </div>
      </div>      
    </div>

  </header>
  <!-- End header section -->
<div id="bodyid">
  <!-- Start menu section -->
  <section id="menu-area">
	
    <nav class="navbar navbar-default main-navbar" role="navigation">  
		<div class="row" >
			<div class="col-md-2 col-md-offset-5" style="margin-top:-2%">
				<center><a onclick="showheader()" style="cursor:pointer"><img src="images/header.jpg" width="50" height="50" class="img img-circle"></a></center>
			</div>
		</div>
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"><img src="images/logo.png" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
			<li class="active"><a href="home.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li> 
            <li><a href="products.php">PRODUCTS</a></li>                    
            <li><a href="advertise.php">ADVERTISE </a></li> 
            <li><a href="creative.php">CREATIVE</a></li> 
			
			 </ul> 
			 <ul id="top-menu" class="nav navbar-nav navbar-right menu-scroll">
			
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
			
        </div><!--/.nav-collapse -->
            
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Kithabwala</span></h2>
              <span class="tittle-line"></span>
              <p>Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.</p>
            </div>
           
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      
    </div>
  </section> 
  <!-- End about section -->

  
  
  
  
  
  
  
  
  
  
   

<!----------start carousel section------------->
 
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="img/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="img/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="img/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="img/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="img/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="img/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="img/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="img/c-slide-3.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="img/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="img/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div>
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/purple.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/blue.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

  <!-- End carousel section -->
  
  
  
 

 
 
  <!-- Start from blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
      
              
              <p><font color="" size="5px">We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</font></p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/cc.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Advertise With US</a></h2>
                     
                    </div>
                   
                    
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/cc.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Creative Corner</a></h2>
                      
                    </div>
                    
                   
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/products.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">View Our Products</a></h2>
                      
                    </div>
                  
                   
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->
  
  




  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">What people say about us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>You and your team are doing an awesome job. This was a valuable investment. It’s just the beginning; I can see it getting even bigger. Thanks for allowing us to brand with you</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="images/vssmani.jpg" alt="img">
                      <p>VSS Mani</p>
                      <span>Founder, JustDial</span>
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
  <!-- End Testimonial section -->

  
  

  
  
  
  <!-- Start from blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle">Our blog</h2>
              <span class="tittle-line"></span>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/the-sky.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/photographer.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="images/sealand.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  
 
   <!-- Start subscription section -->
  <section id="contact">
    <div class="container">
      <div class="row">
     
        <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-12">
         
			
			<input type="email" class="form-control" id="email" placeholder="Subscribe to our Newsletter">
		 </div>
		 <div class="col-md-2">
		 
		 
		  
		   <button type="submit" class="btn btn-primary btn-block">JOIN</button>
		</div>
    </div>
  </section>
  <!-- End subscription section -->
  
  
  
  
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
  
  
  
  
    <div class="row" style="padding-top:10%" id="skyline">
	<img src="images/hydfooter.png" width="100%" style="margin-top:10%">
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
  
  
</div>
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
		 jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
		
		
		
		
		
		
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
		
		
		
		
		
		
		
			$('#ccdiv').hide();
		$('#pdiv').hide();
		$('#addiv').hide();
	 
	 
	$("#cchoverdiv").hover(function(){
    $('#ccdiv').slideDown(500);
	 $('#pdiv').slideUp(500);
	 $('#addiv').slideUp(500);
});

$("#phoverdiv").hover(function(){
     $('#ccdiv').slideUp(500);
	 $('#pdiv').slideDown(500);
	 $('#addiv').slideUp(500);
});

$("#adhoverdiv").hover(function(){
    $('#ccdiv').slideUp(500);
	 $('#pdiv').slideUp(500);
	 $('#addiv').slideDown(500);
});

$("#abc").hover(function(){
    $('#ccdiv').slideUp(500);
	 $('#pdiv').slideUp(500);
	 $('#addiv').slideUp(500);
});

	
	
	
	var fixmeTop = $('.fixedp').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll <= 100) {
        $('.fixedp').css({
            position: 'fixed',
			display:'block'
            
        });
    } else {
        $('.fixedp').css({
            position: 'static',
			display:'none'
        });
    }
});


setTimeout(function(){ showheader();}, 5000);


	
	function hideheader()
	{
	
			$("#bodyid").show();
			$("#header").slideUp(1000);
			
	}
	function showheader()
		{
			$("#header").slideDown(1000);
			$("#bodyid").hide();
			
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
							<center><div class="g-signin2" data-width="195" data-height="35" data-longtitle="true" data-onsuccess="onSignIn"></div></center>
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