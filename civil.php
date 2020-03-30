<?php
$whom="ALL";
$whom2="CIVIL";
require 'mainScript.php';
if($a==1){
print<<<HERE
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="logo_brown.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel='stylesheet' href='fonts/css/fontawesome-all.min.css'/>

	<title>eNB</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper" style="overflow:hidden;">
            <div class="logo">
                <a href="#" class="simple-text">
                     $id
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="main.php">
                        <i class="fas fa-globe"></i>
                        <p><font size="4px">ALL</font></p>
                    </a>
                </li>
                <li>
                    <a href="puc.php">
                        <i class="fas fa-child"></i>
                        <p><font size="4px">PUC</font></p>
                    </a>
                </li>
                <li class="active">
                    <a href="civil.php">
                        <i class="fas fa-road"></i>
                        <p><font size="4px">Civil</font></p>
                    </a>
                </li>
                <li>
                    <a href="cse.php">
                        <i class="fas fa-laptop"></i>
                        <p><font size="4px">CSE</font></p>
                    </a>
                </li>
                <li>
                    <a href="ece.php">
                        <i class="fas fa-microchip"></i>
                        <p><font size="4px">ECE</font></p>
                    </a>
                </li>
                <li>
                    <a href="mech.php">
                        <i class="fas fa-wrench"></i>
                        <p><font size="4px">Mechanical</font></p>
                    </a>
                </li>
                <li>
                    <a href="chem.php">
                        <i class="fas fa-vial"></i>
                        <p><font size="4px">Chem</font></p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

	     <div class="main-panel">
	 		<nav class="navbar navbar-default navbar-fixed">
	             <div class="container-fluid">
	                 <div class="navbar-header">
	                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
	                         <span class="sr-only">Toggle navigation</span>
	                         <span class="icon-bar"></span>
	                         <span class="icon-bar"></span>
	                         <span class="icon-bar"></span>
	                     </button>
	                     <a class="navbar-brand" href="#"><font size="6px"><b>eNotice Board </b></font></a>
	                 </div>
	                 <div class="collapse navbar-collapse">
	                     <ul class="nav navbar-nav navbar-right">
	 							  $edit
	                         <li class="dropdown">
	                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                                     <p>
	 										Contact Us
	 									</p>

	                               </a>
	                               <ul class="dropdown-menu">
	                                 <li><a href="#"><center>If any error contact Us </center></a></li>
	                                 <li><a href="#">webdevelopment.iiitsklm@gmail.com</a></li>
	                               </ul>
	                         </li>
	                         <li>
	                             <a href="main.php?logout=">
	                                 <p>Log out</p>
	                             </a>
	                         </li>
	 						<li class="separator hidden-lg hidden-md"></li>
	                     </ul>
	                 </div>
	             </div>
	         </nav>

	         <div class="content">
	             <div class="container-fluid">
	                 <div class="row">
	                     <div class="col-md-12">
	                         <div class="card">
	                             <div class="header">
	                                 <h4 class="title"><i class="fas fa-road"></i> <b>CIVIL</b></h4>
	                             </div>
	                             <div class="content table-responsive table-full-width">
	                                 <table class="table table-hover table-striped">
	                                     <thead>
	                                         <th>S.No</th>
	                                     	<th>Title</th>
	                                     	<th>Time</th>
	                                     	<th>Date</th>
	                                     	<th>Send</th>
	                                     </thead>
	                                     <tbody>
HERE;
	 tdCreator($notification);
	 $prePage=$pageNum-1;
	 $nxtPg=$pageNum+1;
	 if($pageNum == $total){
	 	$prePage=$pageNum;
	 	$nxtPg=$pageNum;
	 }


	 print<<<HERE
	                                     </tbody>
	                                 </table>

	                             </div>
	                         </div>
	                     </div>

	                 </div>
	             </div>
	 				<div style="width:100%; text-align:center;">
	 					<nav class="pages">
	 					  <ul class="pagination pagination-lg">
	 					    <li class="page-item"><a class="page-link" href="main.php?next=$prePage">&laquo;</a></li>
HERE;
	 						for ($i=1; $i <=$total ; $i++) {
	 							if($i==$pageNum){
	 								$class="active";
	 							}else{
	 								$class="";
	 							}
	 							print<<<HERE
	 						    <li class="page-item $class"><a class="page-link" href="main.php?next=$i">$i</a></li>
HERE;

	 						}
	 $pageNum++;
	 print<<<HERE
	 					    <li class="page-item"><a class="page-link" href="main.php?next=$nxtPg">&raquo;</a></li>
	 					  </ul>
	 					</nav>
	 				</div>
	         </div>

	         <footer class="footer">
	             <div class="container-fluid">
	                 <p class="copyright pull-right">
	                     &copy;<a href="#">Team Tech Trails</a>, made with love for a better web
	                 </p>
	             </div>
	         </footer>


	     </div>
	 </div>


	 <!-- Display BOX Starts-->
	 <div class="modal fade" id="myModal" role="dialog" >
	   <div class="modal-dialog modal-lg">
	 	 <div class="modal-content">
	 		<div class="modal-header">
	 		  <button type="button" class="close" data-dismiss="modal">&times;</button>
	 		  <div style="background-color:#f5f5f5; width:100%; padding:8px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px;line-height: 20px;cursor: pointer;">
	 		  <b class="modal-title" id="name" style="color:#9170DA; font-weight:bold;" ></b>
	 		  </div>
	 		</div>
	 		<div class="modal-body" style="height:100%;">
	 		 <iframe  width="100%" height="400px;"style="border:2px solid black; border-radius:4px; padding: 10px;" id="frame"></iframe>
	 		</div>
	 		<div class="modal-footer">
	 			<div style="float:right;">
	 			 <b style="float:left; color:black; font-size:20px;">Sd/-</b></br>
	 			 <span id="admin" style="float:left; color:black; font-size:20px; font-weight: lighter; font-family:verdana,arial;"></span>
	 			 </div>
	 		</div>
	 	 </div>
	   </div>
	 </div>
	 </div>
	 <!--Display Box Ends-->


	 </body>
	  <!--   Core JS Files   -->
	     <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	 	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	 	<!--  Charts Plugin -->
	 	<script src="assets/js/chartist.min.js"></script>

	     <!--  Notifications Plugin    -->
	     <script src="assets/js/bootstrap-notify.js"></script>


	     <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	 	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	 	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	 	<script src="assets/js/demo.js"></script>
	 	<script>
	 		function box(value)
	 		{
	 			var obj=$conversion;
	 			var file=$filename;
	 			var admin=$admin;
	 			document.getElementById("name").innerHTML=obj[value][1]+"&nbsp;&nbsp;<span style='color:#999999;'>/&nbsp;&nbsp;"+obj[value][2]+"&nbsp;&nbsp;/&nbsp;&nbsp;"+obj[value][2]+"</span>";
	 			document.getElementById("frame").src="notice/"+file[value]+".html";
	 			document.getElementById("admin").innerHTML=admin[value];
	 		}
	 	</script>
	 </html>
HERE;
	 }
	 ?>
