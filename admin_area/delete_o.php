<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_o'])){
	
	$delete_id = $_GET['delete_o'];
	
	$delete_c = "delete from orders where order_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_c); 
	
	if($run_delete){
	
	echo "<script>alert('A order has been deleted!')</script>";
	echo "<script>window.open('index.php?view_orders','_self')</script>";
	}
	
	}





?>