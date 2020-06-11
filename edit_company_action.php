<?php
session_start();
?>
<?php

$C_id=$_SESSION['C_id'];
$C_Ename=$_POST['C_Ename'];
$C_Company=$_POST['C_Company'];
$C_JobTitle=$_POST['C_JobTitle'];


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

if ($_FILES["image"]["error"] > 0)
	{
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
	}
   else
   {
	   if($_FILES["image"]["name"]!=""){
     move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $_FILES["image"]["name"]);
     //echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="profile/".$_FILES["image"]["name"];
	 $sql1="UPDATE company_login set C_Photo='$file' where C_id='$C_id'";
	 $result = $conn->query($sql1);
	   }
    
	}

$sql="update company_login set C_Ename='$C_Ename',
C_Company='$C_Company',
C_JobTitle='$C_JobTitle'
 where C_id='$C_id'";
$result = $conn->query($sql);

$sql1="select * from company_login where C_id='$C_id'";
$result1=$conn->query($sql1);
if ($result1->num_rows > 0){
    // output data of each row
	while($row = $result1->fetch_assoc())
	{
		$_SESSION['C_Ename']=$row['C_Ename'];
		$_SESSION['C_Company']=$row['C_Company'];
		$_SESSION['C_JobTitle']=$row['C_JobTitle'];
		$_SESSION['C_Photo']=$row['C_Photo'];
	}
}

if (mysqli_query($conn, $sql) === TRUE) {
	echo '<script>alert("Company profile Updated");';
	echo 'window.location.href="http://localhost/job_suggestion_website/login_company_front.php";';
	echo '</script>';
}
else{
	echo '<script>alert("Some error occured while updating profile, please try again");';
    echo 'window.location.href="http://localhost/job_suggestion_website/login_company_front.php";';
    echo '</script>';
}
?>