<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"> 
					Liste des partenaires potentiels
				</h3>
				<? if (isset($_SESSION["alert"])) echo $_SESSION["alert"]; unset($_SESSION["alert"]);?>
				<br>
				<table class="table table-striped table-advance table-hover">
					<tbody>
						<tr>
							<?php 
								$labels = array("Nom complet", "Date de naissance" , "Numéro de téléphone", "Email", "Inviter");
								foreach($labels as $label): ?>
							<th><?php echo $label; ?></th>
							<?php endforeach; ?>
						</tr>
						<?php 
							$results= $data["Users"];
							      	foreach($results as $result): 
							?>
						<tr>
							<td><?php echo $result["UserFirstName"]." ".$result["UserLastName"]; ?></td>
							<td><?php echo $result["UserBirthDate"]; ?></td>
							<td><?php echo $result["UserPhone"]; ?></td>
							<td><?php echo $result["UserMail"]; ?></td>
							<td>
								<div class="btn-group">
									<a class="btn btn-primary" href="<? echo url::gotolink("./users/jesaispasencorecequeçavaêtreici").'/show/'.$result["UserId"];?>"><i class="icon_plus_alt2"></i></a>
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
