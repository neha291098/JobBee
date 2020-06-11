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
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

<link rel="stylesheet" href="css-jb/font-awesome.min.css">
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/animate.css">
	<link rel="stylesheet" href="css-jb/carousel.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css-jb/myCss.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
<script>
/*
This script is identical to the above JavaScript function.
*/
var ct = 1;
function new_link_project()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_project('+ ct +')">Del</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl_project').innerHTML + delLink;
	document.getElementById('newlink_project').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt_project(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink_project');
	parentEle.removeChild(ele);
}

var cn = 1;
function new_link_experience()
{
	cn++;
	var div2 = document.createElement('div');
	div2.id = cn;
	// link to delete extended form elements
	var delLink1 = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_experience('+ cn +')">Del</a></div>';
	div2.innerHTML = document.getElementById('newlinktpl_experience').innerHTML + delLink1;
	document.getElementById('newlink_experience').appendChild(div2);
}
// function to delete the newly added set of elements
function delIt_experience(eleId1)
{
	dt = document;
	var ele1 = dt.getElementById(eleId1);
	var parentEle1 = dt.getElementById('newlink_experience');
	parentEle1.removeChild(ele1);
}


function showdv(obj,id1,id2) {
    txt=obj.options[obj.selectedIndex].text;
    
             
        if (txt.match(id1)) {
            document.getElementById("project_info").style.display='none';
             
            }
             
        if (txt.match(id2)) {
            document.getElementById("project_info").style.display='block';
               
            }
    }
function showdv_exp(obj,id1,id2) {
    txt=obj.options[obj.selectedIndex].text;
    
             
        if (txt.match(id1)) {
            document.getElementById("exp_info").style.display='none';
             
            }
             
        if (txt.match(id2)) {
            document.getElementById("exp_info").style.display='block';
               
            }
    }
</script>
	
	
<style>


