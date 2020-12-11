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
              <a  href="add_winner_number.php">
                <i class="fa fa-desktop"></i>
              Add Winner</a>
            </li>
       <li>
              <a class="active"  href="setting.php">
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
if(isset($_POST['changepassword'])){
require 'database.php';

    $user_id=$_POST["user_id"];
    $password=$_POST["password"];

 


    $queryyy_up = "UPDATE users SET 
    user_id = '$user_id', password = '$password'
      where  id='1'";
  if (mysqli_query($conn, $queryyy_up)) {
  ?><div class="alert alert-success">
    <strong>Success!</strong> Id/Password has been successfully updated.
  </div>

<?php



  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }



}


?>






<?php 
if(isset($_POST['timer'])){
require 'database.php';

    $time=$_POST["times"];
     $queryyy_up = "UPDATE main SET 
     timer = '$time'
      where  id='1'";
  if (mysqli_query($conn, $queryyy_up)) {
  ?><div class="alert alert-success">
    <strong>Success!</strong> Main counter has been updated.
  </div>

<?php



  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }



}


?>




          <div class="col-md-12">
            <div class="content-panel">
				<div class="container">
					<h2>Change your ID AND PASSWORD</h2>
									<?php
						require 'database.php';
					$check = "SELECT * FROM users ";
					$re_check = $conn->query($check);
					while($rec=$re_check->fetch_assoc()) {?>   
				<form action="setting.php"  method="POST">
				
				<div class="row">

					<div class="col-sm-3" >
					<input type="hidden" class="form-control" value="<?php echo  $rec["id"]; ?>" name="id" id="exampleInputPassword1" placeholder="id">
					<input type="text" class="form-control" value="<?php echo  $rec["user_id"]; ?>" name="user_id" id="exampleInputPassword1" placeholder="id">
					</div>
					<div class="col-sm-7" >
					<input type="password" class="form-control" value="<?php echo  $rec["password"]; ?>" name="password" id="exampleInputPassword1" placeholder="password">  
					</div>
						<div class="col-sm-2" >
					<a href="changepassword.php?update=<?php echo ""?>"><button type="submit" name="changepassword" class="btn  btn-primary" > update </button> </a>
					<!--<a href="os_edition.php?del=<?php //echo  $rec["os_id"];?>"><button type="submit" name="delete_os" class="btn  btn-danger" > Delete </button> </a>-->
					</div>
				
				</div>
				</form>
				<?php } ?>
					</div>


            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>




          <div class="col-md-12">
            <div class="content-panel">
				<div class="container">
					<h2>Enter Time that will Display on Landing page As BackCounter</h2>
								
				   
				<form action="setting.php"  method="POST">
				
				<div class="row">

					
					<div class="col-sm-10" >
					<input type="datetime-local" class="form-control" value="" name="times" id="exampleInputPassword1" placeholder="OS Editions">  
					</div>
						<div class="col-sm-2" >
					<a href="changepassword.php?update=<?php echo ""?>"><button type="submit" name="timer" class="btn  btn-primary" > update </button> </a>
					<!--<a href="os_edition.php?del=<?php //echo  $rec["os_id"];?>"><button type="submit" name="delete_os" class="btn  btn-danger" > Delete </button> </a>-->
					</div>
				
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
