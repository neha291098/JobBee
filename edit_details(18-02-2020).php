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
    <title>Edit details</title>
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
	
	<!--added for resume-->
	
	


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
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
				                <li class=""><a href="http://localhost/jobbee_home.php" style="color:black!important">Home</a></li>
				                
				                <li class="active"><a href="http://localhost/jobbee_jobs.php"  style="color:black!important">Jobs</a></li>
				                <!--<li><a href="case-studies.html">Case Studies</a></li>
				                <li><a href="blog.html">Blog</a></li>-->
				                <li class=""><a href="http://localhost/jobbee_contact.php" style="color:black!important">Contact</a></li>
								
								<li><!--<a href="login_form.html">-->
								<button type="button" id="myBtn" name="submit" class="btn btn-primary" onclick="window.location.href = 'http://localhost/job_suggestion_website/logging_out.php'">Log out</button></li>
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
		
		
		
		
		<!--<section class="section">-->
			
				
				 <!--<?php if(!empty($_SESSION['message'])) { 
   $msg=$_SESSION['message'];
	echo "<span class='err_msg'>".$msg."</span>";
   }
	?>-->
	<section>
	<div class="left-sec profile_info">
<center><img class="profile_pic" src="images/img_avatar2.png"></img></center>
<div class="self1">
			
            <h1 class="name">
			<?php 	echo $_SESSION['Name'];
			?>
			</h1>
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
              <li class="login_opt "><a class="active_ver" href="http://localhost/job_suggestion_website/login_user_front.php">Dashboard</a></li>
              <li class="login_opt"><a href="http://localhost/job_suggestion_website/jobs_applied.php">Applications</a></li>
              <li class="login_opt"><a>Resume</a></li>
			  <li class="login_opt"><a href="http://localhost/job_suggestion_website/edit_details.php">Edit</a></li>
			  <li class="login_opt"><a href="http://localhost/job_suggestion_website/logging_out.php">Logout</li></a>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
          </div>

