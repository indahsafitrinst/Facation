<?php
include ("includes/koneksi.php");
if(empty($_SESSION['level'])){	   //kl session kosong dialihkan ke error.php
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
    <title>Facation | <?php echo $_SESSION['nama'] ?></title>
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
                  <a class="nav-link" href="Guidance.php">Guidance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="activities.php">Activities</a>
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


  <section id="admin text-left">
       <div class="container text-center">
           <i><h1 class="text-right">User Area </h1></i>
      </div>
  </section>
  </header>



 <!-------Actvities Section------->

 <section id="services">
       <div class="container text-center">
           <h1 class="tittle">ACTIVITIES</h1>
           <div class="row text-center">
               <div class="col-md-4 services">
                   <img src="assets/images/service1.png" class="services-img">
                   <h4>Music</h4>
                   <p>Mendengar musik mampu membantu memperbaiki suasana hati yang sedang buruk lho. Ayo, bangkitkan semangatmu dengan mendengarkan musik sesuai mood kamu! </p>
                   <a href="music.php"><button type="button" class="btn btn-primary">See More</button></a>
               </div>
               <div class="col-md-4 services">
                   <img src="assets/images/service2.png" class="services-img">
                   <h4>Film</h4>
                   <p>Jenuh? Lelah? Mungkin kamu butuh sedikit hiburan di akhir pekan. Ayo buat daftar film yang akan menemani 'me time' mu! Pastikan genre yang kamu tonton sesuai dengan seleramu ya!</p>
                   <a href="film.php"><button type="button" class="btn btn-primary">See More</button></a>
               </div>
               <div class="col-md-4 services">
                   <img src="assets/images/service3.png" class="services-img">
                   <h4>Tutorial</h4>
                   <p>Punya waktu senggang tapi tidak ingin terbuang? Jangan sia-siakan waktu luangmu! Ayo tetap produktif dengan mempelajari berbagai tutorial disini! Kamu pasti bisa!</p>
                   <a href="tutorial.php"><button type="button" class="btn btn-primary">See More</button></a>
                </div>
           </div>
       </div>
   </section>

  <!-------Steps Section------->

   <section id="activities">
       <div class="container text-center">
           <h1 class="tittle">STEPS</h1>
           <div class="row text-center">
               <div class="col-md-4 activities">
                   <img src="assets/images/holidaycalender.png" class="activities-img">
                   <h4>Holiday Calender</h4>
                   <p>Yuk cek tanggal liburanmu disini! Segarkan semangatmu dengan mengingat kembali bahwa liburan sebentar lagi! Mulai kerjakan tugasmu dari sekarang ya!</p>
                    <a href="holidaycalendar.php"><button type="button" class="btn btn-primary">See More</button><a/>
               </div>
               <div class="col-md-4 activities">
                   <img src="assets/images/holidayplan.jpg" class="activities-img">
                   <h4>Holiday Planning</h4>
                   <p>Ayo, rancang liburanmu agar tidak berantakan! Eits, jangan lupa selesaikan semua tugasmu sebelum liburan ya! Jangan biarkan mereka mengusik indahnya liburanmu!
                  <br><br><a href="holidayplanner.php"><button type="button" class="btn btn-primary">See More</button><a/>
               </div>
               <div class="col-md-4 activities">
                   <img src="assets/images/holidaygreeting.png" class="activities-img">
                   <h4>Holiday is Here!</h4>
                   <p>Yeayy, libur telah tiba! Hore, hore, horeee! Nikmati waktumu ya, abadikan setiap momen liburanmu bersama orang-orang terkasih! Jangan lewatkan setiap canda dan tawa yang tercipta ya!</p>
                   <a href="holidaymemories.php"><button type="button" class="btn btn-primary">See More</button><a/>
                </div>
           </div>
         </div>
   </section>

  </section>
</body>
</html>