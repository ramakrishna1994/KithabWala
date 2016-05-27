
		

getApprovedPosts(0);
function ApprovePost(postid)
{
	$('#postApprovalModal').modal('toggle');
	var formData = new FormData();
	formData.append( 'postid', postid);
	$(document).ready(function(){
	 $.ajax({
		url: "phpFiles/approvePost.php",// give your url
		type: "POST",
		data: formData,
		dataType: 'json',
		processData: false,
		contentType: false,
		success: function (response) {
			console.log(response.error);
			$('#postApprovalModal').modal('toggle');
			getPendingPosts(0);
			
		}
	});
	});
}
		
		
		
function getHallOfFamePendingComments()
{
	
	
	var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	
	document.getElementById('posts').innerHTML = '';
			
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getHallOfFamePendingComments.php",// give your url
		        type: "GET",
				
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<=response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary" style="color:black"><div class="panel-heading"><center><h4> '+response[i].title+'</h4>Post Type : '+response[i].posttype+'</center></div><div class="panel-body"><font size="4px">User Name : </font><font size="3px">'
										+response[i].username+'</font><br><br><font size="4px">Comment : </font><font size="3px">'
										+ response[i].comment 
										+'</font><br><br><font size="4px">Rating Given : </font><font size="3px">'
										+ response[i].rating 
										+'</font><br>'
										+'</div>'
										+'<div class="panel-footer" style="text-align:left">'
										+'	<button type="button" class="btn btn-success " onclick="ApproveHallOfFameComment('+response[i].postid+','+response[i].commentid+')">Approve Comment</button>'
										+'	</div></div>';
										
											
			
				
						}
						
					
						
						
						
							$('#loadmorecontent').html('No More Comments to Display');
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
		        }
		    });
		});
		
}



function ApproveHallOfFameComment(postid,commentid)
{
	$('#postApprovalModal').modal('toggle');
	var formData = new FormData();
	formData.append( 'postid', postid);
	formData.append( 'commentid', commentid);
	$(document).ready(function(){
	 $.ajax({
		url: "phpFiles/approvehalloffamepostscomments.php",// give your url
		type: "POST",
		data: formData,
		dataType: 'json',
		processData: false,
		contentType: false,
		success: function (response) {
			console.log(response.error);
			$('#postApprovalModal').modal('toggle');
			getHallOfFamePendingComments();
			
		}
	});
	});
}	


function getApprovedPosts(resultscount)
{
		
		var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	if(resultscount != 0)
		innerhtml = document.getElementById('posts').innerHTML;
	var formData = new FormData();
	formData.append( 'resultscount', resultscount );
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getApprovedPosts.php",// give your url
		        type: "POST",
				data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '<img src="'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ '	<center><font color="black"><h4>'+response[i].title+'</h4></font></center>'
										+ '<p>'+response[i].comment +'</p>';
										
										if(response[i].filename != "dummy")
											innerhtml += '<p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p>';
										
										innerhtml +='<div class="row">'
													+ '	<div class="col-md-12">'
													+ '		 <table class="table table-bordered">'
													+ '				<thead>'
													+ '				  <tr>'
													+ '					<th>Post Type</th>'
													+ '					<th>Theme</th>'
													+ '					<th>Colors</th>'
													+ '					<th>Fonts</th>'
													+ '					<th>Tags</th>'
													+ '				  </tr>'
													+ '				</thead>'
													+ '				<tbody>'
													+ '				  <tr>'
													+ '					<td>'+response[i].posttype+'</td>'
													+ '					<td>'+response[i].theme+'</td>'
													+ '					<td>'+response[i].colors+'</td>'
													+ '					<td>'+response[i].fonts+'</td>'
													+ '					<td>'+response[i].tags+'</td>'
													+ '				  </tr>'
													+ '				</tbody>'
													+ '	  </table>'
													+ '	</div>'
												+ '</div>'
										
										+ '</div></div>';
										
												
				
						}	
							
						if(response[response.length-1].nomoreresults == 1 && response[response.length-1].resultscount == 10 && resultscount==0)
						{
								$("#loadmore").show();
								document.getElementById("loadmore").setAttribute("onclick","");
								$('#loadmorecontent').html('No Posts to Display');
						}
						
						else if(response[response.length-1].nomoreresults == 0)
						{
							$("#loadmore").show();
							document.getElementById("loadmore").setAttribute("onclick","getApprovedPosts("+response[response.length-1].resultscount+")");
							$('#loadmorecontent').html('Load More');
						}
						else{
							$("#loadmore").hide();
						}
							
							
						document.getElementById('posts').innerHTML = innerhtml;					
		     
		        }
		    });
		});
}





