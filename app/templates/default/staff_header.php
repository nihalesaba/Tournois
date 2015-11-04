
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tournois Charles de Lorraine Association ASMAE">
    <meta name="author" content="Groupe H - Software Enginnering project">
    <meta name="keyword" content="Tournois Charles de Lorraine">
    <link rel="shortcut icon" href="<?php echo url::gotoresources(); ?>img/favicon.ico">
    <title>
      <?php echo $data['title'].' - '.SITETITLE; ?>
    </title>
    <!-- Bootstrap CSS -->    
    <link href="<?php echo url::gotoresources(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo url::gotoresources(); ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo url::gotoresources(); ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo url::gotoresources(); ?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo url::gotoresources(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo url::gotoresources(); ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start--> 
      <header class="header dark-bg">
            <div class="toggle-nav">
               <a><i class="icon_menu"></i></a>
            </div>
            <ul class="nav pull-left top-menu">
            <!--logo start-->

            <li>
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <b>Interface Staff</b>
            </a>
            </li>
            <!--logo end-->
          </ul>
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <b>Connecté autant que </b>
                              <? echo $_SESSION["user"]["UserFirstName"]." ".$_SESSION["user"]["UserLastName"];?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Mon profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Communication interne</a>
                            </li>
                            <li>
                                <a href='<?echo url::gotolink("logout");?>'><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
            <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="<?php echo $data['active']==1? "active": "";?>">
                      <a class="" href="<?echo url::gotolink("./staff/users");?>">
                          <i class="icon_house_alt"></i>
                          <span>Gestion des utilisateurs</span>
                      </a>
                  </li>
                  <li class="<?php echo $data['active']==2? "active": "";?>">
                      <a class="" href="<?echo url::gotolink("./staff/courts");?>">
                          <i class="icon_house_alt"></i>
                          <span>Gestion des terrains</span>
                      </a>
                  </li>
                  <li class="<?php echo $data['active']==3? "active": "";?>">
                      <a class="" href="<?echo url::gotolink("./staff/tours");?>">
                          <i class="icon_house_alt"></i>
                          <span>Gestion des tournois</span>
                      </a>
                  </li>
          
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->