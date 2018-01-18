<!--?php 
include 'connection.php';
if (isset($_GET['magazine_id'])){
    $magazine_id = $_GET['magazine_id'];

?-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Namari - Free Landing Page Template</title>

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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

    <script>
function demoFromHTML() {
var divElements = document.getElementById('testcase').innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

}
</script>
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

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

   

    <!--Main Content Area-->
    <main id="content">

       

       

        <!--Pricing Tables-->
        <section id="pricing" class="secondary-color text-center scrollto clearfix ">
            <div class="row clearfix">
<div id="editor"></div>
                
<?php 
$query = "Select * from magazine_page where magazine_id = $magazine_id";
$query = mysqli_query($conn,$query);
while ($res = mysqli_fetch_object($query)){
?>
                <!--Pricing Block-->
                <div  class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s"  >
                    <div name="testcase" class="pricing-block-content" id="testcase">
                        <h3><?php echo $res->name; ?></h3>
                        
                        <?php if ($res->design_id == 3 || $res->design_id == 1){ ?><img src="../<?php echo $res->img;?>" width="50%" style="height: 130px"><?php } ?><br>
                        <div style="height: 200px; width: 50%; word-wrap:break-word; <?php if ($res->design_id == 2 || $res->design_id == 3) echo 'height:310px'; ?>"><?php echo $res->maintext; ?>
                        </div>
                         <br>
                         <?php if ($res->design_id == 2 || $res->design_id == 1){ ?><img src="../<?php echo $res->img;?>" width="50%" style="height: 130px"><?php } ?>
                        <!-- <a class="button">Show in large </a>   -->
                         
                    </div>
                    <a class="button" href="javascript:demoFromHTML()">Print</a>
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
<?php 
} else {
    header('Location: index.php');
    } ?>