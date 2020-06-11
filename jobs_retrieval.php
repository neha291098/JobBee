<?php
session_start();
$_SESSION = array();
?>

<html>
<body>
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

$sql= "select * from jobs";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        $J_id=$row['J_id'];
		echo $J_id;
		$Location=$row['Location'];
		echo $Location;
		
    }
}

     //header("Location: http://localhost/job_suggestion_website/jobbee_jobs.php"); 
		
	?>
</body>
</html>	