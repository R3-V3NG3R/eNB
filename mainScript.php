<?php
$edit="";
$pageNum=1;
$a=0;
date_default_timezone_set('Asia/Kolkata');
//for logout
if(filter_has_var(INPUT_GET,"logout")){
   setcookie('sID',"",time()-36000);
   setcookie('admin',"",time()-36000);
   $url="index.php";
   header('Location:'.$url);
}

//COOKIE CheckUp

if(isset($_COOKIE['sID'])){
   $a=1;
   $id=<<<HERE
   <img src="logo.png" width="10%" style="display:inline-block;"/>&nbsp;&nbsp;
HERE;
   $id.=$_COOKIE['sID'];
}
elseif(isset($_COOKIE['admin'])){
$a=1;
$id=<<<HERE
   <img src="logo.png" width="10%" style="display:inline-block;"/>&nbsp;&nbsp;
HERE;
$id.=$_COOKIE['admin'];
$edit=<<<HERE
   <li>
       <a href="admin.php">
           <p><i class="fas fa-edit"></i> New Notice</p>
       </a>
   </li>
HERE;
}
else{
$url="index.php";
header('Location:'.$url);
}



//verifying Cookie Exists
if($a==1){

//For getting Notifications
require 'connect.php';
$x=7;
$notification=array(array());
$filename = array();
$admin=array();
$sql="SELECT*FROM notice  WHERE sendTo='$whom' ";
   $total=mysqli_num_rows($conn->query($sql));

   //for getting total pagenumbers
   if($total%10!=0){
      $total=($total/10)+1;
   }else{
      $total=$total/10;
   }
   $total=(int)$total;

//SQL selection of data where sendTo="ALL" and sendTo="branch"
$sql="SELECT*FROM notice  WHERE sendTo='$whom'OR sendTo='$whom2' ORDER By sNo DESC LIMIT 10";
if (filter_has_var(INPUT_GET,"next"))
{
   $x=$_GET['next'];
   $pageNum=$x;
   //selecting next top10 after previous page
   $x=($x-1)*10;
   if(($pageNum>1) && ($pageNum<=$total))
   {
      $sql="SELECT *FROM notice WHERE sendTo='$whom' ORDER By sNo DESC LIMIT $x,10";
   }
}

$result=$conn->query($sql);
if(mysqli_num_rows($result) > 0){
   $i=0;
   while ($row=mysqli_fetch_assoc($result)) {
      $count=0;
      $notification[$i][$count++]=$row['sNo'];
      $notification[$i][$count++]=$row['title'];
      $filename[$i]=$row['file'];
      $admin[$i]=$row['sendBy'];
      $notification[$i][$count++]=$row['n_time'];
      $notification[$i][$count++]=$row['n_date'];
      $notification[$i][$count++]=$row['sendTo'];
      $i++;
   }
}

//End of Notifications
$conversion=json_encode($notification);
$filename=json_encode($filename);
$admin=json_encode($admin);
}

//for creating td from Notifications array
function tdCreator($notification)
{
   $i=0;
   foreach ($notification as $notes) {
   	echo '<tr>';
   	foreach ($notes as $key) {
   		if($notes[1]==$key){
   print<<<HERE
   			<td style="max-width:600px; color:#9170DA; line-height:20px; font-family:verdana; text-align:justify; cursor:pointer;"> <span data-toggle="modal" data-target="#myModal" id='$i' onclick="box($i)">$key</span></td>
HERE;
   		}else{
   		print<<<HERE
   		  <td>$key</td>
HERE;
   		}
   	}
   	echo '</tr>';
   	$i++;
   }
}



?>
