<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="js/jquery.min.1.7.js"></script>
<script type="text/javascript" src="js/modernizr.2.5.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/basic.css">
<!--<link rel="icon" href="demo_icon.gif" type="images/favicon.jpg">-->
</head>
<body style="background-image:url(images/bg.jpg)">

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div class="hard p1" style="background-image:url(images/coverphoto.png);background-size:cover">
				<center><button onclick="turnPages()" class="button">Click Me to know More !!</button></center>
			</div>
			
			<div class="hard p2" style="background-color:purple;">
				<div class="page1">
					<div class="div1InPage1">
						We are Curre
					</div>
					<img src="images/pr1.gif" width="40%" height="40%" align="right" style="margin-top:5%">
					<div class="div2InPage1">
						More for less ev
					</div>
				</div>
			</div>
			
			<div class="hard p3" style="background-color:purple;">
				<div class="page2">
					<div class="div1InPage2">
						ntly Printing !!
					</div>
					<img src="images/pr2.gif" width="40%" height="40%" style="margin-top:5%">
					<div class="div2InPage2">
						en in Notebooks !!
					</div>
				</div>
			</div>
			
			<div class="hard p4" style="background-color:purple">
				<div class="lastPage">
					<div style="margin-top:125%;text-align:center">
						&copy; All Rights reserved to KithabWala.com website
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript">

	
function turnPages()
{
  
        $(".flipbook").turn("next");
        
		
  
}
function loadApp() {

	// Create the flipbook

	
				
				
	$('.flipbook').turn({
			// Width

			width:840,
			
			// Height

			height:550,

			// Elevation

			elevation: 50,
			
			// Enable gradients
			page:1,
			
			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true,
			
			
			
			duration:3000

	});
}


	
	

			
		
	
// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['js/turn.js'],
	nope: ['js/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>

</body>
</html>