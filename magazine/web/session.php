<?php
session_start();
$id = $_SESSION['id'];

if ($id == "" || empty($id) || $id = '')
{
	header('Location: index.php');
}
?>