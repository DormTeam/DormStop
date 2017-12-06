<?php
	require('connect.php');
	if (isset($_POST["contact"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$name = $_POST["cname"];
		$email = $_POST["cemail"];
		$phone = $_POST["cphone"];
		$message = $_POST["cmessage"];
	
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if($name == "" || $email == "" || $phone == "" || $message == "") {
			echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';  
         	echo '<script>window.location="index.php"</script>';
		}else{
			//thực hiện việc lưu trữ dữ liệu vào db
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
			    // thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($connect,$sql);
		   	echo '<script>alert("Gửi ý kiến thành công! Xin cảm ơn bạn!")</script>';  
     		echo '<script>window.location="index.php"</script>';
			}	
		}
?>