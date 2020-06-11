<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Dashboard</title>
<link type="text/css" rel="stylesheet" href="css-jb/blue.css" />
<link type="text/css" rel="stylesheet" href="css-jb/print.css" media="print"/>
<link rel="stylesheet" href="css-jb/myCss2.css">
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 
<link rel="stylesheet" href="css-jb/myCss.css">
<link rel="stylesheet" href="css-jb/myCss2.css">
<link rel="stylesheet" href="css-jb/font-awesome.min.css">
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/animate.css">
	<link rel="stylesheet" href="css-jb/carousel.css">
	<link rel="stylesheet" href="style.css">
	
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<style>
section:after {
  content: ""!important;
  display: table!important;
  clear: both!important;
}
h4{
width:205px !important;
}
.active_ver{
	color: white!important;
}
.yamm-content{
	background-color:#F8F8F8;
}
.navbar-nav > li > .dropdown-menu {
	margin-top:5px!important;
}
.job_views{
	
	
}
.left-sec {
	margin-top:25px!important;
}
.site-header {
    padding: 8px 0 0px!important;
    background-color: lightgray!important;
}
.footer.secondary-footer {
    background-color: lightgray;
}
.wrapper-mid {
	margin-top: 20px!important;
}
</style>
	
	
</head>
<body>
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
				                <li class="dropdown yamm-fw hasmenu">
				                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
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
								<li><a href="http://localhost/job_suggestion_website/jobbee_contact.php">Contact</a></li>
				                <!--<li><a href="case-studies.html">Case Studies</a></li>
				                <li><a href="blog.html">Blog</a></li>
				                
                                <li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="page-seo-analysis.html"><i class="glyphicon glyphicon-search"></i> free seo analysis</a></li>-->
								<li><!--<a href="login_form.html">-->
								<button type="button" id="myBtn" name="submit" class="btn btn-primary" onclick="window.location.href = 'http://localhost/job_suggestion_website/logging_out.php'">Log out</button></li>
								
								<!--<li><button type="button" id="myBtn" name="submit" class="btn btn-primary" onclick="window.location.href = 'http://localhost/new_login.php';">Settings</button></li>-->
								
								<li><?php
				if (!empty($_SESSION['logged_in_com']))
					{
    
					//echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log out</button></li>';
					//echo "<a href='http://localhost/logging_out.php'>log out</a>";
					
					echo '<li class="dropdown yamm-fw hasmenu">
					<span style="background-color:white;border-radius:50%;padding:15px;">
				        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><b>'. $_SESSION['res_name']. '</b></a>
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





							
							
							</ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

<section>

<div class="left-sec profile_info">
<center><img class="profile_pic" src="<?php echo $_SESSION['C_Photo']; ?>"></img></center>

</center>

<div class="self1">
			
            <ul>
			<br>
			<li class="ad" style="font-size:35px;line-height: 1;font-weight:500">
            
			<?php 	echo $_SESSION['C_Ename'];
			?>
			
			</li>
			</ul>
              <!--<span>Interactive Designer</span></h1>-->
            <ul>
				<li class="ad">
				<?php 	echo $_SESSION['C_JobTitle'];
				?>
			  
				</li>
				<li class="mail">
				<?php 	echo $_SESSION['C_Company'];
				?>
				</li>
				<li class="tel">
				<?php 	echo $_SESSION['C_Email'];
				?>
				</li>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
</div><br>
		<div class="self2">
			
            
              <!--<span>Interactive Designer</span></h1>-->
            <ul class="ver_nav">
              <li class="login_opt "><a href="http://localhost/job_suggestion_website/login_company_front.php">Dashboard</a></li>
              <li class="login_opt"><a  class="active_ver" href="http://localhost/job_suggestion_website/job_posted.php">Jobs Posted</a></li>
              <li class="login_opt"><a href="http://localhost/job_suggestion_website/add_job.php" >Add Job</a></li>
			  <li class="login_opt"><a href="http://localhost/job_suggestion_website/editcompany_data.php">Edit</a></li>
			  <li class="login_opt"><a href="http://localhost/job_suggestion_website/logging_out.php">Logout</li></a>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
          </div>

</div>

<div id="wrapper" class="right-sec-main">
  
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    
      <!--<div class="paper-top"></div>-->
      <div id="paper-mid">
	  
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
		$J_id=$_POST['J_id_selected'];
		$_SESSION['J_id']=$J_id;
		//$id=intval($_SESSION['C_id']);
		$sql="select * from jobs_applied where J_id='$J_id'";
		$result=$conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
		?>
		<table>
		<tr>
			<th>User Id</th>
			<th>Date</th>
			<th>Name</th>
			<th>Resume</th>
			<th>Status</th>
			<th>Save Status</th>
			<th>Delete</th>
		</tr>
		<?php
		while($row = $result->fetch_assoc()) {
			$U_id=$row['U_id'];
			$Date_applied=$row['Date_applied'];
			$Applicant=$row['Applicant'];
			$Status=$row['Status'];
			
		
			?>
			<tr>
			<td><?php echo $U_id;?></td>
			<td><?php echo $Date_applied;?></td>
			<td><?php echo $Applicant;?></td>
			<form action="view_resume.php" method="post">
			<div style="display:none"><input type="number" value="<?php echo $U_id; ?>" name="U_id_selected"></div>
			<td><button type="submit">View</button></td>
			</form>
			<form action="application_ops.php" method="post">
			<td>
			<select name="Status">
			<option value="<?php echo $Status;?>" hidden><?php echo $Status;?></option>
			<option value="Accepted">Accepted</option>
			<option value="Under Review">Under Review</option>
			<option value="Rejected">Rejected</option>
			</select>
			<div style="display:none"><input type="number" value="<?php echo $U_id; ?>" name="U_id_selected">
			<input type="number" value="<?php echo $J_id; ?>" name="J_id_selected">
			<input type="text" value="update_status" name="action">
			</div>
			</td>
			<td><button type="submit">Save status</button></td>
			</form>
			<form action="application_ops.php" method="post">
			<div style="display:none"><input type="number" value="<?php echo $U_id; ?>" name="U_id_selected">
			<input type="text" value="jobs_applied_del" name="action">
			</div>
			<td><button type="submit">Delete</button></td>
			</form>
			</tr>
			
		<?php } 
		}
		?>
		</table>
		
		
      </div>
      <div class="clear"></div>
      <!--<div class="paper-bottom"></div>-->
    
    <!-- End Paper -->
  </div>
  </div>
  </section>
  <!--<div class="wrapper-bottom"></div>-->

<div id="message"><a href="#top" id="top-link">Go to Top</a></div>


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
<!-- End Wrapper -->
</div>
</body>
</html>
