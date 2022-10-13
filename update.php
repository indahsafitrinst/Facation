<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <script src="assets/js/jquery-slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Facation | Registration</title>
</head>
<body>

   <?php
    include ("includes/koneksi.php");    
        $no=$_POST['id'];
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        if ($koneksi){
            $sql = "UPDATE akun SET username='$user',password='$pass',nama='$nama',email='$email' WHERE id=$no";
            mysqli_query($koneksi,$sql);
            echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='admin.php' class='btn btn-primary'>Kembali</a></b></p>";
          } elseif ($koneksi->connect_error) {
                echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error</b></p>";
            }       
?>
  

    </section>
</body>
</html>