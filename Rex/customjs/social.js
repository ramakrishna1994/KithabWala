  
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



/*
function render_google_btn() {
    gapi.signin.render('custom_google_btn', {
        'redirecturi':  "postmessage",
        'accesstype':   "offline",
        'callback':     "signinCallback",
        'scope':        "https://www.googleapis.com/auth/userinfo.email",
        'clientid':     "860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com",
        'cookiepolicy': "single_host_origin"
    });
}

function google_login_callback (authResult) {
    if (authResult['status']['signed_in'] && authResult['status']['method'] == 'PROMPT') {
        // Hide the sign-in button now that the user is authorized, for example:
        document.getElementById('gSignInWrapper').setAttribute('style', 'display: none');
        gapi.client.load('plus', 'v1', function() {

            var request = gapi.client.plus.people.get({
                'userId' : 'me'
            });
            request.execute(function(resp) {
                if (resp['emails']) {
                    for (var i = 0; i < resp['emails'].length; i++) {
                        if (resp['emails'][i]['type'] == 'account') {
                            email = resp['emails'][i]['value'];
                        }
                    }
                }
                Id = resp.id;
            });
        });

    } else if (authResult['error']) {
        // There was an error.
        // Possible error codes:
        //   "access_denied" - User denied access to your app
        //   "immediate_failed" - Could not automatially log in the user
        console.log('Sign-in state: ' + authResult['error']);
    }
}*/