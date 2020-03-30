<?php
$a=0;
$cookie='sID';
$response="";
//checks if cookie are available or not
if(isset($_COOKIE[$cookie]) || isset($_COOKIE["admin"])){
	$a=1;
	$url="main.php";
	header('Location: '.$url);
}

//If attempt for login as student takes place
if (filter_has_var(INPUT_POST,"student")) {
	require 'connect.php';
		$id=$_POST['sId'];
		$pass=$_POST['pass'];
		//SQL Code
		$sql="SELECT pass FROM student WHERE id='$id' ";
		$result=$conn->query($sql);
		//SQL Execution
		if($result->num_rows>0)
		{
		  while ($row=$result->fetch_assoc())
		  {
			 if($pass==$row['pass'])
			 {
			//Password matched
			$url="main.php";
 			header('Location: '.$url);
			setcookie($cookie, $id, time()+86400);
				$a=1;
			 }else
			 {
			//Wrong password
			$a=0;
			$response=<<<HERE
			<script>alert('Wrong Password')</script>
HERE;

			 }
		  }
		}else{
			//User Doesn't exists
			$response=<<<HERE
			<script>alert("User Doesn't Exists. please Contact WebMaster.")</script>
HERE;

		}
}

//Admin Login Script
if (filter_has_var(INPUT_POST,"admin")) {
	require 'connect.php';
		$id=$_POST['Uname'];
		$pass=$_POST['pass'];
		$sql="SELECT pass FROM admin WHERE id='$id' ";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
		  while ($row=$result->fetch_assoc())
		  {
			 if($pass==$row['pass'])
			 {
			//Password matched
			$url="admin.php";
 			header('Location: '.$url);
			$cookie='admin';
			setcookie($cookie, $id, time()+86400);
				$a=1;
			 }else
			 {
			//Wrong password
			$a=0;
			$response=<<<HERE
			<script>alert('Wrong Password')</script>
HERE;

			 }
		  }
		}else{
			//User Doesn't exists
			$response=<<<HERE
			<script>alert("User Doesn't Exists. please Contact WebMaster.")</script>
HERE;

		}
}
?>
