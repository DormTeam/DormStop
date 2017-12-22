<?php   
 session_start();

 //Connect to database  
 require 'connect.php';

 //Remove product in database  
 if(isset($_GET["action"]))  
 {  
    if($_GET["action"] == "delete")  
    {
      $id = $_GET["id"];
      //$sql = "DELETE FROM prodcuct WHERE code='$code'";
      mysqli_query($connect, "DELETE FROM product WHERE id = '$id'");
      echo '<script>window.location="admin.php"</script>';
    } 
 }

 //Update product to database
 if(isset($_POST["update"]))
 {
  if(isset($_GET["action"]))  
  {  
    if($_GET["action"] == "update")  
    {
      $id = $_GET["id"];
      $product_name = $_POST["product_name"];
      $price = $_POST["price"];
      $image_url = $_POST["image_url"];

      $sql = "UPDATE product SET name='$product_name', price='$price', imgurl='$image_url' WHERE id='$id'";
      mysqli_query($connect,$sql);

      echo '<script>alert("Chỉnh sửa thành công")</script>';  
      echo '<script>window.location="admin.php"</script>';
    }
  }
} 

 //Add product to database
 if(isset($_POST["add_product"]))
 {
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $image_url = $_POST["image_url"];

    $sql="SELECT * FROM product WHERE name='$product_name'";
    $check=mysqli_query($connect, $sql);
    if(mysqli_num_rows($check)  > 0){
        echo '<script>alert("Sản phẩm đã tồn tại")</script>';  
          echo '<script>window.location="admin.php"</script>';
      }else{
        //Store data to database
        $sql = "INSERT INTO product(
          name,
          price,
          imgurl
          ) VALUES (
          '$product_name',
          '$price',
          '$image_url'
          )";
        //Execute to insert data
        mysqli_query($connect,$sql);

          echo '<script>alert("Nhập kho thành công")</script>';  
          echo '<script>window.location="admin.php"</script>';
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
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" data-toggle="modal" href="#modalAddProduct">Thêm sản phẩm</a>
                  </li>  
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
    <div class="container" style="margin-top: 100px">
    <div style="clear:both"></div>  
    <br />
      <!-- Require ADMIN LOGGED IN -->
        <?php if(isset($_COOKIE['username'])): ?>
          <h3 align="center">Các sản phẩm hiện có trong kho</h3>
          <p></p>  
          <div class="table-responsive">  
            <table class="table table-hover">  
              <tr>  
                   <th class="text-center" width="30%" style="font-size: 14pt;">Tên sản phẩm</th>  
                   <th class="text-center" width="20%" style="font-size: 14pt;">Giá</th>  
                   <th class="text-center" width="30%" style="font-size: 14pt;">Hình ảnh</th>  
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
               <td style="font-size: 13pt;" align="center"><?php echo $row["name"]; ?></td>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["price"]; ?></td>  
               <td style="font-size: 13pt;" align="center"><?php echo $row["imgurl"]; ?></td>   
               <td style="font-size: 13pt;" align="center">
                <a class="btn btn-danger" href="admin.php?action=delete&id=<?php echo $row["id"]; ?>">Xóa</span></a>
                <a class="btn btn-success" href="edit_product.php?action=edit&id=<?php echo $row["id"]; ?>">Sửa</span></a>
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
    <!-- Modal Add product -->
    <div style="overflow-y:auto;" id="modalAddProduct" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="width: 500px; height: 500px">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <p></p>
          </div>
          <div class="modal-body">
            <h3 class="title-items">Thêm sản phẩm</h3>
            <p></p>

            <!-- POST method to login.php for ADD PRODUCT function -->
            <!-- POST every name attribute of the input tag inside the form to process data-->
            <form action='admin.php' method="POST">
              <div class="container">
                <label><b>Tên sản phẩm</b></label>
                <input type="text" placeholder="Nhập tên sản phẩm" name="product_name" required>

                <label><b>Giá</b></label>
                <input type="text" placeholder="Nhập giá" name="price" required>
                
                <label><b>Hình ảnh</b></label>
                <input type="text" placeholder="Nhập URL hình ảnh" name="image_url" required>

                <button type="submit" name="add_product">Thêm sản phẩm</button>
              </div>

              <div class="container">
                <button style="float: right; color: white" type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            <!-- End POST method -->
                         
          </div>
          <p></p>
          <p></p>
          <p></p>
        </div>
      </div>
    </div>
    <!-- End Modal Add product -->

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