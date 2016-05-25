$(":file").filestyle();
		

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
		
		
		
function getHallOfFamePendingComments(resultscount)
{
	
	
	var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	if(resultscount != 0)
		innerhtml = document.getElementById('posts').innerHTML;
	var formData = new FormData();
	formData.append( 'resultscount', resultscount );
			
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getHallOfFamePendingposts.php",// give your url
		        type: "POST",
				data: formData,
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<response.length-1;i++)
						{
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ response[i].comment 
										+'<br><p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p></div>'
										+'<div class="panel-footer" style="text-align:left">'
										+'	<button type="button" class="btn btn-success " onclick="ApprovePost('+response[i].postid+')">Approve Idea</button>'
										+'	</div></div>';
										
											
			
				
						}
						
						
						
						
						
							
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ response[i].comment 
										+'<br><p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p></div></div>';
									
				
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ response[i].comment 
										+'<br><p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p></div></div>';
									
				
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										+ '&nbsp;&nbsp;'+response[i].firstname+'&nbsp;'+response[i].lastname+'</div><div class="panel-body">'
										+ response[i].comment 
										+'<br><p><a href="ideaFiles/'+response[i].filename+'">Attached Idea file</a></p></div>'
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