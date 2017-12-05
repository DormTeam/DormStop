<?php   
 session_start();  
 require 'connect.php';
 if(isset($_POST["add_to_cart"]))  
 {  
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

    <title>DormStop - Depend on the needs</title>
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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    
    <link rel="stylesheet" href="css/dropdown-btn.css">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">DormStop</a>
        </div>
    </nav>

    <div class="container">
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
                      <button type="button" class="btn btn-success">Thanh toán ngay <span class="glyphicon glyphicon-play"></span></button> 
                  </td>  
              </tr>
              <?php  
              }  
              ?>  
         </table>
          
         <a href="viewproduct.php" class="btn btn-primary" style="float: right;">Tiếp tục mua hàng</a> 
        </div>    
    </div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>


</body>

</html>