<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');

    //Connect to database
    require 'connect.php'; 

    //if get POST login from LOGIN form
    if (isset($_POST['login'])) 
    {
        //Get POST information inside the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Query for checking the correct account
        $sql="SELECT * FROM account WHERE username='$username' AND password='$password';";
        $check=mysqli_query($connect, $sql);

        if(mysqli_num_rows($check)  > 0) {
            //Set cookie
            setcookie("username", $username);
            //Return to cartview page
            echo '<script>window.location="viewcart.php"</script>';
       }else {
            echo '<script>alert("Sai tên đăng nhập/Mật khẩu")</script>';  
            echo '<script>window.location="viewcart.php"</script>';
        }   
    }
    //Close database
    mysqli_close($connect);
?>