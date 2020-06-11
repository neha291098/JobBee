<?php
session_start();
?>
<?php

$J_id=$_SESSION['J_id'];
$Location=$_POST['Location'];
$Profile=$_POST['Profile'];
$Company=$_POST['Company'];
$Job_desc=$_POST['Job_desc'];
$Headquarter=$_POST['Headquarter'];
$Founded=$_POST['Founded'];
$Size=$_POST['Size'];
$Website_link=$_POST['Website_link'];
$id=$_SESSION['C_id'];


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




//$id=1;
//var_dump($id);

$sql="update jobs set Location='$Location',
Profile='$Profile',
Company='$Company',
Job_desc='$Job_desc',
Headquarter='$Headquarter',
Founded='$Founded',
Size='$Size',
Website_link='$Website_link'
 where J_id='$J_id'";
$result = $conn->query($sql);



if (mysqli_query($conn, $sql) === TRUE) {
	/*$sql1="select * from jobs where J_id='$J_id'";
$result1= $conn->query($sql1);
if ($result1->num_rows > 0){
    // output data of each row
	while($row = $result1->fetch_assoc())
	{

$_SESSION['$Location']=$row['Location'];
$_SESSION['$Profile']=$row['Profile'];
$_SESSION['$Company']=$row['Company'];
$_SESSION['$Job_desc']=$row['Job_desc'];
$_SESSION['$Headquarter']=$row['Headquarter'];
$_SESSION['$Founded']=$row['Founded'];
$_SESSION['$Size']=$row['Size'];
$_SESSION['$Website_link']=$row['Website_link'];

	}
}*/
	echo '<script>alert("Job Updated");';
	echo 'window.location.href="http://localhost/job_suggestion_website/login_company_front.php";';
	echo '</script>';
}
else{
	echo '<script>alert("Some error occured while updating job, try again");';
    echo 'window.location.href="http://localhost/job_suggestion_website/login_company_front.php";';
    echo '</script>';
}
?>