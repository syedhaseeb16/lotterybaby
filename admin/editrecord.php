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
  <?php 
require_once 'database.php'; 
 if(isset($_POST['editlottry'])){
  require_once 'database.php'; 
//add data in product table
$imgflag=0;
if(isset($_FILES['Limage']) && $_FILES['Limage']['size'] > 0){
 $image=$_FILES['Limage']['name'];
    $target_dir = "uploads/";
     //$image= $target_dir.$image;
$target_file = $target_dir . basename($_FILES["Limage"]["name"]);
    
$info = pathinfo($_FILES['Limage']['name']);

$newname = $image;
$target = 'uploads/'.$newname;

if(file_exists($target)) {
    chmod($target,0755); //Change the file permissions if allowed
    unlink($target); //remove the file
}
move_uploaded_file( $_FILES['Limage']['tmp_name'], $target);
$imgflag=1;

 }
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  


  $Name=$_POST['Name'];
  $wining_price=$_POST['wining_price'];
  $next_draw_date=$_POST['next_draw_date'];
  $intro=$_POST['intro'];
  $price=$_POST['price'];
  $id=$_POST['id'];
  $totalNumber=$_POST['totalNumber'];
  $totalPowerballs=$_POST['totalPowerballs'];


if($imgflag==1)
$imagewith="UPDATE lottery SET LName='$Name', Limage='$target', wining_price='$wining_price', next_draw_date='$next_draw_date', intro='$intro', price='$price',totalNumber='$totalNumber',totalPowerballs='$totalPowerballs' WHERE id='$id'";
else
$imagewith="UPDATE lottery SET LName='$Name', wining_price='$wining_price', next_draw_date='$next_draw_date', intro='$intro', price='$price',totalNumber='$totalNumber',totalPowerballs='$totalPowerballs' WHERE id='$id'";

   $queryyy_up = $imagewith;
   if (mysqli_query($conn, $queryyy_up)) {
          $_SESSION["success"] = "record has been successfull Updated";
      header('Location: dashboard.php');
        }else {
      echo "Error creating record : " . mysqli_error($conn);
 $_SESSION["success"] = "Error in updating record";
header('Location: dashboard.php');
        }
}

?>


  <?php  
	$id="";
    if (isset($_GET['id'])) {
		 require_once 'database.php'; 
		$id=$_GET['id'];
		$query = "SELECT * FROM `lottery` WHERE id='$id'";
  		$result = $conn->query($query); 
        $row = $result->fetch_assoc();
		


?>
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
            <a class="active" href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
              <a  href="Addnewlottery.php">
                <i class="fa fa-desktop"></i>
              Add New Lottery</a>
            </li>
  <li>
              <a href="add_winner_number.php">
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
    <!-- ************************************************************************************************************
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Lottery Details Lottery</h3>
  



        <!-- /row -->
        <!-- DATE TIME PICKERS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal  style-form" action="editrecord.php" method="POST" enctype="multipart/form-data" >
 				<input type="hidden" name="id" value="<?php echo $id;?>" class="form-control" required>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Lottery Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="Name" value="<?php echo $row["LName"];?>" class="form-control" required>
                    <span class="help-block">Enter Lottery Name here</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Lottery Winning Amount</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $row["wining_price"];?>"  name="wining_price" required class="form-control">
                    <span class="help-block">Enter Amount that will be given on Winning.</span>
                  </div>
                </div>

                   <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Power # Limit</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $row["totalPowerballs"];?>"  name="totalPowerballs" required class="form-control">
                    <span class="help-block">Enter limit for power number limit(1,2,3 e.g).</span>
                  </div>
                </div>
                     <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Number selection Limit</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $row["totalNumber"];?>"  name="totalNumber" required class="form-control">
                    <span class="help-block">Enter limit for number selection in each row()</span>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Lottery Buying Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" value="<?php echo $row["price"];?>"  class="form-control" required>
                    <span class="help-block">Enter Buying/Playing Amount.</span>
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date Of Windraw</label>
                  <div class="col-sm-10">
                  <input type="datetime-local" value="<?php echo $row["next_draw_date"]; ?>"  name="next_draw_date" class="form-control" required>
                    <span class="help-block">Enter Date When this Lottery will WithDraw. Date should be greater than current time,when counter reaches at 0 it will start in -tive, that show how much  time has been passed in windraw.</span>
                  </div>
                </div>


                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Lottery Details</label>
                  <div class="col-sm-10">
                  <textarea  style="width: 100%; height: 100%; box-sizing: border-box; resize: vertical;"  required name="intro" class="form-control"><?php echo $row["intro"];?> </textarea>
                    <span class="help-block">Enter Info that will display with Lottery Details.</span>
                  </div>
                </div>

                    <div class="form-group">
                  <label class="control-label col-md-3">Select Lottery Logo</label>
                  <div class="col-md-4">
                    <input name="Limage"  type="file" class="default" />
                  </div>
                </div>
             
             <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <!--  BASIC BUTTONS -->
            <div class="">
             
           
              <input type="submit" class="btn btn-primary" name="editlottry" value="Update Lottery Details" />
           
                  </div>
               </div>
            </div>
                






              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->

        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_form_components.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>



<?php     }  ?>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>
