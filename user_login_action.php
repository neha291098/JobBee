<?php
session_start();
$_SESSION = array();
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
				$Project=$_POST["Project"];
				$Experience=$_POST["Experience"];
				$Skills=$_POST["Skills"];
				$Pwd=$_POST["Pwd"];
				
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "job_sugg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//echo "hahaha";
// Check connection
if ($conn->connect_error) {
	echo "hahaha";
    die("Connection failed: " . $conn->connect_error);
}



$sql_user="select U_id from user_login where Email='$Email'";
$result1 = $conn->query($sql_user);
//echo $result1->num_rows;
$sql_com= "select * from company_login where C_Email='$Email'";
$result2=$conn->query($sql_com);
//echo $result2->num_rows;
if ($result1->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    $U_id=$row['U_id'];
    //}
	$_SESSION['message'] = '*Email aready used';
	header("Location: http://localhost/job_suggestion_website/new_login.php "); 
} 
else if ($result2->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    $U_id=$row['U_id'];
    //}
	$_SESSION['message'] = '*Email aready used as a company employee';
	header("Location: http://localhost/job_suggestion_website/new_login.php "); 
} 
else{
	
	if ($_FILES["image"]["error"] > 0)
	{
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
	}
   else
   {
     move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $_FILES["image"]["name"]);
     //echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="profile/".$_FILES["image"]["name"];
    
	}

	//$hash_pwd=hash('ripemd160','$_POST["Pwd"]');
	$hash_pwd=md5($Pwd);
	//echo $Objective.' '.$Name.' ' .$Email.' '.$hash_pwd;
	$sql = "INSERT INTO user_login (Objective,Name,Address,Email,Ph_no,Tenth_pyear,Tenth_per,Tenth_school,Tenth_board,Twelth_pyear,Twelth_per,Twelth_school,Twelth_board,Project,Experience,Skills,Photo,Set_pwd)
	VALUES ('$Objective','$Name','$Address','$Email','$Ph_no','$Tenth_pyear','$Tenth_per','$Tenth_school','$Tenth_board','$Twelth_pyear','$Twelth_per','$Twelth_school','$Twelth_board','$Project','$Experience','$Skills','$file','$hash_pwd')";

	if (mysqli_query($conn, $sql) === TRUE) {
		//echo "New record created successfully";

		$sql_uid="select U_id,Project,Experience from user_login where Email='$Email'";
		$result = $conn->query($sql_uid);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$U_id=$row['U_id'];
				$Project=$row['Project'];
				$Experience=$row['Experience'];
			}
		} 
		else {
			echo "0 results";
		}

		if(count($_POST))
		{
			if($Project=="Yes"){
			$len = count($_POST['P_dur']);
			//echo $len;
			for ($i=0; $i < $len-1; $i++)
			{
				$d= $_POST['P_dur'][$i] ;
				$d1=$_POST['P_dur1'][$i];
				$t= $_POST['P_title'][$i] ;
				$a= $_POST['P_desc'][$i] ;
				$sql1= "INSERT INTO proexp_details (U_id,Email,Type,PE_duration_start,PE_duration_end,PE_title,PE_description)values ('$U_id','$Email','Project','$d','$d1','$t','$a')";
				$conn->query($sql1);
			}
			}
			if($Experience=="Yes"){
				$len = count($_POST['E_dur']);
			//echo $len;
			for ($i=0; $i < $len-1; $i++)
			{
				$d= $_POST['E_dur'][$i] ;
				$d1=$_POST['E_dur1'][$i];
				$t= $_POST['E_title'][$i];
				$a= $_POST['E_desc'][$i];
				$sql2= "INSERT INTO proexp_details (U_id,Email,Type, PE_duration_start,PE_duration_end,PE_title,PE_description)values ('$U_id','$Email','Experience','$d','$d1','$t','$a')";
				$conn->query($sql2);
			}
			}
		}
		
		header("Location: http://localhost/job_suggestion_website/jobbee_home.php"); 
	}
	else{
		//die("Connection failed: " . $conn->connect_error);
		echo 'error';
	}	
}		

?>

</body>
</html>