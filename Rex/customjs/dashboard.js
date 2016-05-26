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
		
		
		
function getHallOfFamePendingComments()
{
	
	
	var innerhtml = "";
	$('#loadmorecontent').html('<img class="img-rounded" alt="Cinque Terre" width="20" height="20" src="images/loader.gif">');
	

			
	 $(document).ready(function(){

		 $.ajax({
		        url: "phpFiles/getHallOfFamePendingComments.php",// give your url
		        type: "GET",
				
		        dataType: 'json',
		        processData: false,
		        contentType: false,
		        success: function (response) {
		            
							
						for(i=0;i<=response.length-1;i++)
						{alert(1);
							innerhtml 	+= '<div class="panel panel-primary"><div class="panel-heading">'
										+ '&nbsp;&nbsp;'+response[i].username+'</div><div class="panel-body">'
										+ response[i].comment 
										+'<br>'
										+ response[i].rating 
										+'<br>'
										+'</div>'
										+'<div class="panel-footer" style="text-align:left">'
										+'	<button type="button" class="btn btn-success " onclick="ApproveHallOfFameComment('+response[i].postid+',\''+response[i].comment+'\',\''+response[i].username+'\','+response[i].rating+')">Approve Comment</button>'
										+'	</div></div>';
										
											
			
				
						}
						
						
						
						
						
							$('#loadmorecontent').html('No More Comments to Display');
							
						document.getElementById('posts').innerHTML = innerhtml;						
		     
		        }
		    });
		});
		
}



function ApproveHallOfFameComment(id,comment,username,rating)
{
	$('#postApprovalModal').modal('toggle');
	var formData = new FormData();
	formData.append( 'postid', id);
	formData.append( 'comment', comment);
	formData.append( 'username', username);
	formData.append( 'rating', rating);
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
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
										+ '<img src="profilePics/'+response[i].profileimage+'" class="img-rounded" alt="Cinque Terre" width="30" height="30">'
										
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