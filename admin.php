<?php   
 session_start();

 //Connect to database  
 require 'connect.php';

?>  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DormStop - Admin page</title>
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
            <!-- Check cookies for showing login menu -->
                <?php if(isset($_COOKIE['username'])): ?> 
                  <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" href="#">

                      <?php
                        echo $_COOKIE['username'];  
                      ?>

                    </a>
                    <ul class="dropdown-menu dropdown-content">

                      <!-- Check cookies for showing corresponding logout and login -->
                      <?php if(isset($_COOKIE['username'])): ?> 
                          <li><a href="#" id="log_out">Đăng xuất</a></li>
                      <?php else: ?>
                          <li><a class="portfolio-link" data-toggle="modal" href="#modalLogin">Đăng nhập</a></li>
                      <?php endif; ?>
                      <!--End check cookies -->
                    </ul>
                  </li>
                <?php endif; ?>
            <!--End check cookies -->
          </ul>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Admin page information -->
    <div class="container" style="margin-top: 150px">
    <div style="clear:both"></div>  
    <br />
      <!-- Require ADMIN LOGGED IN -->
        <?php if(isset($_COOKIE['username'])): ?>
          <h3 align="center">Các sản phẩm hiện có trong kho</h3>  
          <div class="table-responsive">  
            <table class="table table-hover">  
              <tr>  
                   <th class="text-center" width="15%" style="font-size: 14pt;">Mã sản phẩm</th>  
                   <th class="text-center" width="25%" style="font-size: 14pt;">Tên sản phẩm</th>  
                   <th class="text-center" width="10%" style="font-size: 14pt;">Giá</th>  
                   <th class="text-center" width="10%" style="font-size: 14pt;">Số lượng</th>
                   <th class="text-center" width="20%" style="font-size: 14pt;">Hình ảnh</th>  
                   <th class="text-center" width="20%" style="font-size: 14pt;">Chỉnh sửa</th>  
              </tr>

              <!-- Get order information form productview page -->  
              <?php                   
                //Query to get information
                $query = "SELECT * FROM product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0)  {
                //fetch every info in the database  
                while($row = mysqli_fetch_array($result))  
              {?>  
              <tr>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["code"]; ?></td>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["name"]; ?></td>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["price"]; ?></td>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["quantity"]; ?></td>
               <td style="font-size: 13pt;" align="center"><?php echo $row["imgurl"]; ?></td>   
               <td style="font-size: 13pt;" align="center">
                <a class="btn btn-danger" href="viewcart.php?action=delete&id=<?php echo $row["id"]; ?>">Xóa</span></a>
              </td>  
              </tr>
              <?php }  
              } ?>  
            </table>
          </div> 
        
        <!-- Show LOGIN FORM IF DIDNT LOGIN YET -->
        <?php else: ?>
          <div class="container">
            <form class="form-signin" method="POST" action=login_admin.php?do=login>
              <h2 class="form-signin-heading text-center">Vui lòng đăng nhập</h2>
              <div class="col-md-6" style="margin: 0px auto;">
                <label for="inputEmail" class="sr-only">Tên tài khoản</label>
                <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Tên tài khoản" required autofocus>
                <label for="inputPassword" class="sr-only">Mật khẩu</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me" checked="checked"> Nhớ mật khẩu
                  </label>
                </div>
                <button name="login" class="btn btn-lg btn-primary" type="submit">Đăng nhập</button>
              </div>
            </form>
          </div>
        <?php endif; ?>      
    </div>
    

<!-- End Admin information -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>
<script src="js/logout_admin.js"></script>


</body>

</html>