<?php include("libs/header.ink.php"); ?>
	<article class="content item-editor-page">
		<div class="title-block">
			<h3 class="title"><?php echo $titre; ?> <span class="sparkline bar" data-type="bar"></span> </h3>
		</div>

		<form name="evenement" id="evenement" method="post" action="controller.php" class="form-group" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
			<div class="card card-block">
				<div class="form-group row">
					<div class="input-daterange input-group col-sm-10" id="datepicker" data-provide="datepicker">
						<label for="ddebut"></label>
						<input type="text" class="input-sm form-control" name="ddebut" placeholder="Date de début" id="ddebut" value="<?php echo $lEvenementChoisi["ddebut"];?>"/>
						<span class="input-group-addon"></span>
						<label for="dfin"></label>
						<input type="text" class="input-sm form-control" name="dfin" placeholder="Date de fin" id="dfin" value="<?php echo $lEvenementChoisi["dfin"];?>" />
					</div>
					<br>
					<br>
					<br>
					<div class="input-group col-sm-10">
						<label for="hdebut"></label>
						<input type="text" id="hdebut" class="form-control time ui-timepicker-input" name="hdebut" placeholder="Heure de début"  value="<?php echo $lEvenementChoisi["hdebut"];?>"/>
						<span class="input-group-addon"></span>
						<label for="dfin"></label>
						<input type="text" id="hfin" class="form-control time ui-timepicker-input" name="hfin" placeholder="Heure de fin" value="<?php echo $lEvenementChoisi["hfin"];?>" />
					</div>

					<br>
					<br>
					<br>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label text-xs-right" for="titre"> Titre :
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control boxed" placeholder="Titre" id="titre" value="<?php echo $lEvenementChoisi["titre"];?>" name="titre"></div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 form-control-label text-xs-right" for="description">
							Description:
						</label>
						<div class="col-sm-10">
							<div class="wyswyg">
								<div class="toolbar">
									<span class="ql-format-group">
									<select title="Size" class="ql-size">
										<option value="10px">Small</option>
										<option value="13px" selected>Normal</option>
										<option value="18px">Large</option>
										<option value="32px">Huge</option>
									</select>
									</span>
									<span class="ql-format-group">
			<span title="Bold" class="ql-format-button ql-bold"></span> <span class="ql-format-separator"></span> <span title="Italic" class="ql-format-button ql-italic"></span> <span class="ql-format-separator"></span> <span title="Underline" class="ql-format-button ql-underline"></span> <span class="ql-format-separator"></span> <span title="Strikethrough" class="ql-format-button ql-strike"></span> </span> <span class="ql-format-group">
			<select title="Text Color" class="ql-color">
				<option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected></option>
				<option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
				<option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
				<option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
				<option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
				<option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
				<option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
				<option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
				<option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
				<option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
				<option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
				<option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
				<option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
				<option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
				<option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
				<option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
				<option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
				<option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
				<option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
				<option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
				<option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
				<option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
				<option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
				<option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
				<option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
				<option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
				<option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
				<option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
				<option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
				<option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
				<option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
				<option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
				<option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
				<option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
				<option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
			</select>
			<span class="ql-format-separator"></span>
									<select title="Background Color" class="ql-background">
										<option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
										<option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
										<option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
										<option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
										<option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
										<option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
										<option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
										<option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected></option>
										<option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
										<option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
										<option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
										<option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
										<option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
										<option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
										<option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
										<option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
										<option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
										<option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
										<option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
										<option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
										<option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
										<option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
										<option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
										<option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
										<option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
										<option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
										<option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
										<option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
										<option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
										<option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
										<option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
										<option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
										<option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
										<option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
										<option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
									</select>
									</span> <span class="ql-format-group">
			<span title="List" class="ql-format-button ql-list"></span> <span class="ql-format-separator"></span> <span title="Bullet" class="ql-format-button ql-bullet"></span> <span class="ql-format-separator"></span>
									<select title="Text Alignment" class="ql-align">
										<option value="left" label="Left" selected></option>
										<option value="center" label="Center"></option>
										<option value="right" label="Right"></option>
										<option value="justify" label="Justify"></option>
									</select>
									</span> <span class="ql-format-group">
			<span title="Link" class="ql-format-button ql-link"></span> <span class="ql-format-separator"></span>
									<button type="button" title="Image" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-media">
										<i class="fa fa-image"></i> Media
									</button>
									</span> <span class="ql-format-group">
		</span> </div>
								<!-- Create the editor container -->
<!--
								<div class="editor"  for="description">
								</div><span id="description" name="description" value=""></span>
								<div class="form-group row">
-->
						<label class="editor" for="description" style="padding:0;height:0;">
						</label>						
							<textarea type="text" class="form-control boxed" placeholder="description" id="description" value="<?php echo $lEvenementChoisi["description"];?>" name="description"> <?php echo $lEvenementChoisi["description"];?></textarea>
