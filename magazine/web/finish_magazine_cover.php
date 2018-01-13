<?php
include 'session.php';
include('connection.php');
$user_id = $_SESSION['id'];
$title = $_GET['title'];
$maintext = $_SESSION['tmp'];
$image= $_GET['image'];
$design_id = $_GET['design_id'];
$query="Insert Into magazine (user_id,name,maintext,img,design_id) VALUES ($user_id,'$title', '$maintext','$image',$design_id)";

  $query = mysqli_query($conn,$query);

  if ($query)

  {
$query="SELECT MAX(id) as id from magazine where user_id = $user_id";
$query = mysqli_query($conn,$query);
$res = mysqli_fetch_object($query);
$_SESSION['current_magazine_id'] = $res->id;
echo "<script>
alert('Magazine Created Success. Start Work In Magazine Pages');
window.location.href='magazine_page.php';
</script>";

  }

  else 

  {
echo "<script>
alert('Failed To Create New Magazine');
 window.location.href='new_magazine.php';
</script>";

  }
?>