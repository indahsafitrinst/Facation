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
    <title>Music |Facation</title>
</head>
<body style="background-color: gainsboro;">
    
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
                  <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#activities">Steps</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Guidance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#footer">Contacts</a>
                </li>
              </ul>
            </div> 
          </nav>   
    </section>
  

  <section>
  <strong><h1>MUSIC LIST</h1></strong>
  </br></br></br>
  <div class="row">
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Lenka-Everything at once</h6>
        <audio src="music/Barat-Lenka_Everything_At_Once.mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: lavender">
    <h6>Maroon 5-Feelings</h6>
    <audio src="music/Maroon 5 - Feelings (V album).mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Miley Cyrus-Wrecking Ball</h6>
    <audio src="music/Wrecking Ball - Miley Cyrus - Lyric Video HD.mp4" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: lavender">
    <h6>Yovie and Nuno-Mengejar Mimpi</h6>
    <audio src="music/Yovie and Nuno - Mengejar Mimpi_2.mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Michael Jackson-You are not alone</h6>
        <audio src="music/You Are Not Alone Lyrics (Michael Jackson).mp4" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: lavender">
    <h6>Shawn Mendes-Never be alone</h6>
    <audio src="music/Shawn Mendes - Never Be Alone.mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Yovie and Nuno- Sampai akhir waktu</h6>
    <audio src="music/Yovie & Nuno - Sampai Akhir Waktu.mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: lavender">
    <h6>Shawn Mendes-Stitches</h6>
    <audio src="music/Shawn Mendes - Stitches Lyrics ♥ - Copy.mp4" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Ipang-Sahabat Kecil</h6>
    <audio src="music/Ipang - Sahabat Kecil.mp3" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: lavender">
        <h6>Ipang-Tentang Cinta</h6>
        <audio src="music/Ipang - Tentang Cinta.mp3" width="320" controls></audio>
        </div>
    <div class="col-sm-8" style="background-color: darkgray;">
            <h6>Bruno Mars-Talking to the Moon</h6>
        <audio src="music/Talking To The Moon Bruno Mars Cover wwwcomb.mp3" width="320" controls></audio>
        </div>
  </div>
  </section>

</br>

<!-- ------Footer Section------- -->
<section id="footer">
      <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img src="assets/images/footer-img.png">
              <p>Let's Plan ur Wonderful Vacation with us!. Here you can choose a few activities to do in holiday. Make holiday will be a great time.
                 Let's Plan ur Wonderful Vacation with us!. Here you can choose a few activities to do in holiday. Make holiday will be a great time.
              </p>
            </div>
            <div class="col-md-4 footer-box">
              <p><b>CONTACT US</b></p>
              <p class="fa fa-map-marker"> Medan, Sumatera Utara, Indonesia</p><br>
              <p class="fa fa-phone"> +628 000 000</p><br>
              <p class="fa fa-envelope-o"> facation@site.com</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>SUBCRIBE NEWSLETTER</b></p>
                <input type="email" class="form-control" placeholder="Your Email">
                <button type="button" class="btn btn-primary">Subcribe</button>
            </div>
          </div>
             <hr>
             <p class="copyright">&copy;Copyright By Kelompok 5</p>
      </div>
</section>

<!-- ----Smooth Scroll----- -->
<script src="assets/js/smooth-scroll.js"></script>
<script>
	  var scroll = new SmoothScroll('a[href*="#"]');
</script>


</body>
</html>