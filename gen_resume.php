<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
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

<link rel="stylesheet" href="css-jb/font-awesome.min.css">
	<link rel="stylesheet" href="css-jb/bootstrap.min.css">
	<link rel="stylesheet" href="css-jb/animate.css">
	<link rel="stylesheet" href="css-jb/carousel.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css-jb/myCss.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Resume</title>');
            printWindow.document.write('<link type="text/css" rel="stylesheet" href="css-jb/blue.css" />');
			printWindow.document.write('<link type="text/css" rel="stylesheet" href="css-jb/print.css" media="print"/>');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/myCss2.css">');
			printWindow.document.write('<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> ');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/font-awesome.min.css">');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/bootstrap.min.css">');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/animate.css">');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/carousel.css">');
			printWindow.document.write('<link rel="stylesheet" href="style.css">');
			printWindow.document.write('<link rel="stylesheet" href="css-jb/myCss.css">');
			printWindow.document.write('<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />');
			printWindow.document.write('<link rel="apple-touch-icon" href="images/apple-touch-icon.png">');
			printWindow.document.write('<style>section:after {content: ""!important;display: table!important;clear: both!important;}div.content{padding:0px!important;}.entry{margin-bottom:0px;padding-top:15px !important;}section{margin-bottom:40px;margin-top:40px;}input{height:45px!important;}</style>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
<style>
section:after {
  content: ""!important;
  display: table!important;
  clear: both!important;
}
div.content{
padding:0px!important;
}
.entry{
margin-bottom:0px;
padding-top:15px !important;
}
section{
	margin-bottom:40px;
	margin-top:40px;
}
input{
	height:45px!important;
}
input[type=button]{
	margin-top:-40px!important;
}
</style>
</head>
<body>
<section>

<input type="button" value="Print" id="btnPrint" />
<?php if (!empty($_SESSION['logged_in_com'])){
echo '<a href="http://localhost/job_suggestion_website/login_company_front.php"><input type="button" value="Go Back"></a><br>';
}?>
<div id="dvContainer">

<!-- Begin Wrapper -->
<div id="wrapper" class="right-sec">
  
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <!--<div class="paper-top"></div>-->
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <!--<img class="profile_pic_res" src="images/img_avatar2.png" alt="John Smith" />-->
		 <img class="profile_pic_res" src="<?php echo $_SESSION['Photo']; ?>" alt="<?php echo $_SESSION['Name'] ?>"></img>

          <!-- End Image -->
          <!-- Begin Personal Information -->
		  
          <div class="self_res">
            <h1 class="name"> <?php echo $_SESSION['Name'] ?> </h1><br />
              <!--<span>Interactive Designer</span></h1>-->
            <ul>
              <li class="ad"> <?php echo $_SESSION['Address'] ?></li>
              <li class="mail"> <?php echo $_SESSION['Email'] ?></li>
              <li class="tel"> <?php echo $_SESSION['Ph_no'] ?></li>
              <!--<li class="web">www.businessweb.com</li>-->
            </ul>
          </div>
		  </div>
		  
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <!--<div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="images/icn-contact.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>-->
          <!-- End Social -->
        <!--</div>
        <!-- Begin 1st Row -->
		
		
        <div class="entry ">
          <h3>OBJECTIVE</h3>
		  <div class="content">
          <p> <?php echo $_SESSION['Objective'] ?></p>
		  </div>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h3>EDUCATION</h3>
          <div class="content">
            <h4> <?php echo $_SESSION['Tenth_pyear'] ?></h4>
            <p>Marticulation <br />
				<em><?php echo $_SESSION['Tenth_school'] ?></em>
			   <em><?php echo $_SESSION['Tenth_board'] ?></em> 
              <em><?php echo $_SESSION['Tenth_per'] ?>%</em></p>
          </div>
          <div class="content">
            <h4><?php echo $_SESSION['Twelth_pyear']; ?></h4>
            <p>Intermediate <br />
			  <em><?php echo $_SESSION['Twelth_school']; ?></em>
			  <em><?php echo $_SESSION['Twelth_board']; ?></em> 
              <em><?php echo $_SESSION['Twelth_per']; ?>%</em></p>
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
		
          
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

	$U_id=$_SESSION['U_id'];
$sql= "select * from proexp_details where U_id='$U_id' and Type='Project'";
$result_project=$conn->query($sql);

$sql1= "select * from proexp_details where U_id='$U_id' and Type='Experience'";
$result_experience=$conn->query($sql1);

if ($result_project->num_rows > 0) {
    // output data of each row
	?>
	 <div class="entry ">
          <h3>PROJECT</h3>
	<?php
    while($row = $result_project->fetch_assoc()) {
		?>
		
		<?php 
		$PE_duration_start=$row['PE_duration_start'];
		$PE_duration_end=$row['PE_duration_end'];
        $PE_title=$row['PE_title'];
		$PE_description=$row['PE_description'];
		
		?>
		    <div class="content">   
            <h4><?php echo $PE_duration_start;?><br> to <br><?php echo $PE_duration_end;?></h4>
            <!--<p>Agency Creative, London <br />-->
              
            <ul class="info">
			<li><em><?php echo $PE_title;?></em></li><br>
              <li><?php echo $PE_description;?></li>
              
            </ul>
			</div>
	<?php } 
	}
	?>
          <!--<div class="content">
            <h4>02 Mar 2014 <br>to<br> 02 April 2014</h4>
            <!--<p>Junior Web Designer <br />
              
            <ul class="info">
			<li><em>Bachelor of Science in Graphic Design</em></li>
              <li>Sed fermentum sollicitudin interdum. Etiam imperdiet sapien in dolor rhoncus a semper tortor posuere. </li>
              <li>Pellentesque at lectus in libero dapibus cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
        </div>-->
		
		
        
		  <?php
		  if ($result_experience->num_rows > 0) {
			  ?>
		<div class="entry">
          <h3>EXPERIENCE</h3>
			  <?php
    // output data of each row
	
    while($row = $result_experience->fetch_assoc()) {
		?>
		
		<?php 
		$PE_duration_start=$row['PE_duration_start'];
		$PE_duration_end=$row['PE_duration_end'];
        $PE_title=$row['PE_title'];
		$PE_description=$row['PE_description'];
		
		?>
		    <div class="content">   
            <h4><?php echo $PE_duration_start;?><br> to <br><?php echo $PE_duration_end;?></h4>
            <!--<p>Agency Creative, London <br />-->
              
            <ul class="info">
			<li><em><?php echo $PE_title;?></em></li><br>
              <li><?php echo $PE_description;?></li>
              
            </ul>
			</div>
	<?php } 
	}
		  ?>
		  
		  
          <!--<div class="content">
            <h4>02 May 2014 <br>to <br>02 June 2015</h4>
            <!--<p>Agency Creative, London <br />
              
            <ul class="info">
			<li><em>HTC</em></li>
              <li>Vestibulum eu ante massa, sed rhoncus velit.</li>
              <li>Pellentesque at lectus in <a href="#">libero dapibus</a> cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
          <div class="content">
            <h4>02 July 2015 <br>to <br>02 October 2015</h4>
            <!--<p>Junior Web Designer <br />
              
            <ul class="info">
			<li><em>Bizight Solutions</em></li>
              <li>Sed fermentum sollicitudin interdum. Etiam imperdiet sapien in dolor rhoncus a semper tortor posuere. </li>
              <li>Pellentesque at lectus in libero dapibus cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry ">
          <h3>SKILLS</h3>
          
          <div class="content">
            <h4>Languages</h4>
            <ul class="skills">
              <li><?php echo $_SESSION['Skills']; ?></li>
              <!--<li>PHP</li>
              <li>JavaScript</li>
              <li>Ruby on Rails</li>
              <li>ActionScript</li>
              <li>C++</li>
            </ul>
          </div>
        </div>-->
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <!--<div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        	</ul>
        </div>-->
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <!--<div class="paper-bottom"></div>-->
    </div>
    <!-- End Paper -->
  </div>
  </div>
  </section>
  <!--<div class="wrapper-bottom"></div>-->

<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
		
<!-- End Wrapper -->
</div>
</div>
</div>
</body>
</html>
