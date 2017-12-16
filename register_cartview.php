<?php
	//Connect to database
	require('connect.php');

	if (isset($_POST["register"])) {
		//Get POST information inside the form
		$username = $_POST["rusername"];
		$email = $_POST["remail"];
		$phonenumber = $_POST["rnumber"];
		$address = $_POST["raddress"];
		$password = $_POST["rpassword"];
		$rpassword = $_POST["rrpassword"];
		

		//Check if any information in form is empty
		if($username == "" || $password == "" || $rpassword == "" || $email == "" || $phonenumber == "" || $address == "")
		{
			echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
			//Return to viewcart page  
	     	echo '<script>window.location="viewcart.php"</script>';
		}elseif (strcmp($password,$rpassword) != 0) {
			echo '<script>alert("Mật khẩu nhập lại không trùng khớp!")</script>';  
	     	echo '<script>window.location="viewcart.php"</script>';
		}else{
			//Check if account is existed
			$sql="SELECT * FROM account WHERE username='$username'";
			$check=mysqli_query($connect, $sql);

			if(mysqli_num_rows($check)  > 0){
				echo '<script>alert("Tài khoản đã tồn tại")</script>';  
	     		echo '<script>window.location="viewcart.php"</script>';
			}else{
				//Store data to database
				$sql = "INSERT INTO account(
					username,
					password,
					email,
					phonenumber,
					address
					) VALUES (
					'$username',
					'$password',
					'$email',
					'$phonenumber',
					'$address'
					)";
				//Execute to insert data
				mysqli_query($connect,$sql);

			   	echo '<script>alert("Đăng ký thành công")</script>';  
	     		echo '<script>window.location="viewcart.php"</script>';
			}	
		}
	}

	//Close database
	mysqli_close($connect); 
?>