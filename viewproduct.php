<?php   
 session_start();  
 require 'connect.php'; 
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

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">DormStop</a>
        </div>
    </nav>
    <h2 align="center" style="padding: 30px">Các sản phẩm hiện đang có tại DormStop</h2> 
    <div class="container">
    <?php  
        $query = "SELECT * FROM product ORDER BY id ASC";  
        $result = mysqli_query($connect, $query);  
        if(mysqli_num_rows($result) > 0)  {  
         while($row = mysqli_fetch_array($result))  
         {  
    ?> 
    <div>  
         <form method="post" action="viewcart.php?action=add&id=<?php echo $row["id"]; ?>">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="<?php echo $row["imgurl"]; ?>">
                <div class="card-body">
                  <h3 align="center" class="card-title">
                    <a><?php echo $row["name"]; ?></a>
                  </h3>
                  <h5 align="center" style="font-size: 14pt"><?php echo $row["price"]; ?>Đ</h5>
                    <input class="text-center" type="number" name="quantity" class="form-control" value="1" />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                    <input id="atcart" type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart" />
                  <p class="card-text"><?php echo $row["description"]; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
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