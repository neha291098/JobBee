<?php
session_start();
?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>JOB-BEE</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css-jb/myCss.css">
	<link rel="stylesheet" href="css-jb/font-awesome.min.css">
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/animate.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css-jb/carousel.css">


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
<!-- validation -->
<script>
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
var regexDigitsOnly = "^[0-9]*$";
$('input.ph_no').inputmask('Regex', { regex: regexDigitsOnly });

function validate() {
            var Tenth_perString = document.myForm.Tenth_per.value;
            var Tenth_per = parseInt(Tenth_perString);
            if (Tenth_per <= 0 || Tenth_per > 100) {
                alert("Please Provide Correct Percentage.");
                document.myForm.Tenth_per.focus();
                return false;
            }
        }
function validate() {
            var Twelth_perString = document.myForm.Twelth_per.value;
            var Twelth_per = parseInt(Twelth_perString);
            if (Twelth_per <= 0 || Twelth_per > 100) {
                alert("Please Provide Correct Percentage.");
                document.myForm.Twelth_per.focus();
                return false;
            }
        }
</script>
<style>
.next_box{
margin-bottom: 70px!important;
padding:40px;
}

.form-control{
	border:1 px solid black !important;
}
.btn-primary{
	float:right!important;
	margin-right:150px;
}
.lft-float{
	float:left!important;
	
}
fieldset{
	margin-bottom: 70px!important;
padding:40px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
margin-bottom: 80px!important;
height:60%px;
width:80%;
margin:Auto;
padding:40px;
padding-left:40px!important;
border-left: 1px solid #d5d5d5;
border-top:1px solid #d5d5d5;
}
legend{
padding:20px;background:linear-gradient(45deg, #3ac5c8 1%, #0b509e 100%);border-radius: 35px;
}
.err_msg{
	color:red;
}


</style>	

</head>
<body>
	
	<div id="wrapper">
		<header class="header site-header header-transparent">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							<!--<a class="navbar-brand" href="index.html"><img src="images/lightlogo.png" alt="Linda"></a>-->
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class=""><a href="http://localhost/job_suggestion_website/jobbee_home.php" style="color:black!important">Home</a></li>
				                
				                <li class="active"><a href="http://localhost/job_suggestion_website/jobbee_jobs.php" style="color:black!important">Jobs</a></li>
				                <!--<li><a href="case-studies.html">Case Studies</a></li>
				                <li><a href="blog.html">Blog</a></li>-->
				                <li class=""><a href="http://localhost/job_suggestion_website/jobbee_contact.php" style="color:black!important">Contact</a></li>
								<?php
				/*if (empty($_SESSION['logged_in']))
					{
    
					
					echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log in</button></li>';
					}*/
					?>
					<?php
				if (empty($_SESSION['logged_in']))
					{
    
					
					//echo '<li><a href="http://localhost/new_login.php"><button type="button" id="myBtn" name="submit" class="btn btn-primary">Sign up</button></a></li>' ;
					echo '<li class="dropdown yamm-fw hasmenu">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black!important">Sign up </a>
							<ul class="dropdown-menu">
						                <li>
										<div class="yamm-content">
										
										<ul>
							                    			<li><a href="http://localhost/job_suggestion_website/new_login.php">Applicant</a></li>
							                    			<li><a href="http://localhost/job_suggestion_website/new_login_com.php">Company</a></li>
										</ul>
										
										</div>
										</li>
										</ul>
										</li>';
					
					}
					?>
                                <!--<li class="lastlink hidden-xs hidden-sm"><a href="page-seo-analysis.html"><i class="glyphicon glyphicon-search"></i> free seo analysis</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<!--<section class="section transheader customtitle">
			<div class="container" >
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Fill Details</h2>
						<!--<p class="lead">Discover why over 5,1000 website owners trust SeoTime.</p>-->
					<!--</div><!-- end col -->
				<!--</div><!-- end row -->
			<!--</div><!-- end container -->
		<!--</section><!-- end section -->
		
		
		
		<section class="section">
			<div class="container">
				
				 <?php if(!empty($_SESSION['c_message'])) { 
   $msg=$_SESSION['c_message'];
	echo "<span class='err_msg'>".$msg."</span>";
   }
	?>
				<form action="com_login_action.php" method="post" role="form" class="contactform" enctype="multipart/form-data">
				<!--<div class="next_box" >-->
				
	<fieldset>
		<legend class="lead"><center><b>Sign up</b></center></legend>
	   <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" maxlength="20"  class="form-control" id="c_Name" placeholder="Enter Name" name="C_Ename" required>
    </div>
	<div class="form-group">
      <label for="Address">Company</label>
      <input type="text" maxlength="500" class="form-control" id="c_Company" placeholder="Enter Address" name="C_Company" required>
    </div>
	<div class="form-group">
      <label for="Address">Job Title</label>
      <input type="text" maxlength="20" class="form-control" id="c_JobTitle" placeholder="Enter Address" name="C_JobTitle" required>
    </div>
	
	
    <div class="form-group">
	
      <label for="Email">Email</label>
      <input type="Email" class="form-control" id="c_Email" placeholder="Enter Email" name="C_Email" required>
   <?php if(!empty($_SESSION['c_message'])) { 
   $msg=$_SESSION['c_message'];
	echo "<span class='err_msg'>".$msg."</span>";
   }
	?>
	</div>
	<div class="form-group">
      <label for="image">Upload Photo</label>
	  <input name="image"  type="file" style="float: left;
    height: 40px;" >
	  </div>
	<div class="form-group">
      <label for="Skills">Password</label>
      <input type="password" class="form-control" id="C_Setpwd" placeholder="Enter Password" name="C_Setpwd" onkeyup='check();' required>
    </div>
	<div class="form-group">
      <label for="Skills">Confirm Password</label>
      <input type="password" class="form-control" id="C_rPwd" placeholder="Enter Password" name="C_rPwd" onkeyup='check();'required>
	  <span id="err_message"></span>
    </div>
	    
	
	</fieldset>
	
	
	
		
			<button type="submit"  id="login_btn" class="btn btn-primary" disabled>submit</button>	
			</form>	
			</div><!-- end container -->
		</section><!-- end section -->

		

		<footer class="footer primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Subscribe</h4>
                    		<div class="newsletter-widget">
                    			<p>You can opt out of our newsletters at any time. See our privacy policy.</p>
		                        <form class="form-inline" role="search">
		                            <div class="form-1">
		                              	<input type="text" class="form-control" placeholder="Enter email here..">
										<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
		                            </div>
								</form>
                    		</div><!-- end newsletter -->
                    	</div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Job-Bee</h4>
                    		<ul>
                    			<li><a href="#">About us</a></li>
                    			<li><a href="#">Carrier</a></li>
                    			<li><a href="#">Trademark</a></li>
                    			<li><a href="#">Contact</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Be Social</h4>
                    		<ul>
                    			<li><a href="#">Facebook</a></li>
                    			<li><a href="#">Twitter</a></li>
                    			<li><a href="#">Google+</a></li>
                    			<li><a href="#">Linkedin</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
           	</div><!-- end container -->
		</footer><!-- end primary-footer -->

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>2010 - 2018<a href="#"> Job-Bee</a> All rights reserved.</p>
                    </div>
 
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->
	</div><!-- end wrapper -->

	<!-- jQuery Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script>
var check = function() {
  if (document.getElementById('C_Setpwd').value ==document.getElementById('C_rPwd').value) {
    //document.getElementById('err_message').style.color = 'green';
    document.getElementById('err_message').innerHTML = '';
	document.getElementById("login_btn").disabled = false;
  } else {
    document.getElementById('err_message').style.color = 'red';
    document.getElementById('err_message').innerHTML = '*Passwords are not same';
	document.getElementById("login_btn").disabled = true;
  }
}
	</script>

</body>
</html>