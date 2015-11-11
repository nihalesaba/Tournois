    <em><!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                <? form::beginform();?>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <? if (  isset($data["alert"]))echo  $data["alert"]; ?>
                </div>
                <div class="col-md-3"></div>
                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Titre">Titre</label>
                    <div class="col-md-4">
                    	<?php if ($_SESSION['user']["Titre"]=="Homme"): ?>
							<div class="radio">
                            	<label for="Titre-0">
                            	<input type="radio" name="Titre" id="Titre-0" value="Homme" checked="checked">
                            	Homme
                            	</label>
                        	</div>
                       		<div class="radio">
                           		<label for="Titre-1">
                           		<input type="radio" name="Titre" id="Titre-1" value="Femme" >
                           		Femme
                           	</label>
                       		</div>
                       		<?php elseif($_SESSION['user']["Titre"]=="Femme") : ?>
                        	<div class="radio">
                            	<label for="Titre-0">
                            	<input type="radio" name="Titre" id="Titre-0" value="Homme">
                            	Homme
                            	</label>
                        	</div>
                        	<div class="radio">
                            	<label for="Titre-1">
                            	<input type="radio" name="Titre" id="Titre-1" value="Femme" checked="checked">
                            Femme
                            	</label>
                        	</div>
                        <?php else : ?>
                        	<div class="radio">
                            	<label for="Titre-0">
                            	<input type="radio" name="Titre" id="Titre-0" value="Homme">
                            	Homme
                            	</label>
                        	</div>
                        	<div class="radio">
                            	<label for="Titre-1">
                            	<input type="radio" name="Titre" id="Titre-1" value="Femme">
                            Femme
                            	</label>
                        	</div>	
                        <?php endif ;?>
                    </div>
                </div> 
                <!-- Text input-->
                <? form::input(array("label"=>"Prénom","name"=>"UserFirstName","type"=>"text","placeholder"=>"Prénom","required"=>true, "value"=>  $_SESSION["user"]["UserFirstName"] )); ?>
                <? form::input(array("label"=>"Nom","name"=>"UserLastName","type"=>"text","placeholder"=>"Nom","required"=>true , "value"=>  $_SESSION["user"]["UserLastName"])); ?>
                <? form::input(array("label"=>"Date de naissance","name"=>"UserBirthDate","type"=>"date","placeholder"=>"Date de naissance","required"=>true, "value"=>  $_SESSION["user"]["UserBirthDate"])); ?>
                <? form::input(array("label"=>"Rue","name"=>"UserAddress","type"=>"text","placeholder"=>"Rue","required"=>true, "value"=>  $_SESSION["user"]["UserAddress"])); ?>
                <? form::input(array("label"=>"Numéro","name"=>"UserAddressN","type"=>"number","placeholder"=>"Numéro","required"=>true, "value"=>  $_SESSION["user"]["UserAddressN"])); ?>
                <? form::input(array("label"=>"Boite","name"=>"UserAddressB","type"=>"text","placeholder"=>"Boite","required"=>false, "value"=>  $_SESSION["user"]["UserAddressB"])); ?>
                <? form::input(array("label"=>"Code postal","name"=>"UserAddressC","type"=>"text","placeholder"=>"Code postal","required"=>true , "value"=>  $_SESSION["user"]["UserAddressC"])); ?>
                <? form::input(array("label"=>"Localité","name"=>"UserAddressL","type"=>"text","placeholder"=>"Localité","required"=>true, "value"=>  $_SESSION["user"]["UserAddressL"])); ?>
                <? form::input(array("label"=>"Numéro de téléphone","name"=>"UserPhone","type"=>"number","placeholder"=>"Numéro de téléphone","required"=>true, "value"=>  $_SESSION["user"]["UserPhone"])); ?>
                <? form::input(array("label"=>"Mot de passe","name"=>"Userpassword","type"=>"password","placeholder"=>"Mot de passe","required"=>true)); ?>
                <? form::input(array("label"=>"Confirmation du mot de passe","name"=>"Userpasswordconfirm","type"=>"password","placeholder"=>"Mot de passe","required"=>true,"opt"=> array("data-match"=>"#Userpassword", "data-match-error"=>"Le mot de passe ne correspond pas"))); ?>
                <? form::submitbuttons();?>
                <? form::endform();?>
            </div>
                </div>
            </div>
        </section>
    </section>
    <!--main content end--></em>