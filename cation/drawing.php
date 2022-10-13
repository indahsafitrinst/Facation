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
    <title>Drawing |Facation</title>
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
  </br>

  
  <section>
        <h1 align="center">Drawing time</h1>
        <p align="center"><b>pilih gambar dan teknik yang akan kamu gunakan</b></p>
        </br></br></br>
        <h4>Watercolor painting</h4>
        <img src="assets/images/activities/drawing/wc1.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/wc2.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/wc3.jpg" width="300px" height="300px"> 
    </br></br>  
        <h4>Acrylic painting</h4>
        <img src="assets/images/activities/drawing/ac1.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/ac2.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/ac3.jpg" width="300px" height="300px"> 
    </br></br>  
        <h4>Pastel painting</h4>
        <img src="assets/images/activities/drawing/pd.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/pd2.jpg" width="300px" height="300px"> 
        <img src="assets/images/activities/drawing/pd3.jpg" width="300px" height="300px">

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