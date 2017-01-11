<?php //session_start(); 


 include("libs/header.ink.php"); ?>


	<article class="content items-list-page">
		<div class="title-search-block">
			<div class="title-block">
				<div class="row">
					<div class="col-md-6">
						<h3 class="title"> Evènements <a  href="controller.php?action=ajouter" class="btn btn-primary btn-sm rounded-s">
						Nouveau
					</a>
                                        <!--
				 -->
                                        <div class="action dropdown"> <button class="btn  btn-sm rounded-s btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Plus....
						</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o icon"></i>
												Mettre à jour
												</a>
												
												<input type="hidden" name="clePrimaire" value="<?php echo $lEvenementChoisi["clePrimaire"]; ?>" />	
												
												<a class="dropdown-item" href="#" data-id="<?php echo $evenement["clePrimaire"]; ?>" role="button" data-toggle="modal" data-target="#confirm-modal">
													<i class="fa fa-close icon"></i>
													Effacer
												</a>   											
											</div>
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
		<h2>Listes</h2>
		    <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
				  <th>
					  <div class="item-col-check">	
					<label class="item-check" id="select-all-items">
						<input type="checkbox" class="checkbox">
						<span></span>
					</label>
					  </div>
				  </th>	
                  <th>Identifiant</th>
                  <th>Type <br><small> 1:sans, 2:PU, 3:PR</small></th>
                  <th>Début</th>
                  <th>Fin</th>
                  <th>De</th>
				  <th>A</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Lieu</th>
				  <th>Places Disponibles</th>
                  <th>Commissions</th>
				  <th>Ordre du jour</th>
				  <th>Admin
					 <div class="item-col item-col-actions-dropdown"> </div>
					</th>	
                </tr>
              </thead>
						   <tbody>
					<?php
								foreach($events->tabEvens as $event){?>
                <tr>
				  <td><div class="item-col-check">	
					 <label class="item-check" id="select-all-items">
						<input type="checkbox" class="checkbox" value="">
						<span></span>
					</label>
					  </div>
				 </td>
                  <td id="row_"><?php echo $event["primaryKee"];?></td>
                  <td>
					  <a href="controller.php?id=<?php echo $event["primaryKee"];?>">
										<?php echo $event["type"]; ?> 
					  </a>
				  </td>
                  <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["ddebut"]; ?>
					 </a>
				  </td>
                   <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["dfin"]; ?>
						</a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["hdebut"]; ?>
					 </a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["hfin"]; ?>
					 </a>
				   </td>
					  <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["titre"]; ?>
					 </a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["description"]; ?>
					 </a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["lieu"]; ?>
					 </a>
				   </td>
				      <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["placesdispos"]; ?>
					 </a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["commissions"]; ?>
					 </a>
				   </td>
				     <td><a href="controller.php?id=<?php echo $event["primaryKee"];?>">
											<?php echo $event["ordredujour"]; ?>
					 </a>
				   </td>
					<td> 
						<div class="item-col fixed item-col-actions-dropdown">
							<div class="item-actions-dropdown">
								<a class="item-actions-toggle-btn"> 
										<span class="inactive">
											<i class="fa fa-cog"></i>
										</span> 
										<span class="active">
											<i class="fa fa-chevron-circle-right"></i>
										</span> 
								</a>
								<div class="item-actions-block">
											<ul class="item-actions-list">
										<li>
											<a class="remove" href="#" type="button" name="supprimer" id="majdelete" data-id="<?php echo $event["primaryKee"];?>" role="button"><i class="fa fa-trash-o"></i>
											</a>													
										</li>
			
										<li>
											<a class="edit" href="controller.php?id=<?php echo $event["primaryKee"]; ; ?>"> <i class="fa fa-pencil"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>

<!--
							<div id="dialog" style="display:none;background-color:green;color:white;height:auto;width:auto;">
									<header></header>
									<blockquote style="font-weight:bold;"></blockquote>
							</div>
-->

						<div id="dialog-confirm" title="Suppression d'Evènements" style="display:none;height:auto;width:auto;">
							<p style="padding-top:20px;"><span class="ui-icon ui-icon-alert" style="float:left; margin:20px 20px 20px 0; text-align:center;"></span>Etes-vous sûr de vouloir supprimer cette ligne ? &nbsp;</p>
						</div>
						
						<div id="dialog-message" title="Supression" style="display:none;height:auto;width:auto;">
							  <p>
								<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
								La suppression de l'événement de la base de données s'est bien déroulé.
							  </p>
						</div>
						
						
						
					</td>					
                </tr>    
				  <?php }?>
				</tbody>			
            </table>
          </div>
		


	<?php include("libs/footer.ink.php")?>