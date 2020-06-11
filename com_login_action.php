<?php
session_start();
$_SESSION = array();
?>
<html>
<body>

 <?php
				$C_Ename= $_POST["C_Ename"];
				$C_Company=$_POST["C_Company"];
				$C_JobTitle=$_POST["C_JobTitle"];
				$C_Email=$_POST["C_Email"];
				$C_Setpwd=$_POST["C_Setpwd"];
				
				
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

//echo $hash_pwd;

//$email_chk="select U_id from user_login where Email='$Email'";
//$pwd_chk="select U_id from user_login where Set_pwd='$hash_pwd'";
//$email_result=$conn->query($email_chk);
//$pwd_result=$conn->query($pwd_chk);



//if ($conn->query($pwd_chk) === TRUE) {
//    echo "mil gaya";
//} else {
//    echo "Error: " . $pwd_chk . "<br>" . $conn->error;
//
//




//$hash_pwd=hash('ripemd160','$_POST["Pwd"]');
$sql_user="select U_id from user_login where Email='$C_Email'";
$result1 = $conn->query($sql_user);
$sql_com= "select * from company_login where C_Email='$C_Email'";
$result2=$conn->query($sql_com);
if ($result1->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    $U_id=$row['U_id'];
    //}
	$_SESSION['c_message'] = '*Email aready used as an applicant';
	header("Location: http://localhost/job_suggestion_website/new_login_com.php "); 
} 
else if ($result2->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    //    $U_id=$row['U_id'];
    //}
	$_SESSION['c_message'] = '*Email aready used';
	header("Location: http://localhost/job_suggestion_website/new_login_com.php "); 
} 

else {
 
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

$hash_pwd=md5($C_Setpwd);
$sql = "INSERT INTO job_sugg.company_login (C_Ename,C_Company,C_JobTitle,C_Email,C_Photo,C_Setpwd) values ('$C_Ename','$C_Company','$C_JobTitle','$C_Email','$file','$hash_pwd')";

//echo mysqli_query($conn, $sql);
//$conn->query($sql)
if (mysqli_query($conn, $sql) === TRUE) {
    //echo "New record created successfully";

	


header("Location: http://localhost/job_suggestion_website/jobbee_home.php"); 
}	
else{
echo "errorrrrrrrr";

}	


//else {
    //echo "<br>" . $conn->error;
	//$sql_chk= "select * from company_login where C_Email='$C_Email'";
	//$result=$conn->query($sql_chk);
	//if ($result->num_rows == 0) {
		//echo "This password already exists";
	//}
	//else{
		//echo "This Email already exists";
		
		//$_SESSION['c_message'] = '*Email aready used';
		//header("Location: http://localhost/new_login_com.php "); 
	//}
		
	//}//

}	
				



?>


<!--
$array_values="";
if (isset($_POST["input_array_name"]) && is_array($_POST["input_array_name"])){ 
    $input_array_name = array_filter($_POST["input_array_name"]); 
    foreach($input_array_name as $field_value){
        $array_values .= $field_value."<br />";
    }
}
echo $array_values;
?>-->
			


</body>
</html>