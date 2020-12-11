<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LotteryBaby - Buy Lottery Tickets Online </title>
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
<style>
#win-list{
height: 500px; 
overflow: hidden;


}

</style>
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
        <!-- header end -->

        <!-- banner begin -->
        <div class="banner-4">
            <div class="container">
                <div class="box-slide owl-carousel owl-theme">
                    <?php 
                    require_once 'admin/database.php'; 
                    $query = "SELECT * FROM lottery";
                    $result = $conn->query($query); 
                    while($row = $result->fetch_assoc()){?>




                    <div class="single-slide">
                        <div class="single-lottery">        
                            <div class="row justify-content-around">
                                <div class="col-xl-3 col-lg-3 col-sm-3">
                                    <div class="part-icon">
                                        <img src="<?php echo "admin/".$row['Limage'];  ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-5 d-xl-flex d-lg-flex d-block align-items-center">
                                    <div class="draw-time">
                                        <p>Game Will Be Drawn -</p>
                                        <ul class="date-counter timer" data-date="<?php echo $row["next_draw_date"]; ?> GMT+05:00">
                                            <li>
                                                <span class="number day">15</span>
                                                <span class="text">Day</span>
                                            </li>
                                            <li>
                                                <span class="number hour">12</span>
                                                <span class="text">Hour</span>
                                            </li>
                                            <li>
                                                <span class="number minute">25</span>
                                                <span class="text">Min</span>
                                            </li>
                                            <li>
                                                <span class="number second">35</span>
                                                <span class="text">Sec</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-4 d-xl-flex d-lg-flex d-block align-items-center">
                                    <div class="text">
                                        <h3 class="title"><?php echo $row['LName'];  ?></h3>
                                        <a href="all-lotteries2.php">Play Game</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <?php }  ?>


                    
                </div>
            </div>
        </div>
        <!-- banner end -->
		<!-- brand begin -->
        <div class="brand">
            <div class="container">
                <div class="brand-list owl-carousel owl-theme">
                    <div class="single-brand">
                        <img src="assets/img/brand-1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/brand-2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/brand-3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/brand-4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/brand-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand end -->