fieldset{
float:left!important;
padding:40px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
margin-bottom: 80px!important;
margin-left:40px!important;
width:80%;
margin:Auto;



}
legend{
padding:20px;background:linear-gradient(45deg, #3ac5c8 1%, #0b509e 100%);border-radius: 35px;
}
.navbar-nav > li > a{
color:#25382f !important;
}
section:after {
  content: ""!important;
  display: table!important;
  clear: both!important;
}
h4{
width:205px !important;
}
label{
	width:200px!important;
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
.right-sec-main {
    margin-top: 30px!important;
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
								<?php
								if (!empty($_SESSION['logged_in_user']))
								{
    
								//echo '<li>	<button type="button" id="myBtn" name="submit" class="btn btn-primary" >Log out</button></li>';
								//echo "<a href='http://localhost/logging_out.php'>log out</a>";
					
									echo '<li class="dropdown yamm-fw hasmenu btn">
									<span style="background-color:white;border-radius:50%;padding:10px;border:4px solid #3ac5c8">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>'.$_SESSION['res_name']. '</b></a>
									</span>
									<ul class="dropdown-menu">
						                <li>
										<div class="yamm-content">
										
										<ul><li><a href="http://localhost/job_suggestion_website/login_user_front.php						">Dashboard</a></li>
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
								?>





							
							
							</ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

<section>

<div class="left-sec profile_info">
<center><img class="profile_pic" src="<?php echo $_SESSION['Photo']; ?>"></img></center>
<div class="self1">
			
            <ul>
			<br>
			<li class="ad" style="font-size:35px;line-height: 1;font-weight:500">
            
			<?php 	echo $_SESSION['Name'];
			?>
			
			</li>
			</ul>
              <!--<span>Interactive Designer</span></h1>-->
            <ul>
				<li class="ad">
				<?php 	echo $_SESSION['Address'];
				?>
			  
				</li>
				<li class="mail">
				<?php 	echo $_SESSION['Email'];
				?>
				</li>
				<li class="tel">
				<?php 	echo $_SESSION['Ph_no'];
				?>
				</li>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
</div><br>
		<div class="self2">
			
            
              <!--<span>Interactive Designer</span></h1>-->
            <ul class="ver_nav">
              <li class="login_opt "><a href="http://localhost/job_suggestion_website/login_user_front.php">Dashboard</a></li>
              <li class="login_opt"><a href="http://localhost/job_suggestion_website/jobs_applied.php">Applications</a></li>
              <li class="login_opt"><a href="http://localhost/job_suggestion_website/gen_resume.php" target="_blank">Resume</a></li>
			  <li class="login_opt"><a  class="active_ver"href="http://localhost/job_suggestion_website/edit_details.php">Edit</a></li>
			  <li class="login_opt"><a href="http://localhost/job_suggestion_website/logging_out.php">Logout</li></a>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
          </div>

</div>



<!-- Begin Wrapper -->
<section>
	
	<div class="right-sec-main">
				<form action="edit_details_save.php" method="post" role="form" class="contactform " enctype="multipart/form-data" name="myForm" onsubmit="return validateForm();">
				<!--<div class="next_box" >-->
				<fieldset>
		<legend class="lead"><center><b>Objective</b></center></legend>
					<div class="form-group">
					<!--<button class="contact100-btn-hide">
			<i class="fa fa-close" aria-hidden="true"></i>
		</button>-->     
						<!--<h3>Select city of preference</h3><br>-->
						
						
						<!--<div><label for="Pref">Select city of preference</label></div>
						<div class="form-control">
						<br>
						Delhi
						<input type="radio"  name="place"  class=""  <?php if($_SESSION['City'] == "Delhi"){?> <?php echo "checked";?> <?php }?> value="Delhi" required /> <br>
						 Noida<input type="radio"  name="place" value="Noida"class="" <?php if($_SESSION['City'] == "Noida"){?> <?php echo "checked";?> <?php }?> required /><br>
						Gurgaon <input type="radio"  name="place" value="Gurgaon"class="" <?php if($_SESSION['City'] == "Gurgaon"){?> <?php echo "checked";?> <?php }?> required /><br><br>
									</div>-->
						

						<!--<a href="#" class="readmore">Get Support</a>-->
					<!-- end col -->
					
					<!--<button type="button" id="next" name="submit" class="btn btn-primary" >Next</button>-->
						<!--<div class="support-center-left"></div>-->
					<!-- end col -->
					 
					<!--</div>-->
				<!-- end row -->
				
				
				<div class="form-group">
      <label for="Objective">Objective</label>
      <textarea rows="" class="form-control" id="Objective" placeholder="Enter Objective" name="Objective" required>
	  <?php echo $_SESSION['Objective']; ?>
	  </textarea>
    </div>
	</div>
	</fieldset>
	<fieldset>
		<legend class="lead"><center><b>Basic Details</b></center></legend>
	   <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" value="<?php echo $_SESSION['Name']; ?>" required />
	  
	  
    </div>
	<div class="form-group">
      <label for="Address">Address</label>
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address" value="<?php echo $_SESSION['Address']; ?>"required>
    </div>
	
	
    <div class="form-group">
	
      <label for="Email">Email</label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="Email" value="<?php echo $_SESSION['Email']; ?>" required>
   <?php if(!empty($_SESSION['message'])) { 
   $msg=$_SESSION['message'];
	echo "<span class='err_msg'>".$msg."</span>";
   }
	?>
	</div>
	
	    <div class="form-group">
		
      <label for="Ph_no">Ph No.</label>
      <input type="number" class="form-control" id="ph_no" placeholder="Enter Phone Number" name="Ph_no"value="<?php echo $_SESSION['Ph_no']; ?>" required>
    
	</div>
	
	</fieldset>
	<fieldset>
	<legend class="lead"><center><b>High School</b></center></legend>
		<div class="form-group">
      <label for="tenth_pyear">Passing year</label>
      <input type="text" class="form-control" id="tenth_pyear" placeholder="Ex: Mar 2014" name="Tenth_pyear"value="<?php echo $_SESSION['Tenth_pyear']; ?>" required>
    </div>
	    <div class="form-group">
      <label for="tenth_per">Percentage</label>
      <input type="number" class="form-control" id="tenth_per" placeholder="Enter percentage" name="Tenth_per"value="<?php echo $_SESSION['Tenth_per']; ?>" required>
    </div>
	    <div class="form-group">
      <label for="tenth_school">School</label>
      <input type="text" class="form-control" id="tenth_school" placeholder="Enter School" name="Tenth_school"value="<?php echo $_SESSION['Tenth_school']; ?>"required>
    </div>
	    <div class="form-group">
      <label for="tenth_Board">Board</label>
      <input type="text" class="form-control" id="tenth_Board" placeholder="Enter Board" name="Tenth_board"value="<?php echo $_SESSION['Tenth_board']; ?>" required>
    </div>
	</fieldset>
	<fieldset>
	<legend class="lead"><center><b>Intermediate</b></center></legend>
		<div class="form-group">
      <label for="twelth_pyear">Passing year</label>
      <input type="text" class="form-control" id="twelth_pyear" placeholder="Ex: Mar 2016" name="Twelth_pyear"value="<?php echo $_SESSION['Twelth_pyear']; ?>" required>
    </div>
	    <div class="form-group">
      <label for="twelth_per">Percentage</label>
      <input type="number" class="form-control" id="twelth_per" placeholder="Enter percentage" name="Twelth_per"value="<?php echo $_SESSION['Twelth_per']; ?>"required>
    </div>
	    <div class="form-group">
      <label for="twelth_school">School</label>
      <input type="text" class="form-control" id="twelth_school" placeholder="Enter School" name="Twelth_school"value="<?php echo $_SESSION['Twelth_school']; ?>" required>
    </div>
	    <div class="form-group">
      <label for="twelth_Board">Board</label>
      <input type="text" class="form-control" id="twelth_Board" placeholder="Enter Board" name="Twelth_board"value="<?php echo $_SESSION['Twelth_board']; ?>"required>
    </div>
	</fieldset>
	
	<fieldset>
	
	<legend class="lead"><center><b>Additional Information</b></center></legend>
	
	
		
	  
		
	  
	  
	  <div class="form-group">
      <label for="image">Upload Photo</label>
	  <input name="image"  type="file" style="float: left;
    height: 40px;" >
	  </div>

	    <div class="form-group">
      <label for="Skills">Skills (Comma separated)</label>
      <input type="text" class="form-control" id="Skills" placeholder="Enter Skills" name="Skills" value="<?php echo $_SESSION['Skills']; ?>" required>
     </div>
	</fieldset>
	
	<!--
	<fieldset>
	<legend class="lead"><center><b>Enter password</b></center></legend>
	<div class="form-group">
      <label for="Skills">Password</label>
      <input type="password" class="form-control" id="Setpwd" placeholder="Enter Password" name="Pwd" onkeyup='check();'>
    </div>
	<div class="form-group">
      <label for="Skills">Confirm Password</label>
      <input type="password" class="form-control" id="rPwd" placeholder="Enter Password" name="rPwd" onkeyup='check();'>
	  <div id="err_message_user"></div>
    </div>
		</fieldset>	-->
		
			<button type="submit"  class="btn btn-primary" id="login_btn_user" >Save changes</button>	
			</form>	
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
<script>
function validateForm() {
	var b=document.forms["myForm"]["Email"].value;
	var d=document.forms["myForm"]["Ph_no"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!b.match(mailformat))
		{
			alert("Invalid email format");
		}
		var phoneno = /^\d{10}$/;
		if(!d.match(phoneno))
        {
      			alert("Phone number must be 10 digits");

        }
	var b=document.forms["myForm"]["Tenth_per"].value;
	if(b>100 || b<0){
			alert("Percentage must be in range of 1 to 100");
		}
	var b=document.forms["myForm"]["Twelth_per"].value;
	if(b>100 || b<0){
			alert("Percentage must be in range of 1 to 100");
		}
}
</script>
</body>
</html>
