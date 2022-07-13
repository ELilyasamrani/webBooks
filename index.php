<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	</head>
	<body>
		<div class="container">
			<?php require "header.php"?>
			<article>
				<div class="row" id="Start">
					<section class="wimg col-xl-12">
						<img src="./main.jpg" class="d-block wimg">
						<div class="overtext">
							<p class="wmsg">Bienvenu à notre Book Store</p>
							<h1 class="wtitle">Mes Livres</h1>
							<p class="wslog">All your books under your finger !</p>
						</div>
					</section>
				</div>
				<div class="row">
					<div class="col-xl-12">
					<div class="d-flex flex-column align-items-center darkplate">
						<h1 class="h3">Choisir son livre , c'est facile, plustôt, c'est très amusant ! </h1>
						<iframe  class="center border border-white " width="560" height="315" src="https://www.youtube.com/embed/mLh-VMq-dsc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					</div>
				</div>
				</div>

				<div class="row services greyplate" id = "Prods">
					<div class="col-xl-12">
					<h1 class="text-center h1 ">Nos Produits :</h1>
					</div>
					<div class="row service">
						<div class="col-xl-12">
							<h2 class="h2 text-center"> Nous vendons des livres </h2>
						</div>
						</div>
						<div class="row service ">
						<div class="col-xl-3">
							<img src="./srv1.jpg" class="d-block srvimg">
						</div>
						<div class="col-xl-9">
							<p class=" srvdesc">Avec son catalogue bien diversifié, notre service présente mille trajets possibles pour un bon prix. Vous pouvez vous procurer vos livres sous de multiples formes :<ol>
							<li> Un livre papier </li>
							<li> Livre électronique (tout format selon votre appareil de lecture)</li>
							<li> Livre audio </li></ol> </p>
						</div>
					</div>

					<div class="row service">
						<div class="col-xl-12">
							<h2 class="h2 text-center"> Nous livrons vos livres </h2>
						</div>
						</div>
					<div class="row service ">
						
						<div class="col-xl-9">
							<p class="srvdesc">
								Notre équipe se charge toujours de satisfaire votre commande dès que vous la lancez sur notre plateforme.
								<br>Notre équipe s'assure que vous :<ol>
								<li> Recevez vos livres à l'heure exacte</li>
								<li> Recevez les livres tels que vous les avez commandés où que vous soyez</li>
								<li> Vous aimez ce que vous avez commandé et vous obtenez la meilleure expérience.</li>
							</ol></p>
						</div>
						<div class="col-xl-3">
							<img src="./srv2.jpg" class="d-block srvimg">
						</div>
					</div>

					<div class="row service">
						<div class="col-xl-12">
							<h2 class="h2 text-center"> Nous éditons vos livres </h2>
						</div>
						</div>
					<div class="row service ">
						
						<div class="col-xl-3">
							<img src="./srv3.jpg" class="d-block srvimg">
						</div>
						<div class="col-xl-9">
							<p class=" srvdesc">Si vous êtes un écrivain intéressé à partager votre livre via notre plateforme, nous vous présentons un large éventail de choix sur la façon de le faire et de commencer à gagner de l'argent grâce à vos compétences en écriture, nous pouvons réviser, éditer et publier votre livre immédiatement, et vous aider à rassembler beaucoup de lecteurs aussi </p>
						</div>
						
					</div>
					</div>
				</div>

				<section class="darkplate" id="forWho">
					<div class="row"><div class="col-xl-12"><h1 class="h1 text-center">Quels-sont nos clients ?</h1><hr></div></div>
					<div class="row">
						<div class="col-xl-4"><div class="card bg-light">
							<div class="card-header"><h3 class="h3 text-center">Ceux qui aiment la lecture</h3></div>
							<div class="card-body">
								<img class="card-img-top" src="./for1.jpg" alt="Reader">
								<p class="card-text">De tous les ages, les cultures et les langues...</p>
							</div>
						</div></div>
						<div class="col-xl-4"><div class="card bg-light">
							<div class="card-header"><h3 class="h3 text-center">Ceux qui aiment l'écriture</h3></div>
							<div class="card-body">
								<img class="card-img-top" src="./for2.jpg" alt="Reader">
								<p class="card-text">De tous les styles, les interêts et les histoires...</p>
							</div>
						</div></div>
						<div class="col-xl-4"><div class="card bg-light">
							<div class="card-header"><h3 class="h3 text-center">Ceux qui aiment le savoir</h3></div>
							<div class="card-body">
								<img class="card-img-top" src="./for3.jpg" alt="Reader">
								<p class="card-text">Les étudiants, les chercheurs et les professeurs de toutes les spécialitées...</p>
							</div>
						</div></div>
					</div>
				</section>

				<section>
				<div class="row cstmrtest" id = "clients">
					<div class="col-xl-12"><h1 class="ptitle text-center">Témoignages des chers clients</h1><hr></div>
					<div class="row">
					<div class="col-xl-8 cstmrblock">
						<p class="cstmrtext">"Mes livres sont tellement géniaux, j'ai cherché beaucoup de livres dans toutes les librairies de ma ville, jusqu'à ce que je le découvre.
Désormais, un clic me suffit pour acheter et lire tous mes livres préférés !"</p>
						<h3 class="cstmrname">Yassmine, Lectrice</h3>
					</div>
					<div class="col-l-4">
						<img src = "./cstmr1.jpg" class="d-block cstmr1" />
					</div>
				</div>
				<div class="row">
					
						<div class="col-l-4">
						
						<img src = "./cstmr2.jpg" class="d-block cstmr1" />
						
					</div>
					<div class="col-xl-8 cstmrblock">
						<p class="cstmrtext">"Je suis passionnée par l'écriture et le partage du savoir, et cette plateforme m'a aider à devenir écrivaine et réaliser mon rêve."</p>
						<h3 class="cstmrname">Mary, écrivaine</h3>
					</div>
					
				</div>

				<div class="row">
					<div class="col-xl-8 cstmrblock">
						<p class="cstmrtext">"C'est sympa ce site, pendant la période de préparation de mes recherches et des examens, j'étais chanceux d'avoir bénéficier des livres et des feuilles de recherches partagés ce qui m'a permit d'augementer ma productivité.</p>
						<h3 class="cstmrname">George, étudiant</h3>
					</div>
					<div class="col-l-4">	
						<img src = "./cstmr3.jpg" class="d-block cstmr1" />
					</div>
					
				</div>
				</div>
					
				</section>
				

				<section id="adresse" class="d-flex flex-column align-items-center greyplate">
					<h1>Notre Adresse :</h1><br>
					<iframe class="border border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5501532.396839586!2d-0.35966250282957374!3d47.678688386381864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e11e57b6ff%3A0x1338ace04de752b3!2sShakespeare%20and%20Company!5e0!3m2!1sfr!2sma!4v1657666895986!5m2!1sfr!2sma&zoom=10" width="100%" height="450px"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</section>

			</article>
		</div>
		<?php require "footer.php" ?>
	</body>
</html>