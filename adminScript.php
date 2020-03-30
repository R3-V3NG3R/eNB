<?php
$a=1;
$reponse=0;
$cookie='admin';
date_default_timezone_set('Asia/Kolkata');
//for logout
if(filter_has_var(INPUT_GET,"logout")){
	setcookie($cookie,"",time()-36000);
	$url="index.php";
	header('Location:'.$url);
}

//for displaying userName if cookies exists else redirect to index
if(isset($_COOKIE[$cookie])){
$id=<<<HERE
   <img src="logo.png" width="10%" style="display:inline-block;"/>&nbsp;&nbsp;
HERE;
$id.=$_COOKIE[$cookie];
	$a=0;
}else{
	$url="index.php";
	header('location:'.$url);
}


//Start of notice
if (filter_has_var(INPUT_POST,"notice")) {
	require 'connect.php';
  $file=time();//for getting unique file name
  $title=$_POST['title'];
  $sendBy=$_COOKIE['admin'];
  $sendTo=$_POST['sendto'];
  $n_date=date("Y-m-d");
  $n_time=date("h:i:sa");
  //SQL Insertion code
  $sql="INSERT INTO notice (title,file,n_time,n_date,sendTo,sendBy) VALUES ('$title','$file','$n_time','$n_date','$sendTo','$sendBy')";

	//SQL Execution
  if ($conn->query($sql)== TRUE) {
  //for uploading any file
	require 'upload.php';
     $notice=$_POST["notice"];
	  if($uploadok==2){
		  $fName=$_FILES["upload"]["name"];
		  $fSize=(int)($_FILES["upload"]["size"]);
		  $fSize/=(1024*1024);
		  $fSize=(int)$fSize;
		  $notice.=<<<HERE
		  <br><br><br>
		  <b>--------------------------------------</b>
		  <br><span style="text-align:justify">
		  <b>File Name: </b> $fName</br>
		  <b>File Size: </b> $fSize mb</br></br>
		  <a href="../uploads/$fileName" download><button style="cursor:pointer; padding:10px; color:white; background-color:#428bca; border:0px; border-radius:4px; font-family:verdana;"><i class="fas fa-download"></i> Click Here to download</button></a>
		  </br></br></span>
HERE;
	  }
     $name='notice/'.$file.'.html';
     $file=fopen($name,'w');
     if(fputs($file,$notice)){
		  //Notice successfully created

       $response=1;
     }
  }else{
	  //Something Went wrong
    $response=2;
  }

}
?>
