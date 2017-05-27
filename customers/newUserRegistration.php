
<?php 
session_start();
	include("../functions/function.php");
?>
<html>
<head>
	<title> online shop</title>
	 <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/m.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head><body>

<script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

		<nav class="navbar navbar-tabs nav-pills navbar-inverse">
  <div class="container-fluid">
  <div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="collapse navbar-collapse col-xm-12" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
        
		<li><a href="../men.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</a></li>
		<li><a href="../women.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</a></li>
				<li><a href="../kids.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids</a></li>

		<li><a href="../AboutUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
		
		<li><a href="../ContactUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a></li>
      </ul>
	   
      
    </div>
  </div>
  </div>
  </nav>
<br>
<div id ="registration" align="center">
<form action="newUserRegistration.php" method="POST" enctype="multipart/form-data">
<header>
   <h1>Are you new to us?</h1>
</header>
<article>
	<h1>Register soon</h1><br>
	
	<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Full name</label>  
  <div class="col-md-4">
  <input id="ln"  type="text" placeholder="full name" class="form-control input-md" name="full_name" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">NIC Number</label>  
  <div class="col-md-4">
  <input id="ln"  type="text" placeholder="NIC number" class="form-control input-md" name="nic_number" required>
  </div>
  <br><br>
  <label class="col-md-4 control-label" for="ln">Email(As your username)</label>  
  <div class="col-md-4">
  <input id="ln"  type="email" placeholder="user name" class="form-control input-md" name="user_name" maxlength="200" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Create a password</label>  
  <div class="col-md-4">
  <input id="ln"  type="password" placeholder="password" class="form-control input-md" name="password" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Address</label>  
  <div class="col-md-4">
  <input id="ln"  type="text" placeholder="address" class="form-control input-md" name="address" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Mobile Number</label>  
  <div class="col-md-4">
  <input id="ln"  type="text" placeholder="mobile number" class="form-control input-md" name="mobile_number" required>
  </div><br><br>	
  <label class="col-md-4 control-label" for="ln">Date of Birth</label>  
  <div class="col-md-4">
  <input   type="text" placeholder="date of birth" class="form-control input-md" name="date_of_birth" id="datepicker"required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Sex</label>  
  <div class="col-md-4">
	<input type="radio" name="sex" value="Male"> Male
    <input type="radio" name="sex" value="Female"> Female</div><br><br>
  <label class="col-md-4 control-label" for="ln">Occupation</label>  
  <div class="col-md-4">
  <input   type="text" placeholder="Occupation" class="form-control input-md" name="occupation" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Photograph</label>  
  <div class="col-md-4">
  <input   type="file" placeholder="Photograph" class="form-control input-md" name="customer_image" id="fileToUpload" required>
  </div><br><br>
		
    
    <!--<input type="submit" value="Upload Image" name="submit">--><br><br>
	
</form>
<form method='POST'>
	<!--<input type="text" name="inc"/></br>-->
	<div class="g-recaptcha" data-sitekey="6LeQwxYUAAAAAOP6eFxugZuFU25pm8gA69FQucpl" required></div>
</form>
<?php
	if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'])
	{
		var_dump($_POST);
		$secret="6LeQwxYUAAAAALO93eWiaRG3fFirftq8gHkvROlz";
		$ip=$_SERVER['REMOTE_ADDR'];
		$captcha=$_POST['g-recaptcha-response'];
		$rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
		var_dump($rsp);
		//$arr= json_decode($rsp,TRUE);
	}
//	echo $_POST["inc"];




?>

		<input align="left" type="submit" name="insert_post" value="Post">
		<!--<input align="left" type="reset" name="reset_post" value="Reset">-->
		
</article>
</div>

<div class="footer">
<div class="footer-bottom">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 footer-bottom-cate" data-wow-delay=".5s">
					<h4 style="color:white"></h4>
					<ul>
						<li><a href="index.php" style="color:white">Home</a></li>
						<li><a href="login.php" style="color:white"><?php 
			if(!isset($_SESSION['User_Name']))
			{
				echo"<a href='checkout.php' style='color:white'>Login</a>";
			}
			else
			{
				echo"<a href='logout.php' style='color:white'>Logout</a>";
			}
		?>				</a></li>
						<li><a href="registration.php" style="color:white">Signup</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate" data-wow-delay=".5s">
					<h4 style="color:white">Categories</h4>
					<ul>
						<li><a href="men.php" style="color:white">Men</a></li>
						<li><a href="women.php" style="color:white">Women</a></li>
						<li><a href="kids.php" style="color:white">Kids</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
					<h4 style="color:white">Top Brands</h4>
					<ul>
						<li><a href="emerald.php" style="color:white">Emerald</a></li>
						<li><a href="ebony.php" style="color:white">Ebony</a></li>
						<li><a href="bossy.php" style="color:white">Bossy</a></li>
						<li><a href="rough.php"style="color:white">Rough</a></li>
						<li><a href="signature.php" style="color:white">Signature</a></li>
					</ul>
				</div>
				<div class="col-lg-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
					<h4 style="color:white">Our Address</h4>
					<ul>
						<li  style="color:white"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 04/3, Ramanathan Road, <span>Jaffna.</span></li>
						<li  style="color:white"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li  style="color:white"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +94212212503</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; text-align:center;color:white"> &copy 2016 csc UOJ</p>
			</div>
	</div>
	
</div>
</div>

<script src="js/jquery.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html> 

<?php
	if(isset($_POST['insert_post']))
	{
		$ip=getIp();
		$nic=$_POST['nic_number'];
		$fullName=$_POST['full_name'];
		$address=$_POST['address'];
		$userName=$_POST['user_name'];
		$password1=$_POST['password'];
		$password=md5($password1);
		$dateOfBirth=$_POST['date_of_birth'];
		$sex=$_POST['sex'];
		$mobileNumber=$_POST['mobile_number'];
		$occupation=$_POST['occupation'];
		
		$photo=$_FILES['customer_image']['name'];
		$photo_tmp=$_FILES['customer_image']['tmp_name'];
		move_uploaded_file($photo_tmp,"customer_image/$photo");
		
		 $insert_customer="insert into customers(NIC_Number,Full_Name,Address,User_Name,Password,Date_Of_Birth,Sex,
		 Mobile_Number,Occupation,Photo,Customer_Ip)values('$nic','$fullName','$address','$userName','$password','$dateOfBirth','$sex','$mobileNumber','$occupation','$photo','$ip')";
		 		 
		 $insert_cust=mysqli_query($con,$insert_customer);
		 $sel_cart="select * from cart where ip_add=$ip";
		 $run_cart=mysqli_query($con,$sel_cart);
		 $check_cart=mysqli_num_rows($run_cart);
		 if($check_cart==0)
		 {
			 $_SESSION['User_Name']=$username;
			 echo"<script>alert('customer has been inserted sucessfully')</script>";
			 echo"<script>window.open('../index.php','_self')</script>";
		 }
		 else
		 {
			  $_SESSION['User_Name']=$username;
			echo"<script>alert('customer has been inserted sucessfully')</script>";
			 echo"<script>window.open('checkout.php','_self')</script>";
		 }
	}
?>
