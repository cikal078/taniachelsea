<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIH msuk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color:pink; 
        display:flex; 
        flex-direction:column; 
        justify-content:center; 
        align-items:center;
        margin-top:200px;
    }
    th{
        text-align:center;
    }
</style>
<body>
<div class="kotak">
    <div>
<div>
    <button><a href="form_add.php">Tambah</a></button>
    <button><a href="logout.php">Logout</a></button>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

    <?php 
        include 'koneksi.php';
        $query = mysqli_query($koneksi,"SELECT * FROM akun");
        $no = 1;
        while($lihat = mysqli_fetch_array($query)){
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
			<td><?php echo $lihat['id_pelanggan']; ?></td>
			<td><?php echo $lihat['username']; ?></td>
			<td><?php echo $lihat['password']; ?></td>
			<td><?php echo $lihat['no_telepon']; ?></td>
			<td><?php echo $lihat['alamat']; ?></td>
            <td>
            <Button type="button" class="btn btn-warning">
				<a href="form_edit.php?id_pelanggan=<?php echo $lihat['id_pelanggan']?>" style="text-decoration: none; color:black;">Edit
			</a></Button>
			<button type="button" value="delete" class="btn btn-danger">
				<a href="proses.php?id_pelanggan=<?php echo $lihat['id_pelanggan']?>" style="text-decoration: none; color:white">Hapus
			</a></button>
            </td>
        </tr>
    <?php }?>
    </table>
</div>
</body>
</html>