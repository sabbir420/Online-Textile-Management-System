
<?php
session_start();
	include("../functions/function.php");
$user=$_SESSION['User_Name'];
$get_all="select * from customers where User_Name='$user'";
$run_all=mysqli_query($con,$get_all);
$row_all=mysqli_fetch_array($run_all);
$c_image=$row_all['Photo'];

$run_name=mysqli_query($con,$get_all);

$c_name=$row_all['Full_Name'];
$c_id=$row_all['Customer_id'];
$c_address=$row_all['Address'];
$c_sex=$row_all['Sex'];
$c_nic=$row_all['NIC_Number'];
$c_username=$row_all['User_Name'];
$c_dob=$row_all['Date_Of_Birth'];
$c_mobileno=$row_all['Mobile_Number'];
$c_occu=$row_all['Occupation'];
?>
<html>
<header>
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
</header>
<body>
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
        <li class="active"><a href="index.php">Home</a></li>
        
		<li><a href="men.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</a></li>
		<li class="active"><a href="women.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women<span class="sr-only">(current)</span></a></li>
		<li><a href="kids.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids</a></li>		<li><a href="AboutUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
		<li><a href="customers/myAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Account</a></li>
		<li><a href="ContactUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a></li>
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
</nav><div id ="registration" align="center">
<form  method="POST" enctype="multipart/form-data">
<div>
<div class="col-sm-2" style="border: thin solid black">
		<h3><b>Looking For</b></h3>
			<div class="checklist categories">
				<ul>
					<li><a href="men.php"><span></span>Men</a></li>
					<li><a href="women.php"><span></span>Women</a></li>
					<li><a href="kids.php"><span></span>Kids</a></li>
				</ul>
			</div>
		<h3><b>Catagories</b></h3>
			<div class="checklist categories">
				<ul>
					<li><a href="shoes.php"><span></span>Shoes</a></li>
					<li><a href="shirts.php"><span></span>Shirts</a></li>
					<li><a href="sharees.php"><span></span>Sharees</a></li>
					<li><a href="tshirts.php"><span></span>T-shirts</a></li>
				</ul>
			</div>
		<h3><b>Brands</b></h3>
			<div class="checklist categories">
				<ul>
					<li><a href="emerald.php"><span></span>Emerald</a></li>
					<li><a href="ebony.php"><span></span>Ebony</a></li>
					<li><a href="bossy.php"><span></span>Bossy</a></li>
					<li><a href="rough.php"><span></span>Rough</a></li>
					<li><a href="signature.php"><span></span>Signature</a></li>
				</ul>
				<hr width="1" size="500">
			</div>
	</div>
<div>
<article>
	<h1>Update your account</h1><br>
	<label class="col-md-4 control-label" for="ln">Full name</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md" name="full_name" value="<?php echo $c_name;?>"required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">NIC Number</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md" name="nic_number" maxlength="10" value="<?php echo $c_nic;?>"required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Create a username</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md" name="user_name" maxlength="200" value="<?php echo $c_username;?>"required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Create a password</label>  
  <div class="col-md-4">
  <input id="ln"  type="password"  class="form-control input-md" name="password" maxlength="100" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Address</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md" name="address" maxlength="200" value="<?php echo $c_address;?>" required>
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Mobile Number</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md" name="mobile_number" required maxlength ="10" value="<?php echo $c_mobileno;?>">
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Date Of Birth </label>  
  <div class="col-md-4">
  <input id="datepicker"  type="text"  class="form-control input-md"  name="date_of_birth" required value="<?php echo$c_dob;?>" >
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Sex</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md"  name="sex" required value="<?php echo $c_sex;?>">
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Occupation</label>  
  <div class="col-md-4">
  <input id="ln"  type="text"  class="form-control input-md"  name="occupation" required value="<?php echo$c_occu;?>">
  </div><br><br>
  <label class="col-md-4 control-label" for="ln">Photograph</label>  
  <div class="col-md-4">
  <input id="ln" class="form-control input-md"  type="file" name="customer_image" id="fileToUpload" value="<?php echo $c_image;?>">
  </div><br><br>
 
	
</form>
		<input align="left" type="submit" name="update_account" value="Update">
		<input align="left" type="reset" name="reset_post" value="Reset">
		
</article>
</div>
<br><br>
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

<script src="../js/jquery.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html> 
 
<?php

	if(isset($_POST['update_account']))
	{echo"&&&&&&&&&&";
		$ip=getIp();
		$customer_id=$c_id;
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
		
		 $update_customer="update customers set NIC_Number='$nic' ,Full_Name='$fullName',Address='$address',User_Name='$userName',Password='$password',Date_Of_Birth='$dateOfBirth',Sex='$sex',Mobile_Number='$mobileNumber',Occupation='$occupation',Photo='$photo' where Customer_id='$customer_id' 
		   ";
		 		 
		  $update_cust=mysqli_query($con,$update_customer);
		  
		 if($update_cust)
		 {echo"********";
			 echo"<script>alert('your account has been updated sucessfuly')</script>";
			 echo"<script>window.open('myAccount.php','_self')</script>";
		 }
		
	} 
?> 
