
<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
      <link rel="stylesheet" href="main.css">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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




	<main class="main-container">

		<section class="section">
			<h2 class="text-center">Welcome!</h2>
			<div class="products">
				
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Beer">
					<h2 class="product__name">parfum10</h2>
					<h3 class="product__price">66</h3>
					<p>Un produit de qualité pour vous émerveiller</p>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
					
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Energy Drink">
					<h2 class="product__name">parfum11</h2>
					<h3 class="product__price">55</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Juice">
					<h2 class="product__name">parfum1</h2>
					<h3 class="product__price">44</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Milk">
					<h2 class="product__name">parfum2</h2>
					<h3 class="product__price">25.50</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Mineral Water">
					<h2 class="product__name">parfum3</h2>
					<h3 class="product__price">64</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Smoothie">
					<h2 class="product__name">parfum4</h2>
					<h3 class="product__price">120</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>


				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Mineral Water">
					<h2 class="product__name">parfum5</h2>
					<h3 class="product__price">64</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Smoothie">
					<h2 class="product__name">parfum6</h2>
					<h3 class="product__price">120</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Smoothie">
					<h2 class="product__name">parfum7</h2>
					<h3 class="product__price">120</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Smoothie">
					<h2 class="product__name">parfum8</h2>
					<h3 class="product__price">120</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>
				<div class="product">
					<img class="product__image" src="img/products/parfum3.jpg" alt="Smoothie">
					<h2 class="product__name">parfum9</h2>
					<h3 class="product__price">120</h3>
					<button class="btn btn-primary" data-action="ADD_TO_CART">Ajouter au panier</button>
				</div>

			</div>
		</section>

		<section class="section">
			<h2 class="text-center"><img src="img/products/icone.png" alt=""> <hr></h2>
			
			<div class="cart"></div>
		</section>

	</main>

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