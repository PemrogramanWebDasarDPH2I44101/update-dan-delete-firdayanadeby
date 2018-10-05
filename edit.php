<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit.php</title>
</head>
<body>
	<table>
		<form action="update.php" method="POST">
			<?php
			$id = $_GET['id'];
			$query = "SELECT * FROM siswa WHERE id ='$id'";
			$result = mysqli_query($conn,$query);
			while ($d = mysqli_fetch_array($result)) {
				?>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		<tr>
			<td>nama
				<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>nim
				<input type="text" name="nim" value="<?php echo $d['nim']; ?>">
			</td>
		</tr>
		<tr>
			<td>tgl lahir
				<input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="update">	
			</td>
		</tr>
		<?php
		}
		?>
	</form>
	</table>
</body>
</html>