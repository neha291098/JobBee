<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Queries</title>
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
// echo "Connected Yes";
$sql="select * from contact_us;";
$run=$conn->query($sql);

?>

<style>
   
table{
	 background-color:white!important;
}
h2{
	color:black!important;
	background-color:white;
	    padding: 20px;
}


</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  style="background-image:url('images/laptop1.jpg');">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Job-Bee</a>
    </div>
    <ul class="nav navbar-nav">
            <li><a href="http://localhost/job_suggestion_website/admin_home.php">Home</a></li>

      <li><a class="active" href="http://localhost/job_suggestion_website/company_table.php">Companies</a></li>
      <li><a href="http://localhost/job_suggestion_website/user_table.php">Users</a></li>
	  <li class="active"><a href="http://localhost/job_suggestion_website/contactus_data.php">User Queries</a></li>
      <li><a href="logging_out.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<table  align="center" class="table table-bordered">

<tr>
<h2 align="center">User Queries</h2>
</tr>

<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Message</th>
</tr>

<?php

while($rows = $run->fetch_assoc()) {
?>
<tr>
<td> <?php echo $rows['id']; ?></td>
<td> <?php echo $rows['name']; ?></td>
<td> <?php echo $rows['email']; ?></td>
<td> <?php echo $rows['phone']; ?></td>
<td> <?php echo $rows['subject']; ?></td>
<td> <?php echo $rows['message']; ?></td>


</tr>

<?php
}
?>

</table> 
</div>

</body>
</html> 

 