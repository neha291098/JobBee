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
$C_id=$_SESSION['C_id'];

$sql="select * from company_login where C_id='$C_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
	while($row = $result->fetch_assoc())
	{
		$_SESSION['C_Ename']=$row['C_Ename'];
		$_SESSION['C_Company']=$row['C_Company'];
		$_SESSION['C_JobTitle']=$row['C_JobTitle'];
		$_SESSION['C_Email']=$row['C_Email'];
	}
}	
header("Location: http://localhost/job_suggestion_website/edit_company.php"); 
?>