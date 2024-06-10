<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SUREWILL</title>
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
    .kotak{
        width:500px;
        height:500px;
        background-color:white;
        align-items:center;
        justify-content:center;
        display:flex;
        flex-direction:column;
    }
</style>
<body>
<div class="kotak">
    <div>
    <form action="proses.php" method="POST">
    <center> <h2>Tambah Akun</h2></center>
    <p>SILAHKAN ISI TABEL DIBAWAH INI.</p>

    <?php
        include 'koneksi.php';
        $id = $_GET['id_pelanggan'];
            $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE id_pelanggan = '$id'");
            while ($lihat = mysqli_fetch_array($query)){ ?>
            
        <input type="hidden" name="id_pelanggan" value="<?php echo $lihat['id_pelanggan']; ?>">
        <label>username:</label><br> 
        <input style="border-radius: 5px; " type="text" name="username" value="<?php echo $lihat['username']; ?>" required><br>

        <label>password:</label><br>
        <input style="border-radius: 5px;" type="password" name="password" value="<?php echo $lihat['password']; ?>" required><br>

        <label>no. telepon:</label><br>
        <input style="border-radius: 5px;" type="number" name="no_tlp" value="<?php echo $lihat['no_telepon']; ?>" required><br>
        
        <label>alamat:</label><br>
        <input style="border-radius: 5px;" type="text" name="alamat" value="<?php echo $lihat['alamat']; ?>" required><br>

    <?php }?>

        <button type="submit" name="cu" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> EDIT</button>
    </form>
    <div>
</body>
<div>
</html>