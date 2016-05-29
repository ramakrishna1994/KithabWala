	
if(screen.availWidth >= 500)
{
	
	document.getElementById("navigation").className='navbar navbar-fixed-top';
	document.getElementById("topdiv").setAttribute("style","margin-top:7%");
}
else{
	
	document.getElementById("navigation").className='navbar navbar-static-top';
	document.getElementById("topdiv").setAttribute("style","margin-top:0%");
	
	
}