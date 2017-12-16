<?php
	//Connect to database
	require('connect.php');
	if (isset($_POST["contact"])) {
		//Get POST information inside the form
		$name = $_POST["cname"];
		$email = $_POST["cemail"];
		$phone = $_POST["cphone"];
		$message = $_POST["cmessage"];
	
		//Check if any information in form is empty
		if($name == "" || $email == "" || $phone == "" || $message == "") {
			echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';  
         	echo '<script>window.location="index.php"</script>';
		}else{
			//Store data to database
			$sql = "INSERT INTO contact_info(
				name,
				email,
				phone,
				message
				) VALUES (
				'$name',
				'$email',
				'$phone',
				'$message'
				)";
				
			//Execute to insert data
			mysqli_query($connect,$sql);
		   	echo '<script>alert("Gửi ý kiến thành công! Xin cảm ơn bạn!")</script>';  
     		echo '<script>window.location="index.php"</script>';
			}	
		}

	//Close database
	mysqli_close($connect); 
?>