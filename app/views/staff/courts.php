<!--main content start-->
<section id="main-content">
<section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> 
            Liste des terrains 
          </h3>

          <table class="table table-striped table-advance table-hover">
             <tbody>
                <tr>
                  <?php 
                   $labels =  array("Numéro de terrain","Type de terrain", "Adresse" , "Propriété","Commentaires","Disponible Samedi","Disponible Dimanche", "Nom du proprietaire","Actions" );
                  
                  foreach($labels as $label): ?>
                  <th>

                  <?php echo $label; ?>
                  
                  </th>
                  <?php endforeach; ?>
                        </tr>
                              
                          <?php 
                              
                              $results= $data["Courts"];
                              foreach($results as $result):
                             
                            ?>

                          <tr>
                            <td><?php echo $result["CourtId"]; ?></td>
                            <td><?php echo $result["CourtGroundType"]; ?></td>
                            <td><?php echo $result["CourtAddress"]." ".$result["CourtAddressN"]." ".$result["CourtAddressC"]." ".$result["CourtAddressL"]; ?></td>
                            <td><?php echo $result["CourtType"]; ?></td>
                            <td><?php echo $result["CourtStaffComments"];  ?></td>
                            <td><?php echo $result["CourtAvailSat"];  ?></td>
                            <td><?php echo $result["CourtAvailSun"];  ?></td>
                            <td><?php echo $result["CourtOwner"];  ?></td>
                          <td>

                            <div class="btn-group">
                                      <a class="btn btn-primary" href="<? echo url::gotolink("./staff/courts").'/show/'.$result["CourtId"];?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="<? echo  url::gotolink("./staff/courts").'/edit/'.$result["CourtId"];?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="<? echo  url::gotolink("./staff/courts").'/delete/'.$result["CourtId"];?>"><i class="icon_close_alt2"></i></a>
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
