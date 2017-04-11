<?php
	require_once('db.php');

	$zip_url = '';
	$img_url = '';

	$sql="SELECT * FROM category WHERE id=".$_POST['category'];

	if ($result=mysqli_query($conn,$sql))
	  {
	  while ($row=mysqli_fetch_row($result))
	    { 
			$cat_name = $row['1'];
	    }
	}
	//$cat_name = "App";

	$username = $_POST['username'];
	$themename = $_POST['themename'];
	$abouttheme = $_POST['abouttheme'];
	$category_id = $_POST['category'];
	$cat_id = intval($category_id);
	// echo $_POST['username'];

	if($_FILES["coverImage"]["name"]) {
		$target_dir = "../img/";
		$target_file = $target_dir . basename($_FILES["coverImage"]["name"]);
		//echo $target_file;
		$uploadOk = 1;
		$img_url = substr($target_file,3);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["coverImage"]["tmp_name"]);
		    if($check !== false) {
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    // echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["coverImage"]["tmp_name"], $target_file)) {
		        // echo "The file ". basename( $_FILES["coverImage"]["name"]). " has been uploaded.";
		    } else {
		        // echo "Sorry, there was an error uploading your file.";
		    }
		}
	}

if($_FILES["zip_file"]["name"]) {
		$filename = $_FILES["zip_file"]["name"];
		$source = $_FILES["zip_file"]["tmp_name"];
		$type = $_FILES["zip_file"]["type"];
		
		$name = explode(".", $filename);
		$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
		foreach($accepted_types as $mime_type) {
			if($mime_type == $type) {
				$okay = true;
				break;
			} 
		}
		
		$continue = strtolower($name[1]) == 'zip' ? true : false;
		if(!$continue) {
			$message = "The file you are trying to upload is not a .zip file. Please try again.";
		}

		$target_path = "../_templates/".$cat_name."/";  // change this to the correct site path
		$zip_url = $target_path.$name[0]."/";
		if(move_uploaded_file($source, $target_path.$filename)) {
			$zip = new ZipArchive();
			$x = $zip->open($target_path.$filename);
			if ($x === true) {
				mkdir($target_path.$name[0]);
				$zip->extractTo($target_path.$name[0]."/"); // change this to the correct site path
				$zip->close();
				//chmod($target_path.$filename,0777);
				unlink($target_path.$filename);
			}
			$message = "Your .zip file was uploaded and unpacked.";
		} else {	
			$message = "There was a problem with the upload. Please try again.";
		}
	}

	$sql = "INSERT INTO theme (name,description,theme_image,url,category_id,user_name) VALUES ('$themename','$abouttheme','$img_url','$zip_url',$cat_id,'$username')";
	// 
	// echo $sql;
	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
	    header('Location: ../view_websites.html?id='.$cat_id);
	} else {
	    // echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>
