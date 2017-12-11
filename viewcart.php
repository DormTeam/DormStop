<?php   
 session_start();  
 require 'connect.php';

 if(isset($_POST["add_to_cart"]))  
 {
    if($_POST["quantity"] <= 0){
      echo '<script>alert("Số lượng sản phẩm nhập vào không hợp lệ!")</script>';  
      echo '<script>window.location="viewproduct.php"</script>';  
    } else {  
        if(isset($_SESSION["shopping_cart"])) 
        {  
             $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
             if(!in_array($_GET["id"], $item_array_id))  
             {  
                  $count = count($_SESSION["shopping_cart"]);  
                  $item_array = array(  
                       'item_id'       =>     $_GET["id"],  
                       'item_name'     =>     $_POST["hidden_name"],  
                       'item_price'    =>     $_POST["hidden_price"],  
                       'item_quantity' =>     $_POST["quantity"]  
                  );  
                  $_SESSION["shopping_cart"][$count] = $item_array;  
             }  
             else  
             {
                echo '<script>alert("Sản phẩm đã có trong giỏ hàng! Vui lòng kiểm tra lại.")</script>';  
                echo '<script>window.location="viewcart.php"</script>';  
             }  
        }  
        else  
        {  
             $item_array = array(  
                  'item_id'            =>     $_GET["id"],  
                  'item_name'          =>     $_POST["hidden_name"],  
                  'item_price'         =>     $_POST["hidden_price"],  
                  'item_quantity'      =>     $_POST["quantity"]  
             );  
             $_SESSION["shopping_cart"][0] = $item_array; 
        }
    }  
 }
   
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     //echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="viewcart.php"</script>';  
                }  
           }  
      }  
 }
?>  

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DormStop - Giỏ hàng</title>
    <link rel="shortcut icon" href="img/logos/favicon.ico" />


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    
    <link rel="stylesheet" href="css/dropdown-btn.css">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black; height: 100px" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">DormStop</a>
        </div>
        <div class="collapse navbar-collapse menu-font" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" href="#">
              <?php
                if(isset($_COOKIE['username']))
                  echo $_COOKIE['username'];
                else
                  echo 'Khách hàng';
              ?></a>
              <ul class="dropdown-menu dropdown-content">
                <?php if(isset($_COOKIE['username'])): ?> 
                    <li><a href="#" id="log_out">Đăng xuất</a></li>
                <?php else: ?>
                    <li><a class="portfolio-link" data-toggle="modal" href="#modalLogin">Đăng nhập</a></li>
                <?php endif; ?>
                <li><a class="portfolio-link" data-toggle="modal" href="#modalRegister">Tạo tài khoản</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 150px">
    <div style="clear:both"></div>  
    <br />  
    <h3 align="center">Thông tin đặt hàng</h3>  
    <div class="table-responsive">  
         <table class="table table-hover">  
              <tr>  
                   <th class="text-center" width="25%" style="font-size: 14pt;">Tên sản phẩm</th>  
                   <th class="text-center" width="15%" style="font-size: 14pt;">Số lượng</th>  
                   <th class="text-center" width="20%" style="font-size: 14pt;">Giá</th>  
                   <th class="text-center" width="15%" style="font-size: 14pt;">Tổng tiền</th>  
                   <th class="text-center" width="15%" style="font-size: 14pt;">Chỉnh sửa</th>  
              </tr>  
              <?php   
              if(!empty($_SESSION["shopping_cart"]))  
              {  
                   $total = 0;  
                   foreach($_SESSION["shopping_cart"] as $keys => $values)  
                   {  
              ?>  
              <tr>  
                   <td style="font-size: 13pt;" align="center"><?php echo $values["item_name"]; ?></td>  
                   <td style="font-size: 13pt;" align="center"><?php echo $values["item_quantity"]; ?></td>  
                   <td style="font-size: 13pt;" align="center"><?php echo $values["item_price"]; ?>Đ</td>  
                   <td style="font-size: 13pt;" align="center"><?php echo number_format($values["item_quantity"] * $values["item_price"]); ?>Đ</td>  
                   <td style="font-size: 13pt;" align="center"><a class="btn btn-danger" href="viewcart.php?action=delete&id=<?php echo $values["item_id"]; ?>">Remove</span></a></td>  
              </tr>  
              <?php  
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                   }  
              ?>  
              <tr>  
                   <td colspan="3" align="right" style="font-weight: bold; font-size: 20pt;">Tổng cộng</td>  
                   <td style="font-weight: bold; font-size: 20pt;" align="center"><?php echo number_format($total); ?>Đ</td>  
                   <td align="center">
                    <?php if(isset($_COOKIE['username'])): ?> 
                      <form action="sendmail.php" method="post">
                      <button type="submit" name="order" class="btn btn-success">Đặt hàng</button> 
                      </form>
                    <?php else: ?>  
                      <button data-toggle="modal" href="#modalLogin" class="portfolio-link btn btn-success">Vui lòng đăng nhập để đặt hàng</button>
                    <?php endif; ?>
                   
                  </td>  
              </tr>
              <?php  
              }  
              ?>
              <tr>
                <td>   </td>
                <td>   </td>                                                
                <td>
                  <!--
                  <form action="viewcart.php" method="post">
                    <button type="submit" name="update_cart" class="btn btn-info">Cập nhật giỏ hàng
                    </button> 
                  </form> -->
                </td>
                <td>   </td>
                <td>
                    <form>
                      <button class="btn btn-warning" style="color: white;" formaction="viewproduct.php">Tiếp tục mua hàng</button>
                    </form>
                </td>
              </tr>
         </table>
        </div>    
    </div>

