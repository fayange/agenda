<?php
/**
* formulaire.php : Vue permettant de voir les différentes facettes de nos objets
**/
?>


	<!doctype html>
	<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" href="assets/css/style.css">


		<style>
		fieldset.scheduler-border {
				border: 1px groove #ddd !important;
				padding: 0 1.4em 1.4em 1.4em !important;
				margin: 0 0 1.5em 0 !important;
				-webkit-box-shadow: 0px 0px 0px 0px #000;
				box-shadow: 0px 0px 0px 0px #000;
			}
			
			legend.scheduler-border {
				font-size: 1.2em !important;
				width: inherit;
				height: auto;
				/* Or auto */
				padding: 0 10px;
				/* To give a bit of padding on the left and right */
				border-bottom: none;
			}
			
			label {
				font-weight: bolder;
				/*				margin-bottom: 3%;*/
				font-size: 1em;
			}
			
			p {
				font-style: italic;
			}
			
			input:focus,
			textarea:focus {
				animation: 800ms ease-out 0s alternate infinite running glow;
			}
			
			@-webkit-keyframes glow {
				0% {
					border-color: #62c6ea;
					box-shadow: 0 0 5px rgba(0, 187, 255, .2), inset 0 0 5px rgba(0, 187, 255, .1)
				}
				100% {
					border-color: #18BCF9;
					box-shadow: 0 0 20px rgba(0, 187, 255, .6), inset 0 0 10px rgba(0, 187, 255, .4)
				}
			}
			
			@-moz-keyframes glow {
				0% {
					border-color: #62c6ea;
					box-shadow: 0 0 5px rgba(0, 187, 255, .2), inset 0 0 5px rgba(0, 187, 255, .1)
				}
				100% {
					border-color: #18BCF9;
					box-shadow: 0 0 20px rgba(0, 187, 255, .6), inset 0 0 10px rgba(0, 187, 255, .4)
				}
			}
			
			@-o-keyframes glow {
				0% {
					border-color: #62c6ea;
					box-shadow: 0 0 5px rgba(0, 187, 255, .2), inset 0 0 5px rgba(0, 187, 255, .1)
				}
				100% {
					border-color: #18BCF9;
					box-shadow: 0 0 20px rgba(0, 187, 255, .6), inset 0 0 10px rgba(0, 187, 255, .4)
				}
			}
			
			@-ms-keyframes glow {
				0% {
					border-color: #62c6ea;
					box-shadow: 0 0 5px rgba(0, 187, 255, .2), inset 0 0 5px rgba(0, 187, 255, .1)
				}
				100% {
					border-color: #18BCF9;
					box-shadow: 0 0 20px rgba(0, 187, 255, .6), inset 0 0 10px rgba(0, 187, 255, .4)
				}
			}
			
			@keyframes glow {
				0% {
					border-color: #62c6ea;
					box-shadow: 0 0 5px rgba(0, 187, 255, .2), inset 0 0 5px rgba(0, 187, 255, .1)
				}
				100% {
					border-color: #EA4FA5;
					box-shadow: 0 5px 50px rgba(234, 79, 165, .6), inset 0 0 60px rgba(234, 79, 165, .4)
				}
			}
			
			.btn.btn-primary {
				margin-top: 3%;
				margin-left: 40em;
			}
			
			h1 {
				text-align: center;
				margin-bottom: 5%;
				margin-top: 10%;
			}
			
			li {
				text-decoration: none;
				list-style-type: none;
				margin-top: 1.5em;
				margin-left: 4em;
				font-weight: bolder;
				font-size: 1.3em;
			}
			
			li a:hover {
				text-decoration: none;
				color: crimson;
			}
			
			.btn.btn-primary:hover {
				background-color: crimson;
				border: 2px solid transparent;
			}
			
			:-moz-placeholder {
				font-style: italic!important;
				font-size: 0.8em!important;
				opacity: 0.6;
			}
			
			::-webkit-input-placeholder {
				font-style: italic!important;
				font-size: 0.8em!important;
				opacity: 0.6;
			}
			
			:-ms-input-placeholder,
			{
				font-style: italic!important;
				font-size: 0.8em!important;
				opacity: 0.6;
			}
			
			:-moz-placeholder {
				font-style: italic!important;
				font-size: 0.8em!important;
				opacity: 0.6;
			}
			
			h2 {
				font-size: 1em;
			}
			
			.jumbotron {
				background: url(../Evenements/vues/agenda1.jpg) no-repeat scroll 0 0;
				background-size: cover;
			}
			
			h1,
			p,
			a,
			h2,
			footer, h3 {
				color: white;
			}
			
			.col-md-4 {
				border-left: 3px solid gray;
				/*				border-right: 3px solid gray;*/
			}
			
			.under {
				text-decoration: underline;
			}
			
			.container {
				padding: 5%;
				background-color: rgba(0, 0, 0, 0.6);
			}
			
			a {
				animation: 800ms ease-out 0s alternate infinite running glow;
			}
		}
		</style>
	</head>

	<body>


		<div class="jumbotron">
			<div class="container">
				<h1>Notre Agenda</h1>
				<h3 align="center" ><?php echo $titre?></h3>
				<p align="center" class="deb">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus  &raquo;</a></p>
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-12">
						<div style="float:left;float:right;">
						<a href="controllerjl.php?type=public" title="Evénements publics">Evènements Public par date</a>
					</div>
					<div style="float:left;float:right;">
					<a href="controllerjl.php?type=prive" title="Evénements prives">&nbsp;&nbsp;&nbsp;&nbsp;Evènements Privé par date&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
					<div style="float:left;float:right;">
						<a href="controllerjl.php?type=tous" title="Tous les Evènements">&nbsp;&nbsp;&nbsp;&nbsp;Tous les Evènements par date</a>
					</div>
					<br>
					<br>
					<br>
					<br>
						<?php
								foreach($events->tabPrive as $event){?>
				<div class="col-md-4">
						<img src="../Evenements/vues/prive.jpg" alt="" width="100%">
						<br>
						<br>
						<br>
						<h2 class="under"> Evènement N°  <?php echo $event["primaryKee"];?> </h2>
						<br>
						<p><span class="under">Date de début :</span>
							<?php echo $event["ddebut"];?>
						</p>
						<p><span class="under">Date de fin :</span>
							<?php echo $event["dfin"];?>
						</p>
						<br>
						<p><span class="under">Heure de début :</span>
							<?php echo $event["hdebut"];?>
						</p>
						<p><span class="under">Fin prévu de l'évènement:</span>
							<?php echo $event["dfin"];?>
						</p>
						<br>
						<p><span class="under">Titre de l'évènement:</span>
							<?php echo $event["titre"];?>
						</p>
						<p><span class="under">Description :</span>
							<?php echo $event["description"];?>
						</p>
						<br>
						<p><span class="under">Commissions :</span>
							<?php echo $event["commissions"];?>
						</p>
						<p><span class="under">Ordre du jour :</span>
							<?php echo $event["ordredujour"];?>
						</p>
						<p><a class="btn btn-default" href="controllerjl.php?id=<?php echo $event["primaryKee"];?>" role="button" target="_blank">Voir les détails &raquo;</a></p>
						</div>
							<?php }?>
				
				</div>
				</div>
			</div>
			<hr>
			<footer>
				<p>&copy; 2016 ToYa Design, Inc.</p>
			</footer>
		
		<!-- /container -->


		<!-- Bootstrap core JavaScript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>



	</body>

	</html>