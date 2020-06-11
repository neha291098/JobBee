<?php
session_start();
?>
<html>
<body>

<?php
				
				
				
				
				$Objective=$_POST["Objective"];
				$Name= $_POST["Name"];
				$Address=$_POST["Address"];
				$Email=$_POST["Email"];
				$Ph_no=$_POST["Ph_no"];
				$Tenth_pyear=$_POST["Tenth_pyear"];
				$Tenth_per=$_POST["Tenth_per"];
				$Tenth_school=$_POST["Tenth_school"];
				$Tenth_board=$_POST["Tenth_board"];
				$Twelth_pyear=$_POST["Twelth_pyear"];
				$Twelth_per=$_POST["Twelth_per"];
				$Twelth_school=$_POST["Twelth_school"];
				$Twelth_board=$_POST["Twelth_board"];
				
				
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
	 $sql1="UPDATE user_login set Photo='$file' where Email='$Email'";
	 $result = $conn->query($sql1);
   }
    
	}



$sql = "UPDATE user_login set 
Objective='$Objective',
Name='$Name',
Address='$Address',
Email='$Email',
Ph_no='$Ph_no',
Tenth_pyear='$Tenth_pyear',
Tenth_per='$Tenth_per',
Tenth_school='$Tenth_school',
Tenth_board='$Tenth_board',
Twelth_pyear='$Twelth_pyear',
Twelth_per='$Twelth_per',
Twelth_school='$Twelth_school',
Twelth_board='$Twelth_board'
where Email='$Email'";
$result = $conn->query($sql);


$sql_user = "select * from user_login where Email='$Email'";
$result1 = $conn->query($sql_user);
if ($result1->num_rows > 0){
    // output data of each row
	while($row = $result1->fetch_assoc())
	{
		//$U_id=$row['U_id'];
		//echo "<br>".$U_id;
		
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


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
	header("Location: http://localhost/job_suggestion_website/edit_details.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

</body>
</html>