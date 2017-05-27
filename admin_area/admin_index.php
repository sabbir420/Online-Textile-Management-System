<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" href="styles/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="styles/css/main.css">
<link rel="stylesheet" href="styles/css/m.css">
</head>
<body>
	<div class="main_wrapper">
	<div id="header"></div>
		<div id="left">
			
			<?php
			
				if(isset($_GET['insert_product']))
				{
					include("insert_product.php");
				}
				if(isset($_GET['view_products']))
				{
					include("view_products.php");
				}
				if(isset($_GET['edit_pro']))
				{
					include("edit_pro.php");
				}
			
			
			?>
		
		
		
		
		</div>
		<div id="right">
		<h2 style="text-align:center;">Manage Content</h2><br>
		<a href="admin_index.php?insert_product">Insert New Products</a>
		<a href="admin_index.php?view_products">View All Products</a>
		<a href="index.php?insert_cat">Insert New Catagories</a>
		<a href="index.php?insert_brands">Insert New brands</a>
		<a href="index.php?view_brands">View All Brands</a>
		<a href="index.php?view_customers">View Customers</a>
		<a href="index.php?view_orders">View Orders</a>
		
		
		
		
		
		</div>
	
	
	
	
	</div>
	
	
	</body>
</html>