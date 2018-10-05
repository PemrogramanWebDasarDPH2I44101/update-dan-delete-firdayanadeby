<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>list.php</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>nama &nbsp &nbsp &nbsp &nbsp &nbsp</th>
            <th>nim</th>
            <th>tgl_lahir</th>
            <th>action</th>
        </thead>
        <tbody>
<?php
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['tgl_lahir']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['Id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['Id']; ?>" onclick="return confirm('apakah anda yakin?">Delete</a></td>
    </tr>
    <?php
        }
    }else {
        echo "no result";
    }
?>
</tbody>
</table>
<br>
<a href="form.php">tambah data</a>

</body>
</html>
