<?php include("libs/header.ink.php"); 
//phpinfo();

?>


	<div class="sidebar-overlay" id="sidebar-overlay"></div>
	<article class="content dashboard-page">
		<section class="section">
			<div class="row sameheight-container">
				<div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
					<div class="card sameheight-item stats" data-exclude="xs">
						<div class="card-block">
							<div class="title-block">
								<h4 class="title"> Statistiques </h4>
								<p class="title-description"> Site internet
									<a href="">
									</a>
								</p>
							</div>
							<div class="row row-sm stats-container">
								<div class="col-xs-12 col-sm-6 stat-col">
									<div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
									<div class="stat">
										<div class="value"> 5407 </div>
										<div class="name"> Evènements actifs </div>
									</div>
									<progress class="progress stat-progress" value="75" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 75%;"></span>
										</div>
									</progress>
								</div>
								<div class="col-xs-12 col-sm-6 stat-col">
									<div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
									<div class="stat">
										<div class="value"> 78464 </div>
										<div class="name"> Evènements vendus </div>
									</div>
									<progress class="progress stat-progress" value="25" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 25%;"></span>
										</div>
									</progress>
								</div>
								<div class="col-xs-12 col-sm-6  stat-col">
									<div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
									<div class="stat">
										<div class="value"> €80.560 </div>
										<div class="name"> Bénéfice mensuel </div>
									</div>
									<progress class="progress stat-progress" value="60" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 60%;"></span>
										</div>
									</progress>
								</div>
								<div class="col-xs-12 col-sm-6  stat-col">
									<div class="stat-icon"> <i class="fa fa-users"></i> </div>
									<div class="stat">
										<div class="value"> 359 </div>
										<div class="name"> Nombre d'usagers </div>
									</div>
									<progress class="progress stat-progress" value="34" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 34%;"></span>
										</div>
									</progress>
								</div>
								<div class="col-xs-12 col-sm-6  stat-col">
									<div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
									<div class="stat">
										<div class="value"> 59 </div>
										<div class="name"> Traitements </div>
									</div>
									<progress class="progress stat-progress" value="49" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 49%;"></span>
										</div>
									</progress>
								</div>
								<div class="col-xs-12 col-sm-6 stat-col">
									<div class="stat-icon"> <i class="fa fa-euro"></i> </div>
									<div class="stat">
										<div class="value"> €780.064 </div>
										<div class="name"> Résultat </div>
									</div>
									<progress class="progress stat-progress" value="15" max="100">
										<div class="progress">
											<span class="progress-bar" style="width: 15%;"></span>
										</div>
									</progress>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-xs-12 col-sm-12 col-md-6 col-xl-7 history-col">
					<div class="card sameheight-item" data-exclude="xs">
						<div class="card-header card-header-sm bordered">
							<div class="header-block">
								<h3 class="title">Historique</h3>
							</div>
							<ul class="nav nav-tabs pull-right" role="tablist">
								<li class="nav-item"> <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visites</a> </li>
								<li class="nav-item"> <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Téléchargements</a> </li>
							</ul>
						</div>
						<div class="card-block">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active fade in" id="visits">
									<p class="title-description"> Nombre de visites au cours des 30 derniers jours</p>
									<div id="dashboard-visits-chart"></div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="downloads">
									<p class="title-description"> Nombre de téléchargements au cours des 30 derniers jours</p>
									<div id="dashboard-downloads-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="row sameheight-container">
				<div class="col-xl-8">
					<div class="card sameheight-item items" data-exclude="xs,sm,lg">
						<div class="card-header bordered">
							<div class="header-block">
								<h3 class="title"> Evènemements </h3> 
								<button type="submit" name="ajouter" class="btn btn-primary" value="" id="ajouter">
									<a href="controller.php?action=ajouter">Nouveau</a>
								</button>
            			</div>
							<div class="header-block pull-right">
								<label class="search">
									<input class="search-input" placeholder="rechercher...">
									<i class="fa fa-search search-icon"></i>
								</label>
								<div class="pagination">
									<a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-up"></i> </a>
									<a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-down"></i> </a>
								</div>
							</div>
						</div>
<!--
						<ul class="item-list striped">
							<li class="item item-list-header hidden-sm-down">
								<div class="item-row">
									<div class="item-col item-col-header fixed item-col-img xs"></div>
									<div class="item-col item-col-header item-col-title">
										<div> <span>Nom</span> </div>
									</div>
									<div class="item-col item-col-header item-col-sales">
										<div> <span>Ventes</span> </div>
									</div>
									<div class="item-col item-col-header item-col-stats">
										<div class="no-overflow"> <span>Statistiques</span> </div>
									</div>
									<div class="item-col item-col-header item-col-date">
										<div> <span>Publiés</span> </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> 12 Myths Uncovered About IT &amp; Software </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 4958 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>

									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 22 SEP 10:45 </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> 50% of things doesn&#x27;t really belongs to you </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 192 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>
									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 21 SEP 10:45 </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 2143 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>
									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 21 SEP 10:45 </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/why_this/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> 10 tips of Object Oriented Design </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 124 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>
									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 21 SEP 10:45 </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/w7download/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> Sometimes friend tells it is cold </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 10214 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>
									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 21 SEP 10:45 </div>
									</div>
								</div>
							</li>
							<li class="item">
								<div class="item-row">
									<div class="item-col fixed item-col-img xs">
										<a href="">
											<div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/pankogut/128.jpg)"></div>
										</a>
									</div>
									<div class="item-col item-col-title no-overflow">
										<div>
											<a href="" class="">
												<h4 class="item-title no-wrap"> New ways of conceptual thinking </h4>
											</a>
										</div>
									</div>
									<div class="item-col item-col-sales">
										<div class="item-heading">Ventes</div>
										<div> 3217 </div>
									</div>
									<div class="item-col item-col-stats">
										<div class="item-heading">Statistiques</div>
										<div class="no-overflow">
											<div class="item-stats sparkline" data-type="bar"></div>
										</div>
									</div>
									<div class="item-col item-col-date">
										<div class="item-heading">Publiés</div>
										<div> 21 SEP 10:45 </div>
									</div>
								</div>
							</li>
						</ul>
