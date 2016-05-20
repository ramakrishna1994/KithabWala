$(":file").filestyle();		
				
function submitPost(posttype)
{
	$('#status').html('&nbsp;&nbsp;<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	var title = document.getElementById("title").value;
	var comment = document.getElementById("comment").value;
	var theme = document.getElementById('theme').value;
	var colors = document.getElementById('colors').value;
	var fonts = document.getElementById('fonts').value;
	var tags = document.getElementById('tags').value;
	
	
	if(document.getElementById("title").value == "")
	{
		$('#status').html('<font color="red">Please Enter Title</font>');
		return false;
	}
	if(document.getElementById("comment").value == "")
	{
		$('#status').html('<font color="red">Please Enter Comments</font>');
		return false;
	}
	if(document.getElementById("theme").value === "Select anyone")
	{
		$('#status').html('<font color="red">Please Select Any One Theme</font>');
		return false;
	}
	
	if(colors == "")
	{
		$('#status').html('<font color="red">Please Enter Colors</font>');
		return false;
	}
	if(fonts == "")
	{
		$('#status').html('<font color="red">Please Enter Fonts used</font>');
		return false;
	}
	if(tags == "")
	{
		$('#status').html('<font color="red">Please Enter Tags used</font>');
		return false;
	}
	if(document.getElementById("termscheckbox1").checked == false || document.getElementById("termscheckbox2").checked == false || document.getElementById("termscheckbox3").checked == false)
	{
		$('#status').html('<font color="red">Please Select First Three Check Boxes</font>');
		return false;
	}
	
			
			var formData = new FormData();
			formData.append( 'file', $( '#file' )[0].files[0] );
			formData.append( 'posttype', posttype );
			formData.append( 'title', title );
			formData.append( 'comment', comment );
			formData.append( 'theme', theme );
			formData.append( 'colors', colors );
			formData.append( 'fonts', fonts );
			formData.append( 'tags', tags );
	 
	 $(document).ready(function(){
		 

		 $.ajax({
		        url: "phpFiles/savePostToDatabase.php",// give your url
		        type: "POST",
		        data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            //console.log(response.error);
					 if(response.error == 1){
						 
					    
			        	
		            	$('#status').html('<font color="red">Please upload valid file</font>');
			        	
				     }
				 
				 else if(response.error == 2)
					 {
					  
			        	
					 $('#status').html('<font color="red">File size should be less than 100 KB</font>');
			        	
					 }
				 
				 else if(response.error == 3)
					 {
					  
			        	
					 $('#status').html('<font color="red">File Format not Supported</font>');
			        	
					 }
				
				 else
					 {
					 $('#status').html('<font color="green">Your Idea has been submitted for review !!</font>');
					 document.getElementById('description').value = "";
					 $( '#file' ).value="";
					 
					 }
				 
		            
		        }
		            
		        
		    });
 });
}




