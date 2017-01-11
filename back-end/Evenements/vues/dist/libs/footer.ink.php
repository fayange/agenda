<footer class="footer">
	<!--
		<div class="footer-block buttons">
			<iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
		</div>
-->
	<div class="footer-block author">
		<ul>
			<li> Design <a href="https://toya-design.com">&copy;2017 Toya Design</a> </li>
			<!--				<li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>-->
		</ul>
	</div>
</footer>
<div class="modal fade" id="modal-media">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Fermer</span>
				</button>
				<h4 class="modal-title">Bibliothèque</h4>
			</div>
			<div class="modal-body modal-tab-container">
				<ul class="nav nav-tabs modal-tabs" role="tablist">
					<li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallerie</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Téléchargement</a> </li>
				</ul>
				<div class="tab-content modal-tab-content">
					<div class="tab-pane fade" id="gallery" role="tabpanel">
						<div class="images-container">
							<div class="row">
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="image-container">
										<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade active in" id="upload" role="tabpanel">
						<div class="upload-container">
							<div id="dropzone">
								<form action="controller.php" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
									<div class="dz-message-block">
										<div class="dz-message needsclick"> Déposer vos fichiers ici ou cliquer pour les télécharger </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				<button type="button" class="btn btn-primary">Sélectionner</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="confirm-modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="fa fa-warning"></i> Alerte</h4>
			</div>
			<div class="modal-body">
				<p>Etes vous sur de votre choix ?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Oui</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.4/jquery-ui.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="../Evenements/vues/dist/js/vendor.js"></script>

<script src="../Evenements/vues/dist/js/app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

<!--

<script src="../Evenements/vues/dist/js/vendor.js"></script>
-->
<script src="../Evenements/vues/dist/js/jquery.timepicker.min.js"></script>
<script>
	$(function () {
		$('#hdebut').timepicker({
			'timeFormat': 'H:i:A'
		});
		$('#hfin').timepicker({
			'timeFormat': 'h:i A'
		});
	});
</script>

<!--<script src="../Evenements/vues/dist/js/app.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="../Evenements/vues/dist/js/bootstrap-datepicker.fr.min.js"></script>
<script type="text/javascript">
	$('.input-sm').datepicker({
		language: 'fr'
	});
</script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
    $('#example').DataTable( {		
        "language": {
            "lengthMenu": "Afficher _MENU_ enregistrements par page",
            "zeroRecords": "Aucuns résultats",
            "info": "Afficher page _PAGE_ à _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",	
			"search":         " Rechercher  ",
			"paginate": {
				"first":      "Premier",
				"last":       "Dernier",
				"next":       "Prochain",
				"previous":   "Précèdent"
			},
			"aria": {
				"sortAscending":  ": Activer pour trier la colonne en ordre croissant",
				"sortDescending": ": Activer pour trier la colonne en ordre décroissant"
			}
			
		}
		
    });	
	
});	
</script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script charset="utf-8">	
		
		$(".remove").on("click", function(){
					// Gestionnaire d'événements...
			var idv = $(this).data("id"); // on récupère la valeur de l'attribut data-id du bouton cliqué dans le tableau
			// A partir de ce moment, on peut essayer d'appeler un script côté serveur...
			//var idv = idv de la ligne 232 variable			
//			Raccourci de : var idv = $(this).attr("data-id");				 
					$("#dialog-confirm").dialog({
					  resizable: false,
					  height: "auto",
					  width: 300,
					  modal: true,
					  buttons: {
						"Supprimer": function() {		
							$.ajax({
								url: "../../back-end/Evenements/Ajax/delete.php",// L'adresse précise du script qui doit être appelé sur le serveur
								data: {
									"idPost": idv//correspond à idv de Var id   ------ "idPost" de la ligne $_POST delete.php 
								},// Définit les données qui doivent être transmises au script delete.php
								type: "post", // Méthode à utiliser pour transmettre des données au script delete.php (get ou post)
								dataType: "json",// Manière dont on va récupérer les données retransmises par le script delete.php (json, xml, script, html)
								success: function(data){ // La requête a été exécutée avec succès
											//console.log("L'appel à delete.php s'est déroulé correctement");
											// On va voir ce que le script delete.php nous a retourné
											console.log("Données retournées : " + JSON.stringify(data));
											// Réellement effacer le tr du tableau portant l'id row_???
											if(data.statut == 1){
												$("#" + data.row).remove(); // Supprime effectivement la ligne du tableau...
//												$("#dialog").html("<h4>Suppression</h4>");
//												$("#dialog blockquote").html("La suppression de l'événement s'est correctement déroulée.");
												$("#dialog-message").dialog({
												  modal: true,
													open: function(event, ui){
														var $this = $(this); 
														setTimeout(function(){
															$this.dialog('close')
														}, 2000); 
													}
												});												

												
											} else {
												console.log("Pas de chance... la suppression a échoué.");
												$("#dialog-message").html("La suppression a échoué");
											}
											// Dans tous les cas, on "affiche" le dialogue
//											$("#dialog-message").show();
									//Définit la méthode pour masquer le dialogue au bout de 2 secondes
//											setTimeout( 
//												function(){
//													$("#dialog-message").hide("slow");
//												},
//														2000
//											);
										},
										error: function(request, status, error){ // La requête vers delete.php a échoué
											console.log("Désolé, mais le script delete.php n'a pas pu être chargé correctement...");
										}				
							});
						  	$(this).dialog("close");
						},
						  
						"Annuler": function() {
						  $(this).dialog("close");
						}
					  }
					});				  
		}
	);
		</script>



<div class="row form-horizontal">
	<div class="span5 col-md-5" id="sandbox-container"></div>
	<div class="span7 col-md-7">
		<pre class="prettyprint linenums" id="sandbox-html"></pre>
		<pre class="prettyprint linenums" id="sandbox-js"></pre>
	</div>
</div>
	
</body>

</html>