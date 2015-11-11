<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"> 
					Liste des partenaires potentiels
				</h3>
				<? if (isset($_SESSION["alert"])) echo $_SESSION["alert"]; unset($_SESSION["alert"]);?>
				<a href="<? echo url::gotolink("./user/tours/createteam/").$data["Tourid"]; ?>">
					<h4>Créer une nouvelle équipe</h4>
				</a>
				<br>
				<table class="table table-striped table-advance table-hover">
					<tbody>
						<tr>
							<?php 
								$labels = array("numéro d'équipe","Joueur 1 ", "Joueur 2", "Rejoindre l'équipe", "Contacter le joueur");
								foreach($labels as $label): ?>
							<th><?php echo $label; ?></th>
							<?php endforeach; ?>
						</tr>
						<?php 
							$results= $data["Teams"];
							      	foreach($results as $result): 
							?>
						<tr>
							<td><?php echo $result["TeamId"]; ?></td>
							<td><?php echo $result["User1"]; ?></td>
							<td><?php echo $result["User2"]; ?></td>

							<td>
								<div class="btn-group">								
									<a class="btn btn-primary" href="<? echo url::gotolink("./users/tours/").$data["Tourid"]."/".$result["TeamId"];?>"><i class="icon_plus_alt2"></i></a>
								</div>
							</td>
							<td>
								<div class="btn-group">
									<a class="btn btn-primary" href="<? echo url::gotolink("./users/tours/").$data["Tourid"]."/".$result["TeamId"];?>"><i class="icon_plus_alt2"></i></a>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
