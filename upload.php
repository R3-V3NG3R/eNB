<?php

			$target_dir = "uploads/";
			$target_file = $target_dir . basename( $_FILES["upload"]["name"]);
			$uploadok = 1;
			$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

				// Check if file already exists

            $fileName=$file.'.'.$fileType;
			    $target_file = $target_dir .$fileName;

			// Check file size
			if ($_FILES["upload"]["size"] > 10240000000)
	{
 			   $uploadOk = 0;
	}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadok = 0)
	{
			// if everything is ok, try to upload file
	}
	else {

			 if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file))
		{
			$uploadok=2;
		}
		else {
			$uploadok=1;
		}
	}



?>
