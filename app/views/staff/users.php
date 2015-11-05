
      <!--main content start-->
<section id="main-content">
<section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> 
            Liste des utilisateurs 
          </h3>
          <? if (isset($_SESSION["alert"])) echo $_SESSION["alert"]; unset($_SESSION["alert"]);?>
          <a href="<? echo url::gotolink("./staff/users/create "); ?>"><h4>Ajouter un nouvel utilisateur</h4></a><br>
              
             <table class="table table-striped table-advance table-hover">
             <tbody>
                <tr>
                  <?php 
                   $labels = array("Nom complet", "Date de naissance" , " Adresse" , "Numéro de téléphone", "Email", "Actions");
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
                            <td><?php echo $result["UserAddress"]." ".$result["UserAddressN"]." ".$result["UserAddressB"]." ".$result["UserAddressC"]." ".$result["UserAddressL"]; ?></td>
                            <td><?php echo $result["UserPhone"]; ?></td>
                            <td><?php echo $result["UserMail"]; ?></td>
                          <td>

                            <div class="btn-group">
                                      <a class="btn btn-primary" href="<? echo url::gotolink("./staff/users").'/show/'.$result["UserId"];?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="<? echo  url::gotolink("./staff/users").'/edit/'.$result["UserId"];?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="<? echo  url::gotolink("./staff/users").'/delete/'.$result["UserId"];?>"><i class="icon_close_alt2"></i></a>
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
