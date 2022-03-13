<?php
session_start();
require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title>Bienvenue sur LSD</title>
    <meta
      charset="utf-8"
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <!--Fontawesome CDN-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a class="navbar-brand">
          <img src="img/LSD.png"  width = "50%" padding="20px" text-align="center" alt="Logo LSD" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li>
              <h4><a class="nav-link" href="index.php">Acceuil</a></h4>  
              </li>
              <li>
               <h4><a class="nav-link" href="contact.php">Contact</a></h4> 
              </li>
              <li>
                <h4><a class="nav-link" href="destinations.php">Mes Réservations</a></h4>
              </li>
             
            
              <li class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="language-selector"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img src="img/france-flag-icon-32.png" alt="french-flag" />
                  fr
                </a>
              </li>
              <li class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="agent-profile"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-user"></i>
                  <?php if (!empty($_SESSION['login'])){ echo $_SESSION['agent']; } else { echo "Espace Agent";}   ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="agent-profile">
                  <?php
                  if (empty($_SESSION['login']) ){
                    echo '<a class="dropdown-item" href="login.php">Connexion</a>';
                  } else {
                    echo '<a class="dropdown-item" href="logout.php">Déconnexion</a>';
                  }
                  ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="welcome-container">
        <div class="container">
          <div class="pages-title">
            <h3>LUCY IN THE SKY</h3>
            <div class="page-nav"></div>
          </div>
        </div>
      </div>
    </header>
    <section id="popular_destination" class="popular_destination pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h2 style="color: #000">
                Décrouvrez les Destinations les plus prisées
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="single-deal">
              <a href="#">
                <figure class="effect-sadie">
                  <img src="img/Capture1.png" alt="country-1" />
                  <figcaption>
                    <h4><i class="fa fa-map-marker-alt"></i></h4>
                    <div class="destination-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <!--- END GRID -->
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="single-deal">
              <a href="#">
                <figure class="effect-sadie">
                  <img src="img/capture2.png" alt="country-1" />
                  <figcaption>
                    <h4><i class="fa fa-map-marker-alt"></i></h4>
                    <div class="destination-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <!--- END GRID -->
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="single-deal">
              <a href="#">
                <figure class="effect-sadie">
                  <img src="img/Capture3.png" alt="country-1" />
                  <figcaption>
                    <h4><i class="fa fa-map-marker-alt"></i></h4>
                    <div class="destination-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <!--- END GRID -->
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="why-us section-padding">

     <div class="container">
        <div class="row">
          <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
            <div class="section-title text-center">
                <h3>Les chiffres ne mentent pas</h3>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-counter">
              <i class="fa fa-user-friends fa-2x"></i>
              <div class="counter-content">
                <h2 class="counter-num">250</h2>
                <p>Clients accompagnés <span></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-counter">
              <i class="fa fa-2x fa-plane-departure"></i>
              <div class="counter-content">
                <h2 class="counter-num">97</h2>
                <p>Destinations <span></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-counter">
              <i class="fa fa-2x fa-calendar-alt"></i>
              <div class="counter-content">
                <h2 class="counter-num">5</h2>
                <p>Années à votre service <span></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-counter">
              <i class="fa fa-2x fa-star"></i>
              <div class="counter-content">
                <h2 class="counter-num">1</h2>
                <p>Expérience unique <span></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="blog-articles" class="blog-articles">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h4 style="color: #000">
                Nos derniers articles  Pour rester branché
              </h4>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="card-deck">
            <div class="card" style="width: 18rem">
              <img
                src="img/Capture8.png"
                class="card-img-top"
                alt="nager-goudron"
              />
              <div class="card-body">
                <h5 class="card-title">Touriste-1</h5>
                <div class="card-subtitle mb-2 small">
                  <span style="color: #fc5b62">
                    <i class="fa fa-clock"></i>
                    15 Mai 2020
                  </span>
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Quam elementum pulvinar etiam non quam.
                </p>
                <a href="#" class="post-btn">
                  En savoir plus <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="card" style="width: 18rem">
              <img
                src="img/Capture6.png"
                class="card-img-top"
                alt="chaussures"
              />
              <div class="card-body">
                <h5 class="card-title">Touriste-2</h5>
                <div class="card-subtitle mb-2 small">
                  <span style="color: #fc5b62">
                    <i class="fa fa-clock"></i>
                    06 Octobre 2020
                  </span>
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Quam elementum pulvinar etiam non quam.
                </p>
                <a href="#" class="post-btn">
                  En savoir plus<i class="fa fa-arrow-right"></i>
              
              </a>
              </div>
            </div>
            <div class="card" style="width: 18rem">
              <img
                src="img/Capture7.png"
                class="card-img-top"
                alt="deep-south-america"
              />
              <div class="card-body">
                <h5 class="card-title">Touriste-3</h5>
                <div class="card-subtitle mb-2 small">
                  <span style="color: #fc5b62">
                    <i class="fa fa-clock"></i>
                    15 Janvier 2021
                  </span>
                </div>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Quam elementum pulvinar etiam non quam.
                </p>
                <a href="#" class="post-btn">
                  En savoir plus <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <figure class="footer-logo">
          <img src="img/LSD.png"  width = "50%" padding="20px" text-align="center" alt="Logo LSD" />
        </figure>
        <ul class="footer-menu d-flex justify-content-center">
          <li><a href="index.php">ACCEUIL</a></li>
          <li><a href="destinations.php">DESTINATIONS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        
        </ul>

        <div class="footer-social d-flex justify-content-center">
          <a href="#">
            <div><i class="fab fa-facebook-f"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-twitter"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-instagram"></i></div>
          </a>
          <a href="#">
            <div><i class="fab fa-youtube"></i></div>
          </a>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js">
  
    <?php
        
    ?>
        
    </script>
  </body>
</html>

