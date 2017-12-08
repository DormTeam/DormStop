<?php
require 'viewcart.php';

if (isset($_POST["order"]))
{
	$count = count($_SESSION["shopping_cart"]);
	$to       = 'dormstop@gmail.com';
	$subject  = 'New Order Incoming';
	$message  = "";
	for($x = 0;$x < $count;$x++)
	{
		$message1  =  $_SESSION["shopping_cart"][$x]['item_name'] . " " . $_SESSION["shopping_cart"][$x]['item_quantity'] . "<br>";
		$message .= $message1;
	}
	$message .= 
	$headers  = 'From: dormstop.notification@gmail.com' . "\r\n" .
	            'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/html; charset=utf-8';

	if(mail($to, $subject, $message, $headers))
	{
		echo '<script>alert("Đặt hàng thành công! Các món ăn sẽ được ship trong thời gian sớm nhất! Cảm ơn bạn đã chọn mua hàng ở DormStop.")</script>';  
	    echo '<script>window.location="viewcart.php"</script>';
	    unset($_SESSION["shopping_cart"]);
	}
	else
	    echo "Email sending failed";
}

?>