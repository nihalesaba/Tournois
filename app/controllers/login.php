<?php

class Login extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function login(){

		if(Session::get('connect') == true){
			// Redirection

			if ($_SESSION['user']["RoleId"]==0)
					url::redirect('admin');
			if ($_SESSION['user']["RoleId"]==1)
					url::redirect('staff');
			if ($_SESSION['user']["RoleId"]==2)
					url::redirect('user');
		}

		if(!empty($_POST)){
			

			$User = $this->loadModel('user_model');

			$data =$User->CheckLogin($_POST);

			if(!empty($data) && sizeof($data)==1)
			{
				

				//Go to the main 	
				$data=$data[0];
				Session::set('connect',true);
				Session::set('user',$data);

				if ($data["RoleId"]==0)
					url::redirect('admin');
				if ($data["RoleId"]==1)
					{
						url::redirect('staff');
					}
				if ($data["RoleId"]==2)
					url::redirect('user');
			}
			else 
			{
				$data['alert']= form::alert("danger","Veuillez vérifiez vos identifiants ");	
			}


		}
		

		$data['title'] = 'Connexion';

		$this->view->rendertemplate('header',$data);
		$this->view->render('login',$data);
		$this->view->rendertemplate('footer',$data);	
	}


	public function logout(){

		Session::destroy();

		$_SESSION = array();
		Url::redirect('./index');

	}

	public function register(){

		if (!empty($_POST)) {
			//Load the model 
			$User = $this->loadModel('user_model');
			// Set the role Id to 2 as the users are 2
			$_POST["RoleId"]=2;
			// Unset the Userpasswordconfirm redondant data in the database
			unset($_POST["Userpasswordconfirm"]);
			//Check if the Usermail exists in the DB
			$Exist= $User->CheckExistance($_POST["UserMail"]);
			
			if(! empty($Exist))
			{
				
				$data['alert']= form::alert("danger","Votre compte existe déjà veuillez cliquer <a href='#'>ici</a> pour restorer votre mot de passe");	
			}
			else
			{
			$User->insert($_POST);
			url::redirect('./index');
			}
			
		}
		
		$data['title'] = 'Inscription';
		$this->view->rendertemplate('header',$data);
		$this->view->render('register',$data);
		$this->view->rendertemplate('footer',$data);

	
	}

}
