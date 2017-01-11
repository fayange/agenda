<?php include("libs/header.ink.php") ?>
	<article class="content items-list-page">
		<div class="title-search-block">
			<div class="title-block">
				<div class="row">
					<div class="col-md-6">
						<h3 class="title"> Evènements <a href="item-editor.php" class="btn btn-primary btn-sm rounded-s">
						Nouveau
					</a>
                                        <!--
				 -->
                                        <div class="action dropdown"> <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Plus....
						</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1"> <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o icon"></i>Mettre à jour</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirm-modal"><i class="fa fa-close icon"></i>Effacer</a>                                                </div>
                                        </div>
                                    </h3>
						<p class="title-description"> Liste des évènements Publics et Privés</p>
					</div>
				</div>
			</div>
			<div class="items-search">
				<form class="form-inline">
					<div class="input-group">
						<input type="text" class="form-control boxed rounded-s" placeholder="Rechercher..."> <span class="input-group-btn">
					<button class="btn btn-secondary rounded-s" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span> </div>
				</form>
			</div>
		</div>
		<div class="card items">
			<ul class="item-list striped">
				<li class="item item-list-header hidden-sm-down">
					<div class="item-row">
						<div class="item-col fixed item-col-check">
							<label class="item-check" id="select-all-items">
								<input type="checkbox" class="checkbox">
								<span></span>
							</label>
						</div>
						<div class="item-col item-col-header fixed item-col-img md">
							<div> <span>Affiches</span> </div>
						</div>
						<div class="item-col item-col-header item-col-title">
							<div> <span>Evènements</span> </div>
						</div>
						<div class="item-col item-col-header item-col-sales">
							<div> <span>Sales</span> </div>
						</div>
						<div class="item-col item-col-header item-col-stats">
							<div class="no-overflow"> <span>Stats</span> </div>
						</div>
						<div class="item-col item-col-header item-col-category">
							<div class="no-overflow"> <span>Catégorie</span> </div>
						</div>
						<div class="item-col item-col-header item-col-author">
							<div class="no-overflow"> <span>Auteur</span> </div>
						</div>
						<div class="item-col item-col-header item-col-date">
							<div> <span>Publier</span> </div>
						</div>
						<div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
					</div>
				</li>
				<li class="item">
					<div class="item-row">
						<div class="item-col fixed item-col-check">
							<label class="item-check" id="select-all-items">
								<input type="checkbox" class="checkbox">
								<span></span>
							</label>
						</div>
						<div class="item-col fixed item-col-img md">
							<a href="item-editor.php">
								<div class="item-img rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
							</a>
						</div>
						<div class="item-col fixed pull-left item-col-title">
							<div class="item-heading">Name</div>
							<div>
								<a href="item-editor.php" class="">
									<h4 class="item-title"> 12 Myths Uncovered About IT &amp; Software </h4>
								</a>
							</div>
						</div>
						<div class="item-col item-col-sales">
							<div class="item-heading">Sales</div>
							<div> 46323 </div>
						</div>
						<div class="item-col item-col-stats no-overflow">
							<div class="item-heading">Stats</div>
							<div class="no-overflow">
								<div class="item-stats sparkline" data-type="bar"></div>
							</div>
						</div>
						<div class="item-col item-col-category no-overflow">
							<div class="item-heading">Category</div>
							<div class="no-overflow"> <a href="">Software</a> </div>
						</div>
						<div class="item-col item-col-author">
							<div class="item-heading">Author</div>
							<div class="no-overflow"> <a href="">Meadow Katheryne</a> </div>
						</div>
						<div class="item-col item-col-date">
							<div class="item-heading">Published</div>
							<div class="no-overflow"> 21 SEP 10:45 </div>
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
		<nav class="text-xs-right">
			<ul class="pagination">
				<li class="page-item"> <a class="page-link" href="">
				Prev
			</a> </li>
				<li class="page-item active"> <a class="page-link" href="">
				1
			</a> </li>
				<li class="page-item"> <a class="page-link" href="">
				2
			</a> </li>
				<li class="page-item"> <a class="page-link" href="">
				3
			</a> </li>
				<li class="page-item"> <a class="page-link" href="">
				4
			</a> </li>
				<li class="page-item"> <a class="page-link" href="">
				5
			</a> </li>
				<li class="page-item"> <a class="page-link" href="">
				Next
			</a> </li>
			</ul>
		</nav>
	</article>
	<?php include("libs/footer.ink.php")?>