<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
 
if (isset($_POST['login'])) 
{
    //Kết nối tới database
    //require 'connect.php';
    require 'data_access_helper.php';
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new DataAccessHelper;
    $db->connect();
     
    $result = $db->executeQuery("SELECT * FROM account WHERE username='$username' AND password='$password';");

    if ($result->num_rows > 0) {
        setcookie("username", $username);
        echo '<script>window.location="index.php"</script>';
    }   
    else {
        echo '<script>alert("Sai tên đăng nhập/Mật khẩu")</script>';  
        echo '<script>window.location="index.php"</script>';
    }
    $db -> close();
}
?>