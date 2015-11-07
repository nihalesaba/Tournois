<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Ajouter un Terrain
				</header>
				<div class="panel-body">
					<form class="form-horizontal" data-toggle="validator" role="form" method="post" >
						<fieldset>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtGroundType">Type de terrain</label>
								<div class="col-md-4">
									<div class="radio">
										<label for="CourtGroundType-0">
										<input type="radio" name="CourtGroundType" id="CourtGroundType-0" value="Gazon" checked="checked">
										Gazon
										</label>
									</div>
									<div class="radio">
										<label for="CourtGroundType-1">
										<input type="radio" name="CourtGroundType" id="CourtGroundType-1" value="Terre battue">
										Terre battue
										</label>
									</div>
									<div class="radio">
										<label for="CourtGroundType-2">
										<input type="radio" name="CourtGroundType" id="CourtGroundType-2" value="Synthétique" checked="checked">
										Synthétique
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAddress">Rue </label>  
								<div class="col-md-5">
									<input id="CourtAddress" name="CourtAddress" type="text" placeholder="Rue" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAddressN">Numéro de rue</label>  
								<div class="col-md-4">
									<input id="CourtAddressN" name="CourtAddressN" type="number" placeholder="Numéro de rue" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAddressC">Code postal </label>  
								<div class="col-md-5">
									<input id="CourtAddressC" name="CourtAddressC" type="number" placeholder="" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAddressL">Localité</label>  
								<div class="col-md-4">
									<input id="CourtAddressL" name="CourtAddressL" type="text" placeholder="localité" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtType">Type de terrain</label>
								<div class="col-md-4">
									<div class="radio">
										<label for="CourtType-0">
										<input type="radio" name="CourtType" id="CourtGroundType-0" value="Privé" checked="checked">
										Privé
										</label>
									</div>
									<div class="radio">
										<label for="CourtType-1">
										<input type="radio" name="CourtType" id="CourtType-1" value="Club" checked="checked">
										Club
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAccessComments">Comment accéder au terrain</label>  
								<div class="col-md-4">
									<input id="CourtAccessComments" name="CourtAccessComments" type="text" placeholder="" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtOwnerComments">Commentaires propriétaire</label>  
								<div class="col-md-4">
									<input id="CourtOwnerComments" name="CourtOwnerComments" type="text" placeholder="" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtStaffComments">Commentaires staff</label>  
								<div class="col-md-4">
									<input id="CourtStaffComments" name="CourtStaffComments" type="text" placeholder="" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAvailSat">Disponible le samedi</label>  
								<div class="col-md-4">
									<input id="CourtAvailSat" name="CourtAvailSat" type="text" placeholder="oui/non" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="CourtAvailSun">Disponible le dimanche</label>  
								<div class="col-md-4">
									<input id="CourtAvailSun" name="CourtAvailSun" type="text" placeholder="oui/non" class="form-control input-md" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="singlebutton"></label>
								<div class="col-md-4">
									<button type="reset" id="singlebutton" class="btn btn-danger">Réinitialiser</button>
									<button type="submit" id="singlebutton" class="btn btn-primary">Soumettre</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