<!-- Modal Login -->
    <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="width: 500px; height: 500px">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <p></p>
          </div>
          <div class="modal-body">
            <h3 class="title-items">Đăng nhập</h3>
            <p></p>

            <form method="POST" action=login.php?do=login>
              <div class="container">
                <label><b>Tên tài khoản</b></label>
                <input type="text" placeholder="Nhập tên tài khoản" name="username" required>

                <label><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="password" required>

                <button type="submit" name="login">Đăng nhập</button>
                <input type="checkbox" checked="checked"> Nhớ mật khẩu
                <div>
                  <p></p>
                  <a data-dismiss="modal" data-toggle="modal"  href="#modalRegister"  style="float: right; color: green;">Chưa có tài khoản? Click để đăng ký</a>
                </div>
              </div>
              <div class="container">
                <span class="psw"> <a href="#">Quên mật khẩu?</a></span>
                <button style="float: right; color: white" type="button" class="btn btn-warning"" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
              <p></p>
              <p></p>
              <p></p>
            </div>             
        </div>
    </div>
    
<!-- Modal Register -->
    <div style="overflow-y:auto;" id="modalRegister" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="width: 500px; height: 500px">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <p></p>
          </div>
          <div class="modal-body">
            <h3 class="title-items">Tạo tài khoản</h3>
            <p></p>

            <form action='register.php' method="POST">
              <div class="container">
                <label><b>Tên tài khoản</b></label>
                <input type="text" placeholder="Nhập tên tài khoản" name="rusername" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Nhập email" name="remail" required>

                <label><b>Số điện thoại</b></label>
                <input type="text" placeholder="Nhập số điện thoại" name="rnumber" required>
                
                <label><b>Địa chỉ</b></label>
                <input type="text" placeholder="Nhập địa chỉ" name="raddress" required>

                <label><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="rpassword" required>

                <label><b>Nhập lại mật khẩu</b></label>
                <input type="password" placeholder="Nhập lại mật khẩu" name="rrpassword" required>

                <button type="submit" name="register">Đăng kí</button>
              </div>

              <div class="container">
                <button style="float: right; color: white" type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
              </div>
            </form>             
          </div>
          <p></p>
          <p></p>
          <p></p>
        </div>
      </div>
    </div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>
<script src="js/login.js"></script>


</body>

</html>