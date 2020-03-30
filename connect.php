
<?php
//change the values as per your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
