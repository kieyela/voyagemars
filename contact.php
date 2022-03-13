<?php
session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>

<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title>Contacter - Keybat Travel</title>
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
                  if (!empty($_SESSION['login']) ){
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
            <h1>Nous contacter</h1>
            <div class="page-nav">
              <p>
                <a href="index.php">Acceuil</a> &nbsp; | &nbsp;
                <a href="contact.php">Contacte</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="contact-banner mb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="contact-box">
                <div class="cb-circle">
                  <figure class="cb-icon">
                    <i class="fa fa-2x fa-map-marker-alt"></i>
                  </figure>
                </div>
                <p>
                  Toulouse Ynov Campus
                  <br>
                  <span>2 place de l'europe, 31000 Toulouse</span>
                </p>
              </div>
            </div>
            <div class="col-lg-4 spacing-m-center">
              <div class="contact-box">
                <div class="cb-circle">
                  <figure class="cb-icon">
                    <i class="fa fa-2x fa-phone"></i>
                  </figure>
                </div>
                <p>
                  <a href="tel:+33 5 82 95 10 48"> +33 05 82 95 10 48</a>
                </p>
               
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-box">
                <div class="cb-circle">
                  <figure class="cb-icon">
                    <i class="fa fa-2x fa-envelope"></i>
                  </figure>
                </div>
                <p>
                  <a href="ynov@gmail.com">ynov@gmail.com</a
                  >
                </p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="contact-title">
              <h3>Prenez contact avec nous</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl
                vel pretium lectus quam id leo in. Egestas dui id ornare arcu.
              </p>
            </div>
            <br />
            <form
              id="contact-form"
              method="post"
              action="contact.php"
              novalidate="true"
            >
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control custom-form"
                        placeholder="*Nom"
                        required="required"
                        data-error="Le nom est requis."
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control custom-form"
                        placeholder="*Adresse email"
                        required="required"
                        data-error="Une adresse email valide est requise."
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input
                        id="form_phone"
                        type="tel"
                        name="phone"
                        class="form-control custom-form"
                        placeholder="*Veuillez entrer votre téléphone"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea
                        id="form_message"
                        name="message"
                        class="form-control message-form custom-form"
                        placeholder="*Votre message"
                        rows="6"
                        required="required"
                        data-error="Veuillez nous laisser un message."
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <br />
                <div class="row">
                  <div class="col-md-12 btn-send">
                    <p>
                      <input
                        type="submit"
                        class="btn btn-primary"
                        value="Envoyer"
                      />
                    </p>
                  </div>
                  <div class="col-sm-12">
                    <p class="required">
                      * Les champs avec un astérisque sont requis.
                    </p>
                  </div>
                </div>
              </div>
            </form>
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
