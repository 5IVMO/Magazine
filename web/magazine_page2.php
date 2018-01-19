<?php 
$design_id = $_GET['id'];


if ($design_id != "1" && $design_id != "2" && $design_id != "3")
{
echo "<script>
alert('Invalid Design ID');
window.location.href='new_magazine.php';
</script>";
}


?>

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
      <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
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
       <style>
	    .page-wrapper {
            margin-left: 0px !important;
            background: url(preview_image/darkPreview.jpg);
            }
		</style>
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
                                                    Magazine Step 2

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    <div class="row">
                        <h2 style="margin-left: 20px"> You choosen design id : <?php echo $design_id; ?> </h2>                          
                      </div>

            <center>
                <div class="row" style="margin-left: 20px">
                    <div class="col-3"></div>
                    <div class="col-6">
                       <div class="card card-box">
                            <div class="card-body">
                                <h3>Add New Page Step 2</h3>
                            </div>
                            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="preview2.php" >
                            <label>Page Name</label><br>
                            <input class="input-css" type="text" name="magazine_name" required="required">
                            <br><br>
                            <span style="margin-left: 30px">
                            <label> Enter Text To Display</label><br>
                            <textarea name="area1" cols="40" rows="5" novalidate></textarea>
                           
                           </span>
                           <br>
                            <span style="margin-left: 30px">
                            <!-- <label> Select Image</label><br> -->
                            <!-- <div class="fileUpload btn btn-custom btn-flat btn-sm">
                                <span>Upload Image</span>
                                <input type="file" class=" upload" name="cover_page" required="required" accept="image/x-png,image/jpeg" />
                            </div> -->
                            <input type="file" class="btn btn- btn-sm" name="cover_page" required="required" accept="image/x-png,image/jpeg">
                           </span><br><br>
                          
                           <?php if($design_id == 1){ ?>
                           <span style="margin-left: 30px">
                            <label> Select Second Image</label><br>
                            <input type="file" class="btn btn- btn-sm" name="image2" required="required" accept="image/x-png,image/jpeg">
                           </span><br><br>
                           <?php  } ?>

                           <span style="margin-left: 30px">
                            <label> Select Background Image</label><br>
                            <input type="file" class="btn btn- btn-sm" name="background_image" required="required" accept="image/x-png,image/jpeg">
                           </span><br><br>

                           <input type="hidden" class="btn btn-primary btn-sm" name="design_id" value="<?php echo $design_id; ?>">
                            <input type="submit" class="btn btn-custom btn-flat btn-md " name="submit1" value="Preview">
                        <div class="clearfix"></div>
                        </div>

                         </form>

                    </div>
                </div>

<!-- 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                Magazine Step 2

                            </div>
                        </div>
                    </div>
                </div>
<center>
<div class="row">
                    
                               <h2 style="margin-left: 
                               20px"> You choosen design id : <?php echo $design_id; ?>
</h2>
                           
                </div>

                 <div class="row" style="margin-left: 
                               20px">
                                <div class="col-7">
                      
                       <div class="card">
                            <div class="card-body">
                               Add New Page Step 2

                            </div>
                            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="preview2.php" >
                            <label>Page Name</label><br>
                            <input type="text" name="magazine_name" required="required">
                            <br><br>
                            <span style="margin-left: 30px">
                            <label> Enter Text To Display</label><br>
                            <textarea name="area1" cols="40" rows="5" novalidate></textarea>
                           
                           </span>
                           <br>
                            <span style="margin-left: 30px">
                            <label> Select Image</label><br>
                            <input type="file" name="cover_page" required="required" accept="image/x-png,image/jpeg">
                           </span><br><br>
                           <input type="hidden" name="design_id" value="<?php echo $design_id; ?>">
<input class="btn btn-primary btn-sm" type="submit" name="submit1" value="Preview">

                        </div>

                         </form>

                        </div>
                </div> -->

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