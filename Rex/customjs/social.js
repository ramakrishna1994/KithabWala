  
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
            //console.log('Welcome!  Fetching your information.... ');
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
            //console.log('User cancelled login or did not fully authorize.');

        }
    });
}
(function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
   
}());
  
  
  
  
  /********************************google sign in***********************************/
  
  
  
  var auth2 = {};
  var first_run = true;
  
    function onSignInCallback(data) {
  if(!first_run) {
	  alert(2);
	   
      helper.onSignInCallback(data);
  }
  first_run = false;
 
}

var helper = (function() {
  return {
    /**
     * Hides the sign in button and starts the post-authorization operations.
     *
     * @param {Object} authResult An Object which contains the access token and
     *   other authentication information.
     */
	 
    onSignInCallback: function(authResult) {
      $('#authResult').html('Auth Result:<br/>');
      for (var field in authResult) {
        $('#authResult').append(' ' + field + ': ' +
            authResult[field] + '<br/>');
      }
      if (authResult.isSignedIn.get()) {
        $('#authOps').show('slow');
        $('#gConnect').hide();
        helper.profile();
        helper.people();
      } else {
          if (authResult['error'] || authResult.currentUser.get().getAuthResponse() == null) {
            // There was an error, which means the user is not signed in.
            // As an example, you can handle by writing to the console:
            //console.log('There was an error: ' + authResult['error']);
          }
          $('#authResult').append('Logged out');
          $('#authOps').hide('slow');
          $('#gConnect').show();
      }

      console.log('authResult', authResult);
    },

   

   
 
   

    /**
     * Gets and renders the currently signed in user's profile data.
     */
    profile: function(){
      gapi.client.plus.people.get({
        'userId': 'me'
      }).then(function(res) {
        var profile = res.result;
        //console.log(profile);
		//alert(1);
         var formData = new FormData();
			formData.append( 'emailid',profile.emails[0].value);
			formData.append( 'firstname',profile.name.familyName);
			formData.append( 'lastname',profile.name.givenName);
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
        
        
        
      }, function(err) {
        var error = err.result;
      
       
      });
    }
  };
})();

/**
 * jQuery initialization
 */
$(document).ready(function() {
  $('#disconnect').click(helper.disconnect);
  $('#loaderror').hide();
  if ($('meta')[0].content == 'YOUR_CLIENT_ID') {
    alert('This sample requires your OAuth credentials (client ID) ' +
        'from the Google APIs console:\n' +
        '    https://code.google.com/apis/console/#:access\n\n' +
        'Find and replace YOUR_CLIENT_ID with your client ID.'
    );
  }
});

/**
 * Handler for when the sign-in state changes.
 *
 * @param {boolean} isSignedIn The new signed in state.
 */
var updateSignIn = function() {
  //console.log('update sign in state');
  if (auth2.isSignedIn.get()) {
    //console.log('signed in');
    helper.onSignInCallback(gapi.auth2.getAuthInstance());
  }else{
    //console.log('signed out');
    helper.onSignInCallback(gapi.auth2.getAuthInstance());
  }
}

/**
 * This method sets up the sign-in listener after the client library loads.
 */
function startApp() {
  gapi.load('auth2', function() {
    gapi.client.load('plus','v1').then(function() {
      gapi.signin2.render('signin-button', {
          scope: 'https://www.googleapis.com/auth/plus.login',
          fetch_basic_profile: true });
      gapi.auth2.init({fetch_basic_profile: true,
          scope:'https://www.googleapis.com/auth/plus.login'}).then(
            function (){
              //console.log('init');
              auth2 = gapi.auth2.getAuthInstance();
              auth2.isSignedIn.listen(updateSignIn);
              auth2.then(updateSignIn);
            });
    });
  });
}



