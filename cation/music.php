<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
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
                  <a class="nav-link" href="user.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Guidance.php">Guidance</a>
                </li>
                <li class="nav-item">
                  <a style="cursor: pointer;" class="nav-link" href="logout.php">| Logout</a>
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


<!-- ----Smooth Scroll----- -->
<script src="assets/js/smooth-scroll.js"></script>
<script>
	  var scroll = new SmoothScroll('a[href*="#"]');
</script>


</body>
</html>