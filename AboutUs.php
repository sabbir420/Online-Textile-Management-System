<?php
session_start();
	include("functions/function.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"> 
<title>SL Design</title>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/m.css">
<style>
p.padding {
    padding-left: 13cm;
}
p.padding1 {
    padding-left: 0.5cm;
}
p.padding2 {
    padding-left: 28cm;
}



</style>
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
        <li><a href="index.php">Home</a></li>
        
		<li><a href="men.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</a></li>
		<li><a href="women.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</a></li>
		<li ><a href="kids.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids<span class="sr-only">(current)</span></a></li>		
		<li class="active"><a href="AboutUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
		<li><a href="customers/myAccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Account</a></li>
		<li><a href="ContactUs.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a></li>
      </ul>
     
	   
      
    </div><!-- /.navbar-collapse -->
  </div>
  </div><!-- /.container-fluid -->
</nav><br>
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
<hr  style="height:1px;border:none;color:#333;background-color:#333;" />
     <h1><center>About Us</center></h1> <hr  style="height:1px;border:none;color:#333;background-color:#333;" />
	
	
	 <div>
	 <br>
    <p class="padding1" style="float: left;"><img src="images/ff9402d9d4e5cb58c769152d92b3dcc0.jpg" padding-left ="2cm" height="650px" width="450px" border="10" margin="1px"></p>
    
</div>

	 
	<font size="4.5"><p style="text-align: justify; padding-left: 13cm;"><strong>SL DESIGN </strong>is a family owned business specialising in Dress Fabric, Craft, Window Drapery and Furnishings. Our essence is family values and we are dedicated to providing the highest quality products, best prices and exceptional service.</p>
<p style="text-align: justify; padding-left: 13cm;">SL DESIGN was established in 2010 and quickly grew and diversified. With growth came the demand to expand our offering, which now includes a full service Home Decor business, a Commercial business and Online business.</p>
<p style="text-align: justify; padding-left: 13cm;">We aim to provide the best customer service by helping however we can. Our friendly staff are always available to offer you handy hints and tips in-store or online.</p>
<p style="text-align: justify; padding-left: 13cm;">Our Online store was built with the purpose of making it easy for our customers to find and purchase the products we specialise in. We hope you enjoy our site and any feedback would be much appreciated.</p>
<p style="text-align: justify; padding-left: 13cm;">Happy sewing!</p>	 </font></p>
<br><br><br><br>
<p class="padding2"><img src="images/AboutUs.jpg" padding-left ="2cm" height="300px" width="300px" border="300" margin="1px"></p>
    
<br><br>
<div id ="content2">

	<?php

if(isset($_GET['search']))
{
	$items=$_GET['items'];
	$get_pro="select*from products where product_keywords like'%$items%'";
	
		$run_pro=mysqli_query($con,$get_pro);
		
		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pro_id=$row_pro['product_id'];
				$pro_cat=$row_pro['product_cat'];
				$pro_brand=$row_pro['product_brand'];
				$pro_title=$row_pro['product_title'];
				$pro_price=$row_pro['product_price'];
				$pro_image=$row_pro['product_image'];
				 
				
echo"<div id='single_product'>
				
					
	<div class='c-btm'>
		<div class='content-top1'>
			<div class='container'>
				<div class='col-md-3 col-md2 animated wow fadeInLeft' data-wow-delay='.5s'   >
					<div class='col-md1 simpleCart_shelfItem'>
						
							<img class='img-responsive' src='admin_area/product_image/$pro_image'' width='180'height='180' alt='' />
						
						<h3>$pro_title</h3>
						<div class='price'>
								<h5 class='item_price'>$pro_price</h5>
								<button class='btn btn-danger'><a href='index.php?add_cart=$pro_id' class='item_add' style='color:black'>Add To Cart</a></button>
								<div class='clearfix'> </div>
						</div>
						
					</div>
				</div>
			<div class='clearfix'> </div>
			</div>	
		</div>
	</div>
</div>"
								;
					}
}
	?>

	</div>
</div>
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