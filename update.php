<?php
include_once 'db.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$id = $_POST['id'];

	$query = "UPDATE siswa SET nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir' WHERE id='$id'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header("location: list.php");
	}else {
		die(mysqli_error($conn));
		echo "<a href='edit.php'>kembali</a>";
	}
}

?>