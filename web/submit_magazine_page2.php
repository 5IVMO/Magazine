<?php
include 'session.php';
include('connection.php');
$magazine_id=(integer)$_SESSION['current_magazine_id'];
$title = $_GET['title'];
$maintext = $_GET['maintext'];
$image= $_GET['image'];
$design_id = (integer)$_GET['design_id'];
$background_image = $_GET['background'];
$image2 = (isset($_GET['image2'])) ? $_GET['image2'] : null;
$query="Insert Into magazine_page (magazine_id,name,maintext,img,design_id,img2,background_image) VALUES ($magazine_id,'$title', '$maintext','$image',$design_id,'$image2','$background_image')";

  $query = mysqli_query($conn,$query);

  if ($query)

  {

echo "<script>
alert('Magazine Submitted For Admin Approval');
window.location.href='new_magazine.php';
</script>";

  }

  else 

  {
echo "<script>
alert('Failed To submit Magazine');
window.location.href='magazine_page.php';
</script>";

  }
?>