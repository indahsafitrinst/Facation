<?php
include ("includes/koneksi.php");
if(empty($_SESSION['nama'])){	   //kl session kosong dialihkan ke error.php
  header("location: error.php");
}
?>

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
    <title>Facation | Admin</title>
</head>
<body>

<!-- -----Navbar------ -->
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="activities.php">Activities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Guidance.php">Guidance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-disabled="true" disabled>|</a>
                </li>
                <li class="nav-item">
                  <a style="cursor: pointer;" class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div> 
          </nav>   
    </section>

  <header>
  <section id="banner"> 
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                  <div class="text-center">
                  <img src="assets/images/admin.png" class="img-fluid1">
                      <h1>Selamat Datang <br> <?php echo $_SESSION['nama'] ?></h1>
                  </div>
            </div>
        </div>
    </div>
        <img src="assets/images/wave.png" class="bottom-img">
  </section>
  </header>


  <section id="admin">
       <div class="container text-center">
           <h1 class="tittle">Admin Area </h1>
      </div>
      <form action="" method="POST">
            
        <button type="submit" name="daftarakun" class="btn btn-primary">Daftar Akun</button>
      
        <button type="submit" name="daftarposting" class="btn btn-primary">Daftar Posting</button>
      
      </form>
                <!-- <a href="includes/login.php"><button type="button" class="btn btn-primary">All Services</button></a> -->
     </div>

     <?php
        if(isset($_POST['daftarakun'])){
          $query = "SELECT * FROM akun";
          $hasil=mysqli_query($koneksi, $query);

          echo "<table class='table table-bordered' width='300px'>";
          echo "<tr>
          <th>Username</th>
          <th>Password</th>
          <th>Name</th>
          <th>Email</th>
          <th colspan=2>Action</th>";

          foreach($hasil as $data)
          {
          echo "<tr>
          <td>".$data['username']."</td>
          <td>".$data['password']."</td>
          <td>".$data['nama']."</td>
          <td>".$data['email']."</td>";

          // Button Edit
          echo "<td>
          <form method='POST' action='ubah.php'>
          <input hidden type='text' name='id' value=".$data['id'].">
          <button type='submit' name='btnUpdate' class='btn btn-primary'>Update</button>
          </form>
                </td>";

          // Button Delete
          echo "<td>
          <form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>
          <input hidden name='id' type='text' value=$data[id]>
          <button type='submit' name='btnHapus'class='btn btn-primary'>Delete</button>
          </form>
               </td>";

           echo"</tr>";
           }
           echo "</table>";
         }
      ?>
<?php
         if(isset($_POST['btnHapus'])){
           include ('includes/koneksi.php');

           //inisiasi variabel untuk menampung isian id
           $id=$_POST['id'];

           if ($koneksi){
           $sql = "DELETE FROM akun WHERE id=$id";
           mysqli_query($koneksi,$sql);
           echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
           } elseif ($koneksi->connect_error){
                echo "</br></br>";
                 echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $koneksi->connect_error. "</b></p>";
             }
          }          
?>

  </section>
</body>
</html>