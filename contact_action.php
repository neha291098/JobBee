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
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="insert into contact_us(name,email,phone,subject,message)values('$name','$email','$phone','$subject','$message');";
$conn->query($sql);
header("Location: http://localhost/job_suggestion_website/jobbee_contact.php");
?>