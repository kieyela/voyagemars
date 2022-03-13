<?php
session_start();

require_once __DIR__.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."utils.php";
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Keybat Travel - Connexion</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--Bootsrap 4 CDN-->
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

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <div class="card-header">
            <h3>
              <a href="index.php">
                <img src="img/logo-white.png" alt="logo" />
              </a>
              <span class="small">| Espace Agent</span>
            </h3>
          </div>
          <div class="card-body">
            <?php
            if (!empty($_SESSION["logged"]) && !$_SESSION['logged']){
echo'<div class="alert-danger alert">Nom d\'utilisateur ou mot de passe incorrects.</div>';

            }
            ?>
            <form action="do-login.php" method="POST">
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  name="username"
                  placeholder="exemple@domain.com"
                />
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  placeholder="Mot de passe"
                />
              </div>
              <div class="row align-items-center remember">
                <input type="checkbox" name="remember"/>Souviens-toi de moi
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Connexion"
                  class="btn float-right login_btn"
                />
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center">
              <a href="#">Mot de passe oublié?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
