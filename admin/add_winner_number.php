<!DOCTYPE html>
<html lang="en">
<?php   
        session_start();
        if (!isset($_SESSION['user'])) {
          header('Location: index.php');
    $_SESSION["err"] = "Unauthorized Access.Pls login First";
   
        }?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Lottery Baby</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>LOTTERY<span>BABY</span></b></a>
      <!--logo end-->
     
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
          <li class="mt">
            <a href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
              <a href="Addnewlottery.php">
                <i class="fa fa-desktop"></i>
              ADD New Lottery</a>
            </li>
           <li>
              <a class="active"  href="add_winner_number.php">
                <i class="fa fa-desktop"></i>
              Add Winner</a>
            </li>
       <li>
              <a href="setting.php">
                <i class="fa fa-desktop"></i>
              Setting</a>
            </li>



          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <br><br><br>
      <?php  
    if (isset($_GET['del'])) {
 require_once 'database.php'; 
        $_GET['del'];
        $id_del=""; 
        $id_del=$_GET['del'];
        $qu_del = "DELETE FROM `lottery` WHERE id='$id_del'";

          if (mysqli_query($conn, $qu_del)) {
          ?><div class="alert alert-success">
            <strong>Success!</strong> Record has been successfully deleted.
          </div>
        <?php

          } else {
              echo "Error Deleting record: " . mysqli_error($conn);
          }


        }
        ?>
<?php
         if(isset($_SESSION['success'])){?>    
<div class="alert alert-success">
            <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
          </div>
             
           <?php }
 unset($_SESSION['success']);
?>
      
      <!-- row -->
        <div class="row mt">
<?php 
require_once 'database.php'; 
 if(isset($_POST['addwinner'])){
  


  $lotteryid=$_POST['lotteryid'];
  $winnername=$_POST['winnername'];
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  $no3=$_POST['no3'];
  $no4=$_POST['no4'];
  $no5=$_POST['no5'];
 $no6=$_POST['no6'];
  $no7=$_POST['no7'];
  $nop=$_POST['nop'];
  $no2=$_POST['pw2'];
  $no3=$_POST['pw3'];
   $queryyy_up = "UPDATE lottery SET Winner_Name='$winnername',no1='$no1',no2='$no2',no3='$no3',no4='$no4',no5='$no5',no6='$no6',no7='$no7',pw1='$nop',pw2='$no2',pw3='$no3' WHERE id='$lotteryid'";
//  echo $queryyy_up;
   if (mysqli_query($conn, $queryyy_up)) {
           ?><div class="alert alert-success">
        <strong>Success!</strong> Record has been successfully updated.
      </div>
    <?php
        }else {
     // echo "Error creating record : " . mysqli_error($conn);
        }
}

?>





          <div class="col-md-12">
            <div class="content-panel">
				<div class="container">
					<h2>Select Lottery ADD WINNER NAME AND THEN ADD NUMBERS</h2>
					<p>*To remove Numbers and Name from any Lottry just select Lottry and click on update.(Leave all filed blank):</p>
					<form action="add_winner_number.php" method="POST">
						<div class="form-group">
						<label for="sel1">Select list (select one):</label>
						<select class="form-control" required name="lotteryid" id="sel1">
							<option value="">Nothing Selected</option>
                <?php 
                    require_once 'database.php'; 
                    $query = "SELECT * FROM lottery";
                    $result = $conn->query($query); 
                    while($row = $result->fetch_assoc()){?>
							<option value="<?php echo $row['id'];  ?>"><?php echo $row['LName'];  ?></option>

              <?php } ?>

						</select>
						
						<div class="form-group">
						<label for="usr">Winner Name:</label>
						<input type="text" class="form-control" name="winnername" id="usr">
						</div>
            
						<div class="form-group">
						<label for="usr">winner Number 1.:</label>
						<input type="text"  name="no1" class="form-control" id="usr">
						</div>
							

						<div class="form-group">
						<label for="usr"> Winner Number2.:</label>
						<input type="text" name="no2" class="form-control" id="usr">
						</div>
							
						<div class="form-group">
						<label for="usr"> Winner Number 3.:</label>
						<input type="text" name="no3" class="form-control" id="usr">
						</div>
							
						<div class="form-group">
						<label for="usr">Winner Number 4.:</label>
						<input type="text" name="no4" class="form-control" id="usr">
						</div>
							
						<div class="form-group">
						<label for="usr">Winner Number 5.:</label>
						<input type="text" name="no5" class="form-control" id="usr">
						</div>
            	<div class="form-group">
						<label for="usr">Winner Number 6.:</label>
						<input type="text" name="no6" class="form-control" id="usr">
						</div>
          	<div class="form-group">
						<label for="usr">Winner Number 7.:</label>
						<input type="text" name="no7" class="form-control" id="usr">
						</div>
							
						<div class="form-group">
						<label for="usr">Winner Power #.:(This will be hightlighted in result page)</label>
						<input type="text" name="nop" class="form-control" id="usr">
						</div>
            	<div class="form-group">
						<label for="usr">Winner Power #.:(This will be hightlighted in result page optional)</label>
						<input type="text" value="" name="pw2" class="form-control" id="usr">
						</div>
            	<div class="form-group">
						<label for="usr">Winner Power #.:(This will be hightlighted in result page optional)</label>
						<input type="text" value="" name="pw3" class="form-control" id="usr">
						</div>


						
					   	<div class="form-group">
            <!--  BASIC BUTTONS -->
            <div class="">
             
              <input type="submit" class="btn btn-primary" name="addwinner" value="Submit" />
           
                  </div>
               </
            </div>
					</form>
					</div>


            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>




    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Lottery Baby</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created By Syed Haseeb <a href="https://templatemag.com/"></a>
        </div>
        <a href="index.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
