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
$Profile=$_POST['Profile'];
$Company=$_POST['Company'];
$Job_desc=$_POST['Job_desc'];
$Headquarter=$_POST['Headquarter'];
$Founded=$_POST['Founded'];
$Size=$_POST['Size'];
$Website_link=$_POST['Website_link'];
$id=intval($_SESSION['C_id']);
$Date_added=date("Y-m-d");
//$id=1;
//var_dump($id);

$sql="insert into jobs(C_id,Date_added,Location,Profile,Company,Job_desc,Headquarter,Founded,Size,Website_link)values('$id','$Date_added','$Location','$Profile','$Company','$Job_desc','$Headquarter','$Founded','$Size','$Website_link')";

if (mysqli_query($conn, $sql) === TRUE) {
	echo '<script>alert("Job Added");';
	echo 'window.location.href="http://localhost/job_suggestion_website/add_job.php";';
	echo '</script>';
}
else{
	echo '<script>alert("Some error occured while adding job, try again");';
    echo 'window.location.href="http://localhost/job_suggestion_website/add_job.php";';
    echo '</script>';
}
?>