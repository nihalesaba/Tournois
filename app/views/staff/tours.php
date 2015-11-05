
      <!--main content start-->
<section id="main-content">
<section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"> 
            Liste des catégories du tournois
          </h3>
          <? if (isset($_SESSION["alert"])) echo $_SESSION["alert"]; unset($_SESSION["alert"]);?>
           <a href="<? echo url::gotolink("./staff/tours/create "); ?>"><h4>Ajouter une nouvelle catégorie de tournoi</h4></a><br>
          <table class="table table-striped table-advance table-hover">
             <tbody>
                <tr>
                  <?php 
                  $labels = array("Année", "Catégorie" , "Type" ,"Actions");
                  
                  foreach($labels as $label): ?>
                  <th>

                  <?php echo $label; ?>
                  
                  </th>
                  <?php endforeach; ?>
                        </tr>
                              
                          <?php 
                              
                              $results= $data["Tours"];
                              foreach($results as $result):
                             
                            ?>

                          <tr>
                            <td><?php echo $result["TournamentYear"]; ?></td>
                            <td><?php echo $result["TournamentCategory"]; ?></td>
                            <td><?php echo $result["TournamentType"]; ?></td>
                          <td>

                            <div class="btn-group">
                                      <a class="btn btn-primary" href="<? echo url::gotolink("./staff/tours").'/show/'.$result["TournamentId"];?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="<? echo  url::gotolink("./staff/tours").'/edit/'.$result["TournamentId"];?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="<? echo  url::gotolink("./staff/tours").'/delete/'.$result["TournamentId"];?>"><i class="icon_close_alt2"></i></a>
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
