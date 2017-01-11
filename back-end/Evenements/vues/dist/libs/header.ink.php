<?php //session_start(); ?>



	<!doctype html>
	<html class="no-js" lang="fr">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title> Interface Administration</title>
		<meta name="description" content="">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="stylesheet" href="../Evenements/vues/dist/css/vendor.css">
		<!--
	<link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
-->
<!--		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
		<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js"></script>-->

		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">
		
		
		<link id="bs-css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<!--		<link  rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css">-->
		<!-- Theme initialization -->
		

		<script>
			var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {};
			var themeName = themeSettings.themeName || '';
			if (themeName) {
				document.write('<link rel="stylesheet" id="theme-style" href="../Evenements/vues/dist/css/app.css-' + themeName + '.css">');
			} else {
				document.write('<link rel="stylesheet" id="theme-style" href="../Evenements/vues/dist/css/app.css">');
			}
		</script>

		<!--<link href="../Evenements/vues/dist/css/app.css">-->


		<!-- Google Tag Manager -->
		<!--
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-PXB3L2');
	</script>
-->
		<!-- End Google Tag Manager -->
		<style>
			/* *******************************************
*		 PERSO
********************************************** */
			
			.datepicker table tr td span.focused,
			.datepicker table tr td span:hover {
				background: #eee none repeat scroll 0 0;
			}
			
			.datepicker table tr td span {
				text-align: center;
				border-radius: 4px;
				cursor: pointer;
				display: block;
				float: left;
				height: 54px;
				line-height: 54px;
				margin: 1%;
				width: 23%;
			}
			
			.dropdown-menu {
				background-clip: padding-box;
				background-color: #fff;
				border: 1px solid rgba(0, 0, 0, 0.15);
				border-radius: 0.25rem;
				color: #373a3c;
				display: none;
				float: left;
				font-size: 1rem;
				left: 0;
				list-style: outside none none;
				margin: 0.125rem 0 0;
				min-width: 10rem;
				padding: 0.5rem 0;
				position: absolute;
				text-align: left;
				top: 100%;
				z-index: 1000;
			}
			
			table {
				margin-right: 10px;
				margin-right: 10px;
			}
			
			th,
			td {
				padding-left: 10px;
				text-align: center;
			}
			
			.datepicker table tr td.today {
				background-color: #ffdb99!important;
				border-color: #ffb733;
				color: #000;
			}
			
			.datepicker table tr td.today {
				background-color: #ffdb99!important;
				border-color: #ffb733;
				color: #000;
			}
			
			.datepicker table tr td.today:hover,
			.datepicker table tr td.today.focused {
				background-color: red!important;
				border-color: #ffb733;
				color: #000;
			}
			
			.datepicker table tr td.new,
			.datepicker table tr td.old {
				color: rgba(128, 128, 128, 0.5);
			}
			
			timeformatExample1:hover,
			timeformatExample2:hover,
			.datepicker table tr td:hover {
				background-color: #85CE36;
				border-color: #ffb733;
				color: #000;
				cursor: grabbing;
			}
			
			.input-group {
				width: 50%;
				margin-left: 20%;
			}
			
			.ui-timepicker-wrapper.ui-timepicker-positioned-top {
				z-index: 2;
			}
			
			.ui-timepicker-list {
				list-style-type: none;
				background-color: white;
				text-align: center!important;
			}
			
			.ui-timepicker-list li {
				margin-left: -60%;
			}
			
			.ui-timepicker-list li:hover {
				background-color: #85CE36;
				cursor: grabbing;
			}
			
			.ui-timepicker-wrapper {
				overflow-y: auto;
				height: 150px;
				width: 6.5em;
				background: #fff;
				border: 1px solid #ddd;
				-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
				-moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
				outline: none;
				z-index: 10001;
				margin: 0;
			}
			
			.brand a {
				text-decoration: none!important;
				color: white!important;
			}
			
			.card th,
			.card td {
				text-align: left;
				font-size: 0.8em;
				border-bottom: 1px solid #e9edf0;
				padding: 10px 20px;
				font-size: inherit;
				font-weight: 600;
				line-height: inherit;
				margin: 0;
			}
			
			thead {
				background-color: #fcfcfd;
			}
			.fa-pencil{
				color:white;
			}
			.table td, .table th, .table thead th {
				vertical-align: middle;
			}

			.maj{margin-left:40%!important; margin-top:3%!important;}
			.sorting_asc, .sorting{cursor: pointer;}
			
			</style>		
	
	</head>

	<body>
		<div class="main-wrapper">
			<div class="app" id="app">
				<header class="header">
					<div class="header-block header-block-collapse hidden-lg-up">
						<button class="collapse-btn" id="sidebar-collapse-btn">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="header-block header-block-search hidden-sm-down">
						<form role="search">
							<div class="input-container"> <i class="fa fa-search"></i>
								<input type="search" placeholder="Rechercher">
								<div class="underline"></div>
							</div>
						</form>
					</div>
<!--
					<div class="header-block header-block-buttons">
						<a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn"> <i class="fa fa-github-alt"></i> <span>View on GitHub</span> </a>
					</div>
