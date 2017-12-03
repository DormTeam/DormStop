<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "dormstop");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
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
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    
    <link rel="stylesheet" href="css/dropdown-btn.css">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="css/cart.css">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">DormStop</a>
        </div>
    </nav>

    <div class="container">
    <div style="clear:both"></div>  
    <br />  
    <h3>Thông tin đặt hàng</h3>  
    <div class="table-responsive">  
         <table class="table table-bordered">  
              <tr>  
                   <th width="40%">Tên sản phẩm</th>  
                   <th width="10%">Số lượng</th>  
                   <th width="20%">Giá</th>  
                   <th width="15%">Tổng tiền</th>  
                   <th width="5%">Chỉnh sửa</th>  
              </tr>  
              <?php   
              if(!empty($_SESSION["shopping_cart"]))  
              {  
                   $total = 0;  
                   foreach($_SESSION["shopping_cart"] as $keys => $values)  
                   {  
              ?>  
              <tr>  
                   <td><?php echo $values["item_name"]; ?></td>  
                   <td><?php echo $values["item_quantity"]; ?></td>  
                   <td><?php echo $values["item_price"]; ?>Đ</td>  
                   <td><?php echo number_format($values["item_quantity"] * $values["item_price"]); ?>Đ</td>  
                   <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
              </tr>  
              <?php  
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                   }  
              ?>  
              <tr>  
                   <td colspan="3" align="right">Total</td>  
                   <td align="right"><?php echo number_format($total); ?>Đ</td>  
                   <td></td>  
              </tr>  
              <?php  
              }  
              ?>  
         </table>  
        </div>

	<?php  
        $query = "SELECT * FROM product ORDER BY id ASC";  
        $result = mysqli_query($connect, $query);  
        if(mysqli_num_rows($result) > 0)  {  
         while($row = mysqli_fetch_array($result))  
         {  
    ?>  
    <div class="col-md-4">  
         <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">  
              <div style="background-color:#f1f1f1; border-radius:15px; padding:10px;" align="center">  
                   <img src="<?php echo $row["imgurl"]; ?>" class="img-responsive"/><br />  
                   <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                   <h4 class="text-danger"><?php echo $row["price"]; ?>Đ</h4>  
                   <input type="text" name="quantity" class="form-control" value="1" />  
                   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
              </div>  
              <p></p>
         </form>  
    </div>  
    <?php  
         }  
    }  
    ?>    
    </div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>


</body>

</html>