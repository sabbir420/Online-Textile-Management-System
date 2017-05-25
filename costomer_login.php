
<html>
<head>
<meta charset="utf-8"> 
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/m.css">
</head>
<body>
<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
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
   <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
                
        </div>
        <div class="collapse navbar-collapse col-xm-12" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
		<li><a href="../men.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</a></li>
		<li><a href="../women.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</a></li>
				<li><a href="../kids.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids</a></li>

		<li><a href="../AboutUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
		<li><a href="customers/myAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Account</a></li>
		<li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a></li>
      </ul>
	  <form class="navbar-form navbar-right" enctype="mutlipart/form-data">
        <div class="form-group" method="get" action="index.php">
          <input type="text" class="form-control" placeholder="Search" name="items">
		  
        </div>
        <input type="submit" class="btn btn-primary" name="search" value="Search">
      </form>
	  </div>
	 </div>
	 </div>
	 </div>
</nav>
<br><br>
<div class="container-fluid">
	<div class="row">
	<h2 style="text-align:center">Account</h2>
		<div class="col-xs-12">
			<form action="" method="POST" class="form-horizontal">
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email address:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required >
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required >
					</div>
				</div>
				<div class="checkbox">
				<div class="col-sm-2 col-sm-push-2">
					<label><input type="checkbox" class="btn btn-default"> Remember me</label>
				</div>
				</div><br><br>
				<div class="word-in">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  		<a class="forgot" href="#">Forgot Your Password?</a>
				 		 <input type="submit" id="submit" name="login" class="btn btn-default" value="Login">
				  	</div>
			</form>
			<h2 style="float:right;padding:5px;"> <a href="customers/newUserRegistration.php"style="text-decoration:none;">New Register Here</a></h2>
		</div>
	</div>
</div>
	<?php
if(isset($_POST['login']))
{
	$c_email=$_POST['email'];
	$c_pass1=$_POST['password'];
	$c_pass=md5($c_pass1);
	$sel_c="select * from customers where Password='$c_pass' and User_Name='$c_email'";
	
	$run_c=mysqli_query($con,$sel_c);
	$check_customer=mysqli_num_rows($run_c);
	
		
	if($check_customer==0)
	{
		 echo"<script>alert('check password and user name')</script>";
	}
	else
	{
		
	
		{
		$_SESSION['User_Name']=$c_email;
		 echo"<script>alert('you logged in successfully')</script>";
		 echo"<script>window.open('index.php','_self')</script>";

		}
	}
	
	
	
	
}




	?>
	
		
		
	
	<?php

	?>
	<br><br><br><br>
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