</div>
	
	<div class="right-sec-main">
				<form action="edit_details_save.php" method="post" role="form" class="contactform ">
				<!--<div class="next_box" >-->
				<fieldset>
		<legend class="lead"><center><b>Preference and Objective</b></center></legend>
					<div class="form-group">
					<!--<button class="contact100-btn-hide">
			<i class="fa fa-close" aria-hidden="true"></i>
		</button>-->     
						<h3>Select city of preference</h3><br>
						<input type="radio"  name="place" value="Delhi" class="" id="inputFname" required /> Delhi<br>
									<input type="radio"  name="place" value="Noida"class="" id="inputFname"required /> Noida<br>
									<input type="radio"  name="place" value="Gurgaon"class="" id="inputFname"required /> Gurgaon <br><br>
						

						<!--<a href="#" class="readmore">Get Support</a>-->
					<!-- end col -->
					
					<!--<button type="button" id="next" name="submit" class="btn btn-primary" >Next</button>-->
						<!--<div class="support-center-left"></div>-->
					<!-- end col -->
					 
					<!--</div>-->
				<!-- end row -->
				
				
				<div class="form-group">
      <label for="Objective">Objective</label>
      <textarea rows="" class="form-control" id="Objective" placeholder="Enter Objective" name="Objective">
	  <?php echo $_SESSION['Objective'] ?>
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
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address" value="<?php echo $_SESSION['Address']; ?>">
    </div>
	
	
    <div class="form-group">
	
      <label for="Email">Email</label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="Email" value="<?php echo $_SESSION['Email']; ?>">
   <?php if(!empty($_SESSION['message'])) { 
   $msg=$_SESSION['message'];
	echo "<span class='err_msg'>".$msg."</span>";
   }
	?>
	</div>
	
	    <div class="form-group">
		
      <label for="Ph_no">Ph No.</label>
      <input type="number" class="form-control" id="ph_no" placeholder="Enter Phone Number" name="Ph_no"value="<?php echo $_SESSION['Ph_no']; ?>">
    
	</div>
	
	</fieldset>
	<fieldset>
	<legend class="lead"><center><b>High School</b></center></legend>
		<div class="form-group">
      <label for="tenth_pyear">Passing year</label>
      <input type="text" class="form-control" id="tenth_pyear" placeholder="Ex: Mar 2014" name="Tenth_pyear"value="<?php echo $_SESSION['Tenth_pyear']; ?>">
    </div>
	    <div class="form-group">
      <label for="tenth_per">Percentage</label>
      <input type="number" class="form-control" id="tenth_per" placeholder="Enter percentage" name="Tenth_per"value="<?php echo $_SESSION['Tenth_per']; ?>">
    </div>
	    <div class="form-group">
      <label for="tenth_school">School</label>
      <input type="text" class="form-control" id="tenth_school" placeholder="Enter School" name="Tenth_school"value="<?php echo $_SESSION['Tenth_school']; ?>">
    </div>
	    <div class="form-group">
      <label for="tenth_Board">Board</label>
      <input type="text" class="form-control" id="tenth_Board" placeholder="Enter Board" name="Tenth_board"value="<?php echo $_SESSION['Tenth_board']; ?>">
    </div>
	</fieldset>
	<fieldset>
	<legend class="lead"><center><b>Intermediate</b></center></legend>
		<div class="form-group">
      <label for="twelth_pyear">Passing year</label>
      <input type="text" class="form-control" id="twelth_pyear" placeholder="Ex: Mar 2016" name="Twelth_pyear"value="<?php echo $_SESSION['Twelth_pyear']; ?>">
    </div>
	    <div class="form-group">
      <label for="twelth_per">Percentage</label>
      <input type="number" class="form-control" id="twelth_per" placeholder="Enter percentage" name="Twelth_per"value="<?php echo $_SESSION['Twelth_per']; ?>">
    </div>
	    <div class="form-group">
      <label for="twelth_school">School</label>
      <input type="text" class="form-control" id="twelth_school" placeholder="Enter School" name="Twelth_school"value="<?php echo $_SESSION['Twelth_school']; ?>">
    </div>
	    <div class="form-group">
      <label for="twelth_Board">Board</label>
      <input type="text" class="form-control" id="twelth_Board" placeholder="Enter Board" name="Twelth_board"value="<?php echo $_SESSION['Twelth_board']; ?>">
    </div>
	</fieldset>
	
	<fieldset>
	<legend class="lead"><center><b>Additional Information</b></center></legend>
		
	    <div class="form-group">
      <label>Project</label><br>
	  <select name="Project" class="form-control" value="<?php echo $_SESSION['Project']; ?>" onchange="showdv(this,'No','Yes')";>
		<option value="No">No</option>
		<option value="Yes">Yes</option>
	  </select>
	  </div>
	 
	
	  <!--<form method="post" action="">-->
	  <div id="project_info"style="display:none";>
	  <div id="newlink_project">
	  <div class="wrapper form-group">
	   <div class="form-group">
		<label for="P_dur[]">Duration</label><input type="date" class="form-control" name="P_dur[]" placeholder="Ex: Sep 2005- Oct 2005" value="<?php echo $_SESSION['Name']; ?>">
			</div>
		 <div class="form-group">
		<label for="P_title[]">Title</label><input type="text" class="form-control" name="P_title[]" placeholder="Enter Title" value="<?php echo $_SESSION['Name']; ?>"/>
		</div>
		 <div class="form-group">
		<label for="P_desc[]">Description</label><textarea  class="form-control" name="P_desc[]" placeholder="Enter Description" value="<?php echo $_SESSION['Name']; ?>"></textarea>
	  </div>
	  </div>
	  </div>

	<p id="addnew">
		<a href="javascript:new_link_project()" class="btn btn-primary lft-float">Add New </a><br><br>
		</p>
		</div>
		<!--</form>-->
