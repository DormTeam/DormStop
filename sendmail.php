<?php
//Connect to database
require 'connect.php';
require 'viewcart.php';

if (isset($_POST["order"]))
{
	//count number of occurrences of product in session
	$count = count($_SESSION["shopping_cart"]);

	//email address for receiving orders
	$to       = 'dormstop@gmail.com';

	$subject  = 'New Order Incoming';
	$message  = "";
	$message1 = "";
	$message2 = "";

	
	if(isset($_COOKIE['username'])){
		//Get username from cookie
		$username = $_COOKIE['username'];
		
		//Query to get information
		$sql="SELECT * FROM account WHERE username='$username'";
		$info=mysqli_query($connect, $sql);

		//fetch every info in the database
		$result = mysqli_fetch_object($info);
	}
	
	//Merge information
	$message_info = "From: " . " " . $result->username . "<br>" .
					"Email: " . " " . $result->email . "<br>" .
					"Số điện thoại: " . " " . $result->phonenumber . "<br>" .
					"Địa chỉ: " . " " . $result->address . "<br>" . "<br>" .
					"Thông tin đặt hàng: " . "<br>";

	//Get the orders information & add to message
	for($x = 0;$x < $count;$x++)
	{ 
		$message1  =  $_SESSION["shopping_cart"][$x]['item_name'] . " x" . $_SESSION["shopping_cart"][$x]['item_quantity'] . "<br>";
		$message2 .= $message1;
	}
	$message .= $message_info . $message2;

	//Create header
	$headers  = 'From: dormstop.notification@gmail.com' . "\r\n" .
	            'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/html; charset=utf-8';

	//Send email
	if(mail($to, $subject, $message, $headers))
	{
		echo '<script>alert("Đặt hàng thành công! Các món ăn sẽ được ship trong thời gian sớm nhất! Cảm ơn bạn đã chọn mua hàng ở DormStop.")</script>';  
	    echo '<script>window.location="viewcart.php"</script>';

	    //unset session to remove available products if order is succeeded
	    unset($_SESSION["shopping_cart"]);
	}
	else
	    echo "Email sending failed";
}

?>