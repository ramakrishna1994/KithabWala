$(":file").filestyle();		
				
function submitPost(posttype)
{
	
	var title = document.getElementById("title").value;
	var comment = document.getElementById("comment").value;
	var theme = document.getElementById('theme').value;
	var colors = document.getElementById('colors').value;
	var fonts = document.getElementById('fonts').value;
	var tags = document.getElementById('tags').value;
	
	
	if(document.getElementById("title").value == "")
	{
		alert('Please Enter Title');
		return false;
	}
	if(document.getElementById("comment").value == "")
	{
		alert('Please Enter Comments');
		return false;
	}
	if(document.getElementById("theme").value === "Select anyone")
	{
		alert('Please Select Any One Theme');
		return false;
	}
	
	if(colors == "")
	{
		alert('Please Enter Colors');
		return false;
	}
	if(fonts == "")
	{
		alert('Please Enter Fonts used');
		return false;
	}
	if(tags == "")
	{
		alert('Please Enter Tags used');
		return false;
	}
	if(document.getElementById("termscheckbox1").checked == false || document.getElementById("termscheckbox2").checked == false || document.getElementById("termscheckbox3").checked == false)
	{
		alert('Please Select First Three Check Boxes');
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
						 
					    
			        	
		            	alert('Please upload valid file');
			        	
				     }
				 
				 else if(response.error == 2)
					 {
					  
			        	
					alert('File size should be less than 100 KB');
			        	
					 }
				 
				 else if(response.error == 3)
					 {
					  
			        	
					 alert('File Format not Supported');
			        	
					 }
				
				 else
					 {
						alert('Your Idea has been submitted for review !!');
						window.location.reload();
					 
					 }
				 
		            
		        }
		            
		        
		    });
 });
}




