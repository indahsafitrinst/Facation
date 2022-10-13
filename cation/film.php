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
    <title>Movies |Facation</title>
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
              </ul>
            </div> 
          </nav>   
    </section>
  </br>

  <section>
    <h1>MOVIE LIST</h1>
</br></br></br>
  <div class="kotak">
      <div class="row">
      <div class="col-sm-4">
          <h3>BIG HERO 6</h3>
          <video src="movie/Big Hero 6.mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>PENTA HOUSE</h3>
      <video src="movie/pentahouse.mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>Start up 01</h3>
      <video src="movie/start up 01.mp4" width="250" height="250" controls></video>
      </div>
      </div>
      </div>
  </br></br>
  <div class="kotak">
      <div class="row">
      <div class="col-sm-4">
          <h3>Aku, benci & cinta</h3>
          <video src="movie/Aku,Benci,Dan Cinta.mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>Air Mata Surga</h3>
      <video src="movie/Air Mata Surga (2015) - 22 Oktober 2015.mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>Negeri van Orange</h3>
      <video src="movie/Negeri Van Orange (2016) Moviedramaguide.mp4" width="250" height="250" controls></video>
      </div>
      </div>
      </div>
  </br></br>
  <div class="kotak">
      <div class="row">
      <div class="col-sm-4">
          <h3>Close Range Love</h3>
          <video src="movie/[360p] LK21.ORG Close Range Love (2014).mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>THE GOOD DOCTOR</h3>
      <video src="movie/the Good Doctor s01 e01.mp4" width="250" height="250" controls></video>
      </div>
      <div class="col-sm-4">
      <h3>Dangal</h3>
      <video src="movie/[720p] LK21.TV - Dangal (2016).mp4" width="250" height="250" controls></video>
      </div>
      </div>
      </div>
      </section>
  
  </section>
</br>

   
<!-- ----Smooth Scroll----- -->
<script src="assets/js/smooth-scroll.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>


</body>
</html>