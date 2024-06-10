<?php
include 'koneksi.php';
if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "regist") {
        $simpan = mysqli_query($koneksi,"INSERT INTO akun (id_pelanggan, username, password, no_telepon, alamat) VALUES ('',
        '$_POST[username]',
        '$_POST[password]',
        '$_POST[no_tlp]',
        '$_POST[alamat]');") 
        or die (mysqli_error($koneksi));

        if ($simpan) {
            echo "<script>alert('Berhasil Membuat Akun') </script>";
            echo "<script> window.location ='login.php'; </script>";
        } else {
            echo "Gagal mendaftarkan akun";
            header("location: regist.php");
        }
        mysqli_close($koneksi);
    }
    
    if ($_POST['aksi'] == "login") {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password']; 
            if (!empty($username) && !empty($password)) {
                $sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE 
                username='$username' AND password='$password';");
                $ketemu = mysqli_num_rows($sql);
                if ($ketemu == 1) {
                    session_start();
                    while ($user = mysqli_fetch_array($sql)) {
                        $username = $user[1];
                        $password = $user [2];
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        Header("Location:main.php");}
                }else {
                    echo "<script>alert('Username & Password yang Bener MEMEK ') </script>";
                    echo "<script> window.location ='login.php'; </script>";
                }
        
            } else {
                echo "<script> alert('ISI MEK') </script>";
                echo "<script> window.location ='login.php'; </script>";
            }
        }
    }
}

else if (isset($_POST['cu'])) {
    if ($_POST['cu'] == "add") {
            $simpan = mysqli_query($koneksi,"INSERT INTO akun (id_pelanggan, username, password, no_telepon, alamat) VALUES ('',
            '$_POST[username]',
            '$_POST[password]',
            '$_POST[no_tlp]',
            '$_POST[alamat]');") 
            or die (mysqli_error($koneksi));
    
            if ($simpan) {
                echo "<script>alert('Berhasil Menambahkan Akun') </script>";
                echo "<script> window.location ='main.php'; </script>";
            } else {
                echo "Gagal mendaftarkan akun";
                header("location: form_add.php");
            }
            mysqli_close($koneksi);
    }
    else if ($_POST['cu'] == "edit") {
        $edit = mysqli_query($koneksi, "UPDATE akun set 
        id_pelanggan = '$_POST[id_pelanggan]',
        username = '$_POST[username]',
        password = '$_POST[password]',
        no_telepon = '$_POST[no_tlp]',
        alamat = '$_POST[alamat]'
        where id_pelanggan = '$_POST[id_pelanggan]'") or die(mysqli_error($koneksi));
        header("location:main.php");

        if ($edit) {
            header("location: main.php");
        } else {
            echo "Data yang anda masukan gagal";
            header("location: form_edi.php");
        }
    }
}


$id = $_GET['id_pelanggan']; {
    $query = "DELETE FROM akun WHERE id_pelanggan= '$id'";
    $sql = mysqli_query($koneksi, $query);
    header("Location:main.php");
}
?>