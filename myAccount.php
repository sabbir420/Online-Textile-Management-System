<?php
session_start();
	include("../functions/function.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"> 
<title>SL Design</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/main.css">
</head>
<body>

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
		<li><a href="myAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Account<span class="sr-only">(current)</span></a></li>
		<li><a href="../ContactUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a></li>
      </ul>
      
	   
      
    </div>
  </div>
  </div>
</nav><br><br>
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
<div id="details">
<?php
$user=$_SESSION['User_Name'];
$get_all="select * from customers where User_Name='$user'";
$run_all=mysqli_query($con,$get_all);
$row_all=mysqli_fetch_array($run_all);
$c_image=$row_all['Photo'];

$run_name=mysqli_query($con,$get_all);
//$row_name=mysqli_fetch_array($run_name);
$c_name=$row_all['Full_Name'];

$c_address=$row_all['Address'];
$c_sex=$row_all['Sex'];
$c_nic=$row_all['NIC_Number'];
$c_dob=$row_all['Date_Of_Birth'];
$c_mobileno=$row_all['Mobile_Number'];
$c_occu=$row_all['Occupation'];


echo"<img src='customer_image/$c_image' width='150' height='150'/>";

?>
<h2> welcome <?php echo $c_name ?><h2>
<br><br>
<h2> NIC <?php echo $c_nic ?><h2>
<h2> address <?php echo $c_address ?><h2>
<h2> sex <?php echo $c_sex ?><h2>
<h2> date of birth <?php echo $c_dob ?><h2>
<h2> mobile number <?php echo $c_mobileno ?><h2>
<h2> occupation <?php echo $c_occu ?><h2>


<div id ="edit_account">
<a href='edit_account.php'> <h3>Edit Account</h3></a>
<? if (isset($_GET['edit_account.php'])
{
	include("edit_account.php");
}
	




?>
</div>
</div>
</div><br><br>
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
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>fHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>