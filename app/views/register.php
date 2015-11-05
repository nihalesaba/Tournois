

	  <div class="row">
				<div class="col-lg-12">
					
            <div class="panel-body">
              
<? form::beginform();?>
  <div class="form-group">
    <div class="col-md-12">

          <header class="panel-heading ">
                             <center> 
                                <h3> 
                                    <b>
                                      Formulaire d'inscription au site
                                    </b>
                                </h3>
                               
                              </center>
          </header>
          
        </div>
  </div>
  <div class="col-md-3"></div>

           <div class="col-md-6">
                                  <? if (  isset($data["alert"]))echo  $data["alert"]; ?>
          </div>
          <div class="col-md-3"></div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Titre">Titre</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Titre-0">
      <input type="radio" name="Titre" id="Titre-0" value="Homme" checked="checked">
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
<? form::input(array("label"=>"Prénom","name"=>"UserFirstName","type"=>"text","placeholder"=>"Prénom","required"=>true )); ?>
<? form::input(array("label"=>"Nom","name"=>"UserLastName","type"=>"text","placeholder"=>"Nom","required"=>true )); ?>
<? form::input(array("label"=>"Date de naissance","name"=>"UserBirthDate","type"=>"date","placeholder"=>"Date de naissance","required"=>true)); ?>
<? form::input(array("label"=>"Rue","name"=>"UserAddress","type"=>"text","placeholder"=>"Rue","required"=>true)); ?>
<? form::input(array("label"=>"Numéro","name"=>"UserAddressN","type"=>"number","placeholder"=>"Numéro","required"=>true)); ?>
<? form::input(array("label"=>"Boite","name"=>"UserAddressB","type"=>"text","placeholder"=>"Boite","required"=>false)); ?>
<? form::input(array("label"=>"Code postal","name"=>"UserAddressC","type"=>"text","placeholder"=>"Code postal","required"=>true)); ?>
<? form::input(array("label"=>"Localité","name"=>"UserAddressL","type"=>"text","placeholder"=>"Localité","required"=>true)); ?>
<? form::input(array("label"=>"Numéro de téléphone","name"=>"UserPhone","type"=>"number","placeholder"=>"Numéro de téléphone","required"=>true)); ?>
<? form::input(array("label"=>"E-mail","name"=>"UserMail","type"=>"email","placeholder"=>"E-mail","required"=>true)); ?>
<? form::input(array("label"=>"Mot de passe","name"=>"Userpassword","type"=>"password","placeholder"=>"Mot de passe","required"=>true)); ?>
<? form::input(array("label"=>"Confirmation du mot de passe","name"=>"Userpasswordconfirm","type"=>"password","placeholder"=>"Mot de passe","required"=>true,"opt"=> array("data-match"=>"#Userpassword", "data-match-error"=>"Le mot de passe ne correspond pas"))); ?>

 <? form::submitbuttons();?>
 <? form::endform();?>



            </div>
				</div>
			</div>
            


      <!--main content end-->
