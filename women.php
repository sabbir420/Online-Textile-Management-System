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
<!--<link rel="stylesheet" href="css/clean-blog.min.css" >-->
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
</nav><br>

<br><br>
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
				
					<h3>$pro_title</h3>
						
							<img  src='admin_area/product_image/$pro_image' width='180'height='180' />
						
						
						
								<p >$pro_price</p>
								<button class='btn btn-danger' style='float:left;'><a href='index.php?add_cart=$pro_id' class='item_add' style='color:black'>Add To Cart</a></button>
								<button class='btn btn-danger' style='float:right;'><a href='details.php?pro_id=$pro_id' class='product_id' style='color:black'>view details</a></button>
								
						
						
					
				
</div>"
									;
						}
	}
	else
	{
		$get_pro="select*from products where product_cat =2 order by RAND() LIMIT 0,7";
	
		$run_pro=mysqli_query($con,$get_pro);
		
		while($row_pro=mysqli_fetch_array($run_pro))
		{//echo"#########";
				$pro_id=$row_pro['product_id'];
				$pro_cat=$row_pro['product_cat'];
				$pro_brand=$row_pro['product_brand'];
				$pro_title=$row_pro['product_title'];
				$pro_price=$row_pro['product_price'];
				$pro_image=$row_pro['product_image'];
				 
				/* <h3>$pro_title</h3>
				<img src='admin_area/product_image/$pro_image' width='180'height='180'/>
				<p><b>$pro_price</b></p>
				<a href='details.php?product_id=$pro_id' style='float:left;'>Details</a>
				<a href='index.php?add_cart=$pro_id'> <button style='float:right;'>add to cart</button></a> */
echo"<div id='single_product' height='auto'>
							<h3>$pro_title</h3>
							<img  src='admin_area/product_image/$pro_image'' width='180'height='180' />
									<h5>$pro_price</h5>
									<button class='btn btn-danger'><a href='index.php?add_cart=$pro_id' class='item_add' style='color:black'>Add  Cart</a></button>
									<button class='btn btn-danger'><a href='details.php?pro_id=$pro_id' class='product_id' style='color:black'>view details</a></button>
	</div>";}
	
		
	

	}
	?>

	

</div>
</div><br/><br/><br/><br/><br/><br/>
<br><br><br><br><br><br><br><br><br>
<div class="footer">
<?php

getIp();
cart();
?>

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
						<li><a href="customers/newUserRegistration.php" style="color:white">Signup</a></li>
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