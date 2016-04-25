


function clear()
{
	document.getElementById("resetEmailDivision").className = 'form-group';
    document.getElementById("resetEmailErrorSpan").className = '';
    document.getElementById("resetemailid").setAttribute("data-content", "");
}


function toggle()
{
	$('#loginModal').modal('toggle');
	setTimeout(function(){  $('#resetPasswordModal').modal('toggle'); }, 500);
	
	
}
	
	
function forgotPassword()
{
	
	var emailid = document.getElementById("resetemailid").value;
	clear();
	$('#resetpasswordstatus').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	
	if(emailid == '')
	 {
		
		document.getElementById("resetEmailDivision").className = 'form-group has-error has-feedback';
	    document.getElementById("resetEmailErrorSpan").className = 'glyphicon glyphicon-remove form-control-feedback';
		document.getElementById("resetemailid").setAttribute("data-content", "Please Enter Email address");
		document.getElementById("resetemailid").focus();
		$('#resetpasswordstatus').html('');
		return false;
	 
	 }
	 
	else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailid)))  
	  {  
		document.getElementById("resetEmailDivision").className = 'form-group has-error has-feedback';
	    document.getElementById("resetEmailErrorSpan").className = 'glyphicon glyphicon-remove form-control-feedback';
	   document.getElementById("resetemailid").setAttribute("data-content", "Please Enter Valid Email Address");
	  document.getElementById("resetemailid").focus();
		$('#resetpasswordstatus').html('');
	   return;
		 	  
	  }  
	else
	{
		$(document).ready(function(){
			
			
			$.post("phpFiles/forgotPassword.php",{emailid : emailid},function(data){
				
				if(data.error == 1)
					{
					
					 $('#resetpasswordstatus').html('<font color="red">Email Address Does Not Exists</font>');
					}
				else
					{
					
					 $('#resetpasswordstatus').html('<font color="green">A link to reset your password has been sent to your Email Id</font>');
					 
					}
				
			},"json");
		});
	  

	
	}
}