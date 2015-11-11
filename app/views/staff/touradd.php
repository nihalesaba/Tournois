<?
	$TourCat= array( "Pré-minimes","Minimes","Cadets","Scolaires","Juniors","Seniors","Elites","Famille" );
	
	$TourType= array( "Homme","Femme","Mixte");
	
	$TourYear= array( date('Y'),date('Y', strtotime('+1 year')) ,date('Y', strtotime('+2 year')));
	
	?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-10">
				<header class="panel-heading">
					Ajouter une nouvelle catégorie de tournois 
				</header>
				<? if (  isset($data["alert"]))echo  $data["alert"]; ?>
				<div class="panel-body">
					<form class="form-horizontal" data-toggle="validator" role="form" method="post" >
						<fieldset>
							<? form::startitem("Année/Saison");?>
							<select class="form-control" name="TournamentYear">
								<? foreach ($TourYear as $Year):?> 
								<option value="<? echo $Year; ?>"><? echo $Year;?></option>
								<? endforeach;?>
							</select>
							<? form::enditem();?>
							<? form::startitem("Niveau");?>
							<select  class="form-control" name="TournamentCategory">
								<? foreach ($TourCat as $Cat):?> 
								<option value="<? echo $Cat; ?>"><? echo $Cat;?></option>
								<? endforeach;?>
							</select>
							<? form::enditem();?>
							<? form::startitem("Genre");?>
							<select class="form-control" name="TournamentType">
								<? foreach ($TourType as $Type):?> 
								<option value="<? echo ($Type); ?>"><? echo $Type;?></option>
								<? endforeach;?>
							</select>
							<? form::enditem();?>
							<? form::submitbuttons();?>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
