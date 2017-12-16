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


    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/dropdown-btn.css">
    <link rel="stylesheet" href="css/button.css">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">    

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DormStop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse menu-font" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#introduction">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Khuyến mãi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#news-id">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Liên hệ</a>
            </li>

            <!-- Customer dropdown section -->
            <li class="nav-item dropdown">
            	<a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" href="#">

              <!-- Check cookies for showing username instead of 'Khách hàng' -->
              <?php
                if(isset($_COOKIE['username']))
                  echo $_COOKIE['username'];
                else
                  echo 'Khách hàng';
              ?></a>
              <!-- End check cookies -->

            	<ul class="dropdown-menu dropdown-content">

                <!-- Check cookies for showing corresponding logout and login -->
                <?php if(isset($_COOKIE['username'])): ?> 
                    <li><a href="#" id="log_out">Đăng xuất</a></li>
                <?php else: ?>
                    <li><a class="portfolio-link" data-toggle="modal" href="#modalLogin">Đăng nhập</a></li>
                <?php endif; ?>
                <!--End check cookies -->

            		<li><a class="portfolio-link" data-toggle="modal" href="#modalRegister">Tạo tài khoản</a></li>
            		<li><a href="viewcart.php" target="_blank">Giỏ hàng</a></li>
            	</ul>
            </li>
            <!-- End Customer section -->

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navigation -->


    <!-- Header -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/carousel/1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="carousel-font">Đặt hàng chỉ bằng vài cú click chuột</h2>
              <p style="font-size: 120%;"> Với giao diện đơn giản dễ sử dụng, chỉ cần vài cú click chuột để tìm ra món ăn yêu thích của bạn</p> 
              <a class="btn btn-xl js-scroll-trigger" href="#portfolio">Đặt hàng ngay</a>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/carousel/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="carousel-font">Giao hàng tiện lợi nhanh chóng</h2>
              <p style="font-size: 120%";>Đơn hàng sẽ xuất hiện trước phòng bạn chỉ trong vòng 20 phút với đội ngũ shipper chuyên nghiệp của chúng tôi</p>
              <a class="btn btn-xl js-scroll-trigger" href="#portfolio">Đặt hàng ngay</a>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/carousel/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="carousel-font">Đa dạng các mặt hàng sản phẩm</h2>
              <p style="font-size: 120%;">Chúng tôi cung cấp đa dạng các mặt hàng sản phẩm đáp ứng mọi khẩu vị của bạn</p>
              <a class="btn btn-xl js-scroll-trigger" href="#portfolio">Đặt hàng ngay</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!-- End Header -->


    <!-- Introduction Section -->
    <section id="introduction" style="padding-bottom: 30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">DormStop</h2>
            <h3 class="section-subheading text-muted">We deal with your apetite</h3>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
          	<i class="fa fa-4x fa-truck text-primary sr-icons" style="margin: 25px;"></i>
            <div class="service-box">              
              <h3 class="p-configure">Giao hàng nhanh chóng</h3>
              <p class="text-muted">Với đội ngũ nhân viên giao hàng chuyên nghiệp, đơn hàng của bạn sẽ xuất hiện chỉ trong vòng 20 phút kể từ khi đặt hàng</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
          	<i class="fa fa-4x fa-check-circle text-primary sr-icons" style="margin: 25px;"></i>
            <div class="service-box">              
              <h3 class="p-configure">Chất lượng đảm bảo</h3>
              <p class="text-muted">Các sản phẩm của chúng tôi được cung cấp bởi các đơn vị uy tín, đảm bảo chất lượng và mùi vị tuyệt vời</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
          	<i class="fa fa-4x fa-usd text-primary sr-icons" style="margin: 25px;"></i>             
            <div class="service-box">              
              <h3 class="p-configure">Giá cả hợp lý</h3>
              <p class="section-subheading text-muted">Thấu hiểu với túi tiền hạn hẹp của sinh viên, chúng tôi cung cấp những sản phẩm có chất lượng đảm bảo với giá cả hợp lý với túi tiền của sinh viên</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Introduction Section -->


    <!-- Products Grid Section-->
    <section class="bg-light" id="portfolio" style="padding-top: 100px; padding-bottom: 0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Sản phẩm nổi bật</h2>
            <h3 class="section-subheading text-muted">Chọn ngay, ship liền tay!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/KhoGa.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Khô gà lá chanh</h4>
              <p class="text-muted">25k/Bịch/100gr</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/rongbien.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Rong biển cháy tỏi</h4>
              <p class="text-muted">26k/Bịch</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/xoailac.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Xoài lắc</h4>
              <p class="text-muted">10k/Phần</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/khobo.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Khô bò</h4>
              <p class="text-muted">70k/gói/100gr</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/banhtrangtron.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Bánh tráng trộn</h4>
              <p class="text-muted">12k/phần</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-heart fa-3x"></i>
                  <p>Xem ngay!</p>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/banhflan.jpg" alt="">
            </a>
            <p></p>
            <div class="portfolio-caption">
              <h4>Bánh Flan</h4>
              <p class="text-muted">12k/phần</p>
            </div>
          </div>
          <div class="col-lg-12">
      <div class="text-center">
        <a href="viewproduct.php" class="btn btn-xl" role="button">Tất cả sản phẩm >></a>
      </div>
    </section>
    <!-- End Products Grid Section -->


    <!-- Discount Section-->
    <section id="about" style="padding-bottom: 0">
    	<div class="col-lg-12 text-center">
            <h2 class="section-heading">Đang khuyến mãi</h2>
            <h3 class="section-subheading text-muted">Khám phá ngay!</h3>
      </div>
    	<div id="carousel-discount" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-discount" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-discount" data-slide-to="1"></li>
          <li data-target="#carousel-discount" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item carousel-item-custom active">
          	<img src="img/discount/discount4.jpg" width="100%" height="100%">
            <div class="carousel-caption d-none d-md-block">
            	<!--
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p> -->
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item carousel-item-custom">
          	<img src="img/discount/discount2.jpg" width="100%" height="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item carousel-item-custom">
          	<img src="img/discount/discount3.jpg" width="100%" height="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-discount" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-discount" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    	
    </section>
    <!-- End Discount Section -->
    

    <!-- News Section-->
    <section id="news-id" class="news-id bg-light">
        <div class="container">
            <!-- Title & Description -->
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Tin Tức Nổi Bật</h2>
              <h3 class="section-subheading text-muted">Các công thức nấu ăn đã thất truyền hàng thế kỷ</h3>
            </div>

            <div class="row">
                <!-- news Box 1 Begins -->
                <div class="col-md-6 animated" data-animation="fadeInUp" data-animation-delay="500">
                    <!-- news Box Inner -->
                    <div class="row news-id-box">
                        <!-- Image -->
                        <div class="col-md-5 news-image">
                            <figure>
                                <img src="img/news/1.jpg" width="220" height="340" alt="" />
                            </figure>
                        </div>
                        <!-- news Content -->
                        <div class="col-md-7 news-content">
                            <h5>Cách làm bánh Flan</h5>
                            <p class="text-muted">08/10/2017</p>
                            <p style="text-align: justify;">Bánh flan có công thức làm đơn giản nhưng cách làm không dễ như một số loại bánh khác. Phải làm sao để bánh mềm, không bị nứt, không lỗ chỗ. Bánh có độ béo, thơm và ngọt vừa phải. Cần có sự khéo léo nhất định cộng với một số bí quyết...</p>
                            <a class="portfolio-link readmore-btn" style="float: right;" data-toggle="modal" href="#portfolioModalN-1">Đọc tiếp</a>
                        </div>
                    </div>
                    <!-- news Box Inner Ends -->
                </div>
                <!-- news Box 1 Ends -->

                <!-- news Box 2 Begins -->
                <div class="col-md-6 animated" data-animation="fadeInUp" data-animation-delay="600">
                    <!-- news Box Inner Begins -->
                    <div class="row news-id-box">
                        <!-- Image -->
                        <div class="col-md-5 news-image">
                            <figure>
                                <img src="img/news/2.jpg" width="220" height="340" alt="" />
                            </figure>
                        </div>
                        <!-- news Content -->
                        <div class="col-md-7 news-content">
                            <h5>Góc an toàn thực phẩm</h5>
                            <h6>Kỳ 1: Những điều cần biết</h6>
                            <p class="text-muted">08/10/2017</p>
                            <p>Vệ sinh an toàn thực phẩm là một vấn đề đã có từ lâu, nhưng không bao giờ hết nóng. Đặc biệt là đối với người trẻ, thanh thiếu niên thì vấn đề này càng đáng quan ngại hơn.</li>
                            </p>
                            <a class="portfolio-link readmore-btn" style="float: right;" data-toggle="modal" href="#portfolioModalN-2">Đọc tiếp</a>
                        </div>
                    </div>
                    <!-- news Box Inner Ends -->
                </div>
                <!-- news Box 2 Ends -->

                <!-- news Box 3 Begins -->
                <div class="col-md-6 animated" data-animation="fadeInUp" data-animation-delay="700">
                    <!-- news Box Inner Begins -->
                    <div class="row news-id-box">
                        <!-- Image -->
                        <div class="col-md-5 news-image">
                            <figure>
                                <img src="img/news/3.jpg" width="220" height="340" alt="" />
                            </figure>
                        </div>
                        <!-- news Content -->
                        <div class="col-md-7 news-content">
                            <h5>Ẩm thực đường phố vòng quanh thế giới</h5>
                            <p class="text-muted">06/09/2016</p>
                            <p style="text-align: justify;">Tại Việt Nam, đồ ăn đường phố là một thế giới vô cùng rộng lớn và ở mỗi miền của đất nước lại có những đặc trưng riêng. Nếu như ở Hà Nội là nem chua rán, nộm bò khô, bánh đa kê...</p>
                            <a class="portfolio-link readmore-btn" style="float: right;" data-toggle="modal" href="#portfolioModalN-3">Đọc tiếp</a>
                        </div>
                    </div>
                    <!-- news Box Inner Ends -->
                </div>
                <!-- news Box 3 Ends -->

                <!-- news Box 4 Begins -->
                <div class="col-md-6 animated" data-animation="fadeInUp" data-animation-delay="800">
                    <!-- news Box Inner Begins -->
                    <div class="row news-id-box">
                        <!-- Image -->
                        <div class="col-md-5 news-image">
                            <figure>
                                <img src="img/news/4.jpg" width="220" height="340" alt="" />
                            </figure>
                        </div>
                        <!-- news Content -->
                        <div class="col-md-7 news-content">
                            <h5>10 lợi ích của việc ăn sáng</h5>
                            <p class="text-muted">09/06/2017</p>
                            <p style="text-align: justify;">Ai cũng biết bữa sáng là rất quan trọng và không nên bỏ qua, nhưng ít ai biết vì sao nó lại quan trọng với sức khỏe như vậy. Dưới đây là 10 lợi ích của việc ăn sáng bạn nên biết.</p>
                            <a class="portfolio-link readmore-btn" style="float: right;" data-toggle="modal" href="#portfolioModalN-4">Đọc tiếp</a>
                        </div>
                    </div>
                    <!-- news Box Inner Ends -->
                </div>
                <!-- news Box 4 Ends -->
            </div>
            <!-- news Row Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- End News Section -->
    

    <!-- Contact Section-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Liên hệ với chúng tôi</h2>
            <h3 class="section-subheading text-muted">Hãy đóng góp ý kiến để chúng tôi có thể phục vụ bạn tốt hơn</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">

            <!-- POST method to contact.php for sending message from customer to server -->
            <!-- POST every names attribute of input tag inside the form to process data-->
            <form method="POST" action="contact.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="cname" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="cemail" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="cphone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="cmessage" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-xl" type="submit" name="contact">Gửi thông điệp</button>
                </div>
              </div>
            </form>
            <!-- End POST method -->

          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section-->


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; DormStop 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->


    <!-- Portfolio Modals For Products View - 1 Modal for 1 product -->
    <!-- Modal 1 -->
    <div id="portfolioModal1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Khô Gà lá chanh</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/Khoga-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Khô gà lá chanh được làm từ những miếng ức gà đầy nạc, ướp đẫm với các loại gia vị thơm ngon cùng lá chanh và ớt sấy khô.Ăn vào sẽ cho cảm giác mằn mặn, ngọt thịt của ức gà.Vị thơm lừng của lá chanh và vị cay nồng của ớt.Rất thích hợp để làm món khai vị buổi tiệc hay những bữa đi chơi xa cùng bạn bè, ngoài ra còn có thể dùng để ăn vặt hằng ngày mà không lo tăng cân.Hãy thử ngay đi còn chần chờ gì nữa!</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-001</li>
              <p class="item-news">25.000đ/gói/100gr</p>
            </ul>
          </div>
          <div class="modal-footer">
              <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div id="portfolioModal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Rong biển cháy tỏi</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/rongbien-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Rong biển cháy tỏi là một món ăn vặt siêu hấp dẫn được làm từ các lát rong biển khô thơm ngon trộn chung với muối tôm Tây Ninh, ớt khô và tỏi rang giòn tạo nên hương vị đặc trưng thơm ngon không thể cưỡng lại.Do nguyên liệu chính là rong biển tự nhiên nên các bạn hoàn toàn có thể ăn mà không lo tăng cân hay ảnh hưởng xấu đến sức khoẻ.Ngoài dùng để ăn vặt, rong biển cháy tỏi hoàn toàn có thể dùng để ăn cơm, ăn chay hay dùng trong các bàn nhậu đều tuyệt vời.Còn chần chờ gì nữa mà không đặt ngay một phần đi nào.</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-002</li>
              <p class="item-news">26.000đ/gói</p>
            </ul>
          </div>
          <div class="modal-footer">
          	  <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div id="portfolioModal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Xoài lắc</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/xoailac-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Xoài lắc là một món ăn vặt đang nổi lên của giới trẻ Sài Gòn và làm mưa làm gió trên các con đường lớn đến những ngõ hẻm chật hẹp.Với vị chua chua giòn giòn của những trái xoài keo cùng vị cay cay mặn mặn lại thêm 1 chút ngọt của muối ớt và đường, món ăn vặt này có thể kích thích vị giác của bất kỳ ai kể cả những người khó tính nhất.Bậy giờ bạn không cần phải đi thật xa vào trung tâm thành phố để thưởng thức món xoài lắc này, chỉ cần vài cú click chuột và một phần xoài lắc ngon mê ly sẽ được đưa đến ngay tận phòng của bạn.Hãy nhanh tay đặt hàng đi nào.</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-003</li>
              <p class="item-news">10.000đ/phần</p>
            </ul>
          </div>
          <div class="modal-footer">
          	  <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div id="portfolioModal4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Khô bò</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/khobo-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Khô bò là một trong những món ăn vặt phổ biến và ngon nhất Việt Nam.Từng con bò khoẻ mạnh được tuyển chọn và chỉ lấy phần thịt săn chắc ở bắp đùi bò để cho ra những miếng khô bò vừa dai vừa mềm.Thịt bò sau đó được tẩm ướp với các gia vị như đường thốt nốt, dầu hào cùng ớt hoặc tiêu để tạo vị mặn, ngọt và cay cho miếng khô bò.Để tạo mùi thơm đặc trưng cho miếng khô bò, cần dùng rất nhiều gia vị tạo mùi như ngũ vị hương, quế, sả, hồi...Cần có một công thức pha chế gia vị đặc biệt để tạo nên mùi hương thơm ngon đậm đà đặc trưng của món khô bò.Ngay bây giờ bạn có thể thưởng thức những miếng khô bò thơm ngon chất lượng và bảo đảm sức khoẻ được cung cấp bởi DormStop tại ngay KTX DHQG chỉ với vài thao tác đơn giản trên website.Hãy nhanh tay chọn cho mình 1 phần khô bò DormStop đi nào.</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-004</li>
              <p class="item-news">70.000đ/gói/100gr</p>
            </ul>
          </div>
          <div class="modal-footer">
          	  <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div id="portfolioModal5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Bánh tráng trộn</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/banhtrangtron-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Bánh tráng trộn là một món ăn vặt vừa ngon vừa rẻ rất được học sinh và sinh viên yêu thích.Vị dai dai của bánh tráng, vị chua của xoài, vị thơm thơm bùi bùi của hành phi và tôm khô, vị mặn đậm đà của bò khô cùng mùi thơm đặc trưng của rau răm điểm xuyến thêm vài trái trứng cút, tất cả hoà quyện vào nhau để tạo nên một thứ trên cả một món ăn vặt.Đó là một tác phẩm nghệ thuật đường phố chỉ với những nguyên liệu đơn giản.Nếu bạn muốn sở hữu tác phẩm nghệ thuật này trong căn phòng của bạn, hãy liên hệ với chúng tôi qua nút đặt hàng ngay phía dưới hoặc qua số điện thoại.Chúng tôi cam kết bạn sẽ được thoả mãn hoàn toàn cả về vị giác lẫn thị giác.</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-005</li>
              <p class="item-news">12.000đ/phần</p>
            </ul>
          </div>
          <div class="modal-footer">
          	  <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div id="portfolioModal6" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Bánh Flan</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/banhflan-1.jpg" alt="">
            <p></p>
            <p class="p-configure">Bánh Flan là một loại bánh xuất phát từ Châu Âu được du nhập vào Việt Nam và dần dần trở nên phổ biến.Nguyên liệu làm bánh khá đơn giản, chỉ cần lòng đỏ trứng gà, sữa tươi và nước caramel và có thể thêm 1 chút cafe.Bánh Flan có vị ngọt và rất mềm mịn, ăn chung với nước caramel có vị đắng sẽ tạo nên một hương vị hoà quyện đặc biệt.Món này thích hợp khi dùng lạnh và làm món tráng miệng hoặc có thể làm món ăn vặt rất ngon và hợp túi tiền.Nếu bạn đang muốn thưởng thức món bánh ngon miệng này, hãy đặt hàng ngay từ DormStop để trải nghiệm món bánh Flan ngon nhất mà bạn từng biết đến.</p>
            <ul class="list-inline">
              <li>Mã sản phẩm: LTN2K-006</li>
              <p class="item-news">12.000đ/phần</p>
            </ul>
          </div>
          <div class="modal-footer">
          	  <a href="viewproduct.php" class="btn btn-primary" style="width: 100%">Đặt hàng ngay</a>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>
    <!-- End Portfolio Modals For Products View -->

    
    <!-- Portfolio Modals For News Section -->
    <!-- Modal News -1 -->
    <div id="portfolioModalN-1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Cách làm bánh Flan tuyệt ngon</h3>
            <p></p>
            <img class="img-fluid img-responsive" src="img/portfolio/banhflan-1.jpg" alt="">
            <p></p>
            <h4 class="p-configure" style="text-transform: none">Chuẩn bị nguyên liệu</h4>
            <p class="p-configure">13 quả trứng gà ta (dùng trừng gà ta vừa an toàn, béo hơn, màu vàng đẹp hơn, nếu không có thì dùng trứng công nghiệp cũng không sao) bỏ lòng trắng chỉ lấy lòng đỏ</p>
            <p class="p-configure">3 bịch sữa tươi không đường (tương đương 660 ml).</p>
            <p class="p-configure">Nửa chén sữa đặc.</p>
            <p class="p-configure">5 muỗng canh đường</p>
            <p class="p-configure">2-3 gói cà phê (hoặc nếu bạn thích nguyên chất pha cà phê bột và sữa đặc thì vị sẽ đậm và đắng hơn)</p>
            <img class="img-pos" src="img/News/N1-1.jpg">
            <p class="p-configure"><i>Nên dùng trứng gà ta sẽ cho bánh cho màu vàng đẹp hơn, vị ngon béo hơn.</i></p>
            <h4 style="text-transform: none">Cách làm</h4>
            <p class="p-configure">Đầu tiên bạn cho đường lên chảo, bật lửa nhỏ nhất cho đường từ từ chảy ra. Sau khi chuyển qua dạng nước và có màu vàng thì bạn khuấy liên tục, thấy đậm màu thì cho thêm 2 muỗng canh nước và tiếp tục khuấy.</p>
            <p class="p-configure">Khi caramen sệt sệt, nổi bong bóng lớn thì tắt bếp. Bạn tráng đều đáy khuôn hộp làm bánh một lớp caramen vừa phải (tầm 1-1,5 muỗng canh).</p>
            <img class="img-pos" src="img/news/N1-2.jpg">
            <p class="p-configure">Trong thời gian đợi caramen nguội, bạn cho 3 bịch sữa tươi cùng nửa chén sữa đặc vào khuấy đều nhẹ tay, không đánh mạnh tránh sủi bọt, nếm lại, nếu muốn thêm đường theo sở thích thì bạn cho thêm tùy ý.</p>
            <p class="p-configure">Cho sữa lên bếp nấu với lửa vừa, khi sữa bắt đầu sôi tắt bếp, không để sữa sôi lớn.</p>
            <p class="p-configure">Trong thời gian chờ sữa sôi, tách 7 lòng đỏ trứng gà (bỏ lòng trắng) và để nguyên 6 quả còn lại cho vào tô. Đánh đều nhẹ tay, đánh một chiều không để trứng nổi bọt, vì nếu bạn đánh mạnh, trứng nổi bọt sẽ bị rỗ trứng. Khi trứng tan đều, bạn lọc qua rây 2-3 lần cho mịn và loại bỏ phần lòng trắng lợn cợn.</p>
            <p class="p-configure"><i>Bước quan trọng</i></p>
            <p class="p-configure">- Sau khi tất cả giai đoạn trên đã xong, bạn vừa đổ sữa vào trứng, vừa khuấy nhẹ theo một chiều (không được đổ trứng vào sữa, vì làm vậy trứng sẽ chín và vón cục làm bánh bị rỗ).</p>
            <p class="p-configure">- Lọc lại hỗn hợp trên một lần nữa.</p>
            <p class="p-configure">- Lấy các hộp đã tráng sẵn caramen, cho hỗn hợp trên vào hộp, lấy màng bọc thực phẩm bọc qua miệng hộp trước khi đậy nắp, để tránh hơi nước rớt xuống mặt bánh làm bánh bị rỗ, rồi đậy nắp hộp lên sau cùng (Nếu không có màng bọc thực phẩm, bạn có thể đậy nắp vào và lót một miếng khăn có thể hút nước mới đậy nắp nồi).</p>
            <p class="p-configure">Có thể dùng chảo hoặc nồi để hấp bánh, cho hộp bánh trực tiếp vào nồi, bạn đặt một cái đĩa nặng lên để giữ bánh (để khi nước sôi bánh không bị chạy lung tung) cho nước trực tiếp vào nồi khoảng 1/2 so với hộp bánh để khi sôi nước không tràn được vào hũ.Sau đó chờ khoảng 7 - 10p cho bánh chín là xong</p>
            <p></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal News -2 -->
    <div id="portfolioModalN-2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Góc an toàn thực phẩm</h3>
            <h3 class="title-items">Kỳ 1: Những điều cần biết</h3>
            <p></p>
            <p class="p-configure">Số nạn nhân ngộ độc thực phẩm mỗi năm không ngừng tăng khiến Việt Nam trở thành điểm nóng về vệ sinh an toàn thực phẩm với gần <b>500 ca ngộ độc/năm.</b></p>
            <img class="img-pos" src="img/news/N2-1.jpg">
            <h4 class="p-configure" style="text-transform: none">7.000-10.000 người bị ảnh hưởng bởi ngộ độc thực phẩm mỗi năm</h4>
            <p class="p-configure">Thống kê của Cục An toàn thực phẩm (Bộ Y tế) đưa ra những con số giật mình về ngộ độc thực phẩm ở Việt Nam mỗi năm. Trong đó:</p>
            <p class="p-configure">- 250 – 500 ca ngộ độc thực phẩm xảy ra mỗi năm.</p>
            <p class="p-configure">- Ảnh hưởng đến 7.000 – 10.000 người.</p>
            <p class="p-configure">- Số người chết vì ngộ độc thực phẩm từ 100 – 200 người/năm.</p>
            <p class="p-configure">Mặc dù vấn đề an toàn thực phẩm  liên tục được cập nhật trên các trang báo mạng và chương trình thời sự trong ngày, tuy nhiên tình trạng thực phẩm bẩn vẫn không ngừng tăng. Những thống kê trên khiến Việt Nam trở thành quốc gia thuộc vùng nóng về vấn đề an toàn thực phẩm khi các vấn đề về thực phẩm ngày càng đe dọa đến tính mạng và sức khỏe con người.</p>
            <p class="p-configure">Các chuyên gia nhận định nguyên nhân dẫn đến tình trạng báo động về vệ sinh an toàn thực phẩm ở Việt Nam được xuất phát từ các yếu tố sau:</p>
            <p class="p-configure">- 33% do thực phẩm bị nhiễm vi sinh vật.</p>
            <p class="p-configure">- 27% thực phẩm bị ảnh hưởng bởi ô nhiễm hóa chất.</p>
            <p class="p-configure">- 37,5% thực phẩm chứa chất độc tự nhiên.</p>
            <p class="p-configure">Các yếu tố khác bao gồm: chất phụ gia, chất tạo màu trong thực phẩm, thuốc trừ sâu hàm lượng cao, các thành phần hóa học có dư lượng độc tố cao…</p>
            <img class="img-pos" src="img/news/N2-2.jpg">
            <p></p>
            <h4 class="p-configure" style="text-transform: none">Mối nguy hại về vệ sinh an toàn thực phẩm</h4>
            <p class="p-configure">An toàn thực phẩm có mối quan hệ mật thiết với sức khỏe con người. Nguồn thực phẩm không được đảm bảo là một trong các nguyên nhân chính gây ra nhiều căn bệnh nguy hiểm với sức khỏe con người.</p>
            <p class="p-configure">Theo thống kê của Bộ Y tế, mỗi năm có khoảng 150.000 ca mắc bệnh ung thư mới, gây tử vong cho 75.000 người, trong đó nguyên nhân chính là do nguồn thực phẩm “bẩn”. Vấn đề kiểm soát vệ sinh an toàn thực phẩm càng trở nên khó khăn hơn khi phải đối mặt với các thách thức như:</p>
            <p class="p-configure">- Sự quản lý ngành công nghiệp thực phẩm và vệ sinh thực phẩm trên thị trường còn nhiều bất cập.</p>
            <p class="p-configure">- Nguồn nguyên liệu thực phẩm trái phép tràn lan trên thị trường.</p>
            <p class="p-configure">- Kết quả kiểm tra chất lượng thực phẩm có sự khác biệt.</p>
            <p class="p-configure">- Nhà sản xuất  gặp khó khăn, người tiêu dùng lo lắng khi ranh giới thật – giả, sạch – bẩn, an toàn – nguy hại…trở nên mong manh hơn bao giờ hết.</p>
            <p class="p-configure">Theo các chuyên gia dinh dưỡng, quy trình vệ sinh an toàn thực phẩm có thể bị ảnh hưởng từ khâu nguyên liệu đến chế biến, tiêu thụ và bảo quản. Các vấn đề về thực phẩm kém chất lượng không chỉ ảnh hưởng nghiêm trọng đến sức khỏe và niềm tin của người tiêu dùng, mà còn tiềm ẩn nguy cơ gây ra sự mất cân bằng trong cơ cấu nông nghiệp, ngoài liên quan đến giá trị kinh tế, việc sản xuất thực phẩm bẩn còn suy giảm nghiêm trọng những giá trị nhân văn..</p>
            <img class="img-pos" src="img/news/N2-3.jpg">
            <h4 class="p-configure" style="text-transform: none">Tăng cường công tác vệ sinh an toàn thực phẩm</h4>
            <p class="p-configure">Để bảo vệ sức khỏe của chính bản thân mình và gia đình, tại Hội thảo “công nghệ xanh cho chuỗi thực phẩm sạch”, các chuyên gia đã có những lời khuyên về vệ sinh an toàn thực phẩm:</p>
            <p class="p-configure">- Người tiêu dùng trước khi lựa chọn sản phẩm cần phân biệt thực phẩm, nông sản an toàn và thực phẩm, nông sản có chứa độc tố (sử dụng thuốc ép chín, tác hại của chất phụ gia, ngâm hóa chất…). Có thể phân biệt được bằng cảm quan, màu sắc và dựa vào thông tin sản phẩm.</p>
            <p class="p-configure">- Phát huy các phương pháp tự nhiên, dân gian trong việc nuôi, trồng nguồn nguyên liệu và chế biến thực phẩm (dùng đất đèn, ủ trấu, lá xoan, dùng phân hữu cơ…)</p>
            <p class="p-configure">- Áp dụng công nghệ mới để bảo quản trái cây không cần dùng chất bảo quản (xử lý nhiệt, dùng oxy, ủ khí ethylene, yếm khí…)</p>
            <p class="p-configure">- Thiết chặt các công cụ quản lý vệ sinh an toàn thực phẩm  và truyền thông thực phẩm.</p>
            <p class="p-configure">- Trong thời gian tới, các cơ quan quản lý sẽ sử dụng các công nghệ thiết bị hiện đại để phát hiện thực phẩm không an toàn chính xác như CC/MS, LC/MS/MS, GS/MS/MS…</p>
            <p class="p-configure">- Đẩy mạnh kế hoạch xây dựng chuỗi thực phẩm sạch để người tiêu dùng chủ động chọn mua thực phẩm an.</p>
            <p class="p-configure">Trước những vấn nạn vệ sinh an toàn thực phẩm ở Việt Nam ngày càng phức tạp, mỗi cá nhân hãy là những người tiêu dùng thông thái trong việc chọn lựa những nguyên liệu đảm bảo cho mỗi bữa ăn gia đình, bảo vệ sức khỏe của cả gia đình.</p>
            <p></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal News -3 -->
    <div id="portfolioModalN-3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">Ẩm thực đường phố vòng quanh thế giới</h3>
            <p></p>
            <img class="img-fluid img-responsiv img-pos" src="img/news/N3.jpg" alt="">
            <p></p>
            <p class="p-configure"><b>Đồ ăn đường phố là thứ vô cùng đặc trưng ở mỗi quốc gia. Qua đó, chúng ta sẽ có được một góc nhìn khác rất thú vị.</b></p>
            <p class="p-configure">Tại Việt Nam, đồ ăn đường phố là một thế giới vô cùng rộng lớn và ở mỗi miền của đất nước lại có những đặc trưng riêng. Nếu như ở Hà Nội là nem chua rán, nộm bò khô, bánh đa kê... thì vào đến Sài Gòn, bạn bắt buộc phải thử súp cua, phá lấu, cơm sườn, mì gõ, bánh tráng trộn... Rồi khi ở Huế ư? Nhớ đừng quên các loại chè cùng một loạt bánh đặc trưng ở nơi đây. Và rất rất nhiều của các vùng khác nữa mà chúng ta không thể thử và khám phá hết.</p>
            <p class="p-configure">Vậy bạn có bao giờ thắc mắc các nước khác thì sao không? Chúng ta cùng tìm hiểu nhé</p>
            <h4 class="p-configure" style="text-transform: none">Hàn Quốc</h4>
            <img class="img-pos" src="img/news/N3-1.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-2.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-3.jpg">
            <p class="p-configure">Buổi tối, những "túp lều" ở ven đường thường là nơi thu hút nhất vì bên trong nghi ngút khói cùng các món ăn hấp dẫn như: bánh gạo, chả cá, các loại bánh...</p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Nhật Bản</h4>
            <img class="img-pos" src="img/news/N3-4.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-5.jpg">
            <p class="p-configure">Tương đồng với Hàn Quốc, ở Nhật Bản cũng là các quán ăn ven đường với nhiều loại đồ nướng hấp dẫn..</p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Malaysia</h4>
            <img class="img-pos" src="img/news/N3-6.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-7.jpg">
            <p class="p-configure">Đồ ăn đường phố ở Malaysia chủ yếu được bán trên các chiếc xe di động với giá rất rẻ. Điều đặc biệt là có những chiếc xe đã được lưu truyền từ đời này qua đời khác. Tại đây, họ bán đầy đủ các loại từ đồ ăn vặt, ăn nhanh đến các món "chắc bụng" hơn như mỳ xào hay các loại bánh đặc trưng của địa phương...</p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Philippines</h4>
            <img class="img-pos" src="img/news/N3-8.jpg">
            <p class="p-configure"><i>Taho là một dạng tào phớ ăn với hạt trân châu, đây là món ăn đường phố rất phổ biến ở Philippines.</i></p>
            <p></p>
            <img class="img-pos" src="img/news/N3-9.jpg">
            <p class="p-configure"><i>Đồ nướng cũng là thứ rất phổ biến và rất phong phú.</i>
            <p></p>
            <img class="img-pos" src="img/news/N3-10.jpg">
            <p class="p-configure"></p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Kolkata - Ấn Độ  </h4>
            <img class="img-pos" src="img/news/N3-11.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-12.jpg">
            <p class="p-configure">Tại Koltaka đồ ăn đường phố không thực sự đảm bảo vệ sinh nhưng nó vẫn có đủ sức mạnh để chinh phục các thực khách. Có thể kể đến một số món ăn phổ biến như: cá chiên giòn, trứng cuốn, Momos (một dạng bánh hấp giống sủi cảo), Bhel Puri. </p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Pháp</h4>
            <img class="img-pos" src="img/news/N3-13.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-14.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-15.jpg">
            <hr>
            <h4 class="p-configure" style="text-transform: none">Istanbul - Thổ Nhĩ Kỳ</h4>
            <img class="img-pos" src="img/news/N3-16.jpg">
            <p class="p-configure"><i>Vẹm sống là thứ đồ ăn rất phổ biến trên đường phố.</i></p>
            <p></p>
            <img class="img-pos" src="img/news/N3-17.jpg">
            <p></p>
            <img class="img-pos" src="img/news/N3-18.jpg">
            <p class="p-configure">Nếu đến với Istanbul mà không thử kebab ở đây thì sẽ thật là thiếu sót. Ngoài ra, còn rất nhiều thứ hấp dẫn khác được bán trên đường phố như: nước lựu, bánh vừng, ngô nướng và vẹm sống...</p>
            <hr>
            <h4 class="p-configure" style="text-transform: none">Brazil</h4>
            <img class="img-pos" src="img/news/N3-19.jpg">
            <p class="p-configure"><i>Acaraje - một món ăn nhẹ gồm đậu và tôm. Đây là món ăn đường phố phổ biến nhất ở bang Bahia.</i></p>
            <p></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal News -4 -->
    <div id="portfolioModalN-4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!--<button type="button" style="margin-left: auto;" class="close" title="Close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>-->
          </div>
          <div class="modal-body">
            <h3 class="title-items">10 lợi ích của việc ăn sáng</h3>
            <p></p>
            <img class="img-fluid img-responsive img-pos" src="img/news/N4.jpg" alt="">
            <p></p>
            <p class="p-configure"><b>Ai cũng biết bữa sáng là rất quan trọng và không nên bỏ qua, nhưng ít ai biết vì sao nó lại quan trọng với sức khỏe như vậy. Dưới đây là 10 lợi ích của việc ăn sáng bạn nên biết.</b></p>
            <p class="p-configure"><b><u>1. Ăn sáng giúp thông minh hơn</b></u></p>
            <p class="p-configure">Tạp chí của Hiệp hội Dinh dưỡng Mỹ đã xem xét 47 nghiên cứu liên quan đến bữa ăn sáng và thấy rằng ăn sáng có thể cải thiện chức năng nhận thức liên quan đến bộ nhớ và khả năng tư duy, tập trung. Nói cách khác, ăn sáng giúp bạn thông minh hơn.</p>
            <p class="p-configure">Việc quá trình trao đổi chất bị giảm sút do không ăn sáng sẽ ảnh hưởng đến hiệu suất não bộ, sự tập trung bị gián đoạn. Do đó, cần phải thường xuyên ăn sáng để cải thiện sự tập trung của cơ thể.</p>
            <p class="p-configure"><b><u>2. Ăn sáng giúp giảm cân</b></u></p>
            <p class="p-configure">Ăn sáng giúp hệ thống trao đổi chất làm việc ổn định. Từ đó giúp cho việc đốt cháy chất béo sẽ tăng lên, góp phần đáng kể làm giảm trọng lượng của cơ thể ở những người béo phì.</p>
            <p class="p-configure">Trong một nghiên cứu được công bố trên tạp chí Obesity, những người coi bữa sáng là bữa ăn lớn nhất trong ngày có khả năng giảm 7,9kg trong vòng 3 tháng.</p>
            <img class="img-pos" src="img/news/N4-1.jpg">
            <p class="p-configure"><i>Theo nghiên cứu, 50% những người bỏ bữa sáng sẽ bị thừa cân.</i></p>
            <p class="p-configure"><b><u>2. Ăn sáng giúp giảm cân</b></u></p>
            <p class="p-configure">Khoa học chứng minh bữa ăn sáng là rất cần thiết nếu bạn muốn cơ thể có đủ năng lượng và sự tỉnh táo cho đến thời gian ăn trưa. Việc bỏ bữa ăn sáng là nguyên nhân khiến cơ thể trở nên mệt mỏi, mất tập trung cả ngày.</p>
            <p class="p-configure"><b><u>4. Ăn sáng giúp tăng cường hoạt động của hệ trao đổi chất</b></u></p>
            <p class="p-configure">Tiến sĩ James Betts, giảng viên cao cấp tại Dinh dưỡng, chuyển hóa và thống kê tại Đại học Bath và Tiến sĩ Enhad Chowdhury, trong cùng trường đại học, đã nghiên cứu về ảnh hưởng của ăn hoặc bỏ bữa sáng. Trong đó, cả hai đều thống nhất rằng, ăn sáng thực sự có tác dụng kích hoạt quá trình trao đổi chất của cơ thể vào buổi sáng, đặc biệt là khi bạn ăn các thực phẩm sinh nhiệt.</p>
            <p class="p-configure">Theo một số nghiên cứu, duy trì bữa ăn sáng đầy đủ cũng là một cách gián tiếp góp phần đáng kể giúp kéo dài tuổi thọ của bạn.</p>
            <p class="p-configure"><b><u>5. Ăn sáng giúp giảm lo lắng</b></u></p>
            <img class="img-pos" src="img/news/N4-2.jpg">
            <p class="p-configure">Khi ăn sáng đầy đủ, bạn sẽ không bị đói và ăn quá nhiều vào bữa trưa. Cảm giác nôn nao cũng hiếm khi xuất hiện.</p>
            <p class="p-configure">Theo một nghiên cứu có tên The Cognitive Effects of Breakfast (Tác dụng của bữa sáng) cho thấy những người không ăn sáng đầy đủ sẽ bị bối rối, lo lắng khi phải đối mặt với một tình huống khó khăn nhiều hơn 89% so với những người ăn sáng. Không những thế, những người ăn sáng còn có thể đối phó và xử lý các rắc rối mà họ gặp trong ngày nhanh hơn 7% so với những người không ăn sáng.</p>
            <p class="p-configure">Tiến sĩ Drew Ramsey, trợ lý giáo sư lâm sàng về tâm thần học tại Bệnh viện New York-Presbyterian, Đại học Columbia (Mỹ) cũng đồng ý rằng có nhiều người bị rối loạn lo âu do bỏ bữa ăn sáng. Ông khuyên mọi người ăn thực phẩm như trứng để giải quyết tình trạng này vì trứng cung cấp nhiều protein và choline – mức độ choline thấp có liên quan đến việc tăng sự lo lắng.</p>
            <p class="p-configure"><b><u>6. Ăn sáng tăng cường khả năng vận động</b></u></p>
            <p class="p-configure">Bữa sáng cung cấp vitamin và dưỡng chất, giúp bạn tràn ngập năng lượng, sẵn sàng cho các hoạt động thể chất và đốt cháy nhiều chất béo dư thừa.</p>
            <p class="p-configure">Giảng viên cao cấp của chế độ dinh dưỡng và chuyển hóa tại Đại học Bath, Tiến sĩ James Betts của Anh Quốc, cho biết rằng những người thường xuyên ăn sángg đốt cháy nhiều calo dù họ chỉ tập bài tập nhẹ trong ngày. Thêm vào đó, họ có xu hướng giữ cơ tốt hơn so với những người nói không với một bữa ăn sáng ngon lành.</p>
            <p class="p-configure"><b><u>7. Ăn sáng giúp ngăn ngừa nhiều loại bệnh</b></u></p>
            <img class="img-pos" src="img/news/N4-3.jpg">
            <p class="p-configure">Ăn sáng giúp ngăn ngừa hạ đường huyết, huyết áp thấp và tiểu đường.</p>
            <p class="p-configure">Theo một nghiên cứu được công bố trên tạp chí American Journal of Clinical Nutrition, bỏ bữa sáng có thể làm tăng nguy cơ tiểu đường ở phụ nữ. Những phụ nữ ăn sáng trung bình dưới 6 buổi/tuần có nguy cơ phát triển bệnh tiểu đường loại 2 cao hơn những phụ nữ ăn sáng mỗi ngày.</p>
            <p class="p-configure"><b><u>8. Ăn sáng cải thiện tâm trạng</b></u></p>
            <p class="p-configure">Lượng dưỡng chất nạp vào buổi sáng sẽ giúp bạn cảm thấy hạnh phúc và vui vẻ hơn.</p>
            <p class="p-configure"><b><u>9. Ăn sáng giúp tăng sức khỏe tim mạch</b></u></p>
            <p class="p-configure">Nhiều nghiên cứu đã chứng minh rằng bữa ăn sáng rất quan trọng đối với sức khỏe tim mạch. Những người duy trì thói quen ăn sáng có mức cholesterol thấp hơn, kích thước vòng eo cũng nhỏ hơn và mức insulin trong máu ổn định hơn.</p>
            <p class="p-configure"><b><u>10. Ăn sáng giúp gia đình gắn bó hơn</b></u></p> 
            <img class="img-pos" src="img/news/N4-4.jpg">
            <p class="p-configure">Ăn sáng cùng nhau là một trong những cách tốt nhất để chia sẻ thời gian với gia đình.</p>
            <p class="p-configure">Ăn sáng cùng nhau là một trong những cách tốt nhất để chia sẻ thời gian với gia đình. Do đó thay vì ngủ dậy trễ và bỏ bữa, hãy tận hưởng khoảnh khắc cả gia đình vui vẻ bên nhau.</p>
            <p></p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Portfolio Modals For News Section -->


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
            
            <!-- POST method to login.php for LOGIN function -->
            <!-- POST every name attribute of the input tag inside the form to process data-->
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
            <!-- End POST method -->

            </div>
              <p></p>
              <p></p>
              <p></p>
            </div>             
        </div>
    </div>
    <!-- End Modal Login -->

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

            <!-- POST method to login.php for REGISTER function -->
            <!-- POST every name attribute of the input tag inside the form to process data-->
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
            <!-- End POST method -->
                         
          </div>
          <p></p>
          <p></p>
          <p></p>
        </div>
      </div>
    </div>
    <!-- End Modal Register -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="js/jquery.sticky.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/dropdown-btn.js"></script>
    
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

  </body>

</html>