<?php
             require_once 'admin/database.php'; 
                                        $query = "SELECT * FROM main";
                                        $result = $conn->query($query); 
                                        $roww = $result->fetch_assoc();?>

        <!-- lottery ticket begin -->
        <div class="lottery-ticket" id="lottery-ticket">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center">
                    <div class="col-xl-5 col-lg-4">
                        <div class="part-img">
                            <div class="ill-width">
                                <div class="ill-shape-set">
                                    <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                                    <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                                    <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                                    <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                                </div>
                            </div>
                            <img src="assets/img/lottery-jackpot-img.png" alt="">
                            <div class="draw-date">
                                <span class="title">Draw</span>
                                <span class="date"><?php echo $roww['timer']; ?></span>
                            </div>
                            <div class="clock">
                                <img src="assets/img/clock.webp" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="part-text">
                            <h2>Lottery tickets online</h2>
                            <p>Purchasing Lotto tickets online are a great alternative to paper tickets; you don’t have to visit a local lottery office any more. You don’t have to wait in line to purchase a lottery ticket online. Play a lottery online using the possibilities of modern technology and the expansion of the internet.</p>
                            <p>Check out the lotteries available in our offer. Pay close attention to the time remaining for each draw, as well as to the jackpot prize amount!</p>
                            <div class="date-counter timer" data-date="<?php echo $roww['timer']; ?> GMT+05:00">
                                <div class="single-counter">
                                    <div class="conter-content">
                                        <span class="number day">12</span>
                                        <span class="title">Days</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="conter-content">
                                        <span class="number hour">15</span>
                                        <span class="title">Hour</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="conter-content">
                                        <span class="number minute">25</span>
                                        <span class="title">Minutes</span>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="conter-content">
                                        <span class="number second">35</span>
                                        <span class="title">Seconds</span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <ul>
                                    
                                    <li>
                                        <a href="all-lotteries2.php">View All Offer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- lottery ticket end -->

        <!-- lottery result begin -->
        <div class="lottery-result style-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title text-center">
                            <span class="sub-title">Results Are Published</span>
                            <h2>Latest Lottery Results</h2>
                            <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto jackpots!</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="get-thiz-height">
                            <div class="result-board">
                                <div class="title">
                                    <h3>Lottery Winning Numbers </h3>
                                </div>
                                <div class="view-result">
                                </div>
                                <div class="result-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Lottery</th>
                                                <th scope="col">Draw Date</th>
                                                <th scope="col">Winning Numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php 
                                        require_once 'admin/database.php'; 
                                        $query = "SELECT * FROM lottery";
                                        $result = $conn->query($query); 
                                        while($row = $result->fetch_assoc()){?>

                                            <tr>
                                                <th scope="row"><img src="<?php echo "admin/".$row['Limage'];?>" class="flag" alt=""> <?php echo $row['LName'];?></th>
                                                <td><?php echo $row["next_draw_date"]; ?></td>
                                                <td>
                                                    <ul><?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li>
                                                            <a href="#"><?php  if(strlen($row["no1"]>0)) echo $row["no1"]; else echo "-";?></a>
                                                        </li> <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li>
                                                              <a href="#"><?php  if(strlen($row["no2"]>0)) echo $row["no2"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li>
                                                             <a href="#"><?php  if(strlen($row["no3"]>0)) echo $row["no3"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li class="winning-number">
                                                              <a href="#"><?php  if(strlen($row["pw1"]>0)) echo $row["pw1"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li class="winning-number">
                                                              <a href="#"><?php  if(strlen($row["pw2"]>0)) echo $row["pw2"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li class="winning-number">
                                                              <a href="#"><?php  if(strlen($row["pw3"]>0)) echo $row["pw3"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li>
                                                              <a href="#"><?php  if(strlen($row["no4"]>0)) echo $row["no4"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                        <?php  if(strlen($row["no1"]>0)){ ?>
                                                        <li>
                                                           <a href="#"><?php  if(strlen($row["no5"]>0)) echo $row["no5"]; else echo "-";?></a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                </td>
                                            </tr>

<?php } ?>



                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8 col-sm-4">











                        <div  class="winners-list" id="win-list" style="height: 500px; overflow: hidden;" >
                            <h3>Some Latest Winners</h3>
                            <div class="row">
                                <div class="col-xl-12 col-lg-6">
                                    <div class="Vertical-Slider">
                                       
                                                <?php 
                            require_once 'admin/database.php'; 
                            $query = "SELECT * FROM lottery";
                            $result = $conn->query($query); 
                            while($row = $result->fetch_assoc()){ if(strlen($row['Winner_Name'])>1){?>






                                        <div class="single-winner mb-xl-2 mb-lg-0">
                                            <div class="part-img">
                                                <img src="<?php echo "admin/".$row['Limage'];?>" class="flag" alt="">
                                            </div>
                                            <div class="part-text">
                                                <span class="name"><?php echo $row['Winner_Name'];?>  </span>
                                                <span class="lottery-subject"><?php echo $row['LName'];?>  / <?php echo $row["next_draw_date"]; ?></span>
                                                <span class="winning-prize"><?php echo $row['wining_price'];?></span>
                                            </div>
                                        </div>
                                        
                        <?php }
} ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- lottery result end -->

        <!-- choosing reason begin -->
        <div class="choosing-reason">
            <div class="container">
                <div class="row justify-content-xl-around justify-content-lg-around justify-content-start">
                    <div class="col-xl-5 col-lg-5">
                        <div class="choosing-reason-list">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-reason">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/valet.svg" alt="">
                                        </div>
                                        <div class="part-text">
                                            <h3>Low commission on winnings</h3>
                                            <p>LotteryBaby takes a 5% commission on all winnings after tax and group sharing </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-reason">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/wallet.svg" alt="">
                                        </div>
                                        <div class="part-text">
                                            <h3>Our Track Record</h3>
                                            <p>Over the years, we have paid out more than $37 million in prizes
											   to over 5 million winners from around the world.
											   Our winners include a woman from Venezuela who won an incredible $15 million Jackpot in 2015.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-reason">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/debit-card.svg" alt="">
                                        </div>
                                        <div class="part-text">
                                            <h3>Safe & Secure Playing</h3>
                                            <p>Transactions protected by GeoTrust 128-bit SSL security layer.
											   24/7 Customer support via chat, email and social media.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-10 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="choosing-text">
                            <h2>Why Choose Us?</h2>
                            <p>We are an online lottery ticket messenger service
							   providing customers with the opportunity to play the 
							   biggest lottery draws, with official tickets, from
							   anywhere in the world. </p>
                            <p>Choose a lottery to play then order your tickets.
							   Our representatives will purchase official tickets in store on your behalf.
							   Receive your tickets in your email or LotteryBaby Account.
							   Receive your ticket regardless of your country of residence.</p>
                            <a href="all-lotteries2.php">Play Lotto!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choosing reason end -->
        <!-- how to works begin -->
        <div class="how-to-works">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4">
                        <div class="part-img">
                            <img src="assets/img/how-to-works-bg.png" alt="">
                            <div class="ill-shape">
                                <img src="assets/img/how-to-works-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="working-list">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-10 col-md-8">
                                    <div class="section-title text-center">
                                        <h2>How It Works</h2>
                                        <p>No need to Sign up.</p>
										<p>Just pick a lottery you’re interested in from our offers and we will email you the scanned copy of your official paper ticket.</p>
										<p>You can buy one or more tickets for a particular lottery.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="working-list-content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-sm-6">
                                        <div class="single-system">
                                            <div class="system-content">
                                                <div class="number">01</div>
                                                <span class="title">Pick A Number</span>
                                            </div>
                                            <div class="hover-content">
                                                <p>Choose and Pick your lucky numbers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-6">
                                        <div class="single-system">
                                            <div class="system-content">
                                                <div class="number">02</div>
                                                <span class="title">Buy Ticket</span>
                                            </div>
                                            <div class="hover-content">
                                                <p>Buy your ticket with Bitcoins or Ethereum  </p>
												<p>More options coming soon.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-6">
                                        <div class="single-system">
                                            <div class="system-content">
                                                <div class="number">03</div>
                                                <span class="title">Win Lottery</span>
                                            </div>
                                            <div class="hover-content">
                                                <p>We will notify you by e-mail or phone when you win.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- how to works end -->

        <!-- team begin -->
        <div class="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center">
                            <h2> A few LotteryBaby Jackpot Winners</h2>
                            <p> From the biggest prizes to the best odds and the most regular daily draws, meet some of our past winners</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-member">
                            <div class="part-img">
                                <img src="assets/img/member-1.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="name">Stanley Knight</span>
                                <span class="occupation">Pharmacist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-member">
                            <div class="part-img">
                                <img src="assets/img/member-2.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="name">Morris Webster</span>
                                <span class="occupation">Trader</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-member">
                            <div class="part-img">
                                <img src="assets/img/member-3.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="name">Anthony Garcia</span>
                                <span class="occupation">IT Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="single-member">
                            <div class="part-img">
                                <img src="assets/img/member-4.jpg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="name">Mukta Marten</span>
                                <span class="occupation">Financial Adviser</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team end -->

        <!-- user statics begin -->
        <div class="user-statics">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="part-statics">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-sm-6">
                                            <div class="single-statics payout">
                                                <div class="statics-content">
                                                    <div class="number">$ 655 M</div>
                                                    <span class="title">Payouts Total</span>
                                                </div>
                                                <div class="hover-content">
                                                    <p>we paid out to winners
                                                            $ 655.46 M
                                                            Over 1.184.370 winnings worldwide</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-sm-6">
                                            <div class="single-statics biggest-payout">
                                                <div class="statics-content">
                                                    <div class="number">$ 53 M</div>
                                                    <span class="title">Biggest Payout</span>
                                                </div>
                                                <div class="hover-content">
                                                    <p>we paid out the biggest amount ever was
                                                            $ 53.020 M
                                                            In LotteryBaby's History</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-sm-6">
                                            <div class="single-statics player">
                                                <div class="statics-content">
                                                    <div class="number">39 K</div>
                                                    <span class="title">Total Players</span>
                                                </div>
                                                <div class="hover-content">
                                                    <p>Everyday over 39k Registred players play at LotteryBaby worldwide</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-sm-6">
                                            <div class="single-statics bet">
                                                <div class="statics-content">
                                                    <div class="number">8 K</div>
                                                    <span class="title">Placed Bets</span>
                                                </div>
                                                <div class="hover-content">
                                                    <p>we have over 8,000 placed bets
                                                            In LotteryBaby's History</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-map">
                            <div id="world-map-gdp"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user statics end -->
     
        <!-- testimonial begin -->
        <div class="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center">
                            <h2>Users Say About LotteryBaby!</h2>
                            <p>LotteryBaby allows you to participate in the world’s biggest lotteries. We give you the possibility of purchasing lottery tickets in a safe and convenient manner from the comfort of your home. Let's see the lottery players reveiws.</p>
                        </div>
                    </div>
                </div>
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="single-testimonial">
                            <div class="user-img">
                                <img src="assets/img/testi-user.jpg" alt="">
                            </div>
                            <p>This is one of the website where you can buy international lotteries globally and LotteryBaby helps you in every stage</p>
                            <div class="user-name">
                                <div class="rate">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="name">Mukta Marten</span>
                                <span class="position">Lottery Players</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="user-img">
                                <img src="assets/img/member-2.jpg" alt="">
                            </div>
                            <p>Online lottery! Which is made more easier and fun by LotteryBaby. Would definitely recommend. One of the best online lottery sites!</p>
                            <div class="user-name">
                                <div class="rate">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-star"></i></a>                                            
                                        </li>
                                    </ul>
                                </div>
                                <span class="name">John Tamim</span>
                                <span class="position">Lottery Players</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="user-img">
                                <img src="assets/img/testi-user.jpg" alt="">
                            </div>
                            <p>This is one of the website where you can receive your Lottery winnings direct to you worldwide</p>
                            <div class="user-name">
                                <div class="rate">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="name">Mukta Marten</span>
                                <span class="position">Lottery Players</span>
                            </div>
                        </div>
                        
                        <div class="single-testimonial">
                            <div class="user-img">
                                <img src="assets/img/member-2.jpg" alt="">
                            </div>
                            <p>. This site has varieties of Lotteries to play thereby increasing your chances of winning !</p>
                            <div class="user-name">
                                <div class="rate">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-star"></i></a>                                            
                                        </li>
                                    </ul>
                                </div>
                                <span class="name">John Tamim</span>
                                <span class="position">Lottery Players</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- testimonial end -->

        
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
                                    <li>
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
                        <p>Copyright © 2020; All Right Reserved</p>
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
        <!-- vector map js -->
        <script src="assets/js/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="assets/js/jquery-jvectormap-world-mill.js"></script>
        <script src="assets/js/gdp-data.js"></script>
        <script src="assets/js/vector-map-activated.js"></script>
        <!-- scrolling animation js -->
        <script src="assets/js/scrolling-animation.js"></script>
        <!-- niceScroll js -->
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <!-- slick slider js -->
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/slick-slider.js"></script>
        <!-- main -->
        <script src="assets/js/main.js"></script>

    </body>

</html>