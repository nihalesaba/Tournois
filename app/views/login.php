
<div class="container">


  <form class="login-form" method="post">  
  


             <div class="login-wrap">

            <p class="login-img"><i class="icon_lock_alt"></i></p>
             <? if (  isset($data["alert"]))echo  $data["alert"]; ?>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              


              <input type="text" class="form-control" placeholder="E-mail" autofocus name="UserMail" required>
            
  
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                


                <input type="password" class="form-control"  name="Userpassword" placeholder="Mot de passe" required>
            


            </div>
          
                <span > Vous n'avez pas encore de compte? <a href="./register"><b>Inscrivez vous</b></a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Connexion</button>
        </div>


    </form>

      

</div>