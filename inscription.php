
<?php




?>

<!Doctype html>
<html lang="fr">
<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
      <link rel="stylesheet" href="main.css">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body ng-app="">

<header>
<div class="topnav" id="myTopnav">
		<a href="index.php" class="active"> <i class="fa fa-fw fa-home"></i>Accueil</a>
		<a href="femme.php">Femmes</a>
        <a href="homme.php">Hommes</a>
        <a href="inscription.php">Inscription</a>
		<a href="connexion.php"> <i class="fa fa-fw fa-user"></i> Connexion</a>
		<a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
		<a href="panier.php"><img src="img/products/icone.png" alt="panier" width="23"></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <span class="fa fa-bars"></span>
		</a>

      </div>
	  </header>


        <div class="inscription">
            <form class="formulaire">
              <fieldset>
                <legend>S'inscrire</legend>
                <div class="form-group">
                  <label for="lastname">Nom</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    placeholder="Votre nom"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="firstname">Prénom</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstname"
                    placeholder="Votre prénom"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="addresHome">Adresse domicile</label>
                  <input
                    type="text"
                    class="form-control"
                    id="addresHome"
                    placeholder="Votre adresse de domicile"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="mail">Mail</label>
                  <input
                    type="email"
                    class="form-control"
                    id="mail"
                    aria-describedby="emailHelp"
                    placeholder="Votre mail"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="tel">Téléphone</label>
                  <input
                    type="text"
                    class="form-control"
                    id="tel"
                    placeholder="Votre numéro de téléphone"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="mdp">Mot de passe</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Votre mot de passe"
                    required
                  />
                </div>
                <button type="submit" class="btn btn-success disabled">
                  S'inscrire
                </button>
              </fieldset>
            </form>
            <div class="container" style="margin-top: 30px">
                <a href="connexion.php">déjà inscrit?</a>
                </div>
          </div>
        </template>
        
        <style>
        legend {
          font-size: 40px;
          margin-top: 30px;
          margin-bottom: 30px;
        }
        .formulaire {
          margin-left: 150px;
          margin-right: 150px;
          font-size: 20px;
          
        }
        .inscription{
            padding-bottom: 100px;
        }
        </style>


<footer class="page-footer font-small unique-color-dark pt-4" style="background-color: black;">

    <!-- Footer Elements -->
    <div class="container">
  
      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">S'inscrire gratuitement</h5>
        </li>
        <li class="list-inline-item">
        <a href="faq.php" class="btn btn-outline-white btn-rounded">FAQ</a>
        </li>
      </ul>
      <!-- Call to action -->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mbtechinfo.fr/"> Mbtechinfo.fr</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  
<script src="main.js"></script>
    </body>
</html>