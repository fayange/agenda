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
								<form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="js/vendor.js"></script>

<script src="js/jquery.timepicker.min.js"></script>
<script>
	$(function () {
		$('#timeformatExample1').timepicker({
			'timeFormat': 'H:i:A'
		});
		$('#timeformatExample2').timepicker({
			'timeFormat': 'h:i A'
		});
	});
</script>

<script src="js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.fr.min.js"></script>

<script type="text/javascript">
	$('.input-sm').datepicker({
		language: 'fr'
	});
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