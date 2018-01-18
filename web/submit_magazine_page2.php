<?php
include 'session.php';
include('connection.php');
$magazine_id=$_SESSION['current_magazine_id'];
$title = $_GET['title'];
$maintext = $_SESSION['tmp'];
$image= $_GET['image'];
$design_id = $_GET['design_id'];
$query="Insert Into magazine_page (magazine_id,name,maintext,img,design_id) VALUES ($magazine_id,'$title', '$maintext','$image',$design_id)";

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