-->
					<div class="header-block header-block-nav">
						<ul class="nav-profile">
							<li class="notifications new">
								<a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
    			      <span class="counter">8</span>
    			    </sup> </a>
								<div class="dropdown-menu notifications-dropdown-menu">
									<ul class="notifications-container">
										<li>
											<a href="" class="notification-item">
												<div class="img-col">
													<div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
												</div>
												<div class="body-col">
													<p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="notification-item">
												<div class="img-col">
													<div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
												</div>
												<div class="body-col">
													<p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
												</div>
											</a>
										</li>
										<li>
											<a href="" class="notification-item">
												<div class="img-col">
													<div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
												</div>
												<div class="body-col">
													<p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
												</div>
											</a>
										</li>
									</ul>
									<footer>
										<ul>
											<li> <a href="">
    			           En savoir plus...
    			          </a> </li>
										</ul>
									</footer>
								</div>
							</li>
							<li class="profile dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									<div class="img" style="background-image: url('assets/faces/moi4.png')"> </div> <span class="name">
    			     Stéphanie 
    			    </span> </a>
								<div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
									<a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profil </a>
									<a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notifications </a>
									<a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Paramètres </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../Evenements/vues/dist/login.php"> <i class="fa fa-power-off icon"></i> Login </a>
								</div>
							</li>
						</ul>
					</div>
				</header>
				<aside class="sidebar">
					<div class="sidebar-container">
						<div class="sidebar-header">
							<div class="brand">
								<div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div><a href="controller.php"> &nbsp;Administration</a></div>
						</div>
						<nav class="menu">
							<ul class="nav metismenu" id="sidebar-menu">
								<li class="active">
									<a href="controller.php"> <i class="fa fa-home"></i>Tableau de bord</a>
								</li>
								<li>
									<a href=""> <i class="fa fa-th-large"></i>Evènements<i class="fa arrow"></i> </a>
									<ul>

										<li> <a href="controller.php?type=tous">Listes </a></li>
										<li><a href="controller.php?action=ajouter">Traitements</a></li>
										<li><a href="controller.php?type=table">Tableau</a></li>
										<li><a href="">Réseaux Sociaux</a></li>
										<li><a href="">Statistiques</a></li>
									</ul>
								</li>
								<!--
							<li>
								<a href=""> <i class="fa fa-bar-chart"></i> Charts <i class="fa arrow"></i> </a>
								<ul>
									<li> <a href="charts-flot.html">
    								Flot Charts
    							</a> </li>
									<li> <a href="charts-morris.html">
    								Morris Charts
    							</a> </li>
								</ul>
							</li>
							<li>
								<a href=""> <i class="fa fa-table"></i> Tables <i class="fa arrow"></i> </a>
								<ul>
									<li> <a href="static-tables.html">
    								Static Tables
    							</a> </li>
									<li> <a href="responsive-tables.html">
    								Responsive Tables
    							</a> </li>
								</ul>
							</li>
							<li>
								<a href="forms.html"> <i class="fa fa-pencil-square-o"></i> Forms </a>
							</li>
							<li>
								<a href=""> <i class="fa fa-desktop"></i> UI Elements <i class="fa arrow"></i> </a>
								<ul>
									<li> <a href="buttons.html">
    								Buttons
    							</a> </li>
									<li> <a href="cards.html">
    								Cards
    							</a> </li>
									<li> <a href="typography.html">
    								Typography
    							</a> </li>
									<li> <a href="icons.html">
    								Icons
    							</a> </li>
									<li> <a href="grid.html">
    								Grid
    							</a> </li>
								</ul>
							</li>
							<li>
								<a href=""> <i class="fa fa-file-text-o"></i> Pages <i class="fa arrow"></i> </a>
								<ul>
									<li> <a href="login.html">
    								Login
    							</a> </li>
									<li> <a href="signup.html">
    								Sign Up
    							</a> </li>
									<li> <a href="reset.html">
    								Reset
    							</a> </li>
									<li> <a href="error-404.html">
    								Error 404 App
    							</a> </li>
									<li> <a href="error-404-alt.html">
    								Error 404 Global
    							</a> </li>
									<li> <a href="error-500.html">
    								Error 500 App
    							</a> </li>
									<li> <a href="error-500-alt.html">
    								Error 500 Global
    							</a> </li>
								</ul>
							</li>
							<li>
								<a href="https://github.com/modularcode/modular-admin-html"> <i class="fa fa-github-alt"></i> Theme Docs </a>
							</li>
-->
							</ul>
						</nav>
					</div>
					<footer class="sidebar-footer">
						<ul class="nav metismenu" id="customize-menu">
							<li>
								<ul>
									<li class="customize">
										<div class="customize-item">
											<div class="row customize-header">
												<div class="col-xs-4"> </div>
												<div class="col-xs-4">
													<label class="title">fixed</label>
												</div>
												<div class="col-xs-4">
													<label class="title">static</label>
												</div>
											</div>
											<div class="row hidden-md-down">
												<div class="col-xs-4">
													<label class="title">Sidebar:</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
														<span></span>
													</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="sidebarPosition" value="">
														<span></span>
													</label>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-4">
													<label class="title">Header:</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="headerPosition" value="header-fixed">
														<span></span>
													</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="headerPosition" value="">
														<span></span>
													</label>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-4">
													<label class="title">Footer:</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="footerPosition" value="footer-fixed">
														<span></span>
													</label>
												</div>
												<div class="col-xs-4">
													<label>
														<input class="radio" type="radio" name="footerPosition" value="">
														<span></span>
													</label>
												</div>
											</div>
										</div>
										<div class="customize-item">
											<ul class="customize-colors">
												<li> <span class="color-item color-red" data-theme="red"></span> </li>
												<li> <span class="color-item color-orange" data-theme="orange"></span> </li>
												<li> <span class="color-item color-green active" data-theme=""></span> </li>
												<li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
												<li> <span class="color-item color-blue" data-theme="blue"></span> </li>
												<li> <span class="color-item color-purple" data-theme="purple"></span> </li>
											</ul>
										</div>
									</li>
								</ul>
								<a href=""> <i class="fa fa-cog"></i> Personaliser </a>
							</li>
						</ul>
					</footer>
				</aside>
				<div class="sidebar-overlay" id="sidebar-overlay"></div>