<!--					</div>-->
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label text-xs-right" for="type">
							Type
						</label>
						<div class="col-sm-10">
							<select class="c-select form-control boxed" name="type" id="type" data-label="type">				
								<option value="" <?php echo $lEvenementChoisi=="" ? "selected" : ""; ?>>Selectionner un type</option>
								<option value="1" <?php echo $lEvenementChoisi==1 ? "selected" : ""; ?>>Sans</option>
								<option value="2" <?php echo $lEvenementChoisi==2 ? "selected" : ""; ?>>Public</option>
								<option value="3" <?php echo $lEvenementChoisi==3 ? "selected" : ""; ?>>Privé</option>
							</select>
						</div>
					</div>
					<script>						
						// Afficher / Ne pas afficher des parties d'un document HTML en jQuery
						$("#type").on("change", function(){
								if($(this).val() == 2){
										$(".prive").hide();
										$(".public").show();
									// Cacher la div contenant les champs (commission et ordre du jour)
									// Montrer la div contenant les champs (lieu et places disponibles)
								}if($(this).val() == 3){
										$(".public").hide();
										$(".prive").show();
									// Montrer la div contenant les champs (commission et ordre du jour)
									// Cacher la div contenant les champs (lieu et places disponibles)
								}if($(this).val() ==1){
									$(".public").show();
									$(".prive").show();
								}
							}
						);
										
					</script>
				
					<div class="form-group row">
						<label class="col-sm-2 form-control-label text-xs-right">
							Images:
						</label>
						<div class="col-sm-10">
							<div class="images-container">
								<div class="image-container">
									<div class="controls">
										<a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
								
										<a href="" class="control-btn star"> <i class="fa"></i> </a>
								
										<a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
									</div>
									<div class="image" style="">
									<img href="<?php echo $lEvenementChoisi["image"];?>"></div>
									
								</div>
								<div class="image-container">
									<div class="controls">
										<a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
										<!--
								-->
										<a href="" class="control-btn star"> <i class="fa"></i> </a>
										<!--
								-->
										<a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
									</div>
									<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
								</div>
								<div class="image-container">
									<div class="controls">
										<a href="" class="control-btn move"> <i class="fa fa-arrows"></i> </a>
										<!--
								-->
										<a href="" class="control-btn star"> <i class="fa"></i> </a>
										<!--
								-->
										<a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o"></i> </a>
									</div>
									<div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
								</div>
								<a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
									<div class="image-container new">
										<div class="image"> <i class="fa fa-plus"></i> </div>
									</div>
								</a>
							</div>
							
							<div class="form-group">
<!--								<input type="hidden" name="MAX_FILE_SIZE" value="5242880" />-->
								<label for="image">Illustration :</label>
								<input type="file" class="form-control" name="image" id="image" accept=".jpg,.jpeg,.png,.gif, image/*" />
							</div>
						</div>
						
					</div>
					<br>
					<br>
					<br>
					<div class="form-group row prive">
						<label class="col-sm-2 form-control-label text-xs-right" for="commissions"> Commissions :
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control boxed" placeholder="commissions" id="commissions" value="<?php echo $lEvenementChoisi["commissions"];?>" name="commissions"> </div>
					</div>
					<div class="form-group row prive">
						<label class="col-sm-2 form-control-label text-xs-right" for="ordredujour"> Ordre du jour :
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control boxed" placeholder="ordredejour" id="ordredujour" value="<?php echo $lEvenementChoisi["ordredujour"];?>" name="ordredujour"> </div>
					</div>
					<br>
					<br>
					<br>
					<div class="form-group row public">
						<label class="col-sm-2 form-control-label text-xs-right" for="lieu"> Lieu :
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control boxed" placeholder="lieu" id="lieu" value="<?php echo $lEvenementChoisi["lieu"];?>" name="lieu"> </div>
					</div>
					<div class="form-group row public">
						<label class="col-sm-2 form-control-label text-xs-right" for="placesdispos"> Nombres de places disponibles :
						</label>
						<br>
						<div class="col-sm-10">
							<input type="text" class="form-control boxed" placeholder="Places disponibles" id="placesdispos" value="<?php echo $lEvenementChoisi["placesdispos"];?>" name="placesdispos"> </div>
					</div>

					<div class="form-group row maj">
						<div class="col-sm-12">
							<button type="submit" id="maj"  class="btn btn-primary" name="<?php echo $buttonName;?>" >
								<?php echo $buttonLabel;?>
							</button>
							<input type="hidden" name="clePrimaire" value="<?php echo $lEvenementChoisi["clePrimaire"]; ?>" />
<!--
						</div>
						
					</div>	
					<div class="form-group row majdelete">
						<div class="col-sm-10 col-sm-offset-2">
-->
							<a href="controller.php?context=delete&clePrimaire=<?php echo $lEvenementChoisi["clePrimaire"]; ?>" title="Supprimer">
								<button type="button" name="supprimer" id="majdelete" class="btn btn-danger" value="">
									Supprimer
								</button>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</form>
	</article>



<script>

	



</script>
	<?php include("libs/footer.ink.php")?>