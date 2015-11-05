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
                   
                <? form::startitem("Terrain disponible samedi");?>
                 <input  name="CourtAvailSat" type="checkbox" />
                <? form::enditem();?>
                <? form::startitem("Terrain disponible dimanche");?>
                 <input  name="CourtAvailSun" type="checkbox" />
                <? form::enditem();?>
                
                <? form::startitem("Commentaires du propriétaire");?>
                 <textarea   class="form-control" name="CourtAccessComments" rows=4 cols=40></textarea>
                <? form::enditem();?>

              <? form::submitbuttons();?>

              <? form::endform();?>
             </div>
        </div>
       </div>                    
      </section>
     </section>
       <!--main content end-->