function getUserPosts(resultscount)
{
		
		var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	if(resultscount != 0)
		innerhtml = document.getElementById('posts').innerHTML;
	var formData = new FormData();
	formData.append( 'resultscount', resultscount );
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getUserPosts.php",// give your url
		        type: "POST",
				data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '<img src="'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ '	<center><font color="black"><h4>'+response[i].title+'</h4></font></center>'
										+ '<p>'+response[i].comment +'</p>';
										
										if(response[i].filename != "dummy")
											innerhtml += '<p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p>';
										
										innerhtml +='<div class="row">'
													+ '	<div class="col-md-12">'
													+ '		 <table class="table table-bordered">'
													+ '				<thead>'
													+ '				  <tr>'
													+ '					<th>Post Type</th>'
													+ '					<th>Theme</th>'
													+ '					<th>Colors</th>'
													+ '					<th>Fonts</th>'
													+ '					<th>Tags</th>'
													+ '				  </tr>'
													+ '				</thead>'
													+ '				<tbody>'
													+ '				  <tr>'
													+ '					<td>'+response[i].posttype+'</td>'
													+ '					<td>'+response[i].theme+'</td>'
													+ '					<td>'+response[i].colors+'</td>'
													+ '					<td>'+response[i].fonts+'</td>'
													+ '					<td>'+response[i].tags+'</td>'
													+ '				  </tr>'
													+ '				</tbody>'
													+ '	  </table>'
													+ '	</div>'
												+ '</div>'
										
										+ '</div></div>';
										
												
				
						}
							
						if(response[response.length-1].nomoreresults == 1 && response[response.length-1].resultscount == 10 && resultscount==0)
						{
								$("#loadmore").show();
								document.getElementById("loadmore").setAttribute("onclick","");
								$('#loadmorecontent').html('No Posts to Display');
						}
						
						else if(response[response.length-1].nomoreresults == 0)
						{
							$("#loadmore").show();
							document.getElementById("loadmore").setAttribute("onclick","getUserPosts("+response[response.length-1].resultscount+")")
							$('#loadmorecontent').html('Load More');
						
						}
						else{
							$("#loadmore").hide();
						}
							
							
						document.getElementById('posts').innerHTML = innerhtml;					
		     
		        }
		    });
		});
}


function getPendingPosts(resultscount)
{
	var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	if(resultscount != 0)
		innerhtml = document.getElementById('posts').innerHTML;
	var formData = new FormData();
	formData.append( 'resultscount', resultscount );
			
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getPendingPosts.php",// give your url
		        type: "POST",
				data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '<img src="'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ '	<center><font color="black"><h4>'+response[i].title+'</h4></font></center>'
										+ '<p>'+response[i].comment +'</p>';
										
										if(response[i].filename != "dummy")
											innerhtml += '<p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p>';
										
										innerhtml +='<div class="row">'
													+ '	<div class="col-md-12">'
													+ '		 <table class="table table-bordered">'
													+ '				<thead>'
													+ '				  <tr>'
													+ '					<th>Post Type</th>'
													+ '					<th>Theme</th>'
													+ '					<th>Colors</th>'
													+ '					<th>Fonts</th>'
													+ '					<th>Tags</th>'
													+ '				  </tr>'
													+ '				</thead>'
													+ '				<tbody>'
													+ '				  <tr>'
													+ '					<td>'+response[i].posttype+'</td>'
													+ '					<td>'+response[i].theme+'</td>'
													+ '					<td>'+response[i].colors+'</td>'
													+ '					<td>'+response[i].fonts+'</td>'
													+ '					<td>'+response[i].tags+'</td>'
													+ '				  </tr>'
													+ '				</tbody>'
													+ '	  </table>'
													+ '	</div>'
												+ '</div>'
										
										+ '</div>'
										+'<div class="panel-footer" style="text-align:left">'
										+'	<button type="button" class="btn btn-success " onclick="ApprovePost('+response[i].postid+')">Approve Idea</button>'
										+'	</div></div>';
										
											
			
				
						}
						
						if(response[response.length-1].nomoreresults == 1 && response[response.length-1].resultscount == 10 && resultscount==0)
						{
								$("#loadmore").show();
								document.getElementById("loadmore").setAttribute("onclick","");
								$('#loadmorecontent').html('No Posts to Display');
						}
						
						else if(response[response.length-1].nomoreresults == 0)
						{
							$("#loadmore").show();
							document.getElementById("loadmore").setAttribute("onclick","getPendingPosts("+response[response.length-1].resultscount+")")
							$('#loadmorecontent').html('Load More');
						}
						else{
							$("#loadmore").hide();
						}
							
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
		        }
		    });
		});
}


