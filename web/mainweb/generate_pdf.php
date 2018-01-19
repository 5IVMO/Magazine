<?php
require_once 'dompdf/autoload.inc.php';

require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';

include 'connection.php';


Dompdf\Autoloader::register();

// reference the Dompdf namespace
use Dompdf\Dompdf;

if (isset($_GET['magazine_id'])){
    $magazine_id = $_GET['magazine_id'];
}
// instantiate and use the dompdf class
$dompdf = new Dompdf();

$query = "Select * from magazine_page where magazine_id = $magazine_id";
$query = mysqli_query($conn,$query);
$content ='<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!--Google Webfonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

   <style>
	.page-break {
	    page-break-before: always;
	}
	
   </style>
</head>

<body >';
while ($res = mysqli_fetch_object($query)){
	$content .= '<div class="row clearfix" style="max-width:100%;">
                <img src="../'.$res->background_image.'" style = "position:absolute; height: 1000px;width: 100%;top: 0;right: 0">
                <div  class="pricing-block" style="margin: 0 auto; position:relative; padding: 10%;">
                    <div name="testcase" style="text-align:center;" id="testcase">
                        <h3>'. $res->name.'</h3>';
    $content .= ($res->design_id == 3 || $res->design_id == 1) ? '<img src="../'. $res->img.'" width="100%" style="height: 200px">' :'';
    $content .="<br>";   
    $content .= '<div style="height: 200px; width: 100%; word-wrap:break-word;"> '. $res->maintext.'</div>';              
    $content .="<br>";
    if($res->design_id == 2 ){
        $content .= '<img src="../'. $res->img.'" width="100%" style="height: 200px">';
    }
    else if($res->design_id == 1){
        $content .= '<img src="../'. $res->img2.'" width="100%" style="height: 200px">';
    }
    
    $content .= "</div></div></div><br>";
    $content .= '<div class="page-break"></div>';
	//$content.="hello";
 }

 $content .='</body>
</html>';

//echo $content;
                    $dompdf->set_option('debugLayoutPaddingBox',false);
					$dompdf->loadHtml($content);

					// (Optional) Setup the paper size and orientation
					$dompdf->setPaper('A4', 'portrait');

					// Render the HTML as PDF
					$dompdf->render();

					// Output the generated PDF to Browser
					$dompdf->stream('magazine.pdf');

?>


