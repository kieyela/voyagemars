<?php
session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>

<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title>Réservation</title>
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
          <a class="navbar-brand" href="index.php">
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
                <div class="dropdown-menu" aria-labelledby="language-selector">
                  <a class="dropdown-item" href="#">
                    <img
                      src="img/united-kingdom-flag-icon-32.png"
                      alt="uk-flag"
                    />
                    en
                  </a>
                  <a class="dropdown-item" href="#">
                    <img src="img/spain-flag-icon-32.png" alt="uk-flag" />
                    es
                  </a>
                </div>
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
            <h1>Réservation</h1>
            <div class="page-nav">
              <p>
                <a href="index.php">Acceuil</a> &nbsp; | &nbsp;
                <a href="destinations.php">Destination</a> &nbsp; | &nbsp;
                <a href="reservation.php">Réservation</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="slide container mt-3 pt-4">
    <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Prenom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">date</label>
          <div class="col-sm-10">
					<input type="date" class="form-control" id="date" placeholder="Enter email" name="date">
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-danger">Submit</button>
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
    <script src="js/main.js"></script>
  </body>
</html>
