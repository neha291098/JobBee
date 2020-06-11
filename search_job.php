<?php
session_start();
?>
 <?php
			
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "job_sugg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
$Location=$_POST['Location'];	

$sql="select * from jobs where Location='$Location'";

?>
