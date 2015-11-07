<? $CourtGroundType= array( "Dur","Gazon","Synthétique","Terre battue" ); ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Ajouter mon terrain
				</header>
				<? if (  isset($data["alert"]))echo  $data["alert"]; ?>
				<div class="panel-body">
					<? form::beginform();?>
					<? form::startitem("Propriété du terrain");?>
					<select class="form-control"  name="CourtType" required>
						<option value="Privé">Privé</option>
						<option value="Club">Club</option>
					</select>
					<? form::enditem();?>
					<? form::startitem("Type de terrain");?>
					<select class="form-control" name="CourtGroundType" required>
						<? foreach ($CourtGroundType as $Type):?> 
						<option value="<? echo $Type; ?>"><? echo $Type;?></option>
						<? endforeach;?>
					</select>
					<? form::enditem();?>
					<? form::input(array("label"=>"Adresse du terrain","name"=>"CourtAddress","type"=>"address","placeholder"=>"Adresse du terrain","required"=>true)); ?>
					<? form::input(array("label"=>"Numéro","name"=>"CourtAddressN","type"=>"number","placeholder"=>"Numéro","required"=>true)); ?>
					<? form::input(array("label"=>"Code postal","name"=>"CourtAddressC","type"=>"number","placeholder"=>"Code postal","required"=>true)); ?>
					<? form::input(array("label"=>"Localité","name"=>"CourtAddressL","type"=>"text","placeholder"=>"Localité","required"=>true)); ?>
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
					<? form::startitem("Comment accéder à votre terrain?");?>
					<textarea   class="form-control" name="CourtAccessComments" rows=4 cols=40></textarea>
					<? form::enditem();?>
					<? form::startitem("Commentaires du propriétaire");?>
					<textarea   class="form-control" name="CourtOwnerComments" rows=4 cols=40></textarea>
					<? form::enditem();?>
					<? form::submitbuttons();?>
					<? form::endform();?>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
