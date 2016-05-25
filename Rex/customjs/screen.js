	
if(screen.availWidth >= 500)
{
	
	document.getElementById("navigation").className='navbar navbar-fixed-top';
	document.getElementById("topdiv").setAttribute("style","margin-top:7%");
	document.getElementById("logoimage").setAttribute("style","margin-top:-2%");
}
else{
	//alert(1);
	document.getElementById("navigation").className='navbar navbar-static-top';
	document.getElementById("topdiv").setAttribute("style","margin-top:0%");
	document.getElementById("logoimage").setAttribute("style","margin-top:-10%");
	
	
}