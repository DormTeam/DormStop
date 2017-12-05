<?php
	require_once('connect.php');
	if (isset($_POST["register"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["rusername"];
		$email = $_POST["remail"];
		$password = $_POST["rpassword"];
		$rpassword = $_POST["rrpassword"];
	
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if($username == "" || $password == "" || $rpassword == "" || $email == "") {
			echo "Vui lòng nhập đầy đủ thông tin";
		}elseif (strcmp($password,$rpassword) != 0) {
			echo "Mật khẩu nhập lại không trùng khớp!";
		}else{
			// Kiểm tra tài khoản đã tồn tại chưa
			$sql="SELECT * FROM account WHERE username='$username'";
			$check=mysqli_query($connect, $sql);

			if(mysqli_num_rows($check)  > 0){
				echo "Tài khoản đã tồn tại";
			}else{
				//thực hiện việc lưu trữ dữ liệu vào db
				$sql = "INSERT INTO account(
					username,
					password,
					email
					) VALUES (
					'$username',
					'$password',
					'$email'
					)";
				    // thực thi câu $sql với biến conn lấy từ file connection.php
				mysqli_query($connect,$sql);
			   	echo '<script>alert("Đăng ký thành công")</script>';  
         		echo '<script>window.location="index.php"</script>';
			}	
		}
	}
?>