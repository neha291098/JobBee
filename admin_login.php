<?php
session_start();
?>
<html>
<head>
	<title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css-jb/style-admin.css">

    <style>
 
	body {
 background-image: url("images/laptop1.jpg");
background-repeat: no-repeat;
}
 form{
	 background-color:white;
	 width: 25%!important;
 }
 h2{
	 color:black!important;
 }
.navbar-header{
	
}
 
</style>
</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <center><a class="navbar-brand" href="#">Job-Bee</a></center>
    </div>
	<ul class="nav navbar-nav">
      <li ><a href="http://localhost/job_suggestion_website/jobbee_home.php">Go Back</a></li>
	  </ul>
	</div>
	</nav>


	<form method="post" action="admin_login_action.php" >
	<center><h2>Login Admin</h1>
		<div class="input-group">
			<label>User Name</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required>
		</div>
		
		<script type="text/javascript">
    var display_bl = "<?php echo $_SESSION['error_admin']; ?>";
	//document.write(display_bl);
	if (display_bl=="*Invalid login"){
		document.write("<span style='color:red'>*Invalid login</span>");
	}
		</script>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Submit</button>
		</div>
		</center>
	</form>
 
</body>
</html>

<!-- $name=$_post['name'];
$sql="select * from adminn where name='$name';
$run=mysqli_query($conn,$sql);
if($run==true)
{
    echo"usernam already exist";
}
else
{
    
} -->