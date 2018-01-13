<?php 

if (isset($_POST['submit1'])){

$design_id = $_POST['design_id'];


if ($design_id != "1" && $design_id != "2" && $design_id != "3")
{
echo "<script>
alert('Invalid Design ID');
window.location.href='new_magazine.php';
</script>";
}
$maintext = $_POST['area1'];
$target_dir = "preview_image/";
$target_file = $target_dir .uniqid(). basename($_FILES["cover_page"]["name"]);
move_uploaded_file($_FILES["cover_page"]["tmp_name"], $target_file);
$magazine_name = $_POST['magazine_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      <?php
      include('header.php');
      ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php
       include('left_sidebar.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               Preview

                            </div>
                        </div>
                    </div>
                </div>

<?php if ($design_id == "1"){?>

                 <div class="row" style="margin-left: 
                               20px">
                                    <div class="col-4">
                        <div class="card">
                            <div class="card-body" style="size: 100px">
                              <?php echo $magazine_name; ?>

                                <div>
                                
                                <span>
                                    <img src="<?php echo $target_file ?>" width="100%" height="110px">
                                    </span>
                                    <br>
                                    <br>
                                    <span>
                                  <?php echo $maintext; ?>
                                    </span>
                                    <br>
                                    <br>
                                    <span>
                                    <img src="<?php echo $target_file ?>"  width="100%" height="110px">
                                    </span>

                                    </div>
 <br>
                            </div>
                      

                        </div>
                    </div>
                </div>
<?php } ?>

<?php if ($design_id == "2"){?>

                 <div class="row" style="margin-left: 
                               20px">
                                     <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $magazine_name; ?>

                                <div>
                                
                                
                            
                                    <span>
                                    <?php echo $maintext; ?>
                                    </span>
                                    <br>
                                    <br>
                                    <span>
                                    <img src="<?php echo $target_file ?>"  width="100%" height="110px">
                                    </span>
                                    </div>
                                    <br>
                        
                            </div>
                             </div>
                    </div>
                </div>
<?php } ?>

<?php if ($design_id == "3"){?>

                 <div class="row" style="margin-left: 
                               20px">
                            <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $magazine_name; ?>

                                <div>
                                
                                <span>
                                    <img src="<?php echo $target_file ?>"  width="100%" height="110px">
                                    </span>
                                    <br>
                                    <br>
                                    <span>
                                   <?php echo $maintext; ?>
                                    </span>
                                    <br>
                                    <br>
                                   
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
<?php } ?><a href="submit_magazine_page.php?title=<?php echo $magazine_name;?>&&maintext=<?php echo $magazine_name; ?>&&image=<?php echo $target_file;?>&&design_id=<?php echo $design_id; ?>" class="btn waves-effect waves-light btn-info hidden-md-down"> Add New Page</a> <a href="submit_magazine_page2.php?title=<?php echo $magazine_name;?>&&
maintext=<?php echo $magazine_name; ?>&&image=<?php echo $target_file;?>&&design_id=<?php echo $design_id; ?>" class="btn waves-effect waves-light btn-info hidden-md-down"> Finish And Submit For Admin Approval </a>
<?php 

$_SESSION['tmp'] = $maintext;

?>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php 
           include('footer.php');?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
<?php 
}
?>