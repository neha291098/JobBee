<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css-jb/style-admin.css">
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
//  echo "Connected Yes";


?>





<style>
 

table{
	 background-color:white!important;
	 width:100%!important;
}
h2{
	color:black!important;
	background-color:white;
	    padding: 20px;
}

</style>

</head>
<body class="arrange"style="background-image:url('images/laptop1.jpg');">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Job-Bee</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/job_suggestion_website/admin_home.php">Home</a></li>
      <li><a href="http://localhost/job_suggestion_website/company_table.php">Companies</a></li>
      <li class="active"><a  class="active" href="http://localhost/job_suggestion_website/user_table.php">Users</a></li>
	  <li><a href="http://localhost/job_suggestion_website/contactus_data.php">User Queries</a></li>
      <li><a href="logging_out.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<table  align="center" class="table table-bordered">

<tr>
<h2 align="center">User Details</h2>
</tr>

<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Email</th>
<th>Phone Number</th>
<th>Delete</th>
</tr>

<?php
$sql="select * from user_login";
$run=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_assoc($run)) {
?>
<tr>
<td> <?php echo $rows['U_id']; ?></td>
<td> <?php echo $rows['Name']; ?></td>
<td> <?php echo $rows['Address']; ?></td>
<td> <?php echo $rows['Email']; ?></td>
<td> <?php echo $rows['Ph_no']; ?></td>
<form action="delby_admin.php" method="post">
<input type="hidden" value="deluser" name="action">
<input type="hidden" value="<?php echo $rows['U_id']; ?>" name="U_id">

<td><button type="submit">Delete</button></td>
</form>
</tr>

<?php
}
?>

</table> 
</div>


</body>
</html> 

 