-->
							<div class="form-group" align="center">
						<table>
							<thead>
								<tr>
<!--
									<th>Identifiant</th>
									<th>Type</th>
-->
									<th>Titre</th>
									<th>Début</th>
									<th>Fin</th>
									<th>De</th>
									<th>A</th>									
									<th>Description</th>
<!--
									<th>lieu</th>
									<th>placesdispos</th>
									<th>commissions</th>
									<th>ordredujour</th>
-->
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($events->tabEvens as $event){?>
									<tr>
<!--
										<td>
											<?php echo $event["primaryKee"];?>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["type"]; ?>	
											</a>
										</td>
-->
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["titre"]; ?>
											</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["ddebut"]; ?>
										</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["dfin"]; ?>
											</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["hdebut"]; ?>
											</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["hfin"]; ?>
											</a>
										</td>
										
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["description"]; ?>
											</a>
										</td>
<!--
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["lieu"]; ?>
											</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["placesdispos"]; ?>
											</a>
										</td>
										<td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["commissions"]; ?>>
											</a>
										</td><td>
											<a href="controller.php?id=<?php echo $event["primaryKee"];?>">
												<?php echo $event["ordredujour"]; ?>
											</a>
										</td>
-->
									</tr>
								

									<?php }?>
							</tbody>

							<tfoot>
							</tfoot>
						</table>
					</div>
					</div>
				</div>
				<div class="col-xl-4">
						<div class="card tasks sameheight-item" data-exclude="xs,sm">
						<div class="card-header bordered">
							<div class="header-block">
								<h3 class="title"> A faire </h3>
							</div>
							<div class="header-block pull-right"> <a href="" class="btn btn-primary btn-sm rounded pull-right">
                            Nouveau
                        </a> </div>
						</div>
						<div class="card-block">
							<div class="tasks-block">
								<ul class="item-list">
										<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox" checked="checked">
													<span>BACK-END</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox" checked="checked">
													<span>Importer les classes nécessaires pour le fonctionnement du contrôleur</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox" checked="checked">
													<span>Savoir si des données ont été postées et agir en conséquence : Ajouter ou Modifier l'information</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span> Inspecter les données de la requête HTTP ($_GET) pour savoir ce que vous avez à faire :<br>
														*	- Afficher la liste des événements de votre base de données<br>
														*	- ou Supprimer un événement dont vous connaîtrez l'id<br>
														*	- Afficher le formulaire d'ajout d'un événement<br>
														*	- Afficher le formulaire de mise à jour d'un événement</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span>Charger la vue correspondante à ce qui a été défini à l'étape 3</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span>FRONT-END</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span> update 1 : Récupérer tous les événements de la base de données<br>
														*(@see back-end/evenements/evenements.class.php::select()</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span>update 2 : Boucler sur tous les événements et à chaque occurrence :<br>
														*	Créer un objet (EvenementPublic ou EvenementPrive) en fonction de la valeur de la colonne type<br>
														*	Ajouter l'objet créé à la collection des objets de l'agenda @see agenda::addEvenement()</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span>update 3 : Inspecter le contexte pour agir en conséquence :<br>
														*	- Afficher TOUS les événements triés par date<br>
														*	- N'afficher QUE les événements publics triés par date<br>
														*	- N'afficher QUE les événements privés triés par date<br>
														* Appeler les méthodes de la classe Agenda (getAllBy(), ...)</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item">
										<div class="item-row">
											<div class="item-col item-col-title">
												<label>
													<input class="checkbox" type="checkbox">
													<span>Charger la vue correspondante</span>
												</label>
											</div>
											<div class="item-col fixed item-col-actions-dropdown">
												<div class="item-actions-dropdown">
													<a class="item-actions-toggle-btn"> <span class="inactive">
                                                        <i class="fa fa-cog"></i>
                                                    </span> <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                    </span> </a>
													<div class="item-actions-block">
														<ul class="item-actions-list">
															<li>
																<a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
															</li>
															<li>
																<a class="check" href="#"> <i class="fa fa-check"></i> </a>
															</li>
															<li>
																<a class="edit" href="item-editor.php"> <i class="fa fa-pencil"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section map-tasks">
			<div class="row sameheight-container">
				<div class="col-md-8">
					<div class="card sameheight-item" data-exclude="xs,sm">
						<div class="card-header">
							<div class="header-block">
								<h3 class="title"> Ventes par pays </h3>
							</div>
						</div>
						<div class="card-block">
							<div id="dashboard-sales-map" style="width: 100%; height: 400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card sameheight-item sales-breakdown" data-exclude="xs,sm,lg">
						<div class="card-header">
							<div class="header-block">
								<h3 class="title"> Ventilation des ventes</h3>
							</div>
						</div>
						<div class="card-block">
							<div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>


	<?php include("libs/footer.ink.php")?>