<!-- Template -->
		
		 
		<div id="newlinktpl_project" style="display:none">
		<div class="wrapper form-group">
		<br><hr>
	   <div class="form-group">
		<label for="P_dur[]">Duration</label><input type="date" class="form-control" name="P_dur[]" placeholder="Ex: Sep 2005- Oct 2005" value="<?php echo $_SESSION['Name']; ?>">
			</div>
		 <div class="form-group">
		<label for="P_title[]">Title</label><input type="text" class="form-control" name="P_title[]" placeholder="Enter Title" value="<?php echo $_SESSION['Name']; ?>">
		</div>
		 <div class="form-group">
		<label for="P_desc[]">Description</label><textarea class="form-control" name="P_desc[]" placeholder="Enter Description" value="<?php echo $_SESSION['Name']; ?>"></textarea>
	  </div>
	  </div>
	  </div>
		
		<div class="form-group">
      <label>Experience</label><br>
	  <select name="Experience"  class="form-control" value="<?php echo $_SESSION['Experience']; ?>" onchange="showdv_exp(this,'No','Yes')";>
		<option value="No">No</option>
		<option value="Yes">Yes</option>
	  </select>
	  </div>
	  
	  <!--<form method="post" action="">-->
		<div id="exp_info"style="display:none";>
		<div id="newlink_experience">
	  <div class="wrapper form-group">
	   <div class="form-group">
		<label for="E_dur[]">Duration</label><input type="date" class="form-control" name="E_dur[]" placeholder="Ex: Sep 2005- Oct 2005" value="<?php echo $_SESSION['Name']; ?>"/>
			</div>
		 <div class="form-group">
		<label for="E_title[]">Company</label><input type="text" class="form-control" name="E_title[]" placeholder="Enter Company Name" value="<?php echo $_SESSION['Name']; ?>"/>
		</div>
		 <div class="form-group">
		<label for="E_desc[]">Description</label><textarea  class="form-control" name="E_desc[]" placeholder="Enter Description" value="<?php echo $_SESSION['Name']; ?>"></textarea>
	  </div>
	  </div>
	  </div>
	  <p id="addnew">
		<a href="javascript:new_link_experience()" class="btn btn-primary lft-float">Add New </a><br><br>
		</p>
		</div>
		<!--</form>-->
		 
<!-- Template -->
		<div id="newlinktpl_experience" style="display:none">
		<div class="wrapper form-group">
		<br><hr>
		<div class="form-group">
		<label for="E_dur[]">Duration</label><input type="date" class="form-control" name="E_dur[]" placeholder="Ex: Sep 2005- Oct 2005"value="<?php echo $_SESSION['Name']; ?>"/>
			</div>
		 <div class="form-group">
		<label for="E_title[]">Company</label><input type="text" class="form-control" name="E_title[]" placeholder="Enter Company Name" value="<?php echo $_SESSION['Name']; ?>"/>
		</div>
		 <div class="form-group">
		<label for="E_desc[]">Description</label><textarea class="form-control" name="E_desc[]" placeholder="Enter Description" value="<?php echo $_SESSION['Name']; ?>"></textarea>
	  </div>
	  </div>
	  </div>
	  
	  

	    <div class="form-group">
      <label for="Skills">Skills (Comma separated)</label>
      <input type="text" class="form-control" id="Skills" placeholder="Enter Skills" name="Skills" value="<?php echo $_SESSION['Skills']; ?>">
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
			<!-- end container -->
		<!-- end section -->

		

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
                        <p>2010 - 2018<a href="#"> Job-Bee</a> All rights reserved.</p>
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
	<script>
var check = function() {
  if (document.getElementById('Setpwd').value ==document.getElementById('rPwd').value) {
    //document.getElementById('err_message').style.color = 'green';
    document.getElementById('err_message_user').innerHTML = '';
	document.getElementById("login_btn_user").disabled = false;
  } else {
    document.getElementById('err_message_user').style.color = 'red';
    document.getElementById('err_message_user').innerHTML = '*Passwords are not same';
	document.getElementById("login_btn_user").disabled = true;
  }
}
	</script>

</body>
</html>