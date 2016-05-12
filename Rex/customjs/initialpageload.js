$(document).ready(function(){
  
    
  $("#signup").hide();
  $("#login").hide();
  $("#userdetails").hide();  
  
  
			$.ajax({
				url: "phpFiles/isSessionSet.php",// give your url
				type: "GET",
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function (response) {
				console.log(response.error);
				if(response.error == 1)
				{
					$("#signup").show();
					$("#login").show();
					$("#userdetails").hide();  
				}
					
				else
				{
					$("#signup").hide();
					$("#login").hide();
					$("#userdetails").show(); 
					
					$("#loginusername").html = response.firstname + "&nbsp;" + response.lastname;
				}


				}
				});
				
});