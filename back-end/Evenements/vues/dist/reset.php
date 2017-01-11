<!doctype html>
<html class="no-js" lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Interface Administration</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->
	<link rel="stylesheet" href="css/vendor.css">
	<!--
	<link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
-->
	<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js"></script>-->

	<link id="bs-css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


	<!-- Theme initialization -->
	<script>
		var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {};
		var themeName = themeSettings.themeName || '';
		if (themeName) {
			document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
		} else {
			document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
		}
	</script>
	</head>

<body>
	<div class="auth">
		<div class="auth-container">
			<div class="card">
				<header class="auth-header">
					<h1 class="auth-title">
                            <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Administration </h1>
				</header>
				<div class="auth-content">
					<p class="text-xs-center">RECUPERATION DU MOT DE PASSE</p>
					<p class="text-muted text-xs-center"><small>Entrer votre adresse email pour recevoir votre nouveau mot de passe</small></p>
					<form id="reset-form" action="/index.php" method="GET" novalidate="">
						<div class="form-group">
							<label for="email1">Email</label>
							<input type="email" class="form-control underlined" name="email1" id="email1" placeholder="Votre adresse email" required> </div>
						<div class="form-group">
							<button type="submit" class="btn btn-block btn-primary">Récupérer</button>
						</div>
						<div class="form-group clearfix"> <a class="pull-left" href="login.php">S'identifier</a> <a class="pull-right" href="signup.php">S'inscrire !</a> </div>
					</form>
				</div>
			</div>
			<div class="text-xs-center">
				<a href="index.php" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Retour à l'interface d'administration </a>
			</div>
		</div>
	</div>
	<!-- Reference block for JS -->
	<div class="ref" id="ref">
		<div class="color-primary"></div>
		<div class="chart">
			<div class="color-primary"></div>
			<div class="color-secondary"></div>
		</div>
	</div>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-80463319-2', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="js/vendor.js"></script>
	<script src="js/app.js"></script>
</body>

</html>