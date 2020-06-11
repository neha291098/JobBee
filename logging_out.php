<?php   
session_start();
$_SESSION = array();
?>

<html>
<body>

<?php 
session_destroy(); //destroy the session
header("Location:http://localhost/job_suggestion_website/jobbee_home.php"); //to redirect back to home after logging out
?>

</body>
</html>