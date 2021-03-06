<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Editer le terrain
				</header>
				<? 
					$data=$data["Court"][0];
					?>
				<div class="panel-body">
					<? form::beginform();?>
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

					<? form::input(array("label"=>"Rue","name"=>"CourtAddress","type"=>"text","placeholder"=>"Rue","required"=>true, "value"=> $data["CourtAddress"])); ?>
					<? form::input(array("label"=>"Numéro","name"=>"CourtAddressN","type"=>"number","placeholder"=>"Numéro","required"=>true, "value"=> $data["CourtAddressN"])); ?>
					<? form::input(array("label"=>"Code postal","name"=>"CourtAddressC","type"=>"text","placeholder"=>"Code postal","required"=>true, "value"=> $data["CourtAddressC"])); ?>
					<? form::input(array("label"=>"Localité","name"=>"CourtAddressL","type"=>"text","placeholder"=>"Localité","required"=>true, "value"=> $data["CourtAddressL"])); ?>
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
					<? form::input(array("label"=>"Comment accéder au terrain","name"=>"CourtAccessComments","type"=>"text", "value"=> $data["CourtAccessComments"])); ?>
					<? form::input(array("label"=>"Commentaire propriétaire","name"=>"CourtOwnerComments","type"=>"text", "value"=> $data["CourtOwnerComments"])); ?>

					<div class="form-group">
						<label class="col-md-4 control-label" for="CourtAvailSat">Disponible samedi</label>
						<div class="col-md-4">
							<div class="radio">
								<label for="CourtAvailSat-0">
								<input type="radio" name="CourtAvailSat" id="CourtAvailSat-0" value=1 checked="checked">
								Oui
								</label>
							</div>
							<div class="radio">
								<label for="CourtAvailSat-1">
								<input type="radio" name="CourtAvailSat" id="CourtAvailSat-1" value=0 checked="checked">
								Non
								</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-4 control-label" for="CourtAvailSun">Disponible dimanche</label>
						<div class="col-md-4">
							<div class="radio">
								<label for="CourtAvailSun-0">
								<input type="radio" name="CourtAvailSun" id="CourtAvailSun-0" value=1 checked="checked">
								Oui
								</label>
							</div>
							<div class="radio">
								<label for="CourtAvailSun-1">
								<input type="radio" name="CourtAvailSun" id="CourtAvailSun-1" value=0 checked="checked">
								Non
								</label>
							</div>
						</div>
					</div>

					<? form::submitbuttons();?>
					<? form::endform();?>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
