<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Editer un utilisateur
				</header>
				<? 
					$data=$data["User"][0];
					?>
				<div class="panel-body">
					<? form::beginform();?>
					<!-- Multiple Radios -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="Titre">Titre</label>
						<div class="col-md-4">
							<div class="radio">
								<label for="Titre-0">
								<input type="radio" name="Titre" id="Titre-0" value="Homme" >
								Homme
								</label>
							</div>
							<div class="radio">
								<label for="Titre-1">
								<input type="radio" name="Titre" id="Titre-1" value="Femme">
								Femme
								</label>
							</div>
						</div>
					</div>
					<!-- Text input-->
					<? form::input(array("label"=>"Prénom","name"=>"UserFirstName","type"=>"text","placeholder"=>"Prénom","required"=>true, "value"=> $data["UserFirstName"])); ?>
					<? form::input(array("label"=>"Nom","name"=>"UserLastName","type"=>"text","placeholder"=>"Nom","required"=>true, "value"=> $data["UserLastName"])); ?>
					<? form::input(array("label"=>"Date de naissance","name"=>"UserBirthDate","type"=>"date","placeholder"=>"Date de naissance","required"=>true, "value"=> $data["UserBirthDate"])); ?>
					<? form::input(array("label"=>"Rue","name"=>"UserAddress","type"=>"text","placeholder"=>"Rue","required"=>true, "value"=> $data["UserAddress"])); ?>
					<? form::input(array("label"=>"Numéro","name"=>"UserAddressN","type"=>"number","placeholder"=>"Numéro","required"=>true, "value"=> $data["UserAddressN"])); ?>
					<? form::input(array("label"=>"Boite","name"=>"UserAddressB","type"=>"text","placeholder"=>"Boite","required"=>true, "value"=> $data["UserAddressB"])); ?>
					<? form::input(array("label"=>"Code postal","name"=>"UserAddressC","type"=>"text","placeholder"=>"Code postal","required"=>true, "value"=> $data["UserAddressC"])); ?>
					<? form::input(array("label"=>"Localité","name"=>"UserAddressL","type"=>"text","placeholder"=>"Localité","required"=>true, "value"=> $data["UserAddressL"])); ?>
					<? form::input(array("label"=>"Numéro de téléphone","name"=>"UserPhone","type"=>"number","placeholder"=>"Numéro de téléphone","required"=>true, "value"=> $data["UserPhone"])); ?>
					<? form::input(array("label"=>"E-mail","name"=>"UserMail","type"=>"email","placeholder"=>"E-mail","required"=>true, "value"=> $data["UserMail"])); ?>
					<? form::submitbuttons();?>
					<? form::endform();?>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
