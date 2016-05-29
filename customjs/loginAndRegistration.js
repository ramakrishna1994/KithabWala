	


var registrationemailid,registrationfirstname,registrationlastname,registrationpassword; 
clearParameters();

function clearParameters()
{
	
	
	
	
	$('#loginstatus').html('');
	

	

	
	


	$('#registrationstatus').html('');
	
	
	
	
	$('#verificationstatus').html('');
	
}


function toggleModals()
{
	$('#loginModal').modal('toggle');
	setTimeout(function(){  $('#registrationModal').modal('toggle'); }, 500);
	clearParameters();
	
	
}
	
function toggleVerificationModal()
{
	$('#verificationModal').modal('toggle');
	setTimeout(function(){  $('#loginModal').modal('toggle'); }, 500);
	clearParameters();
}	
function checkLoginParameters()
{

				clearParameters();
				$('#loginstatus').html('&nbsp;&nbsp;<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');


				if(document.getElementById("loginemailid").value == "")
				{

				
				document.getElementById("loginemailid").focus();
				$('#loginstatus').html('<font color="red">Please Enter Email Address</font>');
				return false;
				}

				if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("loginemailid").value)))  
				{  

				
				document.getElementById("loginemailid").focus();
				$('#loginstatus').html('<font color="red">Please Enter Valid Email address</font>');
				return false;
				  
				}  


				if(document.getElementById("loginpassword").value == "")
				{

				
				document.getElementById("loginpassword").focus();
				$('#loginstatus').html('<font color="red">Please Enter Password</font>');
				return false;
				}

				return doLogin();


}



function doLogin()
{
				var emailid = document.getElementById('loginemailid').value;
				var password = document.getElementById('loginpassword').value;
				var formData = new FormData();
				formData.append( 'emailid', emailid);
				formData.append( 'password',password );
				$(document).ready(function(){


				$.ajax({
				url: "phpFiles/login.php",// give your url
				type: "POST",
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function (response) {
				console.log(response.error);
				if(response.error === "1")
				$('#loginstatus').html('<font color="red">The email Id and password you entered don\'t match.</font>');
				else
				{
				$('#loginstatus').html('<font color="green">Success</font>');
				location.reload();
				}


				}
				});
				});
}
		
		
function doRegistration()
{
			 registrationfirstname = document.getElementById('registrationfirstname').value;
			 registrationlastname = document.getElementById('registrationlastname').value;
			 registrationemailid = document.getElementById('registrationemailid').value;
			 registrationpassword = document.getElementById('registrationpassword').value;
			var confirmpassword = document.getElementById('registrationconfirmpassword').value;
			
			var formData = new FormData();
			formData.append( 'emailid',registrationemailid );
			
			$(document).ready(function(){


		 $.ajax({
				url: "phpFiles/registration.php",// give your url
				type: "POST",
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function (response) {
					if(response.error == 1)
				{
					$('#registrationstatus').html('<font color="red">Email Id Already Exists</font>');
		       
				}	
				else
				{
					 
					$('#registrationModal').modal('hide');		
					$('#verificationModal').modal('show');		
						
						$('#registrationstatus').html('');
					var request = $.ajax({
						url: 'phpFiles/sendVerificationCode.php',
		                type: 'POST',
		               data:
		               {
		                	emailid : registrationemailid ,
		                	
		                	
		                }
		            });
				}
					
				}
			});
		});
}



function checkRegistrationParameters()
{
	clearParameters();
	$('#registrationstatus').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	
	

	
	
	if(document.getElementById("registrationfirstname").value == "")
	  {
	  
	   
	   document.getElementById("registrationfirstname").focus();
	   $('#registrationstatus').html('<font color="red">Please Enter First Name</font>');
	    
	    return false;
	  }

	  if(document.getElementById("registrationlastname").value == "")
	  {
	  
	   
	   document.getElementById("registrationlastname").focus();
	  $('#registrationstatus').html('<font color="red">Please Enter Last Name</font>');

	    
	    return false;
	  }

	  
  if(document.getElementById("registrationemailid").value == "")
	  {
	  
	   
	   document.getElementById("registrationemailid").focus();
	   
	   $('#registrationstatus').html('<font color="red">Please Enter Email address</font>');
	    return false;
	  }
  
  if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("registrationemailid").value)))  
  {  

	  
	   document.getElementById("registrationemailid").focus();
	   $('#registrationstatus').html('<font color="red">Please Enter Valid Email address</font>');
	   return false;
	 	  
  }  

 
  
  if(document.getElementById("registrationpassword").value == "")
  {
  
   
   document.getElementById("registrationpassword").focus();
   $('#registrationstatus').html('<font color="red">Please Enter Password</font>');
    
    return false;
  }

  if(document.getElementById("registrationconfirmpassword").value == "")
  {
  
   document.getElementById("registrationconfirmpassword").focus();
  $('#registrationstatus').html('<font color="red">Please Confirm Password</font>');

    
    return false;
  }

  if(document.getElementById("registrationconfirmpassword").value != document.getElementById("registrationpassword").value)
  {
  
	  
	 
  $('#registrationstatus').html('<font color="red">Passwords do not match</font>');

    
    return false;
  }
  	
  
  
  
  
  return doRegistration();

  
}







function verifyVerificationNumber()
{
	
	
	var verificationcode = document.getElementById("verificationcode").value;
	
	
	 $('#verificationstatus').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	 
	 if(verificationcode == "")
		 {
		  
     	  $('#verificationstatus').html('<font color="red">Please Enter Verification Code</font>');
     	  return;
		 }
	
	 
	$(document).ready(function(){
		 
		 
		
		 $.post( "phpFiles/verifyVerificationNumber.php", 
				 
		  {
			 emailid : registrationemailid, 
			 firstname : registrationfirstname,
			 lastname :registrationlastname ,
			 password :registrationpassword ,
			 verificationcode : verificationcode
			 
		  },function(data) {
		   
		      if(data.error == 1)
		    	  {
		    	  
		    	  
		     	   $('#verificationstatus').html('<font color="red">Verification Code is wrong</font>');
		    	  }
		 
		      else
		    	  {
		    	  
		    	  
			    
	        	$('#verificationstatus').html('<font color="green">Successfully registered!! <br>Please Click on <a type="button" class="btn btn-success btn-xs" onclick="toggleVerificationModal()">Login</a> to proceed</font>');
	        	document.getElementById("verificationcode").value="";
	        	
	        	
		    	  }
		 
		 
		
	 },"json");
});
}



function resendCode()
{
	
	 $('#verificationstatus').html('<img src="images/loader.gif" style="height: 3%;width: 2%">');
	
	$(document).ready(function(){
		var request = $.ajax({
            url: 'phpFiles/sendVerificationCode.php',
            type: 'POST',
           data:
           {
            	emailid : registrationemailid ,
            	
            }
        });
    	
    	$.when(request).done(function(){
    		
        	$('#verificationstatus').html('<font color="green">Successfully Sent !!</font>');
        	
    	});
		
	});
}











function logout()
{
	$(document).ready(function(){
		 
		 
		
		 $.post( "phpFiles/logout.php" 
				 
		  ,function(data) {
		   
		      window.location.reload();
		 
		 
		
	 },"json");
});
}


