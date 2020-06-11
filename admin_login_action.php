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

$user=$_POST['username'];
$pass=$_POST['password'];
$password=md5($pass);

$sql= "select * from admin where username='$user' and password='$password'";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
	header("Location: http://localhost/job_suggestion_website/admin_home.php");
	$_SESSION['error_admin']="";
	$row = $result->fetch_assoc();
	$_SESSION['user']=$row['name'];
}
else{
	$_SESSION['error_admin']="*Invalid login";
	header("Location: http://localhost/job_suggestion_website/admin_login.php"); 
}