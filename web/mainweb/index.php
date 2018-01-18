<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Magazine</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s" color:"#000000">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/logo.png" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img src="images/logo-2.png" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    
                    <!--Main Navigation-->
                    
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>

             </div>

        </div><!--End of Header-->

        <!--Banner Content-->

        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                <a href="../index.php" class="button"> Create New Magazine </a>
                    <h1>Namari Magazine</h1>
                    <h2>Online Free Create Magazine And Publish It</h2>
                </div>

                <!--Call to Action-->
                
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">

       

       

        <!--Pricing Tables-->
        <section id="pricing" class="secondary-color text-center scrollto clearfix ">
            <div class="row clearfix">

                <div class="section-heading">
                    <h3>All Magazines</h3>
                    <h2 class="section-title">We have large collection of magazine for you</h2>
                </div>
<?php 
$query = "Select * from magazine where status = 1";
$query = mysqli_query($conn,$query);
while ($res = mysqli_fetch_object($query)){
?>
                <!--Pricing Block-->
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-block-content">
                        <h3><?php echo $res->name; ?></h3>
                        
                        <?php if ($res->design_id == 3 || $res->design_id == 1){ ?><img src="../<?php echo $res->img;?>" width="50%" style="height: 130px"><?php } ?><br>
                        <div style="height: 100px; width:45%; word-wrap:break-word; <?php if ($res->design_id == 2 || $res->design_id == 3) echo 'height:310px'; ?>"><?php echo $res->maintext; ?>
                        </div>
                         <br>
                         <?php if ($res->design_id == 2 || $res->design_id == 1){ ?><img src="../<?php echo $res->img;?>" width="50%" style="height: 130px"><?php } ?>
						 <br>
                        <a class="button" href="i2.php?magazine_id=<?php echo $res->id ?>">Read Now</a>
                    </div>
                </div>
                <!--End Pricing Block-->

                <?php } ?>
                <!--End Pricing Block-->

            </div>
        </section>
        <!--End of Pricing Tables-->

    </main>
    <!--End Main Content Area-->


    <!--Footer-->

    <!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>