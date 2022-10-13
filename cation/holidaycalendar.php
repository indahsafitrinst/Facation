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
    <title>Holiday Calendar | Facation</title>
</head>
<body style="background-color:lavender;">
    
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

<!---------Holiday Calendar---------->
<section id="Calendar">
  <div class="jumbotron">
    <h1>Holiday Calendar</h1>
    <p.a><strong>check it out!</strong></p>
  </div>
  <div id="calendar">
        <p><img src="assets/images/kalender/1.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/2.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/3.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/4.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/5.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/6.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/7.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/8.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/9.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/10.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/11.jpg" width="600px" height="500px">
          <img src="assets/images/kalender/12.jpg" width="600px" height="500px"></p>
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