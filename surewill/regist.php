
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SUREWILL</title>
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
        height:300px;
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
    <center> <h2>REGISTER</h2></center>
    <p>SILAHKAN ISI TABEL DIBAWAH INI.</p>
        <label>username:</label><br> 
        <input style="border-radius: 5px; " type="text" name="username" required><br>

        <label>password:</label><br>
        <input style="border-radius: 5px;" type="password" name="password" required><br>

        <label>no. telepon:</label><br>
        <input style="border-radius: 5px;" type="number" name="no_tlp" required><br>
        
        <label>alamat:</label><br>
        <input style="border-radius: 5px;" type="text" name="alamat" required><br>

        <button type="submit" name="aksi" value="regist" class="btn btn-primary"><i class="fa fa-floppy-o"></i> REGIST</button>
        <p><a href="login.php">LOGIN</a></p>
    </form>
    </div>
</body>
</div>
</html>