<?php
$con=mysqli_connect("localhost","root","","1s_ecommerce");

function getCats()
{
	global $con;
	$get_cats="select*from categories";
	$run_cats=mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats))
	{
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		
		echo"<li><a href='#'>$cat_title</a></li>";
		
		
	}	
}
function getCats2()
{
	global $con;
	$get_cats="select*from categories";
	$run_cats=mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats))
	{
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		
		echo"<option>$cat_title</option>";
		
		
	}	
}
function getTypes()
{
	global $con;
	$get_types="select*from types";
	$run_types=mysqli_query($con,$get_types);
	
	while($row_types=mysqli_fetch_array($run_types))
	{
		$type_id=$row_types['type_id'];
		$type_name=$row_types['type_name'];
		
		echo"<option>$type_name</option>";
		
		
	}	
}
function getBrands()
{
	global $con;
	$get_brands="select*from brands";
	$run_brands=mysqli_query($con,$get_brands);
	
	while($row_brands=mysqli_fetch_array($run_brands))
	{
		$brand_id=$row_brands['brand_id'];
		$brand_title=$row_brands['brand_title'];
		
		echo"<option>$brand_title</option>";
		
		
	}	
}
 function cart()
{
	if(isset($_GET['add_cart']))
	{
		global $con;
		$ip=getIp();
		echo $ip;
		$pro_id=$_GET['add_cart'];
		$check_pro="select *from cart where ip_add='$ip'AND p_id='$pro_id'";
		$run_check=mysqli_query($con,$check_pro);
		if(mysqli_num_rows($run_check)>0)
		{
			echo"&&&&&&7";
			
		}
		else 
		{
			$insert_pro="insert into cart(p_id,ip_add)values('$pro_id','$ip')";
		}
		$run_pro=mysqli_Query($con,$insert_pro);
		echo"<script>window.open('index.php','_self')</script>";
			
	}
} 
function total_items()
{
	if(isset($_GET['add_cart']))
	{
		global $con;
		$ip=getIp();
		$get_items="select*from cart where ip_add='$ip'";
		$run_items=mysqli_query($con,$get_items);
		$count_items=mysqli_num_rows($run_items);
	}
		else
		{
		global $con;
		$ip=getIp();
		$get_items="select*from cart where ip_add='$ip'";
		$run_items=mysqli_query($con,$get_items);
		$count_items=mysqli_num_rows($run_items);	
		}
		echo $count_items;
	}
function total_price()
{
	$total=0;
	
	global $con;
	
	$ip=getIp();
	
	$sel_price="select*from cart where ip_add='$ip'";
	
	$run_price=mysqli_query($con,$sel_price);
	
	 while($p_price=mysqli_fetch_array($run_price))
	 {
		 $pro_id=$p_price['p_id'];
		 
		 $pro_price="select * from products where product_id='$pro_id'";
		 
		 $run_pro_price=mysqli_query($con,$pro_price);
		 
		 while($pp_price=mysqli_fetch_array($run_pro_price))
		 {
			 $product_price=array($pp_price['product_price']);
			 
			 $values=array_sum($product_price);
			 
			 $total+=$values;
		 }
	 }
	 echo $total;
}
	

function getIp()
{
	$ip=$_SERVER['REMOTE_ADDR'];
	if(!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARED_FOR_IP']))
	{
		$ip=$_SERVER['HTTP_X_FORWARED_FOR_IP'];
	}
	return $ip;
}
function getPro()
{
	global $con;
	
	$get_pro="select*from products order by RAND() LIMIT 0,6";
	
		$run_pro=mysqli_query($con,$get_pro);
		
		while($row_pro=mysqli_fetch_array($run_pro))
		{
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
echo"<div id='single_product'>
				
					<h3>$pro_title</h3>
						
							<img  src='admin_area/product_image/$pro_image' width='180'height='180' />
						
						
						
								<p > Rs.$pro_price</p>
								<button class='btn btn-danger' style='float:left;'><a href='index.php?add_cart=$pro_id' class='item_add' style='color:black'>Add To Cart</a></button>
								<button class='btn btn-danger' style='float:right;'><a href='details.php?pro_id=$pro_id' class='product_id' style='color:black'>view details</a></button>
								
						
						
					
				
</div>"
								;
				/* echo"<div id='single_product2'>
				<ul id ='image'>
					<li><h3>$pro_image</h3></li>
				</ul>
				</div>
				

				";
 */		}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>