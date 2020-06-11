<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" href="./style.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>
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
$Action=$_POST['action'];


if($Action==jobs_del){
	
$J_id=$_POST['J_id_selected'];

$sql="delete from jobs where J_id='$J_id'";
$result = $conn->query($sql);

echo '<script>alert("Job selected is deleted");';
echo 'window.location.href="http://localhost/job_suggestion_website/job_posted.php";';
echo '</script>';
}


else if($Action==jobs_applied_del){
$U_id=$_POST['U_id_selected'];

$sql="delete from jobs_applied where U_id='$U_id'";
$result = $conn->query($sql);
?>

<form id="form" method="post" action="http://localhost/job_suggestion_website/view_applicants.php">
<input type="hidden" value="<?php echo $_SESSION['J_id']; ?>" name="J_id_selected">
</form>
<?php
echo '<script>$("#form").submit()</script>';

//echo '<script>alert("Job application of selected user is deleted");';
//echo 'window.location.href="http://localhost/job_suggestion_website/login_company_front.php";';
//echo '</script>';	
}


else if($Action==update_status){
$U_id=$_POST['U_id_selected'];
$J_id=$_POST['J_id_selected'];
$Status=$_POST['Status'];

$sql="update jobs_applied set Status='$Status' where U_id='$U_id' and J_id='$J_id'";
$result = $conn->query($sql);

?>
<form id="form" method="post" action="http://localhost/job_suggestion_website/view_applicants.php">
<input type="hidden" value="<?php echo $_SESSION['J_id']; ?>" name="J_id_selected">
</form>
<?php
echo '<script>$("#form").submit()</script>';
//echo '<script>alert("Job application status changed");';
//echo 'window.location.href="http://localhost/job_suggestion_website/view_applicants.php";';
//echo '</script>';	
}


else if($Action==edit_job){
$J_id=$_POST['J_id_selected'];

$sql="select * from jobs where J_id='$J_id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$_SESSION['J_id']=$row['J_id'];
$_SESSION['Location']=$row['Location'];
$_SESSION['Profile']=$row['Profile'];
$_SESSION['Company']=$row['Company'];
$_SESSION['Job_desc']=$row['Job_desc'];
$_SESSION['Headquarter']=$row['Headquarter'];
$_SESSION['Founded']=$row['Founded'];
$_SESSION['Size']=$row['Size'];
$_SESSION['Website_link']=$row['Website_link'];
$_SESSION['C_id']=$row['C_id'];
$_SESSION['Date_added']=$row['Date_added'];	
}

header("Location: http://localhost/job_suggestion_website/edit_job.php");
}
?>
</html>