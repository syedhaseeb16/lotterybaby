<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LotteryBaby- Buy Lottery Tickets Online</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assets/css/modal-video.min.css">
        <!-- flags css -->
        <link rel="stylesheet" href="assets/css/flags.css">
        <!-- vector map css -->
        <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.3.css">
        <!-- scrollbar -->
        <link rel="stylesheet" href="assets/css/simple-scrollbar.css">
        <!-- stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>

        

        <!-- header begin -->
        <div class="header style-4">
            <div class="container">
                <div class="topbar">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="support-area">
                                <ul>
                                    <li>
                                        <span class="icon"><i class="fas fa-headphones-alt"></i></span>
                                        +1 (319) 259 3261
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-envelope"></i></span>
                                        admin@lotterybaby.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="select-lang">
                                <div id="demo"
                                    data-input-name="country"
                                    data-selected-country="US"
                                    data-scrollable-height="250px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-bar">
                <div class="container">
                    <div class="menubar-relative">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-7">
                                        <div class="logo">
                                            <a href="index.php">
                                                <img src="assets/img/logo.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-xl-none d-lg-none d-block col-5">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 for-lottery">
                                <div class="mainmenu">
                                    <nav class="navbar navbar-expand-lg for-lottery">
    
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav ml-auto">
                                                <li class="nav-item dropdown">
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="index.php">Home</a>
                                                </li>
                                                
                                                    
                                                </li>
                                                <li class="nav-item dropdown for-lottery-btn">
                                                 <a class="nav-link" href="all-lotteries2.php">Lotteries</a>

                                                    
                                                    <div class="all-lotteries d-xl-block d-lg-block d-none">
                                                        


                                                       <?php require_once 'alllot.php';  ?>
                                                    
                                                        
                                                        
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="affiliate.php">Affiliate</a>
                                                </li>
                                                
                                                <li class="nav-item">
                                                    <a class="nav-link" href="faq.php">Faq</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact.php">Contact</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end 

        <!-- breadcrumb begin -->
        <div class="breadcrumb-lotters">
            <div class="banner-shape">
                <img src="assets/img/svg/banner-shape-1.png" alt="">
                <img src="assets/img/svg/banner-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="breadcrumb-content">
						<p><p/>
                            <h2>All Lotteries</h2>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    All Lotteries
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- jackpot begin -->
        <div class="jackpot">
            <div class="container">
                <div class="row">
                    

                    <?php 
                    require_once 'admin/database.php'; 
                    $query = "SELECT * FROM lottery";
                    $result = $conn->query($query); 
                    while($row = $result->fetch_assoc()){




    $date_created_at =$row["next_draw_date"];
    // echo "<br>exisitng:-".$date_created_at;
    

                    $date_created_at=strtotime($date_created_at);
                    $current_date = date("Y-m-d h:i:s");
                    // echo "<br>current::".$current_date;
                    
                    $current_date=strtotime($current_date);
                    $diff = abs($current_date - $date_created_at);
                    $years = floor($diff / (365*60*60*24));  
                    $months = floor(($diff - $years * 365*60*60*24) 
                                                   / (30*60*60*24));  
                    $days = floor(($diff - $years * 365*60*60*24 -  
                                 $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24  
                           - $months*30*60*60*24 - $days*60*60*24) 
                                                       / (60*60)); 
                    $mins = floor(($diff - $years * 365*60*60*24  
                           - $months*30*60*60*24 - $days*60*60*24-$hours*60*60) 
                                                       / (60)); 
                    $seconds = floor($diff - $years * 365*60*60*24  
                           - $months*30*60*60*24 - $days*60*60*24-$hours*60*60-$mins*60);
    

    // echo "<br>MONTH:".$months." DAYS:".$days."HOURS".$hours."Mins".$mins."Seconds".$seconds."<br>"; 


                    ?>


                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="single-jackpot">
                            <div class="part-head">
                                <div class="icon">
                                    <img src="<?php echo "admin/".$row['Limage'];  ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="amount">Win: $ <?php echo $row['wining_price'];  ?></span>
                                    <span class="draw-date">Next Draw :<?php echo $months;  ?> Month <?php echo $days;  ?> Day <?php echo $hours;  ?>hrs</span>
									<span class="price"><font color="#FF0000"><i>PRICE: US$ <?php echo $row['price'];  ?></i></font></span>
                                </div>
                            </div>
                            <div class="part-body">
                                <h3><?php echo $row['LName'];  ?></h3>
                                <p><?php echo $row['intro'];  ?></p>
                                    <a href="pick-number.php?id=<?php  echo $row['id']; ?>">Play Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                     } 
                ?>
					
					
                </div>
            </div>
        </div>
		
        <!-- jackpot end -->

        
        <!-- footer begin -->
        <div class="footer">
            <div class="container">
                <div class="payment-method">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <h2>Eligible Payment Method.</h2>
                            <p>We offer various payment options, which may vary from country to country. See which methods are we support to paid out.</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="methods">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/mastercard.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/visa.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/paypal.jpg" alt="">
                                        </a>
                                    </li><li>
                                        <a href="#">
                                            <img src="assets/img/skrill.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="footer-widget">
                            <div class="about-area">
                                <a href="index-4(2).html"><img src="assets/img/logo.png" alt=""></a>
                                <p>LotteryBaby set itself on a mission to give people around the world the opportunity to play the world’s biggest lotteries: Powerball, UK Lotto, EuroMillions & others.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4 col-md-2">
                        <div class="footer-widget">
                            <div class="link-widget">
                                <h3>About</h3>
                                <ul>
                                    <li>
                                        <a href="about2.html">About us</a>
                                    </li>
                                    
                               
                                    <li>
                                        <a href="contact.php">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-4 col-md-3">
                        <div class="footer-widget">
                            <div class="link-widget">
                                <h3>Facitlity's</h3>
                                <ul>
                                     
                                    <li>
                                        <a href="#">100% Safe Secure</a>
                                    </li>
                                    <li>
                                        <a href="#">Instant Payout </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Dedicated Support</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4 col-md-2">
                        <div class="footer-widget">
                            <div class="link-widget">
                                <h3>Company</h3>
                                <ul>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Apps</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Bonuses</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- copyright begin -->
        <div class="copyright">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <p>Copyright © 2019; All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright end -->

        <!-- mobile navbar begin -->
        
        <!-- mobile navbar end -->

        <!-- jquery -->
        <script src="assets/js/jquery.js"></script>
        <!-- proper js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- owl carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/owl.carousel2.thumbs.min.js"></script>
        <!-- modal video js -->
        <script src="assets/js/jquery-modal-video.min.js"></script>
        <!-- filterizr js -->
        <script src="assets/js/jquery.filterizr.min.js"></script>
        <!-- way poin js-->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        <!-- flgstrap js -->
        <script src="assets/js/jquery.flagstrap.min.js"></script>
        <!-- niceScroll js -->
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <!-- slick slider js -->
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/slick-slider.js"></script>
        <!-- main -->
        <script src="assets/js/main.js"></script>

    </body>

</html>