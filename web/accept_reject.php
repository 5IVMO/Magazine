<?php 
include 'connection.php';
$id = $_GET['id'];
$status = $_GET['status'];

$query="Update magazine set status = $status where id = $id";

  $query = mysqli_query($conn,$query);

  if ($query)

  {

echo "<script>
alert('Success');
window.location.href='admin_dashboard.php';
</script>";

  }

  else 

  {
echo "<script>
alert('Failed');
window.location.href='admin_dashboard.php';
</script>";

  }

?>