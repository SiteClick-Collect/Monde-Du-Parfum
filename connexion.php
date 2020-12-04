
<?php




?>

<!Doctype html>
<html lang="fr">
<head>
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
		
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <span class="fa fa-bars"></span>
		</a>

      </div>
	  </header>

    <div ng-app="">
<div class="inscription">
    <form class="formulaire">
      <fieldset>
        <legend>Se connecter</legend>
        <div class="form-group">
          <label for="mail">Mail</label>
          <input
            type="email"
            class="form-control"
            id="mail" ng-model="mail"
            aria-describedby="mail"
            name="myInput" ng-model="myInput" required
          />
          <h1>{{mail}}</h1>
        
        </div>
        <div class="form-group" >
          <label for="mdp">Mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="password" ng-model="password"
            placeholder=""
            required
          />
        </div>
        <button type="submit" class="btn btn-success disabled">
          Se connecter
        </button>
      </fieldset>
      <p>Ce que vous avez entrer est:</p>
<h1>{{myForm.myInput.$valid}}</h1>
    
    </form>
   

   

    <div class="container" style="margin-top: 30px">
    <a href="inscription.php">Pas encore inscrit?</a>
    </div>
  </div>
</div>
  <br/>

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
    .btn-inscription {
      font-size: 20px;
    }
    </style>
    <footer class="page-footer font-small unique-color-dark pt-4" style="background-color: black; padding-top: 200px;">

        <!-- Footer Elements -->
        <div class="container">
      
          <!-- Call to action -->
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <h5 class="mb-1">Inscrivez vous gratuitement</h5>
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