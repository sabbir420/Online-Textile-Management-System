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
<link rel="stylesheet" href="css/clean-blog.min.css" >
</head>
<body>
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="inddex.php">SL DESIGN</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
				<li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="AboutUs.php">ABOUT</a>
                </li>
                
				<li>
                    <a class="page-scroll" href="customers/myAccount.php">MY ACCOUNT</a>
                </li>
                <li>
                    <a class="page-scroll" href="ContactUs.php">CONTACT</a>
                </li>
				<li>
					<?php 
						if(!isset($_SESSION['User_Name']))
						{
							echo"<a class='page-scroll' href='checkout.php' style='color:white'>LOGIN</a>";
						}
						else
						{
							echo"<a class='page-scroll' href='logout.php' style='color:white'>LOGOUT</a>";
						}
					?>
				</li>
				<li class="dropdown">
						<a href="cart.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart<span class="caret" ></span></a>
							<ul class="dropdown-menu navbar-light">
								
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<b>Items:<?php if(isset($_SESSION['User_Name'])){total_items();} ?></b></li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<b>Price:<?php if(isset($_SESSION['User_Name'])){total_price();} ?></b></li>
								<li>&nbsp;&nbsp;<a href="cart.php" style="color:black"><b>View More</b></a></li>
							</ul>
					</li>
				<form class="navbar-form navbar-right">
					<div class="form-group" method="get" action="inddex.php">
						<input type="text" class="form-control" placeholder="Search" name="search">
					</div>
					<button type="submit"  name="serach" value="Search"><span class="glyphicon glyphicon-search" s></span></button>
				</form>
            </ul>
        </div>
    </div>
</nav>
<header class="intro-header" style="background-image: url('images/clothe.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading"><br>
                    <h1 style="">SL DESIGN</h1>
                    <hr class="small">
                    <span class="subheading"><b>SELL and BUY</b></span><br><br>
					 <div class="home-button">
                    <a href="login.php" ><?php 
							if(!isset($_SESSION['User_Name']))
							{
								echo"<a class='page-scroll' href='checkout.php' style='color:white'>LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;";
								echo"<a href='customers/newUserRegistration.php'><b style='color:white'>SIGNUP</b></a>";
							}
							
						?>				
					</a>			 
                </div> 
                </div>
            </div>
        </div>
    </div>
</header>
<div id ="content2">
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
	<div class="col-sm-10 " style="text-align:center"><h3><b>Items</b></h3><br><br>
	</div align="center">
	<?php
	if(isset($_GET['search']))
	{
		$items=$_GET['search'];
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
								
							<p>$pro_title</p>
							<img  src='admin_area/product_image/$pro_image' width='180'height='180'/>
							
									<p>$pro_price</p>
									<button class='btn btn-danger'><a href='inddex.php?add_cart=$pro_id' class='item_add' style='color:black'>Add To Cart</a></button><br>
									<button class='btn btn-danger'><a href='details.php?pro_id=$pro_id' class='product_id' style='color:black'>view details</a></button>
	</div>"
									;
						}
	}
	else
	{
		getPro();
	}
	?>
	</div>

	</div>
</div><br><br><br><br><br><br><br><br><br><br>


		<hr>
<div class="footer">
<?php

getIp();
cart();
?>
<br><br><br>
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