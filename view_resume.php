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

$U_id=$_POST['U_id_selected'];

$sql="select * from user_login where U_id='$U_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    // output data of each row
	while($row = $result->fetch_assoc())
	{
		//$U_id=$row['U_id'];
		//echo "<br>".$U_id;
		$_SESSION['U_id']=$row['U_id'];
		$_SESSION['City']=$row['Job_loc'];
		$_SESSION['Objective']=$row['Objective'];
		$_SESSION['Name']=$row['Name'];
		$_SESSION['Address']=$row['Address'];
		$_SESSION['Email']=$row['Email'];
		$_SESSION['Ph_no']=$row['Ph_no'];
		$_SESSION['Tenth_pyear']=$row['Tenth_pyear'];
		$_SESSION['Tenth_per']=$row['Tenth_per'];
		$_SESSION['Tenth_school']=$row['Tenth_school'];
		$_SESSION['Tenth_board']=$row['Tenth_board'];
		$_SESSION['Twelth_pyear']=$row['Twelth_pyear'];
		$_SESSION['Twelth_per']=$row['Twelth_per'];
		$_SESSION['Twelth_school']=$row['Twelth_school'];
		$_SESSION['Twelth_board']=$row['Twelth_board'];
		$_SESSION['Skills']=$row['Skills'];
		$_SESSION['Photo']=$row['Photo'];
	}
}

header("Location: http://localhost/job_suggestion_website/gen_resume.php");
?>