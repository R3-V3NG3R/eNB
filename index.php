<?php

require 'indexScript.php';
if($a==0){
print<<<HERE
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="logo_brown.png" type="image/gif">
	<link rel='stylesheet' href='fonts/css/fontawesome-all.min.css'/>
	<title>eNB
	</title>
	<style type="text/css">
		html ,body{
			margin:0px;
			padding:0px;
			background-color:#f5f5f5;
		}
		.header{
			width:100%;
			background-color:white;
			box-shadow: 0px 0px 20px black;
			color:black;
			font-size: 40px;
			margin:0px;
			padding-top:5px;
			text-align: center;
		}
	</style>
	$response
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<table align="center" cellspacing="5px">
			<tr>
			<td><img src="logo_1.png" height="40px" width="40px"></td>
			<td></td>
			<td> RGUKT Srikakulam e-Notice Board</td>
			</tr>
		</table>
	</div>
	 <div class="container">
        <div class="tab">
            <div class="tablinks" id="logintab" data-form-id="login">Student - Login</div>
            <div class="tablinks" id="signuptab" data-form-id="signup">Admin - Login</div>
        </div>
        <div class="tabcontent" id="login">
            <form action="index.php" method="POST">
                <label for="studentId">Student ID:</label>
                <input type="text" id="loginEmail" placeholder="S16****" name="sId" required/>
                <label for="loginPassword">Password:</label>
                <input  type="password" id="loginPassword" placeholder="**********" name="pass"required/>
                <button type="submit" name="student">Login</button>
            </form>
        </div>
        <div class="tabcontent" id="signup">
            <form method="POST" action="index.php">
                <label for="signupEmail">UserName:</label>
                <input required type="text" id="signupEmail" placeholder="UserName" name="Uname"/>
                <label for="signupPassword">Password:</label>
                <input required type="password" id="signupPassword" placeholder="**********" name="pass"/>
                <button type="submit" name="admin">Login</button>
            </form>
        </div>
    </div>
  <script  src="js/index.js"></script>
</body>
</html>
HERE;
}
?>
