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
    <title>TRAVEL |Facation</title>
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
                <<li class="nav-item">
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
  
</br></br>
    <section>
        <div class="jumbotron text-center">
            <h1>Travel time</h1>
        </div>
        <div class="halaman">
            <h3>Tour destination</h3>
            <div class="row">
              <div class="col-sm-4" style="background-image: url(assets/images/activities/indonesia.jpg); width: 300px; height: 300px;">
                <h3>Indonesia</h3>
                <button type="button" class="btn btn-light btn-outline-secondary">
                <a href="https://www.indonesia.travel/id/id/home">Indonesia</a></button>
                </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/asia.png); width: 300px; height: 300px;">
                <h3>Asia</h3>
                <button type="button" class="btn btn-light btn-outline-secondary">
                    <a href="https://www.bookmundi.com/t/best-places-to-travel-in-asia-in-2019">Asia</a></button>
              </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/europe.jpg); width: 300px; height: 300px;">
                <h3>Europe</h3>
                <button type="button"class="btn btn-light btn-outline-secondary">
                    <a href="https://travel.usnews.com/rankings/best-europe-vacations/">Europe</a>
                </button>
              </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/usa.jpg);width: 300px; height: 300px;">
                <h3>usa</h3>
                <button type="button"class="btn btn-light btn-outline-secondary">
                    <a href="https://www.touropia.com/tourist-attractions-in-the-usa/">America</a>
                </button>  
              </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/aus.webp); width: 300px; height: 300px;">
                <h3>Australia</h3>
                <button type="button" class="btn btn-light btn-outline-secondary">
                    <a href="https://traveltriangle.com/blog/australia-tourist-attractions/">Australia</a>
                </button>
              </div>
            </div>
          </div>
        </br></br>
        <div class="halaman2">
            <h3> Plan ur travel here</h3>
            <div class="row">
              <div class="col-sm-4" style="background-image: url(assets/images/activities/traveloka.png); width: 300px; height: 300px;">
                <h3>Traveloka</h3>
                <button type="button" class="btn btn-light btn-outline-secondary">
                    <a href="https://www.traveloka.com/id-id/">More info</a>
                </button>
              </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/trip.png); width: 300px; height: 300px; ">
                <h3>Trip.com</h3>
                <button type="button" class="btn btn-light btn-outline-secondary">
                    <a href="<button type="button" class="btn btn-light btn-outline-secondary">
                        <a href="https://id.trip.com/?locale=id_id">More info</a>
                    </button>
                </button>
              </div>
              <div class="col-sm-4" style="background-image: url(assets/images/activities/tripad.png); width: 300px; height: 300px;">
                <h3>Trip advisor</h3>        
                <button type="button" class="btn btn-light btn-outline-secondary">
                    <a href="<button type="button" class="btn btn-light btn-outline-secondary">
                        <a href=https://www.tripadvisor.com/"">More info</a>
                    </button>
              </div>
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