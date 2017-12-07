<?php
require 'viewcart.php';


$count = count($_SESSION["shopping_cart"]);
$to       = 'vuhoangkhanh242@gmail.com';
$subject  = 'New Order Incoming';
$message  = "";
for($x = 0;$x < $count;$x++)
{
	$message1  =  $_SESSION["shopping_cart"][$x]['item_name'] . " " . $_SESSION["shopping_cart"][$x]['item_quantity'] . "<br>";
	$message .= $message1;
}
$message .= 
$headers  = 'From: vuhoangkhanh2402@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';

if(mail($to, $subject, $message, $headers))
{}
else
    echo "Email sending failed";

?>