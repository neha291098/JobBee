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
if(empty($_SESSION['logged_in_user'])){
	echo '<script>alert("Please login to apply for jobs");'; 
	echo 'window.location.href="http://localhost/job_suggestion_website/jobbee_jobs.php";';
	echo '</script>';
}
else{
	$J_id=$_POST['J_id'];
	$C_id=$_POST['C_id'];
	$U_id=$_SESSION['U_id'];
	$Name=$_SESSION['Name'];
	$Applydate=date("Y-m-d");
	$Company=$_POST['Company'];
	$Profile=$_POST['Profile'];
	
	/*To check if appointment already exists*/
	$sql1="select * from jobs_applied where J_id='$J_id' and U_id='$U_id'";
	$result1=$conn->query($sql1);
	if ($result1->num_rows > 0){
		echo '<script>alert("This job is already applied by you");';
		echo 'window.location.href="http://localhost/job_suggestion_website/jobbee_jobs.php";';
		echo '</script>';
	}
	else{
		$sql="insert into jobs_applied(J_id,C_id,U_id,Applicant,Date_applied,Company,Profile,Status)values('$J_id','$C_id','$U_id','$Name','$Applydate','$Company','$Profile','Applied')";
		$result = $conn->query($sql);
		echo '<script>alert("Job Applied");';
		echo 'window.location.href="http://localhost/job_suggestion_website/jobbee_jobs.php";';
		echo '</script>';
	}

}
?>
