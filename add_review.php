<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css-jb/style-admin.css">
    <style>
    form{
	 background-color:white!important;
	 width:40%!important;
}
h2{
	color:black!important;
	background-color:white;
	    padding: 20px;
}
.input-group {
    margin: 15px 0px 10px 0px!important;
}
    </style>
</head>
<body style="background-image:url('images/laptop1.jpg');">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Job-Bee</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://localhost/job_suggestion_website/admin_home.php">Home</a></li>
      <li  class="active"><a href="http://localhost/job_suggestion_website/company_table.php">Companies</a></li>
      <li><a href="http://localhost/job_suggestion_website/user_table.php">Users</a></li>
	  <li><a href="http://localhost/job_suggestion_website/contactus_data.php">User Queries</a></li>
      <li><a href="logging_out.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<h2 align="center">Add Review</h2>

<form name="addreview" action="delby_admin.php" method="post" onsubmit="return validateForm()"><center>

 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="job_sugg";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected Yes";

$C_id=$_POST['C_id'];
$C_Company=$_POST['C_Company'];
$sql="select * from jobs where C_id='$C_id';";
$run=$conn->query($sql);
if($rows = $run->fetch_assoc()) {
	$Overall_rating=$rows['Overall_rating'];
	$Rec_tofriend=$rows['Rec_tofriend'];
	$Approve_ofceo=$rows['Approve_ofceo'];
}
else{
	$Overall_rating="";
	$Rec_tofriend="";
	$Approve_ofceo="";
}
?>
		<div class="input-group">
			<label style="font-size:20px">Company</label>
			<p style="font-size:20px"><?php echo $C_Company;?></p>
		</div>
		
		<div class="input-group">
			<label>Overall Rating (Out of 5)</label>
			<input type="number" name="Overall_rating" value="<?php echo $Overall_rating;?>" required>
			
		</div>

        <div class="input-group">
			<label>Recommend To Friend %</label>
			<input type="number" name="Rec_tofriend" value="<?php echo $Rec_tofriend;?>"required>
		</div>
		 
        <div class="input-group">
			<label>Approve Of Ceo %</label>
			<input type="number" name="Approve_ofceo" value="<?php echo $Approve_ofceo;?>"required>
		</div>
		 
		 <div style="display:none">
<input type="hidden" value="addreview" name="action">
<input type="number" value="<?php echo $_POST['C_id']; ?>" name="C_id"required>
</div>


		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
		
		</center>
	</form>
 
 
</div>
<script>
function validateForm() {
  var x = document.forms["addreview"]["Overall_rating"].value;
  if (x.length>1 || x>5) {
    alert("Rating must be out of 5");
    return false;
  }
 var y = document.forms["addreview"]["Rec_tofriend"].value;
  if (y>100) {
    alert("Recommend To Friend % must be less than 100");
    return false;
  } 
  var z = document.forms["addreview"]["Approve_ofceo"].value;
  if (z>100) {
    alert("Approve Of Ceo % must be less than 100");
    return false;
  } 
}
</script>
</body>
</html>