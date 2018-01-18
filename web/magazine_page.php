<!--?php 

include 'session.php';

?-->
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

    <link href="css/custom.css" rel="stylesheet">
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
       <style>
	  .page-wrapper {
			margin-left: 0px !important;
			background-color: #e8e8e8;
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
                             Add New Page
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">                  
               <h2 style="margin-left:20px"> Please Choose Page Template</h2>
                </div>

                 <div class="clearfix" style="margin-bottom: 30px;"></div>
                 <div class="row">
                    <div class="col-4">
                        <div class="card card-box">
                            <div class="card-body" style="size: 100px">
                                <h3>Design 1</h3>
                                <hr/>
                                <div>
                                    <span>
                                        <img src="mainweb/images/gallery-images/gallery-image-3.jpg" width="100%">
                                    </span>
                                    <p class="magazine-description">
                                        Some text for magazine..  Loren IpsumSome text for magazine..  Loren IpsumSome text for magazine.. Loren Ipsum
                                    </p>
                                     <span>
                                        <img src="mainweb/images/gallery-images/gallery-image-3.jpg" width="100%">
                                    </span>
                                </div>
                                <br>
                                <a href="magazine_page2.php?id=1" class="btn btn-custom btn-flat pull-right"> Select Cover </a>
                            </div>
                        </div>
                    </div>
                <div class="col-4">
                        <div class="card card-box">
                            <div class="card-body" style="size: 100px">
                                <h3>Design 2</h3>
                                <hr/>
                                <div>
                                      <p class="magazine-description">
                                        Some text for magazine..  Loren IpsumSome text for magazine..  Loren IpsumSome text for magazine.. Loren Ipsum
                                    </p

                                    <span>
                                        <img src="mainweb/images/gallery-images/gallery-image-1.jpg" width="100%">
                                    </span>
                                </div>
                                 <br>
                                <a href="magazine_page2.php?id=2" class="btn btn-custom btn-flat pull-right"> Select Cover </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-box">
                            <div class="card-body" style="size: 100px">
                                <h3>Design 3</h3>
                                <hr/>
                                <div>
                                    <span>
                                        <img src="mainweb/images/gallery-images/gallery-image-5.jpg" width="100%">
                                    </span>
                                    <p class="magazine-description">
                                        Some text for magazine..  Loren IpsumSome text for magazine..  Loren IpsumSome text for magazine.. Loren Ipsum
                                    </p>
                                </div>
                                <a href="magazine_page2.php?id=3" class="btn btn-custom btn-flat pull-right"> Select Cover </a>
                            </div>
                        </div>
                    </div>
                  

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