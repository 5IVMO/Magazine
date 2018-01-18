<?php
session_start();
$id = $_SESSION['id2'];

if ($id == "" || empty($id) || $id = '')
{
	header('Location: admin_login.php');
}
?>