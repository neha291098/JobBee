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
$action=$_POST['action'];
	
if($action==delcompany){
	$C_id=$_POST['C_id'];
	$sql="delete from company_login where C_id='$C_id'";
	$conn->query($sql);
	$sql2="delete from jobs where C_id='$C_id'";
	$conn->query($sql2);
	$sql3="delete from jobs_applied where C_id='$C_id'";
	$conn->query($sql3);
	header("Location: http://localhost/job_suggestion_website/company_table.php");
}
else if($action==deluser){
	$U_id=$_POST['U_id'];
	$sql="delete from user_login where U_id='$U_id'";
	$conn->query($sql);
	$sql2="delete from proexp_details where U_id='$U_id'";
	$conn->query($sql2);
	$sql3="delete from jobs_applied where U_id='$U_id'";
	$conn->query($sql3);
	header("Location: http://localhost/job_suggestion_website/user_table.php");
}

else if($action==addreview){
	$C_id=$_POST['C_id'];
	$Overall_rating=$_POST['Overall_rating'];
	$Rec_tofriend=$_POST['Rec_tofriend'];
	$Approve_ofceo=$_POST['Approve_ofceo'];
	$sql="update jobs set Overall_rating='$Overall_rating',
	Rec_tofriend='$Rec_tofriend',
	Approve_ofceo='$Approve_ofceo'
	where C_id='$C_id'; ";
	$conn->query($sql);

echo '<script>alert("updated")</script>';
header("Location: http://localhost/job_suggestion_website/company_table.php");

}
?>