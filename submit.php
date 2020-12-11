<?php



if(isset($_POST['box1']) || isset($_POST['box1']) || isset($_POST['box1']) || isset($_POST['box1']))
{   
       $box1details="";
       $box2details="";
       $box3details="";
       $box4details="";


       if(isset($_POST['box1'])) {  
        $box1details="Selected Nos: ";
        $box1=$_POST['box1']; 
        $box1power=$_POST['box1power'];
    //   print "Box 1 Values\n";
    //   print "7 values:\n";
      foreach($box1 as $values) {
        // print $values.",";
        $box1details=$box1details." - ".$values;
      }
    //   print "----2 values:\n";
      $box1details=$box1details."<br>-POWER #";
      foreach($box1power as $values) {
        $box1details=$box1details."-".$values;
        // print $values.","; 
      }}
        // echo $box1details;
//---------------------------------
 if(isset($_POST['box2'])) { 
 $box2details="Selected Nos: ";
$box2=$_POST['box2']; 
	$box2power=$_POST['box2power'];
// print "Box 2 Values\n";
// print "7 values:\n";
foreach($box2 as $values) {
 $box2details=$box2details." - ".$values;
//   print $values.",";
}
// print "---2 values:\n";
$box2details=$box2details."<br>-POWER #";
foreach($box2power as $values) {
 $box2details=$box2details." - ".$values;
//   print $values.","; 
}
// echo $box2details;
 }
//---------------------------------
 if(isset($_POST['box3'])) { 
 $box3details="Selected Nos: ";
$box3=$_POST['box3']; 
	$box3power=$_POST['box3power'];
// print "Box 3 Values\n";
// print "7 values:\n";
foreach($box3 as $values) {
 $box3details=$box3details." - ".$values;
//   print $values.",";
}
$box3details=$box3details."<br>-POWER #";
// print "---2 values:\n";
foreach($box3power as $values) {
 $box3details=$box3details." - ".$values;
//   print $values.","; 
}
// echo $box3details;
 }

//---------------------------------
 if(isset($_POST['box4'])) { 
 $box4details="Selected Nos: ";
$box4=$_POST['box4']; 
	$box4power=$_POST['box4power'];
// print "Box 4 Values\n";
// print "7 values:\n";
foreach($box4 as $values) {
$box4details=$box4details." - ".$values;

//   print $values.",";
}
// print "---2 values:\n";
$box4details=$box4details."<br>-POWER #";
foreach($box4power as $values) {
//   print $values.","; 
$box4details=$box4details." - ".$values;
}
 }


session_start();
$_SESSION["alldata"]= $box1details."<br>".$box2details."<br>".$box3details."<br>".$box4details;
// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($_SESSION["alldata"],70);
// echo $msg;
// echo mail("someone@example.com","My subject",$msg);

// send email

}else{
header("Location: pick-number.php?message=Select Numbers && id=18");
exit();

}
 ?>


<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lottery Baby</title>
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

        <!-- preloader begin -->
        <div class="preloader">
            <div id="nest1"></div>
        </div>
        <!-- preloader end -->

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
                                            <a href="/">
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

        <!-- breadcrumb begin -->
      



             <!-- breadcrumb begin -->
        <!-- <div class="breadcrumb-lotters">
            <div class="banner-shape">
                <img src="assets/img/svg/banner-shape-1.png" alt="">
                <img src="assets/img/svg/banner-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="breadcrumb-content">
                             <h2>Personal Information</h2>
                            <ul>
                                <li>
                                   <p>Last Step Before Purchase.</p>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- breadcrumb end -->

        <!-- register begin-->
        <div class="form style-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title text-center">
                            <h2>Personal Information</h2>
                            <p>Last Step Before Purchase.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <form action="Submission.php?id=<?php echo $_GET['id']; ?>" method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputFirstname">First Name<span class="requred">*</span></label>
                                        <input type="text" name="fname" class="form-control" id="InputFirstname" placeholder="Enter Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputLastname">Last Name<span class="requred">*</span></label>
                                        <input type="text" class="form-control" id="InputLastname" name="lname" placeholder="Enter Your Last Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputMail">E-mail<span class="requred">*</span></label>
                                        <input type="email" name="email" class="form-control" id="InputMail" placeholder="Enter Your E-mail"
                                            required>
                                    </div>
                                </div>                                     
                                <div class="col-xl-12 col-lg-12">
                                    <fieldset class="form-group fieldset">
                                       <label for="InputMail">Select Payment Method:<span class="requred">*</span></label>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                            value="Bitcoin" checked required>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Bitcoin
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                                            value="credit/debit card">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            credit/debit card
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                                            value="ethereum">
                                                        <label class="form-check-label" for="gridRadios3">
                                                            ethereum 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4"
                                                            value="Bank Transfer">
                                                        <label class="form-check-label" for="gridRadios4">
                                                            Bank Transfer
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
        

                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="InputAccount">Select Country<span class="requred">*</span></label>
                                        <select   class="form-control" id="country" name="country" required>
                                       
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
                                         
                                    </div>
                                </div>
                            
                                <div class="col-xl-6 col-lg-6">
                                    <button type="submit" name="personal" class="submit-button">Submit Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- register end -->
















       
        <!-- faq end -->

        <!-- footer begin -->
        <div class="footer style-2">
            <div class="banner-shape">
                <img src="assets/img/svg/footer-shape-1.png" alt="">
                <img src="assets/img/svg/footer-shape-2.png" alt="">
            </div>
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
                                <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
                                <p>Lotters set itself on a mission to give people around the world the opportunity to play the world’s biggest lotteries: Powerball, UK Lotto, EuroMillions & others.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4 col-md-2">
                        <div class="footer-widget">
                            <div class="link-widget">
                                <h3>About</h3>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                   
                                    <li>
                                        <a href="#">Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
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
                                        <a href="#">Performance Bonus</a>
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
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Customers</a>
                                    </li>
                                   
                                    <li>
                                        <a href="#">Lottery</a>
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
        <!-- vector map js -->
        <script src="assets/js/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="assets/js/jquery-jvectormap-world-mill.js"></script>
        <script src="assets/js/gdp-data.js"></script>
        <!-- niceScroll js -->
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <!-- main -->
        <script src="assets/js/main.js"></script>

    </body>

</html>