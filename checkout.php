<?php 
session_start();
	//$con=mysqli_connect("localhost","root","","1s_ecommerce");
	include("functions/function.php");
?>	
<html>
<head>
	<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>

<meta name="robots" content="noindex, nofollow">
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43981329-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>
 <div id ="content2">
	<?php
		 if(!isset($_SESSION['User_Name']))
		{
			include("costomer_login.php");
		}
		else
		{ 
		$total = 0;
		$ip=$_SERVER['REMOTE_ADDR'];
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARED_FOR_IP']))
		{
			$ip=$_SERVER['HTTP_X_FORWARED_FOR_IP'];
		} 
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price); 
		
		while($p_price=mysqli_fetch_array($run_price))
		{
			$pro_id = $p_price['p_id']; 
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			$pro_cust="select * from customers where Customer_Ip='$ip'";
			$run_pro_cust = mysqli_query($con,$pro_cust); 
			
			while ($pp1_price = mysqli_fetch_array($run_pro_cust))
			{
				$c_id = $pp1_price['Customer_id'];
			}
			while ($pp2_price = mysqli_fetch_array($run_pro_price))
			{
			$product_price = array($pp2_price['product_price']);
			
			$product_name = $pp2_price['product_title'];
			
			$values = array_sum($product_price);
			
			$total +=$values;
			}
		}
				$get_order="insert into orders (p_id,c_id,order_date) values ('$pro_id','$c_id',CURDATE())";
				$run_order = mysqli_query($con,$get_order); 
			
			require 'PHPMail/PHPMailerAutoload.php';

$email = 'testingtesting731@gmail.com';
$password = 'testingtesting731123';
$to_id = $_SESSION['User_Name'];
$message = 'your order has been accepted';
$subject = 'sldesign';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
			 echo"<script>alert('order accepted.Please check your mail for the confirmation message ..')</script>";			 
		echo"<script>window.open('cart.php','_self')</script>"; }
	?>
</div> 
</body>
</html>