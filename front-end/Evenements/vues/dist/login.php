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
                            <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Administration</h1>
					</header>
					<div class="auth-content">
						<p class="text-xs-center">IDENTIFIEZ-VOUS POUR CONTINUER</p>
						<form id="login-form" action="/index.php" method="GET" novalidate="">
							<div class="form-group">
								<label for="username">Identifiant</label>
								<input type="email" class="form-control underlined" name="username" id="username" placeholder="Your email address" required> </div>
							<div class="form-group">
								<label for="password">Mot de passe</label>
								<input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required> </div>
							<div class="form-group">
								<label for="remember">
									<input class="checkbox" id="remember" type="checkbox">
									<span>Se souvenir de moi</span>
								</label> <a href="reset.php" class="forgot-btn pull-right">Mot de passe oublié ?</a> </div>
							<div class="form-group">
								<button type="submit" class="btn btn-block btn-primary">Entrer</button>
							</div>
							<div class="form-group">
								<p class="text-muted text-xs-center">Pas encore de compte ?<a href="signup.php">&nbsp;S'inscrire!</a></p>
							</div>
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

		<script src="js/vendor.js"></script>
		<script src="js/app.js"></script>
	</body>

</html>