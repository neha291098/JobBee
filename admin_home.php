<?php
session_start();
?>
<html lang="en">
<head>
   
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css-jb/style-admin.css">
    <title>Home</title>
    <style>
    h2{
	color:black!important;
	background-color:white;
	    padding: 20px;
}
p{color:black!important;
	background-color:white;
	    padding: 20px;
		font-size:18px;
}
	
    </style>
</head>

<body  style="background-image:url('images/laptop1.jpg');">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Job-Bee</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/job_suggestion_website/admin_home.php">Home</a></li>
      <li><a href="http://localhost/job_suggestion_website/company_table.php">Companies</a></li>
      <li><a href="http://localhost/job_suggestion_website/user_table.php">Users</a></li>
	  <li><a href="http://localhost/job_suggestion_website/contactus_data.php">User Queries</a></li>

      <li><a href="logging_out.php">Logout</a></li>
    </ul>
  </div>
</nav>


</body>
<div class="container">
<h2 align="center">Welcome <?php echo $_SESSION['user'];?></h2>
<p>This website provides the facility to the youth to search for jobs according to their preference of location and profile.
It also provides feature of resume making, that helps one to make a perfect resume to stand out in the crowd. Also, it is a platform for the companies to find the best talent in the country.</p>
<p>Admin can view both the companies and applicants that are registered on the website. Admin has the right to delete any company and user from the website, that may be due to a complaint filed against the account by any user. </p>
<p> In case of any issues regarding the website, admin can be contacted by filling contact form available on our website. He will take care of the grievances of the users. Also, admin has the right to add review based on the company performance.</p>

</div>
</html>