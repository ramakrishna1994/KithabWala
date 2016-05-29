

function subscribe()
{
				$("#subscriptionModal").modal('show');
				$('#subscriptionstatus').html('&nbsp;&nbsp;<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
				var emailid = document.getElementById('subscriptionemail').value;
				if(document.getElementById("subscriptionemail").value == "")
				{
					$('#subscriptionstatus').html('<font color="red">Please Enter Email ID</font>');
					return false;
				}

				if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("subscriptionemail").value)))  
				{  
					$('#subscriptionstatus').html('<font color="red">Please Enter Valid Email ID</font>');
					return false;
				  
				}  
				var formData = new FormData();
				formData.append( 'emailid', emailid);
				
				$(document).ready(function(){


				$.ajax({
				url: "phpFiles/subscription.php",// give your url
				type: "POST",
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function (response) {
				console.log(response.error);

				
				
				$('#subscriptionstatus').html('<font color="green">Thank you for Subscribing with us</font>');
				
				


				}
				});
				});
}
		