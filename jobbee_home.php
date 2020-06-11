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
	<link rel="stylesheet" href="css-jb/carousel.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css-jb/myCss.css">
	<link rel="stylesheet" href="css-jb/myCss2.css">

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
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>


</head>
<body>

	
	<div id="wrapper">
        <!--<div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <nav class="topbar-menu">
                            <ul class="list-inline">
                            	<li>Follow us: </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul><!-- end list -->
                        <!--</nav><!-- end menu -->
                    <!--</div><!-- end col -->

                    <!--<div class="col-md-6 col-sm-6">
                        <nav class="topbar-menu">
                            <ul class="list-inline text-right navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/us.png" alt=""> English
                                    <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><img src="images/tr.png" alt=""> Turkish</a></li>
                                        <li><a href="#"><img src="images/si.png" alt=""> Spanish</a></li>
                                        <li><a href="#"><img src="images/it.png" alt=""> Italian</a></li>
                                        <li><a href="#"><img src="images/ae.png" alt=""> Arabic</a></li>
                                        <li><a href="#"><img src="images/de.png" alt=""> German</a></li>
                                    </ul>
                                </li>
                                <!--<li class="hidden-xs"><i class="fa fa-clock-o"></i> 08:00 - 17:00</li>-->
                                <!--<li><i class="fa fa-phone"></i> +90 987 665 55 44</li>
                            </ul><!-- end list -->
                        <!--</nav><!-- end menu -->
                    <!--</div><!-- end col -->
                <!--</div><!-- end row -->
            <!--</div><!-- end container -->
        <!--</div><!-- end topbar -->

		<header class="header site-header">
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
							<!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Linda"></a>-->
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="active"><a href="http://localhost/job_suggestion_website/jobbee_home.php">Home</a></li>
				                
				                <li><a href="http://localhost/job_suggestion_website/jobbee_jobs.php">Jobs</a></li>
								<li><a href="http://localhost/job_suggestion_website/jobbee_contact.php">Contact</a></li>
				                
								
								
								
								
								
								<li><?php
				if (!empty($_SESSION['logged_in_user']))
					{
    
					//echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log out</button></li>';
					//echo "<a href='http://localhost/job_suggestion_website/logging_out.php'>log out</a>";
					
					echo '<li class="dropdown yamm-fw hasmenu">
					<span style="background-color:white;border-radius:50%;padding:15px;border:4px solid #3ac5c8">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>'. $_SESSION['res_name']. '</b></a>
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
					<span style="background-color:white;border-radius:50%;padding:15px;border:4px solid #3ac5c8">
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
			
					
				
				
    
					
					//echo '<li><a href="http://localhost/job_suggestion_website/new_login.php"><button type="button" id="myBtn" name="submit" class="btn btn-primary">Sign up</button></a></li>' ;
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
					<li><a href="http://localhost/job_suggestion_website/admin_login.php">Admin</a></li>
							</ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->
<section>
<?php //if (!empty($_SESSION['message_login'])){
	//echo '<script>document.getElementById(myModal).style.display="block";</script>';
	
//}?>

<script type="text/javascript">
    var display_bl = "<?php echo $_SESSION['message_login']; ?>";
	//document.write(display_bl);
	if (display_bl=="*Incorrect username or password"){
		document.write("<span class='err_msg'>*Incorrect username or password</span>");
		document.getElementById("myModal").style.display="block";
	}
</script>

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
						<a href="new_login.php" class="txt2" >
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
		<section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/laptop1.jpg');">
			<div class="container" style="background-color: rgba(0,0,0,0.4);">
			<!--upload/landscape_img.jpg-->
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
					<h2>Job-Bee</h2>
						<h2>Find your dream job</h2>
						<p class="lead"><b>If opportunity doesn't knock, build a door.</b></p>
						<!--<form class="calculateform">
						    <div class="item-box">
						        <div class="item-top form-inline">
						            <div class="form-group">
						                <div class="input-group2">
						                    <span class="input-addon">
												<i class="fa fa-link"></i>
											</span>
											<form method="post">
						                    <input type="text" class="form-control" id="urladres" name="Location" placeholder="Job Location">
						                </div>
						            </div>
						            <input type="submit" name="send" value="Search" class="btn btn-default" ><a href="http://localhost/job_suggestion_website/search_job.php"></a></input></form>
						        </div>
						    </div>
						</form>-->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->


		
		<section class="section nopad">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 nopad first">
						<div class="home-service c1">
							<i class="flaticon-competition"></i>
							<p>Find jobs that suits your personality</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c2">
							<i class="flaticon-chat"></i>
							<p>Find best employees for your company</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c3">
							<i class="flaticon-domain"></i>
							<p>Generate your resume automatically</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad last">
						<div class="home-service c4">
							<i class="flaticon-medal"></i>
							<p>Get to know about companies by reviews</p>
						</div><!-- end home-service -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section overfree">
			<div class="icon-center"><i class="fa fa-anchor"></i></div>
			<div class="container">
				<div class="section-title text-center">
					<small>Welcome to the best job finding website</small>
					<h3>About us</h3>
					<hr>
					<p class="lead">This site allows users (workers and employers) to create profiles, which for employees typically consist of a curriculum
								vitae describing their work experience, education, training and skills.</p>
				</div><!-- end section-title -->
				
				<!--<div class="row service-list text-center">
					<div class="col-md-4 col-sm-12 col-xs-12 first">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-competition"></i>
							<div class="service-details">
								<h4><a href="service-01.html" title="">What We Do</a></h4>
								<p>  </p>
								<!-- <a href="#" class="readmore">View Details</a>-->
							<!--</div>
						</div><!-- end service-wrapper -->
					<!--</div><!-- end col -->

					<!--<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-content"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Who We Are</a></h4>
								<p>Pellentesque diam lorem, convallis ac auctor pretium, commodo ac lectus. Maecenas quis dui vel velit blandit ultrices.</p>
								<a href="#" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					<!--</div><!-- end col -->

					<!--<div class="col-md-4 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-html"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Mission</a></h4>
								<p>Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis.</p>
								<a href="#" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					<!--</div><!-- end col -->
				<!--</div>
				<!-- end row -->
			<!--
				<hr class="invis2">

				<div class="row">
					<div class="col-md-4">
                        <div class="milestone-counter c1">
                            <img src="images/icon_07.png" alt="" class="alignleft">
                            <h3 class="stat-count">2901</h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c2">
                            <img src="images/icon_08.png" alt="" class="alignleft">
                            <h3 class="stat-count">304</h3>
                            <p>Online Strategy</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c3">
                            <img src="images/icon_09.png" alt="" class="alignleft">
                            <h3 class="stat-count">890</h3>
                            <p>Great Results</p>
                        </div>
                    </div>
                </div>
			</div><!-- end container -->
		<!--</section><!-- end section -->
		
		<!--<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>

		<section class="section bt">
			<div class="container">
				<div class="section-title text-center">
					<small>Our search engine optimization works and happy customers in the past.</small>
					<h3>Case Studies</h3>
				</div><!-- end section-title -->

				<!--<div class="owl-carousel owl-theme lightcasestudies withhover">
					<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_01.png" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->

					<!--<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_07.jpg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->

					<!--<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_03.png" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->

					<!--<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_02.png" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->

					<!--<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_05.jpg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->

					<!--<div class="item-carousel">
						<div class="case-box">
							<img src="upload/case_06.jpg" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					<!--</div><!-- end col -->
				<!--</div>
		    </div>
		</section>

		<section class="section lb nopad spotlight style1">
		    <div class="content">
		        <h2>Protect place with detailed analysis</h2>
		        <p>Donec congue odio in mi finibus dignissim. Etiam faucibus pharetra euismod. Pellentesque malesuada et ligula et scelerisque. Pellentesque aliquet magna ut dolor consequat, luctus tincidunt metus consequat. Nam eu mattis ante, nec facilisis purus. Praesent ac venenatis erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt finibus.</p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_01.jpg" alt="" />
		    </div>
		</section>

		<section class="section overfree">
			<div class="icon-center"><i class="fa fa-bar-chart"></i></div>
			<div class="container">
				<div class="section-title text-center">
					<small>Please select your correct price in below</small>
					<h3>Ideal SEO Packages</h3>
				</div><!-- end section-title -->
				<!--<div class="center-pricing">
				  	<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Montlhy</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yearly</a></li>
				  	</ul>
			  		<div class="tab-content">
			    		<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row big-pricing">
								<div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
									<div class="pricing-header firstch c0">
										<p>Check our prices for SEO studies!</p>
										<h4>Monthly SEO Packages</h4>
									</div><!-- end pricing-header -->
									<!--<ul class="first-colon">
										<li>Competition power 
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Keyword
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Rank Guarantee 
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sectoral Agreement Limit
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>In-Site SEO Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li><a href="#">Link Building</a> Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sector and Competitor Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sectoral Presentation Articles
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Blog Based SEO
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Social Media Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Duplicate Content Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Product Base SEO
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Local SEO Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>W3 Validation Fix
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Site Speed Fix
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Harmful Link Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
									</ul>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c1">
										<p>$100/Month</p>
										<h4>Beginner</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Aggressive</li>
										<li>5 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c1">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c2">
										<p>$500/Month</p>
										<h4>Premium</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Leader of Market</li>
										<li>10 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c2">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c3">
										<p>$1500/Month</p>
										<h4>Enterprise</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Leader of Sector</li>
										<li>25 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c3">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 colon4 nopad text-center">
									<div class="pricing-header firstch c4">
										<p>$2500/Month</p>
										<h4>Ultimate</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>High</li>
										<li>3 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c4">ORDER NOW</a>
									</div>
								</div><!-- end col -->
							<!--</div><!-- end big-pricing -->
						<!--</div><!-- end tab-pane -->
						<!--<div role="tabpanel" class="tab-pane fade" id="profile">
							<div class="row big-pricing">
								<div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
									<div class="pricing-header firstch c0">
										<p>Check our prices for SEO studies!</p>
										<h4>Yearly SEO Packages</h4>
									</div><!-- end pricing-header -->
									<!--<ul class="first-colon">
										<li>Competition power 
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Keyword
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Rank Guarantee 
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sectoral Agreement Limit
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>In-Site SEO Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li><a href="#">Link Building</a> Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sector and Competitor Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Sectoral Presentation Articles
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Blog Based SEO
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Social Media Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Duplicate Content Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Product Base SEO
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Local SEO Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>W3 Validation Fix
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Site Speed Fix
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Harmful Link Analysis
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
										<li>Support
											<span>
												<a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
												<i class="fa fa-info"></i>
												</a>
											</span>
										</li>
									</ul>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c1">
										<p>$1000/Yearly</p>
										<h4>Beginner</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Aggressive</li>
										<li>5 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c1">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c2">
										<p>$5000/Yearly</p>
										<h4>Premium</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Leader of Market</li>
										<li>10 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c2">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
									<div class="pricing-header firstch c3">
										<p>$15.000/Yearly</p>
										<h4>Enterprise</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>Leader of Sector</li>
										<li>25 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-close"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c3">ORDER NOW</a>
									</div>
								</div><!-- end col -->
								<!--<div class="col-md-2 col-sm-6 col-xs-12 colon1 colon4 nopad text-center">
									<div class="pricing-header firstch c4">
										<p>$25.000/Yearly</p>
										<h4>Ultimate</h4>
									</div><!-- end pricing-header -->
									<!--<ul>
										<li>High</li>
										<li>3 Keywords</li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-check"></i></li>
										<li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
									</ul>
									<div class="pricing-footer text-center">
										<a href="#" class="btn c4">ORDER NOW</a>
									</div>
								</div><!-- end col -->
							<!--</div><!-- end big-pricing -->
						<!--</div><!-- end tab-pane -->
				  	<!--</div><!-- end tab-content -->
				<!--</div><!-- end center-pricing -->
                <hr class="invis">


			</div>
		</section>
		
		



  



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
                        <p>2010 - 2018 &copy; <a href="#">Job-Bee</a> All rights reserved.</p>
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
	
	
	
	<script src="js-jb/jquery.min.js"></script>
	<script src="js-jb/bootstrap.min.js"></script>
	<script src="js-jb/parallax.js"></script>
	<script src="js-jb/animate.js"></script>
	<script src="js-jb/owl.carousel.js"></script>
	<script src="js-jb/custom.js"></script>
	
	<!--new-->
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
	
	
</body>
</html>