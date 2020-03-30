<?php
require 'adminScript.php';
//End of notice

if($a==0){
print<<<HERE
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="logo_brown.png">
	<link rel='stylesheet' href='fonts/css/fontawesome-all.min.css'/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
<body onload="enableEditMode();">

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg" >

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
                <li>
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
							  <li>
									<a href="#">
										 <p><i class="fas fa-edit"></i> New Notice</p>
									</a>
							  </li>
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
                            <a href="admin.php?logout=">
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
                                <h4 class="title"><b><i class="fas fa-edit"></i> Create New NOTICE</b></h4>
                            </div>
                            <div class="content table-responsive table-full-width">

<!--TEXTEDITOR STARTS-->

									<form method="post" action="admin.php" id="nForm"  enctype="multipart/form-data">
										<input type="text" name="title" id="title" placeholder="Title of the Notice" class="form-control" required/>
										</br><select name="sendto" class="form-control" required>
											<option value="ALL">ALL</option>
											<option value="PUC">PUC</option>
											<option value="CIVIL">CIVIL</option>
											<option value="CSE">CSE</option>
											<option value="CHEM">CHEM</option>
											<option value="ECE">ECE</option>
											<option value="MECH">MECH</option>
										</select></br>
										 <div>
									 		<button type="button" onclick="execCmd('bold');"><i class="fas fa-bold"></i></button>
									 		<button type="button" onclick="execCmd('italic');"><i class="fas fa-italic"></i></button>
									 		<button type="button" onclick="execCmd('underline');"><i class="fas fa-underline"></i></button>
									 		<button type="button" onclick="execCmd('strikethrough');"><i class="fas fa-strikethrough"></i></button>
									 		<button type="button" onclick="execCmd('justifyLeft');"><i class="fas fa-align-left"></i></button>
									 		<button type="button" onclick="execCmd('justifycenter');"><i class="fas fa-align-center"></i></button>
									 		<button type="button" onclick="execCmd('justifyright');"><i class="fas fa-align-right"></i></button>
									 		<button type="button" onclick="execCmd('justifyfull');"><i class="fas fa-align-justify"></i></button>
									 		<button type="button" onclick="execCmd('cut');"><i class="fas fa-cut"></i></button>
									 		<button type="button" onclick="execCmd('copy);"><i class="fas fa-copy"></i></button>
									 		<button type="button" onclick="execCmd('indent');"><i class="fas fa-indent"></i></button>
									 		<button type="button" onclick="execCmd('outdent');"><i class="fas fa-outdent"></i></button>
									 		<button type="button" onclick="execCmd('subscript');"><i class="fas fa-subscript"></i></button>
									 		<button type="button" onclick="execCmd('superscript');"><i class="fas fa-superscript"></i></button>
									 		<button type="button" onclick="execCmd('undo');"><i class="fas fa-undo"></i></button>
									 		<button type="button" onclick="execCmd('redo');"><i class="fas fa-redo"></i></button>
									 		<button type="button" onclick="execCmd('insertunorderedlist');"><i class="fas fa-list-ul"></i></button>
									 		<button type="button" onclick="execCmd('insertorderedlist');"><i class="fas fa-list-ol"></i></button>
									 		<button type="button" onclick="execCmd('insertparagraph');"><i class="fas fa-paragraph"></i></button>
									 		<select onclick="execCommandWithArg('formatBlock',this.value);">
									 			<option value="H1">H1</option>
									 			<option value="H2">H2</option>
									 			<option value="H3">H3</option>
									 			<option value="H4">H4</option>
									 			<option value="H5">H5</option>
									 			<option value="H6">H6</option>
									 		</select>
									 		<button type="button" onclick="execCmd('inserthorizontalrule');">HR</button>
									 		<button type="button" onclick="execCommandWithArg('createlink',prompt('enter a url','http://'));"><i class="fas fa-link"></i></button>
									 		<button type="button" onclick="execCmd('unlink');"><i class="fas fa-unlink"></i></button>
									 		<select onchange="execCommandWithArg('fontSize',this.value);" >
									 			<option value="1">1</option>
									 			<option value="2">2</option>
									 			<option value="3">3</option>
									 			<option value="4">4</option>
									 			<option value="5">5</option>
									 			<option value="6">6</option>
									 			<option value="7">7</option>
									 		</select>
									 		Fore color: <input type="color" onclick="execCommandWithArg('foreColor',this.value);">
									 		<button type="button" onclick="execCmd('selectAll');">Select All</button>

									 	</div>
									 	<iframe id="area"  name="richTextField" style="width:95%; height:100%;border:1px solid #ccc; border-radius:10px; margin:20px auto; display:block;"></iframe>
										<input type="hidden" name="notice" id="notice">
							            <label class="file-upload btn btn-primary" style="display:block; width:40%;">
							                Browse for file ... <input type="file" name="upload" multiple/>
							            </label>
										<button type="button" onclick="not()" name="send" class="btn btn-primary">POST &nbsp;&nbsp;&nbsp;<i class="fas fa-share-square"></i></button>
									</form>

<!--TextEditor Ends-->
                            </div>
                        </div>
                    </div>

                </div>
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
	<script src="js/admin.js"></script>

	<!--TextEditor JS Code-->
<script type="text/javascript">
HERE;
if ($response==1){
	print<<<HERE
	alert('Sucessfully Posted');
HERE;
}elseif($response==2){
	print<<<HERE
	alert('Sucessfully Posted');
HERE;

}
print<<<HERE
</script>

</html>
HERE;
}

?>