function submitResume(jobname)
{
	var emailid = document.getElementById('emailid').value;
	var fullname = document.getElementById('fullname').value;
	var phonenumber = document.getElementById('phonenumber').value;
	var coverletter = document.getElementById('coverletter').value;
	
	if(fullname === "")
	{
		alert("Please Enter Full Name");
		return false;
	}
	
	if(emailid === "")
	{
		alert("Please Enter Email Address");
		return false;
	}
	
	
	if(phonenumber === "")
	{
		alert("Please Enter Phone Number");
		return false;
	}
	
	
	if(document.getElementById("file").value == "" )
	{
		alert("Please Upload Resume");
		return false;
	}
	
	var formData = new FormData();
			formData.append( 'file', $( '#file' )[0].files[0] );
			formData.append( 'jobname', jobname );
			formData.append( 'emailid', emailid );
			formData.append( 'fullname', fullname );
			formData.append( 'phonenumber', phonenumber );
			formData.append( 'coverletter', coverletter );
			
			$(document).ready(function(){
		 

		 $.ajax({
		        url: "phpFiles/saveResumeToDatabase.php",// give your url
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
					 $('#status').html('<font color="green">Your Resume has been submitted !!</font>');
					 document.getElementById('description').value = "";
					 $( '#file' ).value="";
					 
					 }
				 
		            
		        }
		            
		        
		    });
	});
			
}



function getSubmittedResumes()
{
		var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	
	var formData = new FormData();
	
			
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getResumes.php",// give your url
		        type: "POST",
				data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<=response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '	<center><font color="black"><h4>Applied For '+response[i].jobname+'</h4></font></center></div><div class="panel-body">'
										+ '<a href="resumes/'+response[i].resumefilename +'" target="_blank">Attached Resume File</a><br><br>';
										
										
										innerhtml +='<div class="row">'
													+ '	<div class="col-md-12">'
													+ '		 <table class="table table-bordered">'
													+ '				<thead>'
													+ '				  <tr>'
													+ '					<th>Full Name</th>'
													+ '					<th>Email Address</th>'
													+ '					<th>Phone Number</th>'
													+ '				  </tr>'
													+ '				</thead>'
													+ '				<tbody>'
													+ '				  <tr>'
													+ '					<td>'+response[i].fullname+'</td>'
													+ '					<td>'+response[i].emailid+'</td>'
													+ '					<td>'+response[i].phonenumber+'</td>'
													+ '				  </tr>'
													+ '				</tbody>'
													+ '	  </table>'
													+ '	</div>'
												+ '</div>';
												
										if(response[i].coverletter != "")
										{
											innerhtml += '<div class="row">'
																	'<center><h4>Cover Letter</h4></center>'
																	'<p>'+response[i].coverletter+'</p>'
															'</div>';
										
										}
											
										
										innerhtml+= '</div></div>';
										
											
			
				
						}
						
						if(response[response.length-1].nomoreresults == 1 && response[response.length-1].resultscount == 10 && resultscount==0)
						{
								$("#loadmore").show();
								document.getElementById("loadmore").setAttribute("onclick","");
								$('#loadmorecontent').html('No Posts to Display');
						}
						
						else if(response[response.length-1].nomoreresults == 0)
						{
							$("#loadmore").show();
							document.getElementById("loadmore").setAttribute("onclick","getPendingPosts("+response[response.length-1].resultscount+")")
							$('#loadmorecontent').html('Load More');
						}
						else{
							$("#loadmore").hide();
						}
							
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
		        }
		    });
		});
}


function getSubscribedEmails()
{
	var innerhtml = "";
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getSubscribedEmails.php",// give your url
		        type: "POST",
				dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
					innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '<center>Subscribed Emails List</center></div><div class="panel-body">';
										
										
										innerhtml +='<div class="row">'
													+ '	<div class="col-md-12">'
													+ '		 <table class="table table-bordered">'
													+ '				<thead>'
													+ '				  <tr>'
													+ '					<th>S.No.</th>'
													+ '					<th>Email Address</th>'
													+ '				  </tr>'
													+ '				</thead>'
													+ '				<tbody>';
									
							
						for(i=0;i<=response.length-1;i++)
						{
										
										
										innerhtml += '				  <tr>'
													+ '					<td>'+(i+1)+'</td>'
													+ '					<td>'+response[i].emailid+'</td>'
													+ '				  </tr>';
						}
						
						innerhtml += '</tbody>'
									+ '	  </table>'
									+ '	</div>'
									+ '</div>'
									+'</div></div>';
						
						if(response[response.length-1].nomoreresults == 1 && response[response.length-1].resultscount == 10 && resultscount==0)
						{
								$("#loadmore").show();
								document.getElementById("loadmore").setAttribute("onclick","");
								$('#loadmorecontent').html('No Posts to Display');
						}
						
						else if(response[response.length-1].nomoreresults == 0)
						{
							$("#loadmore").show();
							document.getElementById("loadmore").setAttribute("onclick","getPendingPosts("+response[response.length-1].resultscount+")")
							$('#loadmorecontent').html('Load More');
						}
						else{
							$("#loadmore").hide();
						}
							
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
		        }
		    });
		});
}