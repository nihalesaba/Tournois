<? $MethodPayment= array( "Cash","Virement","Visa"); ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Créer une nouvelle équipe
				</header>
				<? if (  isset($data["alert"]))echo  $data["alert"]; ?>
				<div class="panel-body">
					<? form::beginform();?>
					<? form::startitem("Veuillez indiquer votre méthode de payement");?>
					<select class="form-control" name="PaymentMethod1" required>
						<? foreach ($MethodPayment as $Type):?> 
						<option value="<? echo $Type; ?>"><? echo $Type;?></option>
						<? endforeach;?>
					</select>
					<? form::enditem();?>

					<div class="form-group">
						<label class="col-md-4 control-label" for="Bbq1">Voulez-vous participer au Bbq? (10€)</label>
						<div class="col-md-4">
							<div class="radio">
								<label for="Bbq1">
									<input type="radio" name="Bbq1" id="Bbq1-0" value=1 >
										Oui
								</label>
							</div>
							<div class="radio">
								<label for="Bbq1">
									<input type="radio" name="Bbq1" id="Bbq1-1" value=0 checked="checked">
										Non
								</label>
							</div>
						</div>
					</div>
							
					<? form::startitem("Avez-vous des remarques ou demandes particulières?");?>
					<textarea   class="form-control" name="Comment1" rows=4 cols=40></textarea>
					<? form::enditem();?>
					<? form::submitbuttons();?>
					<? form::endform();?>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
