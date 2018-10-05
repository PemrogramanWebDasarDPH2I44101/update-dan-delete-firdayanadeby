<?php
include_once 'db.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM siswa WHERE id = '$id'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header('location: list.php');
	}else {
		die(mysqli_error($conn));
	}
}
?>