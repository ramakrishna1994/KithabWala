<?php 
require_once 'isSessionSet.php';
require_once 'connection.php';

$description = $_POST['description'];
$theme = $_POST['theme'];
$title = $_POST['title'];
$username = $_SESSION['firstname'].'_'.$_SESSION['lastname'];
$error = -1;
if(isset($_FILES['file']))
{
		$target_dir = "../ideafiles/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$fileFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$temp = explode(".", $_FILES["file"]["name"]);
		$newfilename = $username .'_'.  $_FILES["file"]["name"] ;

		//Check if file file is a actual file or fake file

		$check = filesize($_FILES["file"]["tmp_name"]);
		if($check != false)
		{
			//echo "File is an file - " . $check["mime"] . ".";
			$uploadOk = 1;
		}
		else
		{
			//echo "File is not an file.";
			$error = 1;
			$uploadOk = 0;
		}


		// Check file size
		if ($_FILES["file"]["size"] > 100000) 
		{
			//echo "Sorry, your file is too large.";
			$uploadOk = 0;
			$error = 2;
		}
		
		// Allow certain file formats
		if($fileFileType != "jpg" && $fileFileType != "png" && $fileFileType != "jpeg" && $fileFileType != "JPG" && $fileFileType != "PNG" && $fileFileType != "JPEG" && $fileFileType != "pdf") 
		{
			//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
			$error = 3;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			//echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		}
		else
		{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], "../ideaFiles/" . $newfilename)) 
			{
				
				$error = 0;
				$insertQuery = "insert into pendingposts(userid,theme,title,description,filename) values (".$_SESSION['userid'].",'".$theme."','".$title."','".$description."','".$newfilename."')";		
				mysqli_query($con,$insertQuery) or die(mysqli_error($con));
			}
			else
			{
				//echo "Sorry, there was an error uploading your file.";
			}
		}
		
		echo '{"error":"'.$error.'"}';
}

else

{
	$insertQuery = "insert into pendingposts(userid,theme,title,description,filename) values (".$_SESSION['userid'].",'".$theme."','".$title."','".$description."','dummy')";		
	mysqli_query($con,$insertQuery) or die(mysqli_error($con));
	echo '{"error":"'.$error.'"}';	
}
	
		
?>
