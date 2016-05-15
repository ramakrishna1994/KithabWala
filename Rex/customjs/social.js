  
  window.fbAsyncInit = function() {
    FB.init({
	    appId      : '493329037393007',
	    cookie     : true,  // enable cookies to allow the server to access 
	                        // the session
	    xfbml      : true,  // parse social plugins on this page
	    version    : 'v2.5' // use graph api version 2.5
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  
function fb_login(){
    FB.login(function(response) {

        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            access_token = response.authResponse.accessToken; //get access token
            user_id = response.authResponse.userID; //get FB UID

            FB.api('/me', { locale: 'en_US', fields: 'first_name, email , last_name ' },function(response) {
                user_email = response.email; //get user email
                var formData = new FormData();
			formData.append( 'emailid',response.email);
			formData.append( 'firstname',response.first_name);
			formData.append( 'lastname',response.last_name);

			
        			 
	 $(document).ready(function(){
		 

		 $.ajax({
		        url: "phpFiles/fbandgmail.php",// give your url
		        type: "POST",
		        data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
					 
						 
					    
			        	
		           window.location.reload();
			        	
				   
				 
				
					  
			        	
					
				 
				
				
				
		            
		        }
		            
		        
		    });
 });
 
          // you can store this data into your database             
            });

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

        }
    });
}
(function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
   
}());
  
  
  
  
  
  
  
  
  
  
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('firstName: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  			var formData = new FormData();
			formData.append( 'emailid',profile.getEmail());
			formData.append( 'firstname',(profile.getName().split(" "))[1]);
			formData.append( 'lastname',(profile.getName().split(" "))[0]);
 $(document).ready(function(){
		 

		 $.ajax({
		        url: "phpFiles/fbandgmail.php",// give your url
		        type: "POST",
		        data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
					 
						 
					    
			        	
		           window.location.reload();
			        	
				   
				 
				
					  
			        	
					
				 
				
				
				
		            
		        }
		            
		        
		    });
 });
}