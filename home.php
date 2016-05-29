<?php
session_start();
error_reporting(E_ALL);
 ini_set('display_errors', '1');
 $_SESSION['previousurl'] = basename($_SERVER['REQUEST_URI']); 

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
	<link rel="shortcut icon" type="image/icon" href="images/logo.ico"/>
    <!-- Favicon -->
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
	
	<style>
	
	

	
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
		
		
		

	
	.roundup
	{
		cursor:pointer;
		
		border-radius:75%;
		height:70px;
		width:50px;
		padding-top:10px;
		padding-left:50px;
		padding-right:50px;
		background-color:#ffd00d;
	}
	
	.roundup:hover{
		background-color:white;
		
		
	}
	

.non-floater { overflow:hidden; }
iframe { width:100%; padding:0; border:0; height: 99vh;   }

.links{
	color:white;
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


   <div class="non-floater" id="header">
	
  <iframe id="iframe1" src="header.html" ></iframe>

</div>
  

  <body>

  

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#menu-area"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->



  
 

 

 
<div id="bodyid" style="display:none">
 
 

<!-- Start menu section -->
  <nav class="navbar navbar-static-top" style="background-color:#c2c4c6;height:80px;display:none" id="navigation">
  
   <div class="row" id="goup" style="background-color:#c2c4c6">
			<div class="col-md-2 col-md-offset-5" style="margin-top:-0.5%">
				<center><a onclick="showheader()" class="roundup"><span class="glyphicon glyphicon-chevron-up"></a></center>
			</div>
		</div>
	
  <div class="container-fluid" style="background-color:#c2c4c6">
    <div class="navbar-header" style="background-color:#c2c4c6">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rkNavbar">
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span>
        <span class="icon-bar" style="background-color:black"></span> 
      </button>
      <a class="navbar-brand" href="home.php" ><img src="images/newlogo.jpg" width="100" height="50" style="margin-top:-14%;background-color:#c2c4c6"></a>
    </div>
    <div class="collapse navbar-collapse" id="rkNavbar" style="margin-top:-2%;background-color:#c2c4c6">
      <ul class="nav navbar-nav" style="padding-left:5%">
        <li class="active"><a href="home.php"><font color="white">HOME</font></a></li>
            <li ><a href="aboutus.php" >ABOUT US</a></li> 
            <li ><a href="products.php">PRODUCTS</a></li>                    
            <li ><a href="advertise.php">ADVERTISE </a></li> 
            <li ><a href="halloffame.php">CREATIVE</a></li> 
			
      </ul>
      <ul class="nav navbar-nav navbar-right" >
        
			
			<?php 
			
			if(!isset($_SESSION['kithabwalaemailid']))
			{
						echo '<li id="login"><a href="#d" data-toggle="modal" data-target="#loginModal"><font size="2px"><span class="glyphicon glyphicon-log-in"></span> Sign In</font></a></li> 
							';
			}
			else
			{
				$content =  '<div><a  style="cursor:pointer" data-toggle="dropdown"><font color="black" size="2px"><b>Welcome <i>'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</i></b></font>'
						.'	<span class="caret"></span></a>'
						.'	<ul class="dropdown-menu" style="background-color:white;padding:2%">'
						.'	<li><a class="header-color" href="dashboard.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;Dashboard</a></li>'
						.'	<li><a class="header-color" href="accountsettings.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Account Settings</a></li>';
					
					
					
					$content .= '<li><a class="header-color" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;LogOut</a></li>'
							. '</ul>'
							
							.'	</div>';
							echo $content;
			}
						
			?>
      </ul>
    </div>
  </div>
</nav>
 <!-- End menu section -->
  
  
 
  <!-- Start about section -->
  <section id="about" >
    <div class="container">
      <div class="row" id="topdiv">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Kithabwala</span></h2>
              <span class="tittle-line"></span>
			<p>We are inspired from experiences and aim to give a transformational makeover to the rustic notebook, making it more than just a place to write!</p>
            </div>
           
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      
    </div>
  </section> 
  <!-- End about section -->
  
  
  
  
  
  
   

<!----------start carousel section------------->
	 <section id="about">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">
           <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/purple.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/blue.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/purple.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/blue.jpg" />
            </div>
          
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        
    </div>
 </section >
  <!-- End carousel section -->
  
  
  
 

 
 
  <!-- Start from blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
      
              
              <p><font color="" size="3px">Kithabwala, from the house of Samast Enterprises India Pvt. Ltd., offers an innovative series of notebooks that are specifically designed to strike a chord with customer while giving them an unmatched combination of humour, rewards, entertainment and premium quality at budget-friendly prices.</font></p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                
				
				<div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="products.php"><img src="images/products.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="products.php">View Our Products</a></h2>
                      
                    </div>
                  
                   
                  </article>
                </div>
				
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="halloffame.php"><img src="images/cc.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="halloffame.php">Creative Corner</a></h2>
                      
                    </div>
                    
                   
                  </article>
                </div>
				
				
				<div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="advertise.php"><img src="images/rk.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="advertise.php">Advertise With US</a></h2>
                     
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
  
  


<section id="testimonial">
  <div class="container-fluid" style="text-align:center;background-image:url('images/testimonial-bg.jpg');color:white;">
	<div class="row" style="background-color: rgba(0, 0, 0, 0.7);padding:20px 0;height:380px;">
		<div class="col-md-8 col-md-offset-2" >
		<h2 class="tittle"><font color="white">What people say about us</font></h2>
		 <p>You and your team are doing an awesome job. This was a valuable investment. It’s just the beginning; I can see it getting even bigger. Thanks for allowing us to brand with you</p>
		 <img class="testimonial-thumb" src="images/vssmani.jpg" alt="img"><br>
                      <p>VSS Mani</p>
                      <span>Founder, JustDial</span>
	</div>
	</div>
  </div>
  
 </section>

  <!--
  <section id="testimonial">
    <img src="images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">What people say about us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
               
                <div class="testimonial-slider">
                 
                  <div class="single-slide">
                     <p>You and your team are doing an awesome job. This was a valuable investment. It’s just the beginning; I can see it getting even bigger. Thanks for allowing us to brand with you</p>
		 <img class="testimonial-thumb" src="images/vssmani.jpg" alt="img"><br>
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
  </section>
  Testimonial section -->

  
  

  
  
  
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

				<div class="row" style="margin-top:2%">
					<div class="col-md-12">
						<center><a target="_blank" href="http://kithabwala.blogspot.in/" class="btn btn-warning">Visit Our Blog</a></center>
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
  
    <div class="container-fluid">
			<div class="row" style="background-color:#ffd00d">
     
						<div class="col-md-6 col-md-offset-1" style="text-align:right;margin:6% 0;">
							<input type="email" class="form-control" id="subscriptionemail" placeholder="Subscribe to our Newsletter">
						 </div>
						  <div class="col-md-3" style="text-align:left;margin:6% 0;background-color:#ffd00d">
							<button type="submit" class="btn btn-primary btn-block" onclick="subscribe()">SUBSCRIBE</button>
						</div>
		
						<div class="col-md-2" style="text-align:right">
							   <div class="row" >
									<div class="fb-page" data-href="https://www.facebook.com/Kithabwala-156605224697747/" data-small-header="false"  data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
								</div>
							</div>
			</div>
	 </div>
  <!-- End subscription section -->
  
  
  
  
  <div id="contactus">
<!-- TRADE ENQUIRIES SECTION -->
    <a class="fixed_queries_section phone_icon"><i class="fa fa-phone" ></i></a>

    <div class="fixed_queries_section_overlay" style="display: none;"></div>

    <div class="fixed_queries_content inner">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" >
            <li role="presentation" class="first"><a aria-controls="home" role="tab" data-toggle="tab">Order Queries</a></li>
            
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
		
		
		
		
		
		
if(screen.availWidth >= 500)
{
	
	//alert(screen.availWidth);
	setTimeout(function(){ 
	//showheader();
	}, 10000);
}
else{
	//alert(screen.availWidth);
	$("#header").hide();
	$("#goup").hide();
	$("#bodyid").show();
	$("#skyline").show();
	$("#footer").show();
	document.getElementById("navigation").setAttribute("style","display:visible");
	document.getElementById("navigation").className='navbar navbar-static-top';
	document.getElementById("topdiv").setAttribute("style","margin-top:0%");
}
	
	
	


	
	function hideheader()
	{
				document.getElementById("navigation").setAttribute("style","display:visible");
				document.getElementById("navigation").setAttribute("style","background-color:#c2c4c6");
				document.getElementById("navigation").setAttribute("style","height:80px");
			$("#bodyid").show(function(){
						$("#header").slideUp(1000,function(){
								$('#iframe1').contents().find('header#banner').slideUp(1000,function(){
									$("#footer").show();
									$("#skyline").show();
									document.getElementById("navigation").className='navbar navbar-fixed-top';
									document.getElementById("topdiv").setAttribute("style","margin-top:8.5%");
								 
						});
					});
						
			});
			
	
	
	

			
	}
	function showheader()
		{
			document.getElementById("navigation").setAttribute("style","display:none");
			
			$('#iframe1').contents().find('header#banner').slideDown(1,function(){
					$("#header").slideDown(1000,function(){
						
						document.getElementById("navigation").className='navbar navbar-static-top';
						document.getElementById("topdiv").setAttribute("style","margin-top:0%");
							$("#bodyid").hide();
							$("#footer").hide();
							$("#skyline").hide();
					});
					
			});
			
			
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








<!-- subscription Modal -->
  <div class="modal fade" id="subscriptionModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <center><h4 class="modal-title">Subscription</h4></center>
			</div>
         <div class="modal-body" style="text-align:center" id="subscriptionstatus">
        
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
	<script src="customjs/subscription.js"></script>

	



  </body>
  
   <div class="row" style="padding-top:1%;display:none" id="skyline">
	<img src="images/hydfooter.png" width="100%" style="margin-top:10%">
  </div>
  
  
  	
  <!-- Start Footer -->    
  <footer id="footer" style="background-color:#242424;display:none">
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
  
</html>