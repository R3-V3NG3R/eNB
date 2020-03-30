<?php

	$target_dir = "cropped/";

	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	$a = basename($_FILES["fileToUpload"]["name"]); 
		
	    if (  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)  ) {


	        echo '<script type="text/javascript">alert("Your Photo Has Been Uploaded SuccessFully");</script>';

	        echo("Completed");


		} 
		else {


	        echo "Sorry, there was an error uploading your file.";
		}

?>