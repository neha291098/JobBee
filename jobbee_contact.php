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
	<link rel="stylesheet" href="css-jb/font-awesome.min.css">
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/animate.css">
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="css-jb/myCss.css">
	<link rel="stylesheet" href="css-jb/myCss2.css">
	<link rel="stylesheet" href="css-jb/carousel.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css-jb/util.css">
	<link rel="stylesheet" type="text/css" href="css-jb/main.css">
<!--===============================================================================================-->

	<!-- Google Fonts -->
 	<!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> -->

	<!-- Custom & Default Styles -->
	
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/jobbee-desc.css">
	<link rel="stylesheet" href="style.css">
<style>
.err_msg{
	color:red;
}
.yamm .yamm-content ul li a, .navbar-nav > li > a {
	padding: 0px 0 3px!important;
}
.navbar-nav > li > .dropdown-menu {
	margin-top:10px!important;
}
.transheader {
    padding-top: 50px!important; 
    min-height: 0px!important; 
}
.section{
    padding: 7rem 0!important;
}

</style>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

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
				                <li class=""><a href="http://localhost/job_suggestion_website/jobbee_home.php">Home</a></li>
				                <!--<li class="dropdown yamm-fw hasmenu">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
						            <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="service-01.html">SEO Consultants</a></li>
							                    			<li><a href="service-02.html">SEO Audits</a></li>
							                    			<li><a href="service-03.html">SEO Packages & Plans</a></li>
							                    			<li><a href="service-04.html">Web Copywriting</a></li>
							                    			<li><a href="service-05.html">SEO Copywriting</a></li>
							                    			<li><a href="service-06.html">Keyword Research</a></li>
							                    			<li><a href="service-07.html">SEO Strategy</a></li>
							                    			<li><a href="service-08.html">Website Design</a></li>
							                    			<li><a href="service-09.html">Link Building Services</a></li>
							                    		</ul>
							                    	</div>
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="page-services.html">All Services</a></li>
							                    			<li><a href="page-pricing.html">Pricing & Plans</a></li>
							                    			<li><a href="page-clients.html">Our Clients</a></li>
							                    			<li><a href="page-testimonials.html">Testimonials</a></li>
							                    			<li><a href="page-ebooks.html">Free E-Books</a></li>
							                    			<li><a href="page-seo-analysis.html">SEO Analysis</a></li>
							                    			<li><a href="case-studies.html">Case Studies</a></li>
							                    			<li><a href="case-studies-alt.html">Case Studies Alt</a></li>
							                    			<li><a href="case-studies-single.html">Case Studies Single</a></li>
							                    		</ul>
							                    	</div>
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="blog.html">Blog & News</a></li>
							                    			<li><a href="blog-alt.html">Blog Alternative</a></li>
							                    			<li><a href="blog-single.html">Single Blog</a></li>
							                    			<li><a href="page.html">Default Page</a></li>
							                    			<li><a href="page-fullwidth.html">Fullwidth Page</a></li>
							                    			<li><a href="page-contact.html">Contact us</a></li>
							                    			<li><a href="page-contact-alt.html">Contact Alternative</a></li>
							                    			<li><a href="page-faqs.html">FAQ's Page</a></li>
							                    			<li><a href="page-not-found.html">404 Not Found</a></li>
							                    		</ul>
							                    	</div>
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>-->
				                <li><a href="http://localhost/job_suggestion_website/jobbee_jobs.php">Jobs</a></li>
				                <!--<li><a href="case-studies.html">Case Studies</a></li>
				                <li><a href="blog.html">Blog</a></li>-->
				                <li class="active"><a href="http://localhost/job_suggestion_website/jobbee_contact.php">Contact</a></li>
                                <!--<li class="lastlink hidden-xs hidden-sm"><a href="page-seo-analysis.html"><i class="glyphicon glyphicon-search"></i> free seo analysis</a></li>-->
								<!--<li><!--<a href="login_form.html">-->
								<!--<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Login</button></li>-->
								<li>
								
								
								<?php
				if (!empty($_SESSION['logged_in_user']))
					{
    
					//echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log out</button></li>';
					//echo "<a href='http://localhost/logging_out.php'>log out</a>";
					
					echo '<li class="dropdown yamm-fw hasmenu">
					<span style="background-color:white;border-radius:50%;padding:15px;">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>'.$_SESSION['res_name']. '</b></a>
							</span>
							<ul class="dropdown-menu">
						                <li>
										<div class="yamm-content">
										
										<ul>
							                    			<li><a href="http://localhost/job_suggestion_website/login_user_front.php						">Dashboard</a></li>
							                    			<li><a href="http://localhost/job_suggestion_website/jobs_applied.php">Jobs applied</a></li>
							                    			<li><a href="http://localhost/job_suggestion_website/gen_resume.php" target="_blank">Resume</a></li>
															<li><a href="http://localhost/job_suggestion_website/edit_details.php">Edit details</a></li>
															<li><a href="http://localhost/job_suggestion_website/logging_out.php">Log out</a></li>
										</ul>
										
										</div>
										</li>
										</ul>
										</li>';
					}
					?></li>
					<li><?php
				if (!empty($_SESSION['logged_in_com']))
					{
    
					//echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log out</button></li>';
					//echo "<a href='http://localhost/job_suggestion_website/logging_out.php'>log out</a>";
					
					echo '<li class="dropdown yamm-fw hasmenu">
					<span style="background-color:white;border-radius:50%;padding:15px;">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>'. $_SESSION['res_name']. '</b></a>
							</span>
							<ul class="dropdown-menu">
						                <li>
										<div class="yamm-content">
										
										<ul>
							                    			<li><a href="http://localhost/job_suggestion_website/login_company_front.php">Dashboard</a></li>
							                    			<li><a href="http://localhost/job_suggestion_website/job_posted.php">Jobs posted</a></li>
							                    			<li><a href="http://localhost/job_suggestion_website/add_job.php">Add job</a></li>
															<li><a href="http://localhost/job_suggestion_website/editcompany_data.php">Edit details</a></li>
															<li><a href="http://localhost/job_suggestion_website/logging_out.php">Log out</a></li>
										</ul>
										
										</div>
										</li>
										</ul>
										</li>';
					}
					?></li>
					<?php
				if (empty($_SESSION['logged_in_user']) & empty($_SESSION['logged_in_com']))
					{
    
					
					echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log in</button></li>';
			
					
				
				
    
					
					//echo '<li><a href="http://localhost/new_login.php"><button type="button" id="myBtn" name="submit" class="btn btn-primary">Sign up</button></a></li>' ;
						echo '<li class="dropdown yamm-fw hasmenu">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign up </a>
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
								
								<!--<li><button type="button" id="myBtn" name="submit" class="btn btn-primary" onclick="window.location.href = 'http://localhost/new_login.php';">Sign up</button></li>-->
							
							</ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader bgcolor">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Contact Us</h2>
						<!--<p class="lead">We offer the best offer for your business search engine optimization</p>-->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
		
		
		<script type="text/javascript">
    var display_bl = "<?php echo $_SESSION['message_login']; ?>";
	//document.write(display_bl);
	if (display_bl=="*Incorrect username or password"){
		document.write("*Incorrect username or password");
		document.getElementById("myModal").style.display="block";
	}
</script>
<section>
<div id="myModal" class="modal" >


  <!-- Modal content -->
  <div class="modal-content">
    
	<div class=" p-l-10 p-r-20 p-t-20 p-b-10">
	
				<form  id="myForm" class="login100-form validate-form" action="username_pass_login.php" method="post">
					<div>
					
					<span id="close-popup" class="close">X</span>
					<span class="login100-form-title p-b-49">
						Login
					</span>
					</div>
<?php if(!empty($_SESSION['message_login'])) { 
   $msg=$_SESSION['message_login'];
	echo "<span class='err_msg'>".$msg."</span>";
	$SESSION['message_login']="";
	
   }
	?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username_chk" placeholder="Type your username" value="">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass_chk" placeholder="Type your password" value="">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-20 p-b-20">
						<!--<span>
							Or Sign Up Using
						</span>-->
						<a href="new_login.php" class="txt2">
							Sign Up
						</a><br>
						<a href="new_login_com.php" class="txt2"  >
							Sign Up as Company
						</a>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<!--<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>-->
				</form>
				
			</div>
  </div>

</div>
</section>		

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-details">
							<h3>Welcome to the Support Center</h3>
							<p>If you have information about any security or abuse issue on any of our services, let us know immediately.</p>

							<p>Please use the options below to find and report the problem.</p>

							<!--<hr>

							<h4>Privacy and safety tips</h4>
							<p><a href="#">SeoTime Know Good</a> - tips and suggestions to be safer on the web.</p>-->
						</div>
					</div>

					<div class="col-md-5">
						<form name="myForm" onsubmit="return validateForm();" class="contactform" method="post" action="contact_action.php" >
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    <div class="form-group">
						        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone"  required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						    </div>
						    <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"name="message" required></textarea>
						    </div>
						    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
						</form>
					</div><!-- end col -->

					<div class="col-md-3 mb30">
						<div class="contact-details">
							<ul>
								<li><i class="fa fa-phone"></i> <span>444 01 444</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>+01 (543) 987 65 432</span></li>
								<li><i class="fa fa-fax"></i> <span>+01 (543) 987 65 431</span></li>
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:#">info@job-bee.com</a></span></li>
								<li><i class="fa fa-twitter"></i> <span><a href="#">twitter.com/job-bee</a></span></li>
								<li><i class="fa fa-facebook"></i> <span><a href="#">facebook.com/job-bee</a></span></li>
								<li><i class="fa fa-instagram"></i> <span><a href="#">instagram.com/job-bee</a></span></li>
								<li><i class="fa fa-google-plus"></i> <span><a href="#">google.com/job-bee</a></span></li>
							</ul>
						</div><!-- end contact details -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

        <div id="map"></div>

		<!--<section class="section ldp">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<!--<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<!--<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	
					<!--<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<!--<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_05.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<!--<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_06.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	
				<!--</div><!-- end row -->
			<!--</div><!-- end container -->
		<!--</section><!-- end section -->

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
                    		<h4 class="widget-title">Company</h4>
                    		<ul>
                    			<li><a href="#">About us</a></li>
                    			<li><a href="#">Carrier</a></li>
                    			<li><a href="#">Trademark</a></li>
                    			<li><a href="#">Contact</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <!--<div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Services</h4>
                    		<ul>
                    			<li><a href="#">Design & Dev</a></li>
                    			<li><a href="#">ASP.NET</a></li>
                    			<li><a href="#">PHP Development</a></li>
                    			<li><a href="#">Mobile App</a></li>
                    			<li><a href="#">Oracle</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    <!--</div><!-- end col -->

                    <!--<div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Download</h4>
                    		<ul>
                    			<li><a href="#">MAC/OSX</a></li>
                    			<li><a href="#">Android</a></li>
                    			<li><a href="#">Windows</a></li>
                    			<li><a href="#">Google Play</a></li>
                    			<li><a href="#">Amazon</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    <!--</div><!-- end col -->

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
                        <p>2010 - 2018  <a href="#">Job-Bee</a>All rights reserved.</p>
                    </div>

                    <!--<div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li>Designed: <a href="https://html.design">HTML Design</a></li>
                        </ul>
                    </div><!-- end col -->
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
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>
	<script src="js-jb/popup.js"></script>
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js-jb/main.js"></script>
<script>
function validateForm() {

	var d=document.forms["myForm"]["phone"].value;

		var phoneno = /^\d{10}$/;
		if(!d.match(phoneno))
        {
      			alert("Phone number must be 10 digits");
				return false;
        }
	
}
</script>
</body>
</html>